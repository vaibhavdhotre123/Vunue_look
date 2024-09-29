<!DOCTYPE html>
<html lang="en">
<head>
	<!--css will import here -->
   
    <title>Payment Master</title>
    
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
            <h3 class="m-0">Payment Master</h3>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment Master</li>
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
            						<button type="button" class="btn btn-sm align-left float-sm-right" data-toggle="modal" data-target="#modelPayAdd"
									style="background-color: #6c757d;color: white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);">ADD payment</button>
                <h3 class="card-title">Payment Profile Settings</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr style="background-color: #6c757d;color: white; font-size: 12px;">
                    <th>Sr.No.</th>
					<th>Pay id</th>
                    <th>Pay name</th>
                    <th>Pay mode</th>
                    <th>Pay insurance</th>
                    <th>RegDate-Time</th>
                    <th>Pay  by</th>
					<th>Pay status</th>
                   
                    <th>Edit/Delete/View</th>
                    
                  </tr>
                  </thead>
                  <tbody style="font-size: 12px;">
				  <?php $showPayList= $this->method_call->showPayList();
													if($showPayList!=null){
														$sr_no=1;			  
														foreach ($showPayList->result() as $row)  
														{ 
											?>


                  <tr>
                    <td><?php echo $sr_no; ?></td>
                    <td><?php echo $row->py_name; ?></td>
                   
                    <td><?php echo $row->py_mode; ?></td>
                    <td><?php echo $row->py_insurance; ?></td>
                    <td><?php echo $row->py_regdate ." - ".$row->py_regtime; ?></td>
                    <td><?php echo $row->py_by; ?></td>
					<td><?php echo $row->py_status; ?></td>
                   
                    <td>
					<ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelPayEdit" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="editDetails(<?php echo $row->py_id; ?>)" title="Edit"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelPayDelete"  style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="deleteRecored(<?php echo $row->py_id; ?>)" title="Delete"><i class="fa fa-trash"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button class="btn btn-success btn-sm rounded-0" data-toggle="modal" data-target="#modelPayView" style="background-color: #6c757d;" type="button" data-toggle="tooltip" data-placement="top" onclick="showDetails(<?php echo $row->py_id; ?>)" title="View"><i class="fa fa-eye"></i></button>
                                                </li>
                                            </ul>	
					</td>
                    
                  </tr>
				  <?php  $sr_no++; 
				  } echo "no data found";
				
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
<div class="modal fade" id="modelPayAdd" tabindex="-1" role="dialog" aria-labelledby="modelPayAdd"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">ADD Payment
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="<?php echo site_url('MasterController/insertPay') ?>" >
						
						<div class="modal-body">
							<div class="row">
								
                            <div class="col-sm-6">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Doctor Id	</label>
										<select class="form-control" id="doc_id" name="doc_id" style="height: 30px;font-size: 12px;" required="required">
    											<option value="">Select Doctor</option>
    											<?php $getdoc= $this->method_call->getDoctor();
    											if($getdoc!=null){
    											    foreach ($getdoc->result() as $row)  
                                                         {  ?>
			
														<option value="<?php echo $row->doc_id; ?>"><?php echo $row->doc_fname;  ?></option>
						                        	<?php }
                                            				}
                                            					?>
					
    										</select>
									</div>
								</div>
									
								<div class="col-sm-6">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">payment name</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="py_name" name="py_name"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Mode</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_mode" name="py_mode"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Insurance</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_insurance" name="py_insurance"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment BY</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_by" name="py_by"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
            

                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Status</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_status" name="py_status"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
            
								
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">When?</label>
                                        <div class="col-sm-4" style="display: flex;">
                                            <p>Processing</p>
                                            <input type="radio" class="form-control"   id="py_by" name="py_name" value="Before Meal"  style="height: 40px;" required="required" >
                                        </div>
                                        <div class="col-sm-4" style="display: flex;">
                                            <p>Done !!</p>
                                            <input type="radio" class="form-control"   id="py_by" name="py_name" value="After Meal"  style="height: 40px;" required="required" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">payment name</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="py_name" name="py_name"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Mode</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_mode" name="py_mode"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Insurance</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_insurance" name="py_insurance"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment BY</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_by" name="py_by"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
            

                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Status</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_status" name="py_status"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
            
						<div class="modal-footer">
							<button type="submit" class="btn"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Create Payment</button>
							<button class="btn" data-dismiss="modal"
								style="background-color:#6c757d; font-size: 12px;color:white;box-shadow: 0 0 3px 1px rgba(0,0,0,.35);text-transform: uppercase;">Close</button>
						</div>
					</form>
					</div>
				</div>
			</div>


<!---view code is here-->
			<div class="modal fade" id="modelDoctorView" tabindex="-1" role="dialog" aria-labelledby="modelDoctorView"
				aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header" style="background-color:#6c757d;">
							<h5 class="modal-title" style="color:white; text-transform: uppercase;">View Payment
							</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<form method="post" role="form" enctype="multipart/form-data" action="#">
						
						<div class="modal-body">
							<div class="row">


                            <div class="col-sm-6">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Doctor ID</label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="view_doc_id" name="view_doc_id"  style="height: 40px;" readonly>
										</div>
									</div>
								</div>
									
                            <!-- <div class="col-sm-6">
									<div class="form-group row">
										<label class="col-sm-12 pull-left control-label" style="color: #6c757d;"></label>
										<div class="col-sm-12">
											<input type="text" class="form-control"   id="view_pp_health_issue" name="view_pp_health_issue"  style="height: 40px;" readonly>
										</div>
									</div>
								</div> -->
                                
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Patient Name</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_name" name="py_name"  style="height: 40px;" readonly>
										</div>
									</div>
								</div>
                                
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Insurance</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_insurance" name="py_insurance"  style="height: 40px;" readonly>
										</div>
									</div>
								</div>
            
								
                                <div class="col-sm-6">
                                    <div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">When?</label>
                                        <div class="col-sm-4" style="display: flex;">
                                        <input type="text" class="form-control"   id="py_by" name="py_by"  style="height: 40px;" readonly>
                                        </div>
                                    </div>
                                </div>

                              
                                </div>
                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment BY</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_by" name="py_by"  style="height: 40px;" required="required" >
										</div>
									</div>
								</div>
            

                                <div class="col-sm-6">
									<div class="form-group row">
                                        <label class="col-sm-12 pull-left control-label" style="color: #6c757d;">Payment Status</label>
										<div class="col-sm-12">
                                            <input type="text" class="form-control"   id="py_status" name="py_status"  style="height: 40px;" required="required" >
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


function showDetails(py_id){
	$.ajax({
			url : "<?php echo site_url('MasterController/fetchPayBypy_id')?>/" + py_id,
			type: "GET",
			dataType: "JSON",
			success: function(data)
			{   
				$('[name="view_doc_id"]').val(data.doc_id);
				$('[name="view_py_name"]').val(data.py_name);
                $('[name="view_py_mode"]').val(data.py_mode);
                $('[name="view_py_insurance"]').val(data.py_insurance);
                $('[name="view_py_regdate"]').val(data.py_regdate);
                $('[name="view_py_regtime"]').val(data.py_regtime);
                $('[name="view_py_by"]').val(data.py_by);
                $('[name="view_py_status"]').val(data.py_status);
               
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
