<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();
?>

<h1 style="margin-left: 500px;">Личный кабинет</h1>
<table class="table">
<tr>
<td>Заявка</td>
<td>Клиент</td>
<td>категория</td>
<td>Название</td>
<td>Состояние</td>
<td>Статус</td>

</tr>

<?php
$sql="SELECT * FROM zayavka where id_user='$id_user'";
$result=$mysqli->query($sql);
if(!empty($result)){
    foreach($result as $row){
        echo '<tr><td>'.$row['id_zayavka'].'</td>
        <td>'.$row['id_user'].'</td>
        <td>'.$row['id_category'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['sost'].'</td>
        <td>'.$row['status'].'</td>

<td><form action="delete.php" method="POST">
<input type="hidden" name="id_zayavka" value="'.$row['id_zayavka'].'">
<input type="submit"value="Удалить"></form></td></tr>';
    }
}


?>



</table>
