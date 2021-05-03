<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();


	}
	public function checkExists($id)
	{
		// lấy hết dữ liệu
		$this->db->select('id,password,tennhanvien');
		$this->db->where('id',$id);
		// lấy dữ liệu từ bảng Sach và truyền vào biến data
		$data = $this->db->get('nhan_vien');
		//đưa kết quả thành một mảng dữ liệu
		$data= $data->result_array();

		return $data[0];
	}
	public function showSach_model()
	{
	$this->db->select('tensach,hinhanh,id_sach');
		// lấy dữ liệu từ bảng Sach và truyền vào biến data
		$data = $this->db->get('sach');
		//đưa kết quả thành một mảng dữ liệu
		$data= $data->result_array();
		

		// var_dump($data);
		return  $data;
	}
	public function getOne($val)
	{
		$this->db->select('tensach,hinhanh,id_sach');
		$this->db->where('id_sach', $val);
		// lấy dữ liệu từ bảng Sach và truyền vào biến data
		$data = $this->db->get('sach');
		//đưa kết quả thành một mảng dữ liệu
		$data = $data->result_array();
		

		// var_dump($data);
		return  $data;
	}
	public function insertMuon($str,$listData)
	{
		// $dulieu = array('id_sach' => $idsach ,'id_docgia'=>$iddocgia,'ngaymuon_muon'=>$date,'ngaytra_muon'=>$date,'tinhtrang_muon'=>$tinhtrang,'soluong_muon'=>$soluong );
		// var_dump($dulieu);
		// die();
		if($this->db->query($str)){
			echo '<script>
				alert("Mượn Thành công các id_sach ('.$listData.')");
				setTimeout(function(){
					window.history.back();
				},500);
			</script>';
		}
		else{
			echo '<script>
				alert("Không Thành công ");
				setTimeout(function(){
					window.history.back();
				},500);
			</script>';
		}
		// return $this->db->insert_id();	
	}
	public function getAllDatHang()
	{
		
		$data = $this->db->get('muon');
		//đưa kết quả thành một mảng dữ liệu
		$data = $data->result_array();
		

		// var_dump($data);
		return  $data;
	}
	public function thongbaoUser($id)
	{
		// $tt='1';
		
		 $this->db->from('muon');
		 $this->db->join('sach', 'muon.id_sach = sach.id_sach');
		 $this->db->where('id_docgia', $id);
		 // $this->db->where('tinhtrang_muon', $tt);
		 $data=$this->db->get();
		 $data = $data->result_array();

		return  $data;
	}
	public function lichsuUser0($id)
	{
		 $tt='0';
		
		 $this->db->from('muon');
		 $this->db->join('sach', 'muon.id_sach = sach.id_sach');
		 $this->db->where('id_docgia', $id);
		 $this->db->where('tinhtrang_muon', $tt);
		 $data=$this->db->get();
		 $data = $data->result_array();

		return  $data;
	}
	// public function showLichsuUser_model($id)
	// {
	// 		 $tt='1';
	// 	$this->db->select('*');
	// 	 $this->db->from('muon');
	// 	 $this->db->join('sach', 'muon.id_sach = sach.id_sach');
	// 	 $this->db->where('id_docgia', $id);
	// 	 $this->db->where('tinhtrang_muon', $tt);
	// 	 $data=$this->db->get();
	// 	 $data = $data->result_array();

	// 	return  $data;
	// }
	
}

/* End of file Sach_model.php */
/* Location: ./application/models/Sach_model.php */