 <?php
 include 'temp/head.php';
 session_start();
 include 'temp/database.php';
 include 'temp/nav.php';

 $message="";
 if(!empty($_POST)&& isset($_POST['login'])&& isset($_POST['password'])){

    $login=trim($_POST['login']);
     $password=trim($_POST['password']);

     $login=$mysqli->real_escape_string($login);
     $password=$mysqli->real_escape_string($password);

     $sql="SELECT * from users where login='$login' and password='$password'";
     $result=$mysqli->query($sql);
     if($result_num_rows===0){
        $message="Неверный логин или пароль";
        echo $message;
     }
     else{
        $user=$result->fetch_assoc();
        $_SESSION['id_user']=$user['id_user'];
        $_SESSION['login']=$user['login'];
        $_SESSION['password']=$user['password'];
        if($user['login']=='admin'&& $user['password']=='admin22'){
            header('location:admin.php');
        }
        else{
             header('location:zacaz.php');
        }
     }
     }
     
     ?>
<p>Войти через:</p>
<a href="/oauth/yandex.php" class="btn btn-yandex">Яндекс</a>
<a href="/oauth/vk.php" class="btn btn-vk">VK</a>
<a href="/oauth/telegram.php" class="btn btn-telegram">Telegram</a>
     <div class="container">
    <h1>Авторизация</h1>
    <form action=""method="POST">
 
 
    <div class="form-element">

<label for="login">Логин</label>
<input type="text" name="login" required><br><br>
    </div>

<div class="form-element">

<label for="password">пароль</label>
<input type="password" name="password" required><br><br>
  </div>
<input type="submit"value="Войти">

    </form>
    
    
    </div>