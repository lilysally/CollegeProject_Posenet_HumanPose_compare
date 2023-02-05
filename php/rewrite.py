#重寫posenet分數計算程式

# python rewrite.py --video1 "T_開合跳.mp4" --video2 "S01_開合跳重錄4.mp4"

import tensorflow as tf
import cv2
import numpy as np
import posenet
from newpose import NewPose #newpose.py檔案 偵測關節資訊

import argparse #還不清楚怎麼使用

from dtaidistance import dtw
from dtaidistance import dtw_ndim

import os

import sys

import MySQLdb

# ap = argparse.ArgumentParser()

# ap.add_argument("-v1", "--video1", required=True,
# 	help="video file from which keypoints are to be extracted")

# ap.add_argument("-v2", "--video2", required=True,
# 	help="video file from which keypoints are to be extracted")

# args = vars(ap.parse_args())

# cap1 = cv2.VideoCapture(args["video1"])
# cap2 = cv2.VideoCapture(args["video2"])

# 要改接收資料庫路徑
inputfile_path1 = sys.argv[1]
inputfile_path2 = sys.argv[2]
# inputfile_path1 = 'C:/Users/aiot0616/Desktop/1116/t-j.mp4'
# inputfile_path2 = 'C:/Users/aiot0616/Desktop/1116/t-j.mp4'

# 接收檔案路徑(/)
cap1 = cv2.VideoCapture(inputfile_path1)
cap2 = cv2.VideoCapture(inputfile_path2)

# 影片輸出

# ---設定存檔路徑C:\xampp\htdocs\posenet\video
outputfile_path1 = 'c:/xampp/htdocs/posenet/output_video/'
outputfile_path2 = 'c:/xampp/htdocs/posenet/output_video/'

result1 = os.path.split(inputfile_path1)
result1_1 = os.path.split(outputfile_path1)
result2 = os.path.split(inputfile_path2)
result2_1 = os.path.split(outputfile_path2)

basename1 = result1[1]
basename1_1 = result1_1[0] #讀取存檔路徑
basename2 = result2[1]
basename2_2 = result2_1[0] #讀取存檔路徑

file1 = os.path.splitext(basename1)[0] #讀取輸入之檔案名稱
file2 = os.path.splitext(basename2)[0]

# ---最終輸出路徑結果
final1 = basename1_1 + "/" + file1 + "keypoints.webm"
final2 = basename2_2 + "/" + file2 + "keypoints.webm"

#參數設定
fourcc = cv2.VideoWriter_fourcc(*'VP90')
# ---outvideo1
fps1 = cap1.get(cv2.CAP_PROP_FPS)
size1 = (int(cap1.get(cv2.CAP_PROP_FRAME_WIDTH)),int(cap1.get(cv2.CAP_PROP_FRAME_HEIGHT)))
out1 = cv2.VideoWriter(final1,fourcc,fps1,size1)
# ---outvideo2
fps2 = cap2.get(cv2.CAP_PROP_FPS)
size2 = (int(cap2.get(cv2.CAP_PROP_FRAME_WIDTH)),int(cap2.get(cv2.CAP_PROP_FRAME_HEIGHT)))
out2 = cv2.VideoWriter(final2,fourcc,fps2,size2)

#----------------------------------------------------------------------------------------------------------------------------#

def main():
	a = NewPose()
	data1 = []
	data2 = []

	with tf.Session() as sess:
		model_cfg,model_outputs = posenet.load_model(101,sess) #載入設定模式posenet??

		if (cap1.isOpened() and cap2.isOpened()) is False:
			print("error in opening video")

		while cap1.isOpened():
			ret_val,image = cap1.read()
			if ret_val:
				input_points,input_black_image = a.getpoints_vis(image,sess,model_cfg,model_outputs)
				input_points = input_points[0:34]
				if len(input_points) < 34:
					result = "影片1讀取失敗"
					cap1.release()
					out1.release()
					cap2.release()
					out2.release()
					cv2.destroyAllWindows
					os.remove(final1) # 錯誤，刪除檔案
					return result
					break
				input_new_coords = a.roi(input_points)
				input_new_coords = input_new_coords[0:34]
				input_new_coords = np.asarray(input_new_coords).reshape(17,2)
				data1.append(input_new_coords)
				out1.write(input_black_image)
				# cv2.imshow("black",input_black_image)
				cv2.waitKey(1)

			else:
				break

		while cap2.isOpened():
			ret_val,image = cap2.read()
			if ret_val:
				input_points,input_black_image = a.getpoints_vis(image,sess,model_cfg,model_outputs)
				input_points = input_points[0:34]
				if len(input_points) < 34:
					result = "影片2讀取失敗"
					cap1.release()
					out1.release()
					cap2.release()
					out2.release()
					cv2.destroyAllWindows
					os.remove(final2) # 錯誤，刪除檔案
					return result
					break
				input_new_coords = a.roi(input_points)
				input_new_coords = input_new_coords[0:34]
				input_new_coords = np.asarray(input_new_coords).reshape(17,2)
				data2.append(input_new_coords)
				out2.write(input_black_image)
				# cv2.imshow("black",input_black_image)
				cv2.waitKey(1)

			else:
				break

		cap1.release()
		out1.release()
		cap2.release()
		out2.release()
		cv2.destroyAllWindows
		
		data1 = np.array(data1)
		data2 = np.array(data2)

		# print(data1.shape)
		# print(data2.shape)

		for m in range(len(data1)):
			data1[m] = data1[m]/np.linalg.norm(data1)

		for n in range(len(data2)):
			data2[n] = data2[n]/np.linalg.norm(data2)

		Score = int(100-(dtw_ndim.distance(data1,data2))*100)
		if Score<0:
			Score = 0
		else:
			Score = Score
		# print(dtw_ndim.distance(data1,data2))
		# print(Score)
		
		result = Score

	return result
#----------------------------------------------------------------------------------------------------------------------------#

# 執行此程式?
if __name__ == "__main__":
	result = main() #應該要將結果回傳給資料庫儲存??
	print(result)
	Database = MySQLdb.connect(host="127.0.0.1",user="root", passwd="", db="posenet", charset="utf8")#連線資料庫
	cursor=Database.cursor()

	# 新增內容
	sql = "INSERT INTO test_path VALUES (%s,%s,%s,%s,%s,%s);" # "INSERT INTO 資料表 (欄位1,欄位2) VALUES (值1,值2);"
	# 執行
	cursor.execute(sql,('',inputfile_path1,inputfile_path2,result,final1,final2))
	# 確認()
	Database.commit()

	cursor.close()     #關閉 Cursor 物件
	Database.close()   #關閉 Connection 物件