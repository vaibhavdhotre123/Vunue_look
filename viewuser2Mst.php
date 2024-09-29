<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>user2 Master</title>
    
     <?php include(APPPATH.'views/css.php');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
	<!-- Navbar will import here-->
    <?php include(APPPATH.'views/navbar.php');?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include(APPPATH.'views/sidebar.php');?>
  
  <!--sidebar will import here-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0" style="color: blue;">user2 Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">user2 Master</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		
		


      <div class="row">
         	 <div class="col-12">
          		<div class="card">
              		<div class="card-header" style="color: #6c757d;">
            				<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modeluser2Add"
							style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD user2</button>
                			<h3 class="card-title">user2 Profile Settings</h3>
              			</div>
              <!-- /.card-header -->
              		<div class="card-body">
                	<table id="example1" class="table table-bordered table-striped">
                  	<thead>
                  	<tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th> User-Id</th>
                    <th>Name</th>
                    <th>email</th>
                    <th>budget</th>
                    <th>Mobile No. </th>
                    <th>Status</th>
                    <th>Edit/Delete/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $user2_data= $this->method_call->showuser2List();
													if($user2_data!=null){
														$sr_no=1;			  
														foreach ($user2_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
                  
                    <td><?php echo $row->u2_id; ?></td>
                    <td><?php echo $row->u2_name; ?></td>
                    <td><?php echo $row->u2_email; ?></td>
                    <td><?php echo $row->u2_budget; ?></td>
                    <td><?php echo $row->u2_mob; ?></td>
                    <td><?php echo $row->u2_status; ?></td>
                   
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeluser2Edit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->u2_id; ?>)" title="Edit" ><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeluser2Delete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecord(<?php echo $row->u2_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeluser2View" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->u2_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
                                                </li>
                                            </ul>	
					</td>
                    
                  </tr>
				  <?php  $sr_no++; 
				  } 
				} ?>
                   
                 
                 	 </tbody>
                	</table>
              		</div>
              <!-- /.card-body -->
            	</div>
            <!-- /.card -->
          	</div>
         </div>

      
		
		
		
		
					
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php include(APPPATH.'views/footer.php');?>


</div>
<!-- ./wrapper -->




<!-- Popup Model of bootsratp-->

<!-- Add Item  Modal -->
<div class="modal fade" id="modeluser2Add" tabindex="-1" role="dialog" aria-labelledby="modeluser2Add"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD user2
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/insertuser2') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								


                            <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_id" name="u2_id"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 First Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_name" name="u2_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
								
               

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Last Name</label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="u2_lname" name="u2_lname" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Email</label>
										<div class="col-sm-12">
											<input type="date" class="form-control"   id="u2_email" name="u2_email"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_budget" name="u2_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 MOB</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_mob" name="u2_mob"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Status</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_status" name="u2_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
            </div>
            </div>


				
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Add user2</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>

			</div>

<!--EDIT HOSPITAL-->


		<div  class="modal fade" id="modeluser2Edit" tabindex="-1" role="dialog" aria-labelledby="modeluser2Edit" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Edit user2
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updateuser2') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								
							    <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_id" name="u2_id"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 First Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_name" name="u2_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
								
               

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Last Name</label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="u2_lname" name="u2_lname" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Email</label>
										<div class="col-sm-12">
											<input type="date" class="form-control"   id="u2_email" name="u2_email"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_budget" name="u2_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 MOB</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_mob" name="u2_mob"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Status</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_status" name="u2_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
            </div>
            </div>
            
							
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Edit user2 Info</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
			
          <!-- DELETE Record       -->

			
			<div class="modal fade" id="modeluser2Delete" tabindex="-1" role="dialog" aria-labelledby="modeluser2Delete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are you sure to delete this user2 ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deleteuser2') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete reason</label>
										<div class="col-sm-12">
										<input type="hidden" class="form-control"   id="remove_u2_id" name="remove_u2_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="u2_delreason" name="u2_delreason"  style="height: 30px;" required="required" >
										</div>
									</div>
							    </div>
						    </div>	
						</div>			
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete user2</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>

<!--View Record-->

<div class="modal fade" id="modeluser2View" tabindex="-1" role="dialog" aria-labelledby="modeluser2View"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">View user2
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="#" >
						
						<div class="modal-body">
							<div class="row">
						
						    <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_id" name="u2_id"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 First Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_name" name="u2_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
								
               

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Last Name</label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="u2_lname" name="u2_lname" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Email</label>
										<div class="col-sm-12">
											<input type="date" class="form-control"   id="u2_email" name="u2_email"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_budget" name="u2_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 MOB</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_mob" name="u2_mob"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">user2 Status</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="u2_status" name="u2_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
            </div>
            </div>
            
								
						<div class="modal-footer">
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

<!-- Popup Model of bootsratp-->

<!-- script will import here-->
<?php include(APPPATH.'views/script.php');?>
<script>
function editDetails(u2_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchuser2Byu2_id')?>/" + u2_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
				
				$('[name="u2_id"]').val(data.u2_id);
				$('[name="edit_u2_id"]').val(data.u2_id);
				
				$('[name="edit_u2_name"]').val(data.u2_name);
				$('[name="edit_u2_email"]').val(data.u2_email);
				$('[name="edit_u2_budget"]').val(data.u2_budget);
				$('[name="edit_u2_mob"]').val(data.u2_mob);
				$('[name="edit_u2_status"]').val(data.u2_status);
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}

function deleteRecord(u2_id){
	
	$('[name="u2_id"]').val(u2_id);
}

function showDetails(u2_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchuser2Byu2_id')?>/" + u2_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
					
                $('[name="u2_id"]').val(data.u2_id);
				$('[name="edit_u2_id"]').val(data.u2_id);
				
				$('[name="edit_u2_name"]').val(data.u2_name);
				$('[name="edit_u2_email"]').val(data.u2_email);
				$('[name="edit_u2_budget"]').val(data.u2_budget);
				$('[name="edit_u2_mob"]').val(data.u2_mob);
				$('[name="edit_u2_status"]').val(data.u2_status);	
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}
</script>

</body>
</html>