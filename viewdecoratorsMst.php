<!-- <!DOCTYPE html>
<html lang="en">
<head>
	css will import here -->
   
    <title>decorators Master</title>
    
     <?php include(APPPATH.'views/css.php');?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">


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
            <h3 class="m-0" style="color: blue;">decorators Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">decorators Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modeldecoratorsAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD decorators</button>
                <h3 class="card-title">decorators Manager</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th>decorators Id</th>
                    <th>decorators Name</th>
                    <th>decorators Type</th>
                    <th>decorators material</th>
                    <th>decorators status</th>
                    
                    <th>Edit/Delete/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $decorators_data= $this->method_call->showdecoratorsList();
													if($decorators_data!=null){
														$sr_no=1;			  
														foreach ($decorators_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
                    <td><?php echo $row->d_id; ?></td>
                    <td><?php echo $row->d_name; ?></td>
                    <td><?php echo $row->d_type; ?></td>
               
					
                    <td><?php echo $row->d_material; ?></td>
               
               <td><?php echo $row->d_status; ?></td>
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeldecoratorsEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->d_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeldecoratorsDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecord(<?php echo $row->d_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeldecoratorsView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->d_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
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
<div class="modal fade" id="modeldecoratorsAdd" tabindex="-1" role="dialog" aria-labelledby="modeldecoratorsAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD decorators
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/insertdecorators') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								
									 <div class="col-sm-4">
									<div class="form-group row">

								
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Select Decorators </label>
										<div class="col-sm-12">
										<select class="form-control" id="ward_id" name="ward_id" style="height: 30px;font-size: 12px;" required="required">
    											<option value="">Select Hospital</option>
    											<?php $getHospital= $this->method_call->showWardList();
    											if($getHospital!=null){
    											    foreach ($getHospital->result() as $row)  
                                                         {  ?>
			
														<option value="<?php echo $row->ward_id; ?>"><?php echo $row->ward_name;  ?></option>
						                        	<?php }
                                            				}
                                            					?>
					
    										</select>
										</div> 
									</div>
								</div> 
							 
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Id  </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_id " name="d_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Name </label>
										<div class="col-sm-12">
										
                                        <input type="Text" class="form-control"   id="d_name" name="d_name" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>




                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Type </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_type" name="d_type" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Material </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_material" name="d_material" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                               
								
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Status </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_status" name="d_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
								

							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create decorators</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>



<!---edit code is here--->

			<div class="modal fade" id="modeldecoratorsEdit" tabindex="-1" role="dialog" aria-labelledby="modeldecoratorsEdit"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">EDIT decorators
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updatedecorators') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Ward ID </label>
										<div class="col-sm-12">
											<select class="form-control" id="edit_ward_id" name="edit_ward_id" style="height: 30px;font-size: 12px;" required="required">
    											<option value="">Select Hospital</option>
    											<?php $getHospital= $this->method_call->showWardList();
    											if($getHospital!=null){
    											    foreach ($getHospital->result() as $row)  
                                                         {  ?>
			
														<option value="<?php echo $row->ward_id; ?>"><?php echo $row->ward_name;  ?></option>
						                        	<?php }
                                            				}
                                            					?>
					
    										</select>
										</div>
									</div>
								</div>
								
            
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Id  </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_id _no" name="d_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Name </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_name" name="d_name" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>




                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Type </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_type" name="d_type" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Material </label>
										<div class="col-sm-12">
									
                                        <input type="text" class="form-control"   id="d_material" name="d_material" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                               
								
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Status </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_status" name="d_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
								

							</div>
						</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Edit decorators</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div>

                
<!-- 
<!---delete code is here
			
			<div class="modal fade" id="modeldecoratorsDelete" tabindex="-1" role="dialog" aria-labelledby="modeldecoratorsDelete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are you sure to delete this decorators ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deletedecorators') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete reason</label>
										<div class="col-sm-12">
										    <input type="hidden" class="form-control"   id="remove_d_id" name="remove_d_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="d_disb_reason" name="d_disb_reason"  style="height: 30px;" required="required" >
										    <input type="hidden" class="form-control"   id="d_disb_by" name="d_disb_by" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>
								
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete decorators</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div> -->


<!--View Record-->

			<div class="modal fade" id="modeldecoratorsView" tabindex="-1" role="dialog" aria-labelledby="modeldecoratorsView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">View decorators
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
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Ward ID </label>
										<div class="col-sm-12">
											<select class="form-control" id="view_ward_id" name="view_ward_id" disabled="disabled" style="height: 30px;font-size: 12px;" required="required">
    											<option value="">Select Hospital</option>
    											<?php $getHospital= $this->method_call->showWardList();
    											if($getHospital!=null){
    											    foreach ($getHospital->result() as $row)  
                                                         {  ?>
			
														<option value="<?php echo $row->ward_id; ?>"><?php echo $row->ward_name;  ?></option>
						                        	<?php }
                                            				}
                                            					?>
					
    										</select>
											</div>
									</div> 
								</div> 
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Id  </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_id _no" name="d_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Name </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_name" name="d_name" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>




                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Type </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_type" name="d_type" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Material </label>
										<div class="col-sm-12">
										
                                        <input type="text" class="form-control"   id="d_material" name="d_material" value="100100" style="height: 30px;" required="required" >
                                        </div>
									</div>
								</div>

                                
                               
								
                                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">decorators Status </label>
										<div class="col-sm-12">
										  <input type="text" class="form-control"   id="d_status" name="d_status"  style="height: 30px;" required="required" >
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
function editDetails(d_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchdecoratorsByd_id')?>/" + d_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
				$('[name="d_id"]').val(data.d_id);
				// $('[name="edit_ward_id"]').val(data.ward_id);
				$('[name="edit_d_name"]').val(data.d_name);
				$('[name="edit_d_type"]').val(data.d_type);
				$('[name="edit_d_material"]').val(data.d_material);
				$('[name="edit_d_status"]').val(data.d_status);
				
				
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}


// function deleteRecord(d_id){
	
// 	$('[name="remove_d_id"]').val(d_id);
// }








function showDetails(d_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchdecoratorsByd_id')?>/" + d_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
                $('[name="d_id"]').val(data.d_id);
				// $('[name="edit_ward_id"]').val(data.ward_id);
				$('[name="view_d_name"]').val(data.d_name);
				$('[name="view_d_type"]').val(data.d_type);
				$('[name="view_d_material"]').val(data.d_material);
				$('[name="view_d_status"]').val(data.d_status);
				
								
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