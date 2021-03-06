<!DOCTYPE html>
<html lang="en">
<head>

  <title>Persewaan Kamera</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/stylemember.css'); ?>">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<style>
  .navbar {
    height: 75px;
    margin-bottom: 0;
    padding-right: 100px;
    padding-left: 100px;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity:0.9;
    text-transform: uppercase;
}

/* Add a gray color to all navbar links */
.navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
    margin-top: 12px;
}

/* On hover, the links will turn white */
.navbar-nav li a:hover {
    color: #fff !important;
}

/* The active link */
.navbar-nav li.active a {
    color: #fff !important;
    background-color:#29292c !important;
}

/* Remove border color from the collapsible button */
.navbar-default .navbar-toggle {
    border-color: transparent;
}

/* foto team */
.person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.8;
}
.person:hover {
    border-color: #dddddd;
    opacity: 0.9;
}

.dropdown-menu{
  background-color: #3c3c3d;
}

</style>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#"><img src="<?php echo base_url('assets/images/logofix.png'); ?>"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#home">HOME</a></li>
        <li><a href="#team">TEAM</a></li>
        <li><a href="#price">PRICELIST</a></li>
        <li><a href="<?php echo base_url('index.php/admin') ?>">ADMIN</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $username ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="<?php echo base_url('index.php/Login/logout') ?>">LOGOUT</a></li>
              <li style="height: 13px; visibility: hidden;">.</li>
            </ul>
          </li>
      </ul>
    </div>
  </div>
</nav>

<div id="home"></div>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo base_url('assets/images/60d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 60D</h3>
          <p>The Canon EOS 60D is an 18.1 megapixels semi-pro digital single-lens reflex camera made by Canon.</p>
        </div>      
      </div>

      <div class="item">
        <img src="<?php echo base_url('assets/images/7d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 7D</h3>
          <p>The EOS 7D features a Canon-designed 18.0 Megapixel APS-C size CMOS sensor.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="<?php echo base_url('assets/images/1d.jpg'); ?>" width="100%" height="100%">
        <div class="carousel-caption">
          <h3>Canon EOS 1D Mark II</h3>
          <p>Canon EOS 1D X Mark II DSLR Camera (Body Only) features 20.2MP Full-Frame CMOS Sensor, Dual DIGIC 6+ Image Processors.</p>
        </div>      
      </div>
    </div>


    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Team -->
<div id="team"></div>
<div class="container-fluid text-center">
  <br><br>
  <h3>THE TEAM</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Muhammad Hafidz Ilham</strong></p><br>
      <a href="#ket-jepitt" data-toggle="collapse">
      <img src="<?php echo base_url('assets/images/jepitt.png'); ?>" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    <div id="ket-jepitt" class="collapse">
        <p>Muhammad Hafidz Ilham</p>
        <p>1641720085</p>
        <p>Absent Number 20</p>
      </div>
    </div>
    <div class="col-sm-3">
      <p class="text-center"><strong>Muhammad Haidar Hammam</strong></p><br>
      <a href="#ket-hammam" data-toggle="collapse">
      <img src="<?php echo base_url('assets/images/hammam.png'); ?>" class="img-circle person" alt="Random Name" width="255" height="255">
    </a>
    <div id="ket-hammam" class="collapse">
        <p>Muhammad Haidar Hammam</p>
        <p>1641720129</p>
        <p>Absent Number 21</p>
      </div>
    </div>
  </div>
  <br><br>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<!-- Mesen -->
<div class="container-fluid text-center" style="background: #2d2d30;">
  <br><br>
<div id="price" class="row text-center">
  <?php
  //Columns must be a factor of 12 (1,2,3,4,6,12)
  $numOfCols = 4;
  $rowCount = 0;
  $bootstrapColWidth = 12 / $numOfCols;
  ?>
  <div class="row">
    <?php
    foreach ($list_barang as $key => $value){
    ?>  
        <div class="col-sm-<?php echo $bootstrapColWidth; ?>" >
            <div class="thumbnail">
                <h3><?php echo $value['nama_barang'] ?></h3>
                <hr>
                <p>Rp. <?php echo number_format($value['harga']) ?> / 24 jam</p>
                <p>Stok <strong><?php echo $value['stok'] ?></strong></p>

                <?php if($value['stok'] == 0) { ?>
                <a href="<?php echo base_url('index.php/home/sewa'); ?>" class="btn disabled">Sewa</a>
                <?php } else { ?>
                <a href="<?php echo base_url('index.php/home/sewa'); ?>" class="btn">Sewa</a>
                <?php } ?>

            </div>
        </div>
  <?php
    $rowCount++;
    if($rowCount % $numOfCols == 0) echo '</div><div class="row">';
  }
  ?>
</div>
</div>

</div>
<br>
</div>

</div>

<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Muhammad Hafidz Ilham | Muhammad Haidar Hammam</p> 
</footer>

<script>
$(document).ready(function(){
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  if (this.hash !== "") {

    event.preventDefault();
    var hash = this.hash;

    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      window.location.hash = hash;
      });
    }
  });
})

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>

</body>
</html>
