<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<header> <div data-role="header" data-theme="a">
            <h2 style="color:; background-color:;text-align: center;" >Gerents<span id="dert"></span></h2>
        </div></header>
<body style="text-align: center;">
  <div data-role="header" data-theme="b">
           <h1>GERENCE PARKING<span id="anotif"></span></h1>
        </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gerent.html">ajouter gerent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="abonnement.html" tabindex="-1" >abonnement</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
 
  
 <?php 
 $user='root';
  $pass='';
   $db='compte';
    $db=new mysqli('localhost',$user,$pass,$db)
    or die("unable to connection");
    $sql="select * from gerent";
    $result=mysqli_query($db, $sql) or die("bad query");

    while($row=mysqli_fetch_assoc($result)){

    	echo "{$row['prenom']}  {$row['nom']}  {$row['tel']}<br>";
    }


 ?>

</body>
</html>