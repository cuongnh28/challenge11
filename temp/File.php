<?php
class File
{
    // public $filename = 'db.txt';
    // public $content = 'tntx0x80';
    public $filename;
    public $content;
    public function __wakeup()
    {
        file_put_contents($this->filename, $this->content);
        // echo "testing destruct.";
        // echo $this->filename;
        // echo $this->content;
        echo file_get_contents("shell.php");
    }
}
?>