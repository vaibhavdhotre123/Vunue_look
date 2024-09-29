<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>caters Master</title>
    
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
            <h3 class="m-0" style="color: blue;">caters Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">caters Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modelcatersAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD caters</button>
                <h3 class="card-title">caters Profile Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th>caters ID</th>
                    <th>caters Name </th>
                    <th>caters Type</th>
                    <th>caters capacity</th>
					<th>caters budget</th>
					<th>caters waiters</th>
					<th>caters maintance charges</th>
					<th>caters status</th>
					

                    <th>Edit/Del/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $caters_data= $this->method_call->showcatersList();
													if($caters_data!=null){
														$sr_no=1;			  
														foreach ($caters_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
					<td><?php echo $row->c_id; ?></td>
                    <td><?php echo $row->c_name; ?></td>
                    <td><?php echo $row->c_type; ?></td>
                    <td><?php echo $row->c_capacity; ?></td>
                    <td><?php echo $row->c_budget; ?></td>
					<td><?php echo $row->c_waiters; ?></td>
                    <td><?php echo $row->c_maintance_charges; ?></td>
                    <td><?php echo $row->c_status; ?></td>
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelcatersEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->c_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelcatersDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecored(<?php echo $row->c_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelcatersView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->c_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
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
<div class="modal fade" id="modelcatersAdd" tabindex="-1" role="dialog" aria-labelledby="modelcatersAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD caters
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/insertcaters') ?>" >
						
						<div class="modal-body">
							<div class="row">



							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_id " name="c_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_name" name="c_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Type </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_type" name="c_type" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_capacity" name="c_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_budget" name="c_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters waiters </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_waiters" name="c_waiters"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters maintance charges </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_maintance_charges" name="c_maintance_charges"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_status" name="c_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create caters</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
            </div>


<!-- 
//edit code is here -->
			<div class="modal fade" id="modelcatersEdit" tabindex="-1" role="dialog" aria-labelledby="modelcatersEdit"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">EDIT caters
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updatecaters') ?>" >
						
						<div class="modal-body">
							<div class="row">
								

							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_id " name="c_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_name" name="c_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Type </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_type" name="c_type" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_capacity" name="c_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_budget" name="c_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters waiters </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_waiters" name="c_waiters"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters maintance charges </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_maintance_charges" name="c_maintance_charges"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_status" name="c_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
							<!-- </div>
						</div> -->
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Edit Caters</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

        
<!-- <!-- 
//delete code is here 
            <div class="modal fade" id="modelcatersDelete" tabindex="-1" role="dialog" aria-labelledby="modelcatersDelete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are You Sure To Delete This caters ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deletecaters') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete Reason</label>
										<div class="col-sm-12">
											<input type="hidden" class="form-control"   id="remove_c_id" name="remove_c_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="c_delreason" name="c_delreason"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete caters</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div> -->

         <!--Code for view-->-
            <div class="modal fade" id="modelcatersView" tabindex="-1" role="dialog" aria-labelledby="modelcatersView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">VIEW caters
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
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_id " name="c_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_name" name="c_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Type </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_type" name="c_type" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_capacity" name="c_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="c_budget" name="c_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters waiters </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_waiters" name="c_waiters"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters maintance charges </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_maintance_charges" name="c_maintance_charges"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">caters status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="c_status" name="c_status"  style="height: 30px;" required="required" >
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
function editDetails(c_id){
   // alert(c_id);
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchcatersByc_id')?>/" + c_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				$('[name="c_id"]').val(data.c_id);
				$('[name="edit_c_name"]').val(data.c_name);
				$('[name="edit_c_type"]').val(data.c_type);
				$('[name="edit_c_capacity"]').val(data.c_no_of_capacity);
				$('[name="edit_c_budget"]').val(data.c_budget);
				$('[name="edit_c_waiters"]').val(data.c_waiters);
				$('[name="edit_c_maintance_charges"]').val(data.c_maintance_charges);
				$('[name="edit_c_status"]').val(data.c_status);
					
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}

// function deleteRecored(c_id){
//    // alert(c_id);
// 	$('[name="remove_c_id"]').val(c_id);
	
// }


function showDetails(c_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchcatersByc_id')?>/" + c_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
				$('[name="c_id"]').val(data.c_id);
				$('[name="view_c_name"]').val(data.c_name);
				$('[name="view_c_type"]').val(data.c_type);
				$('[name="view_c_capacity"]').val(data.c_no_of_capacity);
				$('[name="view_c_budget"]').val(data.c_budget);
				$('[name="view_c_waiters"]').val(data.c_waiters);
				$('[name="view_c_maintance_charges"]').val(data.c_maintance_charges);
				$('[name="view_c_status"]').val(data.c_status);
					

					
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