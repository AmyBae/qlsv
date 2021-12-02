 <?php 
	class controller_search_student{
		public $model;
		public function __construct(){
			$this->model = new model();
			$key = isset($_GET["key"]) ? $_GET["key"]:0;
			//lay tat ca cac ban, co phan trang
			//quy dinh so ban ghi tren mot trang
			$record_per_page = 4;
			if (isset($_GET['key']) && !empty($_GET['key'])) {
				$sql = "select st_id from tbl_student where st_name like '%$key%'";
				
			}else{
				$sql = "select * from tbl_student";
				
			}
			//tinh so trang
			$total = $this->model->num_rows($sql);
			//tinh so trang (su dung ham ceil de lay tran)
			//sotrang = tongsobanghi/sobanghitrenmottrang
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai truyen tu url
			$page = isset($_GET["p"])&&($_GET["p"]>0)?($_GET["p"]-1):0;
			//truy van lay tu ban ghi nao
			//tubanghi = $page*sobanghitrentrang
			$from = $page * $record_per_page;
			if (isset($_GET['key']) && !empty($_GET['key'])) {
				
				$sql1 = "select * from tbl_student where st_name like '%$key%' order by st_id desc limit $from,$record_per_page";
			}else{
				
				$sql1 = "select * from tbl_student order by st_id desc limit $from,$record_per_page";
			}
			$arr = $this->model->get_all($sql1);
			$arrClass= $this->model->get_all("select * from tbl_class ");
			$converted = array(); 
			foreach ($arrClass as $row) {
				$converted[$row->cl_id] = $row;        // entire row (for example $response[1]) is copied 
				//unset($converted[$row['cl_id']]['cl_id']);  // deleting element with key 'id' as we don't need it anymore inside
				
			}
			//load view
			$i = 0;
			//echo json_encode($arr);
			include "view/frontend/view_search_student.php";
			
			//search
			
		}
	}
	new controller_search_student();
 ?>