<?php 

//Lớp của đối tượng bài viết
class baiViet
{
	public $tieuDe;
	public $duongDanBaiViet;
	public $moTa;
	public $noiDung;

	function __construct()
	{
	   	$tieuDe = '';
	    $duongDan = '';
	    $moTa = '';
	    $noiDung = '';

	}

	public function inThongTin()
	{
	    echo "<br>Tiêu đề: " .$this->tieuDe;
	    echo "<br>Đường dẫn: " .$this->duongDanBaiViet;
	    echo "<br>Mô tả: " .$this->moTa;
	    echo "<br>Nội dung: " .$this->noiDung;
	}
}


//Lớp của đối tượng danh mục
class danhMuc
{
	public $ten;
	public $duongDanDanhMuc;
	public $danhMucCha;
	public $anhHienThi;
	public $moTa;

	function __construct()
	{
	   	$ten = '';
	    $duongdan = '';
	    $danhMucCha = '';
	    $anhHienThi = '';
	    $moTa = '';
	}

	public function inThongTin()
	{
	    echo "<br>Tên: " .$this->ten;
	    echo "<br>Đường dẫn: " .$this->duongDanDanhMuc;
	    echo "<br>Danh mục cha: " .$this->danhMucCha;
	    echo "<br>Ảnh hiển thị: " .$this->anhHienThi;
	    echo "<br>Mô tả: " .$this->moTa;
	}
}


//class của đối tượng người dùng
class nguoiDung
{
	protected $email;
	private $matKhau;
	public $anhDaiDien;

	function __construct()
	{
	   	$email = '';
	    $matKhau = '';
	    $anhDaiDien = '';
	}

	function inThongTin()
	{
	    echo "<br>Email: " .$this->email;
	    echo "<br>Mật khẩu: " .$this->matKhau;
	    echo "<br>Ảnh đại diện: " .$this->anhDaiDien;
	}

	function setEmail($value)
	{
	    $this->email = $value;
	}

	function setMatKhau($value)
	{
	    $this->matKhau = $value;
	}

	function getEmail()
	{
	   return $this->email;
	}

	function getMatKhau()
	{
	   return $this->matKhau;
	}
}


//------KHỞI TẠO 3 ĐỐI TƯỢNG------
$baiviet = new baiViet();
$danhmuc = new danhMuc();
$nguoidung = new nguoiDung();

//------GÁN THÔNG TIN CHO CÁC THUỘC TÍNH------
$baiviet->tieuDe = "VÌ SAO BẠN NÊN MUA BÀN PHÍM CƠ";
$baiviet->duongDanBaiViet = 'https://gearvn.com/pages/vi-sao-ban-nen-mua-ban-phim-co';
$baiviet->moTa = "Chắc chắn đắt thường sẽ xắt ra miếng.";
$baiviet->noiDung = "Đây là nội dung";

$danhmuc->ten = "Phím cơ";
$danhmuc->duongDanDanhMuc = "https://gearvn.com/collections/ban-phim-co-gaming";
$danhmuc->danhMucCha = "Bàn phím";
$danhmuc->anhHienThi = 'https://www.playzone.vn/image/cache/catalog/san%20pham/Leopold/swe/rpd-900/4-750x750.jpg';
$danhmuc->moTa = "Đây là mô tả";

$Email = "duong@gmail.com";
$nguoidung->setEmail($Email);
$MatKhau = "123456";
$nguoidung->setMatKhau(md5($MatKhau));
$nguoidung->anhDaiDien = 'https://i.pinimg.com/originals/8c/8c/6d/8c8c6d8da8ecb8648d0002ccc5fb563c.jpg';

//------GỌI PHƯƠNG THỨC IN THÔNG TIN CHO TỪNG ĐỐI TƯỢNG------
echo "------THÔNG TIN CỦA ĐỐI TƯỢNG BÀI VIẾT------";
$baiviet->inThongTin();
echo "<br>";
echo "------THÔNG TIN CỦA ĐỐI TƯỢNG DANH MỤC------";
$danhmuc->inThongTin();
echo "<br>";
echo "------THÔNG TIN CỦA ĐỐI TƯỢNG NGƯỜI DÙNG------";
$nguoidung->inThongTin();


?>