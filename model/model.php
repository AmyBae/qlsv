<?php 
	//file model.php
	class model{
		//lay tat ca cac ban ghi
		public function get_all($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			$arr = array();
			while($rows = mysqli_fetch_object($result))
				$arr[] = $rows;
			return $arr;
		}
		//thuc thi cau lenh sql
		public function execute($sql){
			global $db;
			mysqli_query($db,$sql);
		}
		//lay mot ban ghi
		public function get_a_record($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_fetch_object($result);
		}
		//dem so ban ghi
		public function num_rows($sql){
			global $db;
			$result = mysqli_query($db,$sql);
			return mysqli_num_rows($result);
		}
	}
 ?>