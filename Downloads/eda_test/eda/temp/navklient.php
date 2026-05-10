 <?php
 session_start();
 //include 'temp/database.php';
 
 ?>
 
 
 <header>
 
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" style="background-color:orange; height:45px;">

  
          <a class="nav-link active" aria-current="page" href="index.php">Главная</a>
        </li>

        

          <a class="nav-link active" aria-current="page" href="person.php">Личный кабинет</a>
        </li>

         


          <a class="nav-link active" aria-current="page" href="logout.php">Выйти</a>
        </li>
        
</nav>
</div>


<?php
$id_user=$_SESSION['id_user'];
$sql="SELECT * from  users where id_user='$id_user'";
$result=$mysqli->query($sql);
foreach($result as $row){
    echo "<p style='color:black;'>".$row['fio']."</p>";
}
?>

</div>
</div>
</header>

