<?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/navklient.php';
session_start();

$id_user=$_SESSION['id_user'];



if(!empty($_POST)){
    $id_category=$_POST['id_category'];
    $name=$_POST['name'];
    $sost=$_POST['sost'];
    $action=$_POST['action'];
    $status=$_POST['status'];
    $sql = "INSERT INTO zayavka (id_user, id_category, name, sost, action, status)  VALUES ('$id_user', '$id_category', '$name', '$sost', '$action', 'Новая')";
    $result=$mysqli->query($sql);
    if(!empty($_POST)){
        header("location:person.php");
        exit;
    }
}




?>


<div class="container">
    <h1>Заявка</h1>
<form action="" method="POST">


<div class="form-element">
<label for="">Выберите</label>
<select class="form-element" id="id_category" name="id_category" required>

<?php
$category=$mysqli->query("SELECT id_category, name_category from category");
foreach($category as $list){

    echo '<option value="'.$list['id_category'].'">'.$list['name_category'].'</option>';
}

?>
</select></br></br


<div class="form-element">
<label for="name">Название</label>
<input type="text" name="name" required></br></br>


</div>

<div class="form-element">
<label for="sost">Состояние</label>
<input type="text" name="sost"   required></br></br>

</div>

<div class="form-elememt">
                <label>Действия:</label><br>
                <input type="radio" name="action" value="Готов поделиться" required> Готов поделиться
                <input type="radio" name="action" value="Хочу получить"> Хочу получить
            </div>
            <br>


<input type="submit"value="Отправить">
</form>
