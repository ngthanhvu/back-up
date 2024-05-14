<?php
require_once("config.php");

class Account
{
     public $accountId;
     public $email;
     public $password;
     public $role;

     public function __construct($accountId, $email, $password, $role)
     {
          $this->accountId = $accountId;
          $this->email = $email;
          $this->password = $password;
          $this->role = $role;
     }

     public function __destruct()
     {
          print("Call destroy obj");
     }
     
     #set
     public function setAccountId($accountId) {
          return $this->accountId = $accountId;
     }
     public function setEmail($email) {
          return $this->email = $email;
     }
     public function setPassword($password) {
          return $this->password = $password;
     }
     public function setRole($role) {
          return $this->role = $role;
     }

     public function info() {
          echo "Id: ". $this->accountId . "<br>";
          echo "Email: ". $this->email . "<br>";
          echo "Password: ". $this->password . "<br>";
          echo "Role: ". $this->role . "<br>";
     }

}

class User extends Account
{
     public $ten;
     public $sdt;
     public $gioitinh;
     public $ngaysinh;

     public function __construct($accountId, $email, $password, $role,$ten, $sdt, $gioitinh, $ngaysinh)
     {
          parent::__construct($accountId, $email, $password, $role);
          $this->ten = $ten;
          $this->sdt = $sdt;
          $this->gioitinh = $gioitinh;
          $this->ngaysinh = $ngaysinh;
     }

     public function setTen($ten) {
          return $this->ten = $ten;
     }
     public function setSdt($sdt) {
          return $this->sdt = $sdt;
     }
     public function setGioitinh($gioitinh) {
          return $this->gioitinh = $gioitinh;
     }
     public function setNgaysinh($ngaysinh) {
          return $this->ngaysinh = $ngaysinh;
     }

     public function info()
     {
          parent::info();
          echo "Ten: " . $this->ten . "<br>";
          echo "Sdt: " . $this->sdt . "<br>";
          echo "Gioitinh: " . $this->gioitinh . "<br>";
          echo "Ngaysinh: " . $this->ngaysinh . "<br>";
     }
}

$user = new User(1,"thanhvu@gmail.com","123456","user","thanhvu",98888,"nam","29-6-2005");
$user->info();
echo "-------------------------- <br>";
$user->setEmail("editemail@mail.com");
$user->info();


?>




