<?php

namespace app\Controllers;
use \core\View;   
use app\Models\Users;

class Home extends \core\Controller
{

    protected function before()
    {
        // echo "(before) ";
        //return false;
    }

    protected function after()
    {
        // echo " (after)";
    }

    public function indexAction()
    {
        // echo 'Hello from the index action in the Home controller!';
        View::render('Home/index.php');
    }

    public function createAction(){
        $user = Users::findByEmail($_POST['Username'],$_POST['Password']);
        if($user){
            $_SESSION['Username']=$_POST['Username'];
            View::render('Feed/new.php' , [
                'Username' => $_POST['Username']
            ]);
        }
        else{
            echo "Invalid Username or Password";
            View::render('Home/index.php');
        }
        }
}