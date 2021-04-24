<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sach_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}public function insert($tensach,$id_danhmuc,$sotrang,$tentg,$thoigian,$thoigianxb,$hinhanh)
	{
		$dulieu = array('tensach' => $tensach ,'id_danhmuc' => $id_danhmuc,'sotrang_sach'=>$sotrang,'tentacgia'=>$tentg,'thoigianduocmuon'=>$thoigian,'thoigianxuatban'=>$thoigianxb,'hinhanh'=>$hinhanh );
		$this->db->insert('sach', $dulieu);
		return $this->db->insert_id();
		
	}
	public function showDataSach_model()
	{
		// lấy hết dữ liệu
		$this->db->select('tensach,hinhanh,id_sach');
		// lấy dữ liệu từ bảng Sach và truyền vào biến data
		$data = $this->db->get('sach');
		//đưa kết quả thành một mảng dữ liệu
		$data= $data->result_array();
		

		// var_dump($data);
		return  $data;
	}
	public function DeleteSach_model($id)
	{
		$this->db->where('id_sach', $id);
		$this->db->delete('sach');
	}


	public function editSach_model($idsua)// Hàm lấy sách  cần update trả về view
	{
		$this->db->select('*');
		$this->db->where('id_sach', $idsua);
		$dulieu= $this->db->get('sach');
		$dulieu=$dulieu->result_array();
		return $dulieu ;
	}
	public function updateSach_model($id,$tensach,$iddanhmuc,$sotrang,$tentacgia,$thoigian,$xuatban,$hinhanh)// hàm update
	{
		$dulieu = array('id_sach'=>$id,'tensach' => $tensach ,'id_danhmuc'=>$iddanhmuc,'sotrang_sach'=>$sotrang,'tentacgia'=>$tentacgia,'thoigianduocmuon'=>$thoigian,'thoigianxuatban'=>$xuatban,'hinhanh'=>$hinhanh);
		$this->db->where('id_sach', $id);
		return $this->db->update('sach', $dulieu);
	}
   
}

/* End of file Sach_model.php */
/* Location: ./application/models/Sach_model.php */