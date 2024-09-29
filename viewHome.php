<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>Home-Page</title>
    
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
    <?php include(APPPATH.'views/navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include(APPPATH.'views/sidebar.php');?>
  
  <!--sidebar will import here-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style=" background-image: ;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-">
          <div class="col-sm-0">
            <h3 class="m-0" style="color: blue; font-family: cursive; font-weight: 800;text-align:left ">Vunue_Look</h3><br>
            <h3 class="m-1" style="color: blue; font-family: cursive; font-weight: 800;text-align:left margin: left 30px; ">Best Traditional Vivah Style..</h3>
          </div><!-- /.col -->



          <style>
            .col-sm-6,.m-1{
              display:flex;
              margin-left: 320px;
              align-items:center;
              justify-content:space-between;


            }

          </style>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content"  style="color:purple;">
      <div class="container-fluid">
		
		
      <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
    rel="stylesheet"
/>

      <div class="row" >
         	 <div class="col-12">
          		<div class="card" style="border-radius: 1.3rem;">
              <div class="card-header" style="color: #6c757d;">
            						
                <h3 class="card-title" style="color: black; font-weight: 600;">We Believe in Satisfaction</h3>
              </div>




              
  


              
            <div class="card-body">


<div class="area">
    <a href="viewHome">
      <img src="bell.jpg" alt="" >
      <span style="color: blue; font-weight: 600;"> HOME </span> 
    </a>
  </div>

<div class="area">
  <a href="viewcatersMst">
    <img src="<?php echo base_url(); ?>dist/img/list.png" alt="" >
    <span style="color: blue; font-weight: 600;"> CATERS</span> 
   </a>
       </div>

  <!-- <div class="area">
    <a href="viewdecoratorsMst">
      <img src="<?php echo base_url(); ?>dist/img/counter.jpg" alt=""><span style="color: blue; font-weight: 600;">DECORATORS</span>
    </a>
  </div> -->
 

  <div class="area">
    <a href="vieweventhallMst">
      <img src="<?php echo base_url(); ?>dist/img/.jpg" alt=""><span style="color: blue; font-weight: 600;">Event</span>
    </a>
  </div>

  <div class="area">
    <a href="viewhotelsMst">
      <img src="<?php echo base_url(); ?>dist/img/.jpg" alt=""><span style="color: blue; font-weight: 600;">Hotels</span>
    </a>
  </div>

  
  <div class="area">
    <a href="viewuser1Mst">
      <img src="<?php echo base_url(); ?>dist/img/.jpg" alt=""><span style="color: blue; font-weight: 600;">User-I</span>
    </a>
  </div>

  <div class="area">
    <a href="viewuser2Mst">
      <img src="<?php echo base_url(); ?>dist/img/.jpg" alt=""><span style="color: blue; font-weight: 600;">User-II</span>
    </a>
  </div>




<!-- /.card -->
</div>



<style>






.card-body{
display: flex;
flex: wrap;

background-image: url("C:\wamp64\www\shaddi\dist\img");

}

.area{
width:40%;
height: 15rem;
border:1px solid black;
border-radius: 35px;
display: flex;
justify-content: center;
align-items: center;
/* border-radius: 1px; */
margin: 1rem 1rem;
box-shadow: 2px 3px 6px 2px;
background-color:;
}

.area:hover{
box-shadow: 2px 3px 10px 4px;
}

.area:active{
box-shadow: 1px 1px 4px 1px;
}


.area a{
display: flex;
flex-direction: column;
align-items: center;
color: black;
}


@media only screen and (max-width: 800px) {
.card-body{
flex-direction: column;
align-items: center;
}

.area {
width: 220px;
height: 40px;
}
}
h3{
color:dark;
font-weight:400;
text-align:center;
Color:black;
}
.class1,.class2{
width: 430px;
height: 220px;
border: 2px solid black;
border-radius:23px;
background-color:;
color: black;
font-weight:300;
color:black;
margin-bottom: 4px;
}
.class1,ul{
/* margin-left: 20px; */
/* margin-top: 6px; */
}
#main{
display: flex;
align-items:center;
justify-content:space-between;
}
</style>











	<title>GeeksfoGeeks</title>
	<style>
		#frame {
			margin: 0 auto;
			width:600px;
			max-width: 100%;
			text-align: center;
		}

		#frame input[type=radio] {
			display: none;
		}

		#frame label {
			cursor: pointer;
			text-decoration: none;
		}

		#slides {
			padding: 10px;
			border: 5px solid #0F0;
			background: #00F;
			position: relative;
			z-index: 1;
		}

		#overflow {
			width: 100%;
			overflow: hidden;
		}

		#frame1:checked~#slides .inner {
			margin-left: 0;
		}

		#frame2:checked~#slides .inner {
			margin-left: -100%;
		}

		#frame3:checked~#slides .inner {
			margin-left: -200%;
		}

		#frame4:checked~#slides .inner {
			margin-left: -300%;
		}

		#slides .inner {
			transition: margin-left 800ms cubic-bezier(0.770, 0.000, 0.175, 1.000);
			width: 400%;
			line-height: 0;
			height: 120px;
		}

		#slides .frame {
			width: 25%;
			float: left;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100%;
			color: #FFF;
		}

		#slides .frame_1 {
			background: #90C;
		}

		#slides .frame_2 {
			background: #F90;
		}

		#slides .frame_3 {
			background: #606;
		}

		#slides .frame_4 {
			background: #C00;
		}

		#controls {
			margin: -180px 0 0 0;
			width: 100%;
			height: 50px;
			z-index: 3;
			position: relative;
		}

		#controls label {
			transition: opacity 0.2s ease-out;
			display: none;
			width: 50px;
			height: 50px;
			opacity: .4;
		}

		#controls label:hover {
			opacity: 1;
		}

		#frame1:checked~#controls label:nth-child(2),
		#frame2:checked~#controls label:nth-child(3),
		#frame3:checked~#controls label:nth-child(4),
		#frame4:checked~#controls label:nth-child(1) {
			background:
				url(https://image.flaticon.com/icons/svg/130/130884.svg) no-repeat;
			float: right;
			margin: 0 -50px 0 0;
			display: block;
		}

		#frame1:checked~#controls label:nth-last-child(2),
		#frame2:checked~#controls label:nth-last-child(3),
		#frame3:checked~#controls label:nth-last-child(4),
		#frame4:checked~#controls label:nth-last-child(1) {
			background:
				url(https://image.flaticon.com/icons/svg/130/130882.svg) no-repeat;
			float: left;
			margin: 0 0 0 -50px;
			display: block;
		}

		#bullets {
			margin: 150px 0 0;
			text-align: center;
		}

		#bullets label {
			display: inline-block;
			width: 10px;
			height: 10px;
			border-radius: 100%;
			background: #ccc;
			margin: 0 10px;
		}

		#frame1:checked~#bullets label:nth-child(1),
		#frame2:checked~#bullets label:nth-child(2),
		#frame3:checked~#bullets label:nth-child(3),
		#frame4:checked~#bullets label:nth-child(4) {
			background: #444;
		}

		@media screen and (max-width: 900px) {

			#frame1:checked~#controls label:nth-child(2),
			#frame2:checked~#controls label:nth-child(3),
			#frame3:checked~#controls label:nth-child(4),
			#frame4:checked~#controls label:nth-child(1),
			#frame1:checked~#controls label:nth-last-child(2),
			#frame2:checked~#controls label:nth-last-child(3),
			#frame3:checked~#controls label:nth-last-child(4),
			#frame4:checked~#controls label:nth-last-child(1) {
				margin: 0;
			}

			#slides {
				max-width: calc(100% - 140px);
				margin: 0 auto;
			}
		}
	</style>
