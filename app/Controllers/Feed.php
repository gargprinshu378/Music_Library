<?php
namespace app\Controllers;
use \core\View;
use \app\Models\Users;

class Feed extends \core\Controller
{
    public function newAction(){
        $session_username =$_SESSION['Username']; 
            View::render('Feed/new.php');
    }
}