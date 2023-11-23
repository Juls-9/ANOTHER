<?php 
include("Controller/leaveFormController.php");
include("Model/Connection.php");
include("Model/leaveFormClass.php");
session_start();
if(isset($_POST["lff"])){
    $phone = filter_input(INPUT_POST,"phoneNumber", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $fname = filter_input(INPUT_POST,"firstName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $lname = filter_input(INPUT_POST,"lastName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $mName = filter_input(INPUT_POST,"middleName", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $reason = filter_input(INPUT_POST,"reason", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $sDate = $_POST["startDate"];
    $eDate = $_POST["endDate"];
    $paid  = $_POST["inlineRadioOptions"];

    if(empty($_POST["startDate"])||empty($_POST["endDate"])||empty($_POST["phoneNumber"])||empty($_POST["firstName"])
    ||empty($_POST["lastName"])||empty($_POST["middleName"])||empty($_POST["reason"])||empty($_POST["inlineRadioOptions"])){

        $_SESSION["err"] = "Fill up form";

    }else{
        $lCont = new leaveController();
        $lCont->getInfo($fname,$lname,$mName,$sDate,$eDate,$phone, $reason,$paid);
        $_SESSION["msg"] = "Sent Successful";
    }
}

