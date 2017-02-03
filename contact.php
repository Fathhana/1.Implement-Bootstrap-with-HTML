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
  <style>
      .coba {
          margin-top: 70px;
      }
    </style>
  </head>
  <body>   
    
    <!-- Put Navigation bar here  -->
     <!--bagian navigation-->
   <?php include 'header.php';?>
    <!--Put Content website here -->

 <!-- Bagian Content -->

    <div class="container coba clearfix">
      <div class="row row-offcanvas row-offcanvas-left ">
        <!--Bagian Kiri-->
        <div class="col-xs-12 col-sm-3 side pull-left sidebar-offcanvas" id="sidebar" role="navigation">
          <div class="list-group">
            <h1> Riku Kiranatama </h1>
            <img src="images/ava_22.jpg" class="img-circle" alt="user_ava" width="120px" height="120px" />
          </div>
        </div>

        <!--Bagian Kanan-->
        <div id="main-content" class="col-xs-12 col-sm-9 main pull-right">
         <div class="panel-body">
                <div class="form-group row">
                <label class="control-label col-sm-2" for="email">Email:</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="email" placeholder="Email Anda">
                </div>
              </div>
              <div class="form-group row">
                <label class="control-label col-sm-2" for="pwd">Messages:</label>
                <div class="col-sm-10">  
                <textarea class="form-control" rows="9" id="comment" placeholder="Messages Anda"></textarea>
                </div>
              </div>
              <div class="form-group row">        
                <button type="submit" class="btn btn-default">Submit</button>
              </div>
            </form>
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