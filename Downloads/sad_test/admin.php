<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navadmin.php';
?>

<h1>Личный кабинет администратора</h1>
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
$sql="SELECT * FROM zayavka, users where zayavka.id_user=users.id_user";
$result=$mysqli->query($sql);
if(!empty($result)){
    foreach($result as $row){
        echo '<tr><td>'.$row['id_zayavka'].'</td>
        <td>'.$row['fio'].'</td>
        <td>'.$row['id_category'].'</td>
        <td>'.$row['name'].'</td>
        <td>'.$row['sost'].'</td>
        <td>'.$row['status'].'</td>
<td><form action="change.php" method="POST">
<input type="hidden" name="id_zayavka" value="'.$row['id_zayavka'].'">
<input type="submit"value="Опубликовать"></form></td>
<td><form action="change1.php" method="POST">
<input type="hidden" name="id_zayavka" value="'.$row['id_zayavka'].'">
<input type="submit"value="Отклонить"></form></td></tr>';
    }
}


?>



</table>