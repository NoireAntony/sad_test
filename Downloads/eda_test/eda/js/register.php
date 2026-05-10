 <?php
 include 'temp/head.php';
 include 'temp/database.php';
 include 'temp/nav.php';


 if(!empty($_POST)){
    $fio =$_POST['fio'];
     $login =$_POST['login'];
      $password =$_POST['password'];
      $password2 =$_POST['password2'];
       $phone =$_POST['phone'];
   if($password !==$password2){
    echo"Пароли не совпадают";
    exit();
   }    
     $fio = $mysqli->real_escape_string($fio);
 $login=$mysqli->real_escape_string($login);
     $password=$mysqli->real_escape_string($password);
       $sql="INSERT INTO users (fio, login, password, phone) VALUES ('$fio','$login','$password','$phone')";

$result=$mysqli->query($sql);
var_dump($_POST);
if($result){
    header('location:login.php');
}
$result = $mysqli->query($sql);
if(!$result) {
    die("Ошибка запроса: " . $mysqli->error);
}

 }

 ?>


<div class="container">
    <h1>Регистрация</h1>
    <form action=""method="POST">
 
 
<div class="form-element">

<label for="fio">Фамилия</label>
<input type="text" name="fio"placeholder="Символы кириллицы" pattern="^[A-Яа-яЁе\s]+$" required></br></br>
    

</div>


<div class="form-element">

<label for="login">Логин</label>
<input type="text" name="login" required></br></br>
    

</div>




<div class="form-element">

<label for="password">Пароль</label>
<input type="password" name="password" required></br></br>
  </div>

<div class="form-element">

<label for="password2">Подвердите пароль</label>
<input type="password" name="password2" required></br></br>
  
</div>




  <div class="form-element">

<label for="phone">Телефон</label>
<input type="text" name="phone" pattern="^\+7\(\d{3}\)-\d{3}-\d{2}-\d{2}" placeholder="+7(XXX)-XXX-XX-XX" required></br></br>
  </div>

<input type="submit"value="Зарегистрироваться">

    </form>
    
    
    </div>