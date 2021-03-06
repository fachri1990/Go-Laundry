<!doctype html>
<html lang="en">
  <head>
  	<title> Dashboard | Go Laundry </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <style>
        #sidebar{
          position: fixed;
          margin-right: 30px;
        }

    </style>
		
		<div class="wrapper d-flex align-items-stretch">
  <?php session_start(); ?>
			<nav id="sidebar" class="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
	  		<div class="img bg-wrap text-center py-4" style="background-image: url(img/awan.jpg);">
	  			<div class="user-logo">
	  				<h2 > GO <br> LAUNDRY </h2>
	  			</div>
	  		</div>
        <ul class="list-unstyled components mb-5">
          <?php 
            if($_SESSION['role'] == "admin"){
              echo "
          <li class='active'> 
            <a href='dashboard.php'><span class='fa fa-home mr-3'></span> Dashboard </a>
          </li>";
            }else if($_SESSION['role'] == "kasir"){
              echo "
          <li class='active'> 
            <a href='dashbord.php'><span class='fa fa-home mr-3'></span> Dashboard </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
              <a href='form_user.php'><span class='fa fa-download mr-3 notif'></span>  USER </a>
          </li>";
            }else if($_SESSION['role']== "owner"){
              echo "
          <li>
              <a href='form_user.php'><span class='fa fa-download mr-3 notif'></span>  USER </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
            <a href='form_paket.php'><span class='fa fa-gift mr-3'></span> DAFTAR PAKET </a>
          </li>";
            }else if($_SESSION['role']== "owner"){
              echo "
          <li>
            <a href='form_paket.php'><span class='fa fa-gift mr-3'></span> DAFTAR PAKET </a>
          </li>";
            }
          ?>
          <?php 
            if($_SESSION['role']== "admin"){
              echo "
          <li>
            <a href='form_outlet.php'><span class='fa fa-trophy mr-3'></span> LIST OUTLET </a>
          </li>";
              }else if($_SESSION['role']== "owner"){
                echo "
          <li>
            <a href='form_outlet.php'><span class='fa fa-trophy mr-3'></span> LIST OUTLET </a>
          </li>";
              }
          ?>
          <li>
            <a href='list_transaksi.php'><span class='fa fa-cog mr-3'></span> LIST TRANSAKSI </a>
          </li>
          <li>
            <a href='form_member.php'><span class='fa fa-support mr-3'></span> DAFTAR MEMBER </a>
          </li>
          <br>
          <li>
            <a href="login.php" class="btn btn-danger" style="color: white;"><span class="fa fa-sign-out mr-3"></span name="logOut"> LOGOUT </a>
          </li>
        
        </ul>
      </nav>



          <div class="container">
          <div class="card text-center">
            <div class="card-header">
            Selamat Datang <?php echo ($_SESSION['nama']); ?>
            </div>
                <div class="card-body">
                    <h5 class="card-title"> MULAI MEMBUAT ORDERAN </h5>
                    <p class="card-text"> Silahkan klik dibawah ini untuk langsung menambahkan member baru </p>
                    <a href="register_member.php" class="btn btn-primary"> Mulai </a>
                </div>
                </div>
            </div>

  </div>
</div>
</div>

  </div>
<style>
.container{
    width: 70%;
    margin-top: 5%;
    box-shadow: 0 5px 20px rgba(0,0,0,0.3);
    padding: 0.5cm;
    margin-left: 27%;
    }
</style>



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>