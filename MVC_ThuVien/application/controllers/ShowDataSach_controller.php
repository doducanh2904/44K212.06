<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ShowDataSach_controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		//load model 
		$this->load->model('Sach_model');
		//gọi hàm 
		$dulieu=$this->Sach_model->showDataSach_model();
		// chuyển biến thành mảng
		$dulieuu = array('datacontroller' => $dulieu );

		// truyền dữ liệu vào view
		
		$this->load->view('sach', $dulieuu);



	}public function deleteSach_controller($iddd)
	{
		
		//echo $iddd;

		$this->load->model('Sach_model');
		$this->Sach_model->DeleteSach_model($iddd);
		// $this->load->view('');


	}
	public function showSachEdit_controller($idedit)
	{
		$this->load->model('Sach_model');
		$ketqua=$this->Sach_model->editSach_model($idedit);
		$ketqua = array('mangketqua' =>$ketqua);
		// truyeenf ket qua vao view
		$this->load->view('EditSach', $ketqua,);

	}
	public function editSach_controller()
	{
		$target_dir = "File_upload/";
		$target_file = $target_dir . basename($_FILES["anh"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["anh"]["tmp_name"]);
		  if($check !== false) {
		    echo "File is an image - " . $check["mime"] . ".";
		    $uploadOk = 1;
		  } else {
		    echo "File is not an image.";
		    $uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "file đã tồn tại";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["anh"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if (move_uploaded_file($_FILES["anh"]["tmp_name"], $target_file)) {
		    echo "The file ". htmlspecialchars( basename( $_FILES["anh"]["name"])). " has been uploaded.";
		  } else {
		    echo "Sorry, there was an error uploading your file.";
		  }
		}
		$idsach=$this->input->post('idsach');
		$tens= $this->input->post('tensach');
		$idd= $this->input->post('iddanhmuc');
		$sotrang = $this->input->post('sotrang');
		$tentg = $this->input->post('tentacgia');
		$thoigian= $this->input->post('thoigianduocmuon');
		$thoigianxb=$this->input->post('thoigianxuatban');
		$hinhanh= base_url()."File_upload/".basename($_FILES["anh"]["name"]);
		//echo  base_url()."File_upload/".basename($_FILES["anh"]["name"]);
		$this->load->model('Sach_model');
		$this->Sach_model->updateSach_model($idsach,$tens,$idd,$sotrang,$tentg,$thoigian,$thoigianxb,$hinhanh	);
	}

}

/* End of file ShowDataSach_controller.php */
/* Location: ./application/controllers/ShowDataSach_controller.php */