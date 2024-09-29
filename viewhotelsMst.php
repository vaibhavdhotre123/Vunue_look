<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>hotels Master</title>
    
     <?php include(APPPATH.'views/css.php');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader 
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?php echo base_url(); ?>dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>-->

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
            <h3 class="m-0" style="color: blue;">hotels Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">hotels Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modelhotelsAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD hotels</button>
                <h3 class="card-title">hotels Profile Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th>hotels ID</th>
                    <th>hotels Name </th>
                    <th>hotels Address</th>
                    <th>hotels capacity</th>
					<th>hotels budget</th>
					<th>hotels status</th>
				
					

                    <th>Edit/Del/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $hotels_data= $this->method_call->showhotelsList();
													if($hotels_data!=null){
														$sr_no=1;			  
														foreach ($hotels_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
					<td><?php echo $row->ho_id; ?></td>
                    <td><?php echo $row->ho_name; ?></td>
                    <td><?php echo $row->ho_address; ?></td>
                    <td><?php echo $row->ho_capacity; ?></td>
                    <td><?php echo $row->ho_budget; ?></td>
					
                    <td><?php echo $row->ho_status; ?></td>
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelhotelsEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->ho_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelhotelsDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecored(<?php echo $row->ho_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelhotelsView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->ho_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
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
<div class="modal fade" id="modelhotelsAdd" tabindex="-1" role="dialog" aria-labelledby="modelhotelsAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD hotels
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/inserthotels') ?>" >
						
						<div class="modal-body">
							<div class="row">


                   <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_id " name="ho_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div> 

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_name" name="ho_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Address </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_address" name="ho_address" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_capacity" name="ho_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_budget" name="ho_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


               
								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_status" name="ho_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create hotels</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
            </div>


<!-- 
//edit code is here -->
			<div class="modal fade" id="modelhotelsEdit" tabindex="-1" role="dialog" aria-labelledby="modelhotelsEdit"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">EDIT hotels
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updatehotels') ?>" >
						
						<div class="modal-body">
							<div class="row">
								

							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_id " name="ho_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_name" name="ho_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Address </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_address" name="ho_address" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_capacity" name="ho_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_budget" name="ho_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>



								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_status" name="ho_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
							<!-- </div>
						</div> -->
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Edit Hotels</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

        
<!-- <!-- 
//delete code is here 
            <div class="modal fade" id="modelhotelsDelete" tabindex="-1" role="dialog" aria-labelledby="modelhotelsDelete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are You Sure To Delete This hotels ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deletehotels') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete Reason</label>
										<div class="col-sm-12">
											<input type="hidden" class="form-control"   id="remove_ho_id" name="remove_ho_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="ho_delreason" name="ho_delreason"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete hotels</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div> -->

         <!--Code for view-->-
            <div class="modal fade" id="modelhotelsView" tabindex="-1" role="dialog" aria-labelledby="modelhotelsView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">VIEW hotels
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="#">
						
						<div class="modal-body">
							<div class="row">
                               
							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_id " name="ho_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_name" name="ho_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Address</label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_address" name="ho_address" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_capacity" name="ho_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="ho_budget" name="ho_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>



								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">hotels status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="ho_status" name="ho_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
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
function editDetails(ho_id){
   // alert(ho_id);
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchhotelsByho_id')?>/" + ho_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				$('[name="ho_id"]').val(data.ho_id);
				$('[name="edit_ho_name"]').val(data.ho_name);
				$('[name="edit_ho_address"]').val(data.ho_address);
				$('[name="edit_ho_capacity"]').val(data.ho_capacity);
				$('[name="edit_ho_budget"]').val(data.ho_budget);
				
				$('[name="edit_ho_status"]').val(data.ho_status);
					
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}

// function deleteRecored(ho_id){
//    // alert(ho_id);
// 	$('[name="remove_ho_id"]').val(ho_id);
	
// }


function showDetails(ho_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchhotelsByho_id')?>/" + ho_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
                $('[name="ho_id"]').val(data.ho_id);
				$('[name="view_ho_name"]').val(data.ho_name);
				$('[name="view_ho_address"]').val(data.ho_address);
				$('[name="view_ho_capacity"]').val(data.ho_capacity);
				$('[name="view_ho_budget"]').val(data.ho_budget);
				
				$('[name="view_ho_status"]').val(data.ho_status);
					
					

					
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