<?php

namespace company;

class Employee
{
     private $idnhanvien;
     private $tennhanvien;
     private $luong;
     private $phongban;
     private $luongcoban = 5000000;


     public function __construct()
     {
          $this->luong = $this->luongcoban;
     }

     #set item
     public function set_idnhanvien($idnhanvien)
     {
          $this->idnhanvien = $idnhanvien;
     }
     public function set_tennhanvien($tennhanvien)
     {
          $this->tennhanvien = $tennhanvien;
     }
     public function set_luong($luong)
     {
          $this->luong = $luong;
     }
     public function set_phongban($phongban)
     {
          $this->phongban = $phongban;
     }

     #get item
     public function get_idnhanvien()
     {
          return $this->idnhanvien;
     }
     public function get_tennhanvien()
     {
          return $this->tennhanvien;
     }
     public function get_luong()
     {
          return $this->luong;
     }
     public function get_phongban()
     {
          return $this->phongban;
     }
     
     #get thông tin
     public function get_info()
     {
          echo "ID Nhân viên: " . $this->idnhanvien . "<br>";
          echo "Tên Nhân viên: " . $this->tennhanvien . "<br>";
          echo "Lương: " . $this->luong . "$ <br>";
          echo "Phòng ban: " . $this->phongban . "<br>";
     }
}


$employ = new Employee();
$employ->set_idnhanvien("NV1");
$employ->set_tennhanvien("NguyenVanA");
// $employ->set_luong(200000);
$employ->set_phongban("IT");
$employ->get_info();
