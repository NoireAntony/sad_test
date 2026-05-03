 <?php
include 'temp/head.php';
include 'temp/database.php';
include 'temp/nav.php';

if(!empty($_POST)){
    $fio=$_POST['fio'];
    $login=$_POST['login'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    if($password!==$password2){

    }
else{

    $fio=$mysqli->real_escape_string($fio);
    $login=$mysqli->real_escape_string($login);
    $password=$mysqli->real_escape_string($password);
    $email=$mysqli->real_escape_string($email);
    $phone=$mysqli->real_escape_string($phone);

    $sql = "INSERT INTO users (fio, login, password, email, phone)  VALUES ('$fio', '$login', '$password', '$email', '$phone')";
    $result=$mysqli->query($sql);
    if(!empty($_POST)){
        header("location:login.php");
        exit;
    }
}
}



?>


<div class="container">
    <h1>Регистрация</h1>
<form action="" method="POST">


<div class="form-element">
<label for="fio">Введите имя</label>
<input type="text" name="fio" placeholder="Символы кириллицы" pattern="^[А-Яа-яЁё-\s]+$" required></br></br>


</div>



<div class="form-element">
<label for="login">логин</label>
<input type="text" name="login" required></br></br>


</div>

<div class="form-element">
<label for="password"> Введите пароль</label>
<input type="password" name="password" pattern=.{6,}  placeholder="Минимум 6 символов"  required></br></br>

</div>

<div class="form-element">
<label for="password2"> Подвердите пароль</label>
<input type="password" name="password2"  required></br></br>

</div>

<div class="form-element">
<label for="email"> Введите почту</label>
<input type="text" name="email"  required></br></br>

</div>

<div class="form-element">
<label for="phone"> Введите телефон</label>
<input type="text" name="phone"  pattern="+7 (/d{3})-/d{3}-/d{2}-/d{2}" placeholder="+7(XXX)-XXX-XX-XX" required></br></br>

</div>



<input type="submit"value="Зарегистрироваться">

</form>

</div>

