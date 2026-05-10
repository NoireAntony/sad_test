 <?php
 include 'temp/head.php';
  session_start();
 include 'temp/database.php';
 include 'temp/navklient.php';



?>
<tbody>
<table class="table">
<tr>
 <th>Номер заказа</th>
   <th>Клиент</th> 
   <th>Ресторан</th>
   <th>Время</th>
   <th>Адрес_доставки</th>
   <th>Оплата</th>
</tr>
<?php
$id_user =$_SESSION['id_user'];
$id_restoran =$_SESSION['id_restoran'];

$sql="SELECT * from zacaz where id_user='{$_SESSION['id_user']}'";
$result=$mysqli->query($sql);
if(!empty($result)){
  foreach($result as $row){
    echo '<tr><th>'.$row['id_zacaz'].'</th>
    <th>'.$row['id_user'].'</th>
    <th>'.$row['id_restoran'].'</th>
    <th>'.$row['time'].'</th>
    <th>'.$row['adres_dostavki'].'</th>
    <th>'.$row['oplata'].'</th></tr>';
  }  
}
?>

</table>



</tbody>