<!DOCTYPE html>
 <html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Training Bootstrap</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>   
    
    <!-- Put Navigation bar here  -->
    
<?php include 'header.php';?>
    <!--Put Content website here -->

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
  </ol>
 
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/aaa.png" alt="...">
      <div class="carousel-caption">
       <h3>Gang di Kota Bandung</h3>
      </div>
    </div>
    <div class="item">
      <img src="images/sliding.png" alt="...">
      <div class="carousel-caption">
       <h3>Gang di Kota Bandung2</h3>
      </div>
    </div>
  </div>
 
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
  </a>
</div> <!-- Carousel -->
 <!-- Bagian Content -->

    <div class="container clearfix">
      <div class="row row-offcanvas row-offcanvas-left ">
        <!--Bagian Kiri-->
        <div class="col-xs-12 col-sm-3 side pull-left sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <p> Hello saya Riku dan saya saat ini akan lulus dari kuliah, salam kenal ya. Berikut contoh dari hasil design grafik yang saya buat :). </p>
          </div>
        </div>

        <!--Bagian Kanan-->
        <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
         <div class="panel-body">
            <p>Facebook : riku@mail.com</p>
            <p>Twiter : riku@mail.com</p>
            <p>Telpon : 022-232392</p>
            <p>Alamat : Jl.Harapan Bangas no.23, Bandung, Indonesia</p>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-2.2.5.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
 </html>