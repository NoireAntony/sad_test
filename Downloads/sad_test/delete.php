<?php
include 'temp/database.php';

if(!empty($_POST)){
    $id_zayavka=$_POST['id_zayavka'];
    $sql="DELETE FROM `zayavka` WHERE  id_zayavka='$id_zayavka'";
    $result=$mysqli->query($sql);
    if($result){
        header("location.person.php");
    }
   
}