</head>

<body>
	<div id="frame">
        
		<input type="radio" name="frame" id="frame1" checked />
		<input type="radio" name="frame" id="frame2" />
		<input type="radio" name="frame" id="frame3" />
		<input type="radio" name="frame" id="frame4" />
		<div id="slides">
			<div id="overflow">
				<div class="inner">
					<div class="frame frame_1">
						<div class="frame-content">
							<h2>Best in the City<br>
            <i>Exclusive offer for the New Customer </h2>
                            <img src="jeevansathi.png" alt="">

						</div>
					</div>
					<div class="frame frame_2">
						<div class="frame-content">
							<h2>Get Best Quality at Low Cost !!<br><i>
                Charge According to Services..
              </h2>
                            <img src="codingninjas.png" alt="">
						</div>
					</div>
					<div class="frame frame_3">
						<div class="frame-content">
							<h2>Best Discount & Vouchers<br><i>
                Discount on Diwali
              </h2>
                            <img src="shiksha.png" alt="">
						</div>
					</div>
					<div class="frame frame_4">
						<div class="frame-content">
							<h2>Traditional & Exclusive Mode </h2>
                            <img src="jeevansathi.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="controls">
			<label for="frame1"></label>
			<label for="frame2"></label>
			<label for="frame3"></label>
			<label for="frame4"></label>
		</div>
		<div id="bullets">
			<label for="frame1"></label>
			<label for="frame2"></label>
			<label for="frame3"></label>
			<label for="frame4"></label>
		</div>
	</div>
</body>

</html>

      
		
		
		
		
					
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



</div>
<!-- ./wrapper -->



               <main id="main" class="main">

<div class="pagetitle">
  <h1>#Vunue_Look Officials-Group</h1>
  <nav>
    <ol class="breadcrumb">
      <!-- <li class="breadcrumb-item"><a href="index.html"></a></li>
      <li class="breadcrumb-item active">Dashboard</li>
      -->
    </ol>
  </nav>
</div>
<!-- We Made it -->
<!-- Hormones !! -->


