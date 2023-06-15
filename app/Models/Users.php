<?php
namespace app\Models;

use \core\View;

class Users extends \core\Model{
    protected $Name;
    protected $Username;
    protected $Password;
    
    protected $Confirm_Password;
    protected $Song_Title;
    protected $Singer;
    protected $Genre;
    protected $myfile;
    public $errors = [];


    public function __construct($data =[]){
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
    public function save(){
        // $this->validate();
        if (empty($this->errors)) {
        $db = static::getDB();
        $Name = mysqli_real_escape_string($db, $this->Name);
        $Username = mysqli_real_escape_string($db, $this->Username);
        $Password = mysqli_real_escape_string($db, $this->Password);
        $sql = "INSERT INTO user_details (Name, Username, Password)
                VALUES ('$Name', '$Username', '$Password')";

       return mysqli_query($db, $sql);
        }
        return false;
    }

    public function validate(){
        if ($this->Name == ''){
            $this->errors[] = 'Name is required';
        }

        if (filter_var($this->Username, FILTER_VALIDATE_EMAIL) === false) {
            $this->errors[] = 'Invalid email';
        }

        if ($this->Password != $this->Confirm_Password){
            $this->errors[] = 'Password must match confirmation';
        }
        if (static::emailExists($this->Username)){
            $this->errors[] = 'Email already taken';
        }
    }

    public static function emailExists($Username){
        return static::findByEmail($Username) != false;   
    }

    public static function findByEmail($Username,$Password)
    {
        $db = static::getDB();
        $Username = mysqli_real_escape_string($db, $Username);
        $Password = mysqli_real_escape_string($db, $Password);
        $sql = "SELECT * FROM user_details WHERE Username='$Username'AND Password='$Password'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
    
        // Convert the row to an object
        $user = null;
        if ($row) {
            $user = new static();
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
        }
    
        return $user;
    }

    public static function findByEmail2($Username)
    {
        $db = static::getDB();
        $Username = mysqli_real_escape_string($db, $Username);
        $sql = "SELECT * FROM user_details WHERE Username='$Username'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
    
        // Convert the row to an object
        $user = null;
        if ($row) {
            $user = new static();
            foreach ($row as $key => $value) {
                $user->$key = $value;
            }
        }
    
        return $user;
    }

    public function save_song(){
        if (empty($this->errors)) {
            $db = static::getDB();
            $Song_Title = mysqli_real_escape_string($db, $this->Song_Title);
            $Singer = mysqli_real_escape_string($db, $this->Singer);
            $Genre = mysqli_real_escape_string($db, $this->Genre);
            $myfile = mysqli_real_escape_string($db, '/var/www/prateekmvc.com/html/public/songs/'.$this->myfile);
            $sql = "INSERT INTO album (Song_Title, Singer, Genre, myfile)
                    VALUES ('$Song_Title', '$Singer', '$Genre', '$myfile')";
           return mysqli_query($db, $sql);
        }
        return false;
    }

}
?>