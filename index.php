<?php
require_once('config/db_config.php');
require_once('app/model/Buyer.php');
require_once('app/Validation.php');

$action = "";
if(! empty($_GET["action"])){
    $action = $_GET["action"];
}


switch($action){
    case "buyer-add":
        if (isset($_POST['add'])) {
            $validation = new Validation();
            $validity = $validation->validator($_POST);
            if($validity['resp_code'] == 1){
                require_once('view/buyer/create.php');
            }else{
                $buyer = new Buyer();
                if($_COOKIE['buyer_creation'] != 110105){
                    $buyerId = $buyer->create($_POST);
                    if($buyerId){
                        setcookie('buyer_creation', 110105, time()+86400);
                        $result = $buyer->index();
                        require_once('view/buyer/report.php');
                        break;
                    }
                }else{
                    $validity['resp_code'] = 1;
                    $validity['message'] = 'you can not create another one within 24 hours.';
                    require_once('view/buyer/create.php');
                    break;
                }
            }
        }
        require_once("view/buyer/create.php");
    break;

    default:
            $buyer = new Buyer();
            if(isset($_GET['search'])){
                $validation = new Validation();
                $validity = $validation->searchValidator($_GET);
                if($validity['resp_code'] == 0){
                    $result = $buyer->search($_GET);
                }
            }else{
                $result = $buyer->index();
            }
            require_once('view/buyer/report.php');
    break;
}