<?php
include 'File.php';
class info
{
    public $age = 0;
    public $name = '';
    public function __toString() //duoc goi thi unserialize
    {
        return 'Welcome '.$this->name.' your age: '.$this->age.' years old.<br />';
    }
}
// $x = new info();
// $x->age = 24;
// $x->name = "intx0x80";
// echo serialize($x);
// O:4:"info":2:{s:3:"age";i:24;s:4:"name";s:8:"intx0x80";}
$o = unserialize($_GET['u']);
// echo '<h1>'.$o;
?>