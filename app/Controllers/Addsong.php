<?php
namespace app\Controllers;
use \core\View;
use \app\Models\Users;

class Addsong extends \core\Controller
{
    public function newAction(){
        $session_username =$_SESSION['Username']; 
        if($session_username=='gprateek378@gmail.com'){
            View::render('Addsong/form.php');
        }
        else{
            echo "Only Admin can add song to the Music Library";
            View::render('Feed/new.php');
        }
    }

    public function createAction(){
        $user = new Users($_POST);
        var_dump($_POST);
        if($user->save_song()) {
            header('Location: /Addsong/success');
        }
        else{
            View::render('Addsong/form.php',[
                'user' => $user
            ]);
        }
    }

    public function successAction(){
        View::render('Addsong/success.php');
    }
}

?>