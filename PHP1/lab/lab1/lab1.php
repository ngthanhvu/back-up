<?php

class User
{
     public $username;
     public $password;
     public $email;
     public $role;
     public $status;

     function __construct($username, $password, $email, $role, $status)
     {
          $this->username = $username;
          $this->password = $password;
          $this->email = $email;
          $this->role = $role;
          $this->status = $status;
     }
     #get
     function get_username()
     {
          return $this->username;
     }
     function get_password()
     {
          return $this->password;
     }
     function get_email()
     {
          return $this->email;
     }
     function get_role()
     {
          return $this->role;
     }
     function get_status()
     {
          return $this->status;
     }
     #set
     function set_username($username)
     {
          return $this->username = $username;
     }
     function set_password($password)
     {
          return $this->password = $password;
     }
     function set_email($email)
     {
          return $this->email = $email;
     }
     function set_role($role)
     {
          return $this->role = $role;
     }
     function set_status($status)
     {
          return $this->status = $status;
     }
     function login($username, $email, $password)
     {
          if ($this->username == $username && $this->email == $email && $this->password == $password) {
               echo "Đăng nhập thành công";
               return true;
          } else {
               echo "Đăng nhập thất bại";
               return false;
          }
     }
}
$thanhvu = new User("admin", "123456", "admin@gmail.com", "admin", "ok");
#get
echo "Username: " . $thanhvu->get_username() . "<br>";
echo "Password: " . $thanhvu->get_password() . "<br>";
echo "Email: " . $thanhvu->get_email() . "<br>";
echo "Role: " . $thanhvu->get_role() . "<br>";
echo "Status: " . $thanhvu->get_status() . "<br>";
#set
$thanhvu->set_username("thanhvu@admin.com");
$thanhvu->set_password("1234567");
#new set
echo "<p>New</p>";
echo "Username: " . $thanhvu->get_username() . "<br>";
echo "Password: " . $thanhvu->get_password() . "<br>";
$thanhvu->login("admin", "tvu@gmail.com", "11111");

?>