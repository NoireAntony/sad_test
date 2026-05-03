<?php
include 'temp/database.php';

if(!empty($_POST)){
    $id_zayavka=$_POST['id_zayavka'];
    $sql="UPDATE zayavka SET status='Отклонить'  where status='Новая' and id_zayavka='$id_zayavka'";
    $result=$mysqli->query($sql);
    header("location.admin.php");
}