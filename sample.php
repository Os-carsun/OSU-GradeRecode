<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
if(isset($_POST['login'])){
  session_id($_POST['login']);
}
session_start();
  $a=rand(0,100);
  if(isset($_POST['userid'])&&isset($_POST['pwd'])){

    $ssid = session_id();
    if(!isset($_SESSION['login_tag'])){
      $login_code = sha1($_POST['userid'].$_POST['pwd']).time();
      $_SESSION['login_tag'] = $login_code;
      echo "{name:'oscar',age:$a,userid:'$_POST[userid]',pwd:'$_POST[pwd]',login_code:'$_SESSION[login_tag]',ssid:'$ssid'}";
    }else{
      echo "{name:'oscar',age:$a,userid:'$_POST[userid]',pwd:'$_POST[pwd]',login_tag:'$_SESSION[login_tag]',ssid:'$ssid' }";
    }
  }
?>