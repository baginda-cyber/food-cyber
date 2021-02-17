
<?php
 $servername = "localhost";
 $username = "root";
 $password ="";


 //Koneksi ke Database
$sandi = mysqli_connect("localhost","root","","nama_makanan");
 
//Ambil data dari Tabel  Dan Cek Koneksi Query

$result=mysqli_query($sandi,"SELECT * FROM daftar_makanan ");


 $servername = "localhost";
 $username = "root";
 $password ="";


$rumapea = mysqli_connect("localhost","root","","nama_minuman");

$hasil = mysqli_query($rumapea,"SELECT * FROM daftar_minuman");



//var_dump($result);
  



//Ambil data makanan (fetch) dari object Result (daftar makanan)

//mysqli_fetch_row()  mengembalikan array numerik (array angka)
//mysqli_fetch_assoc() mengembalikan Array bertipe data String  
//mysqli_fetch_array() mengembalikan angka dan String
//mysqli_fetch_object() setiap object
/*
while ($makanan = mysqli_fetch_assoc($result)){

var_dump($makanan["Harga"]);

}
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>D'Cafe Restaurant</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shotcut icon" type="text/css" href="Mie.jpg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
      border-radius: 3.3px;

    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    .sa{
       font-family:"trackId":1300348171;

    }
  </style>
</head>
<body >
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Portfolio</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" style="width: 1300px;">
      <ul class="nav navbar-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>




  <div class="aa">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="ss.jfif" style="width: 1350px; height: 400px; background-size: cover;">
    </div>
    <div class="item">
      <img src="2.jfif" style="width: 1350px; height: 400px; background-size: cover;">
    </div>
     </div>
  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    


    <h2 style="font-size: 100px; margin-top: 200px; color: silver"></h2>
    
  </a>

  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">

    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
  <div class="container-fluid bg-3 text-center">    

  <hr><h3 style="font-family: Brush Script Std Medium ; font-size: 36px; color: black;">Kenikamatan itu bukan dari bumbu masakan kami <br>"Tapi dari Cinta yang kami Berikan"</h3><br>
  </div> 
<div>
  <input type="text" name="" placeholder="Cari Makanan" style="width: 78% ; float: right; margin-right: 160px; height: 33px; border-radius: 4px;" > 
    <input type="submit" name="Cari" value="Cari" style="border: 20px; color: silver; width: 50px; height: 34px; border-radius: 5px; "> 
  </div>
 <div class="container-fluid bg-3 text-center">    
      <div class="col-md-12">  
  <h2>Makanan</h2>
    <?php while ( $row = mysqli_fetch_assoc($result) ): ?>
     
     <div class="col-md-4" >  
     <div class="w3-card-4 w3-margin w3-white">
  
  <div class="w3-container">
   
      <img src="<?php echo $row["Gambar"] ?>" style="width:180px ;border-radius: 10px;">
    
      <p style="font-size: 30px; font-family:Kristen ITC Regular "><?php echo $row["Nama"]; ?></p>
    
      <p style="font-size: 23px; font-family:Kristen ITC Regular"><?php echo "Rp.",$row["Harga"],",-";?></p>
        </div>
</div>
</div>
<?php endwhile; ?>
    </div>
  </div>
<footer class="container-fluid text-center" style="background-color: silver;" style="height: 300px;">
<p>Contact Us</p>
</div>


</footer>
</body>
</html>
