<?php
namespace app\Controllers;
use \core\View;   
use app\Models\Users;

class FP extends \core\Controller
{
    private $model;
    public function __construct($model) {
        $this->model = $model;
  }
    public function indexAction()
    {
        // Render the "Forgot Password" view
        // You can implement the view logic here or in a separate view file
        // e.g. include 'views/forgot_password.php';
        echo "Forgot Password View";
        View::render('ForgotPassword/fp.php');
    }

    public function sendResetLinkAction(){
        if (isset($_POST['Username'])) {
            $this->resetPassword($_POST['Username']);
            View::render('ForgotPassword/otp.php');
        }
    }

    public function resetPassword($Username){
        $user=Users::findByEmail2($Username);
        if($user){
            $_SESSION['Username'] = $Username;
            $otp = rand(100000,999999);
            $_SESSION['otp'] = $otp;
            $subject = "One Time Password Generated";
            $string = "Your password OTP is $otp";
            $html = "<h1>OTP is $otp</h1>";
            Mail::send($Username, $subject, $string, $html);
        }
        else {
            header('Location: /Signup/new.php');
        }
    }
}
?>
