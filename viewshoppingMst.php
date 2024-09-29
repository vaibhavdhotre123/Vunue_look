<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>shopping Master</title>
    
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
            <h3 class="m-0" style="color: blue;">shopping Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">shopping Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modelshoppingAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD shopping</button>
                <h3 class="card-title">shopping Profile Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th>shopping ID</th>
                  
                    <th>shopping location</th>
                  
					<th>shopping budget</th>
                    <th>shopping service</th>
				
					<th>shopping status</th>
					

                    <th>Edit/Del/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $shopping_data= $this->method_call->showshoppingList();
													if($shopping_data!=null){
														$sr_no=1;			  
														foreach ($shopping_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
					<td><?php echo $row->sh_id; ?></td>
                   
                    <td><?php echo $row->sh_location; ?></td>
                    <td><?php echo $row->sh_budget; ?></td>
                    <td><?php echo $row->sh_services; ?></td>
				
                  
                    <td><?php echo $row->sh_status; ?></td>
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelshoppingEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->sh_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelshoppingDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecored(<?php echo $row->sh_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelshoppingView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->sh_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
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
<div class="modal fade" id="modelshoppingAdd" tabindex="-1" role="dialog" aria-labelledby="modelshoppingAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD shopping
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/insertshopping') ?>" >
						
						<div class="modal-body">
							<div class="row">



							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_id " name="sh_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
							

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="sh_location" name="sh_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping  Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_budget" name="sh_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Services </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_services" name="sh_services"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_status" name="sh_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create shopping</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
            </div>


<!-- 
//edit code is here -->
			<div class="modal fade" id="modelshoppingEdit" tabindex="-1" role="dialog" aria-labelledby="modelshoppingEdit"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">EDIT shopping
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updateshopping') ?>" >
						
						<div class="modal-body">
							<div class="row">
								


							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_id " name="sh_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
							

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="sh_location" name="sh_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping  Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_budget" name="sh_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Services </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_services" name="sh_services"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_status" name="sh_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Edit Event</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

        
<!-- <!-- 
//delete code is here 
            <div class="modal fade" id="modelshoppingDelete" tabindex="-1" role="dialog" aria-labelledby="modelshoppingDelete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are You Sure To Delete This shopping ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deleteshopping') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete Reason</label>
										<div class="col-sm-12">
											<input type="hidden" class="form-control"   id="remove_sh_id" name="remove_sh_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="sh_delreason" name="sh_delreason"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete shopping</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div> -->

         <!--Code for view-->-
            <div class="modal fade" id="modelshoppingView" tabindex="-1" role="dialog" aria-labelledby="modelshoppingView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">VIEW shopping
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
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_id " name="sh_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
							

                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="sh_location" name="sh_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping  Budget</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_budget" name="sh_budget"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping Services </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_services" name="sh_services"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">shopping status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="sh_status" name="sh_status"  style="height: 30px;" required="required" >
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
function editDetails(sh_id){
   // alert(sh_id);
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchshoppingBysh_id')?>/" + sh_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				$('[name="sh_id"]').val(data.sh_id);
				
				$('[name="edit_sh_location"]').val(data.sh_location);
				
				$('[name="edit_sh_budget"]').val(data.sh_budget);
                $('[name="edit_sh_services"]').val(data.sh_services);
				$('[name="edit_sh_status"]').val(data.sh_status);
					
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}


function showDetails(sh_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchshoppingBysh_id')?>/" + sh_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
                $('[name="sh_id"]').val(data.sh_id);
				
				$('[name="view_sh_location"]').val(data.sh_location);
				
				$('[name="view_sh_budget"]').val(data.sh_budget);
                $('[name="view_sh_services"]').val(data.sh_services);
				$('[name="view_sh_status"]').val(data.sh_status);
					

					
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