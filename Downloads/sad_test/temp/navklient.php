<?php
session_start();
?>






<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">

  <ul class="navbar-nav ml-auto">


  <a class="nav-link active" aria-current="page" href="zayavka.php">Заявка</a>
        </li>


        <a class="nav-link active" aria-current="page" href="person.php">Личный кабинет</a>
        </li>


        <a class="nav-link active" aria-current="page" href="logout.php">Выйти</a>
        </li>


        <?php
        $id_user=$_SESSION['id_user'];
$sql="SELECT * FROM users where id_user='$id_user'";
$result=$mysqli->query($sql);
foreach($result as $row){
    echo "<p style='color:black;'>".$row['fio']."</p>";
}


?>

</div>
</nav>
  </ul>