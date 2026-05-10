 <?php
 include 'temp/head.php';
 include 'temp/database.php';
 include 'temp/navklient.php';
 session_start();

$id_user=$_SESSION['id_user'];
if(!empty($_POST)){

$id_restoran=$_POST['id_restoran'];
$time=$_POST['time'];
$adres_dostavki=$_POST['adres_dostavki'];
$oplata=$_POST['oplata'];
 $sql="INSERT INTO zacaz(id_user, id_restoran, time, adres_dostavki, oplata) VALUES ('$id_user','$id_restoran','$time', '$adres_dostavki', '$oplata')";

$result=$mysqli->query($sql);
var_dump($_POST);
if($result){
    header('location:person.php');
}

 }

 ?>


<div class="container">
    <h1>Заявка</h1>
  
  <form action=""method="POST">



 <label for="text">Закажите еду</label>
<select class="form-select" name="id_restoran"required>
<?php
$restoran=$mysqli->query("SELECT id_restoran, name_restoran from restoran");
foreach($restoran as $list){
    echo '<option value="'.$list['id_restoran'].'">'.$list['name_restoran'].'</option>';
}
?>
</select>
<label for="text">Выберите блюдо</label>
<select class="form-select" name="id_blud"required>
<?php
$blud=$mysqli->query("SELECT id_blud, name_blud from blud");
foreach($blud as $list){
    echo '<option value="'.$list['id_blud'].'">'.$list['name_blud'].'</option>';
}

?>
</select><br><br>
<div class="form-element">

 <label for="time">Время</label>
<input type="time" name="time" required><br><br>
</div>

<div class="form-element">

 <label for="adres_dostavki">Адрес_доставки</label>
<input type="text" name="adres_dostavki" required>
</div><br><br>

<div class="form-element">

 <label for="oplata">Оплата</label>
<input type="text" name="oplata" required>
</div><br><br>


<input type="submit"value="Отправить"required>


  </form>
    
   
</div>