<section class="section dashboard">
  <div class="row">


  
        <!--right side columns -->
        <div class="col-lg-10">
      <div class="col">


    <!-- Left side columns -->
    <div class="col-lg-12">
      <div class="row">



    


        <!-- Sales Card -->
        <div class="col-xxl-8 col-md-4">
          <div class="card info-card sales-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Sales <span>| Today</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-cart"></i>
                </div>
                <div class="ps-3">
                  <h6>145</h6>
                  <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">Increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Sales Card -->

        <!-- Revenue Card -->
        <div class="col-xxl-4 col-md-4">
          <div class="card info-card revenue-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Revenue <span>| This Month</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-currency-dollar"></i>
                </div>
                <div class="ps-3">
                  <h6>$3,264</h6>
                  <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                </div>
              </div>
            </div>

          </div>
        </div><!-- End Revenue Card -->

        <!-- Customers Card -->
        <div class="col-xxl-10 col-xl-4">

          <div class="card info-card customers-card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Customers <span>| This Year</span></h5>

              <div class="d-flex align-items-center">
                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                  <i class="bi bi-people"></i>
                </div>
                <div class="ps-3">
                  <h6>1244</h6>
                  <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                </div>
              </div>

            </div>
          </div>

        </div><!-- End Customers Card -->

        <!-- Reports -->
        <div class="col-12">
          <div class="card">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Reports <span>/Today</span></h5>

              <!-- Line Chart -->
              <div id="reportsChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#reportsChart"), {
                    series: [{
                      name: 'Sales',
                      data: [31, 40, 28, 51, 42, 82, 56],
                    }, {
                      name: 'Revenue',
                      data: [11, 32, 45, 32, 34, 52, 41]
                    }, {
                      name: 'Customers',
                      data: [15, 11, 32, 18, 9, 24, 11]
                    }],
                    chart: {
                      height: 350,
                      type: 'area',
                      toolbar: {
                        show: false
                      },
                    },
                    markers: {
                      size: 4
                    },
                    colors: ['#4154f1', '#2eca6a', '#ff771d'],
                    fill: {
                      type: "gradient",
                      gradient: {
                        shadeIntensity: 1,
                        opacityFrom: 0.3,
                        opacityTo: 0.4,
                        stops: [0, 90, 100]
                      }
                    },
                    dataLabels: {
                      enabled: false
                    },
                    stroke: {
                      curve: 'smooth',
                      width: 2
                    },
                    xaxis: {
                      type: 'datetime',
                      categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                    },
                    tooltip: {
                      x: {
                        format: 'dd/MM/yy HH:mm'
                      },
                    }
                  }).render();
                });
              </script>
              <!-- End Line Chart -->

            </div>

          </div>
        </div><!-- End Reports -->

        <!-- Recent Sales -->
        <div class="col-12">
          <div class="card recent-sales overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Sales <span>| Today</span></h5>

              <table class="table table-borderless datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row"><a href="#">#2457</a></th>
                    <td>Chirag Borse</td>
                    <td><a href="#" class="text-primary">AT High-Court</a></td>
                    <td>$64</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2147</a></th>
                    <td>Pankaj </td>
                    <td><a href="#" class="text-primary">Rajasthan-Bikaner</a></td>
                    <td>$47</td>
                    <td><span class="badge bg-warning">Pending</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2049</a></th>
                    <td>Ashish Lahne</td>
                    <td><a href="#" class="text-primary">London-Group</a></td>
                    <td>$147</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Ramesh Patil</td>
                    <td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td>
                    <td>$67</td>
                    <td><span class="badge bg-danger">Rejected</span></td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#">#2644</a></th>
                    <td>Ryan Bhai</td>
                    <td><a href="#" class="text-primary">Sunt similique distinctio</a></td>
                    <td>$165</td>
                    <td><span class="badge bg-success">Approved</span></td>
                  </tr>
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Recent Sales -->

        <!-- Top Selling -->
        <div class="col-12">
          <div class="card top-selling overflow-auto">

            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Today's<span>| Issues</span></h5>

              <table class="table table-borderless">
                <thead>
                  <tr>
                    <th scope="col">Preview</th>
                    <th scope="col">Address</th>
                    <th scope="col">Price</th>
                    <th scope="col">Sold</th>
                    <th scope="col">Revenue</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                 
                    <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                
                    <td><a href="#" class="text-primary fw-bold">N-6 Work Completes</a></td>
                    <td>$64</td>
                    <td class="fw-bold">124</td>
                    <td>$5,828</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">Some Issues with 3-rd Party </a></td>
                    <td>$46</td>
                    <td class="fw-bold">98</td>
                    <td>$4,508</td>
                  </tr>
                  <tr>
                    <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                    <td><a href="#" class="text-primary fw-bold">EMI - Option</a></td>
                    <td>$59</td>
                    <td class="fw-bold">74</td>
                    <td>$4,366</td>
                  </tr>
                
                </tbody>
              </table>

            </div>

          </div>
        </div><!-- End Top Selling -->

      </div>
    </div><!-- End Left side columns -->

    
    </div>
    </div><!-- End Left side columns -->

    <!-- Right side columns -->


  </div>
</section>

</main><!-- End #main -->

               
               
</div>
<div>
  



                  




         




<!-- Popup Model of bootsratp-->



<!-- Popup Model of bootsratp-->

<!-- script will import here-->
<?php include(APPPATH.'views/script.php');?>
  
<?php include(APPPATH.'views/footer.php');?>

</body>
</html>
