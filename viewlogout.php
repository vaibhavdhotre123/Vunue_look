<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>Contact Form</title>
    
     <?php include(APPPATH.'views/css.php');?>

     
      


    
   
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background-color: white;">
<div class="wrapper" style="color: black;">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center" style="background-color: #E0F4FF;">
  <img class="animation__shake" src="<?php echo base_url(); ?>dist/img/AdminLTELogo.png" alt="Load..." height="200" width="200">
  </div> -->

  <!-- Navbar -->
	<!-- Navbar will import here-->

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->

  
  <!--sidebar will import here-->

  <!-- Content Wrapper. Contains page content -->
  <!-- <div class="content-wrapper" style=" background-color: grey;"> -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0" style="font-family: cursive; font-weight: 800;text-align:left"></h3>
          </div><!-- /.col -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <!-- <section class="content"  style="color:grey;">
      <div class="container-fluid">
		 -->
		<body>
           



</body>


      <div class="row" >
         	 <div class="col-12">
          		<div class="card" style="border-radius: 1.3rem;">
              <div class="card-header" style="color: #6c757d;">
            						
                <h3 class="card-title" style="color: #102C57; font-weight: 600;">     </h3>
              </div>
            
              <head>

              <div id="main">
                <h3><i>Are you sure want to logout  ??<i></h3>
                <button onclick="confirmLogout()">Logout</button>
            </div>

<title>Logout Confirmation</title>
<script>
    function confirmLogout() {
        var logout = confirm("Are you sure you want to logout?");
        if (logout) {
           
            logoutUser();
        } else {
           
        }
    }

    function logoutUser() {
       
        alert("User logged out successfully!");
        
    }
</script>
</head>
<body>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Logout
          </div>
          <div class="card-body">
            <p>Are you sure you want to logout?</p>
            <form action="logout.php" method="POST">
              <button type="submit" class="btn btn-danger">Logout</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



</body>
<style>
    button{
        width: 120px;
        height: 40px;
        background-color: grey;
        border: 2px solid black;
        border-radius:3px;
        display:flex;
        align-items:center;
        justify-content:center;
        margin-left: 40%;
        box-shadow: 2px 3px 6px 2px;
    }
    button:hover{
        box-shadow: 2px 3px 6px 4px;
      }

      button:active{
        box-shadow: 4px 1px 4px 1px;
      }
    #main{
        width: 500px;
        height: 300px;
        /* border:3px solid black;
        border-radius:3px; */
        display:flex;
        align-items:center;
        justify-content:center;
        margin-left: 32%;
    }
</style>
</html>


               
                 

              
              <!-- /.card-body -->



           

               

              
             
            <!-- /.card -->
          	</div>
         </div>

      
		
		
		
		
					
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  


</div>
<!-- ./wrapper -->




<!-- Popup Model of bootsratp-->



<!-- Popup Model of bootsratp-->

<!-- script will import here-->
<?php include(APPPATH.'views/script.php');?>


</body>
</html>

