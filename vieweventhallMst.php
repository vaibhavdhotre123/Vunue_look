<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>eventhall Master</title>
    
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
            <h3 class="m-0" style="color: blue;">eventhall Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">eventhall Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modeleventhallAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD eventhall</button>
                <h3 class="card-title">eventhall Profile Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
                    <th>eventhall ID</th>
                    <th>eventhall name </th>
                    <th>eventhall location</th>
                    <th>eventhall capacity</th>
					<th>eventhall budget</th>
					<th>eventhall parking</th>
				
					<th>eventhall status</th>
					

                    <th>Edit/Del/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $eventhall_data= $this->method_call->showeventhallList();
													if($eventhall_data!=null){
														$sr_no=1;			  
														foreach ($eventhall_data->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
					<td><?php echo $row->h_id; ?></td>
                    <td><?php echo $row->h_name; ?></td>
                    <td><?php echo $row->h_location; ?></td>
                    <td><?php echo $row->h_capacity; ?></td>
                    <td><?php echo $row->h_budget; ?></td>
					<td><?php echo $row->h_parking; ?></td>
                  
                    <td><?php echo $row->h_status; ?></td>
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeleventhallEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->h_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <!-- <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeleventhallDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecored(<?php echo $row->h_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li> -->
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modeleventhallView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->h_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
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
<div class="modal fade" id="modeleventhallAdd" tabindex="-1" role="dialog" aria-labelledby="modeleventhallAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD eventhall
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/inserteventhall') ?>" >
						
						<div class="modal-body">
							<div class="row">



							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_id " name="h_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_name" name="h_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_location" name="h_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_capacity" name="h_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_budget" name="h_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall parking </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_parking" name="h_parking"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_status" name="h_status"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create eventhall</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
            </div>


<!-- 
//edit code is here -->
			<div class="modal fade" id="modeleventhallEdit" tabindex="-1" role="dialog" aria-labelledby="modeleventhallEdit"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">EDIT eventhall
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/updateeventhall') ?>" >
						
						<div class="modal-body">
							<div class="row">
								


							<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_id " name="h_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_name" name="h_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_location" name="h_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_capacity" name="h_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_budget" name="h_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall parking </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_parking" name="h_parking"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_status" name="h_status"  style="height: 30px;" required="required" >
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
            <div class="modal fade" id="modeleventhallDelete" tabindex="-1" role="dialog" aria-labelledby="modeleventhallDelete"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">Are You Sure To Delete This eventhall ?
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/deleteeventhall') ?>" >
						
						<div class="modal-body">
							<div class="row">
									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Delete Reason</label>
										<div class="col-sm-12">
											<input type="hidden" class="form-control"   id="remove_h_id" name="remove_h_id" style="height: 30px;" required="required" >
											<input type="text" class="form-control"   id="h_delreason" name="h_delreason"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Delete eventhall</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
						</form>
					</div>
				</div>
			</div> -->

         <!--Code for view-->-
            <div class="modal fade" id="modeleventhallView" tabindex="-1" role="dialog" aria-labelledby="modeleventhallView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">VIEW eventhall
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
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall ID </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_id " name="h_id "  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

									
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Name </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_name" name="h_name"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Location </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_location" name="h_location" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall Capcity </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_capacity" name="h_capacity"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>

								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall budget </label>
										<div class="col-sm-12">
										<input type="text" class="form-control" id="h_budget" name="h_budget" rows="3" required="required"></textarea>
										</div>
									</div>
								</div>


                <div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall parking </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_parking" name="h_parking"  style="height: 30px;" required="required" >
										</div>
									</div>
								</div>
          
								
							

								
								<div class="col-sm-4">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">eventhall status </label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="h_status" name="h_status"  style="height: 30px;" required="required" >
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
function editDetails(h_id){
   // alert(h_id);
	$.ajax({
			url : "<?php echo site_url('MasterController/fetcheventhallByh_id')?>/" + h_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				$('[name="h_id"]').val(data.h_id);
				$('[name="edit_h_name"]').val(data.h_name);
				$('[name="edit_h_type"]').val(data.h_type);
				$('[name="edit_h_location"]').val(data.h_no_of_capacity);
				$('[name="edit_h_capacity"]').val(data.h_type);
				$('[name="edit_h_budget"]').val(data.h_budget);
				$('[name="edit_h_parking"]').val(data.h_waiters);
			
				$('[name="edit_h_status"]').val(data.h_status);
					
			},
			error: function (jqXHR, textStatus, errorThrown)
			{
				alert('Error get data from ajax');
			}
		});

}

// function deleteRecored(h_id){
//    // alert(h_id);
// 	$('[name="remove_h_id"]').val(h_id);
	
// }


function showDetails(h_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetcheventhallByh_id')?>/" + h_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				
				$('[name="h_id"]').val(data.h_id);
				$('[name="view_h_name"]').val(data.h_name);
				$('[name="view_h_type"]').val(data.h_type);
				$('[name="view_h_capacity"]').val(data.h_no_of_capacity);
				$('[name="view_h_budget"]').val(data.h_budget);
				$('[name="view_h_waiters"]').val(data.h_waiters);
				$('[name="view_h_maintance_charges"]').val(data.h_maintance_charges);
				$('[name="view_h_status"]').val(data.h_status);
					

					
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