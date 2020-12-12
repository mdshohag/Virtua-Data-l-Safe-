<?php include('include/header.php'); 

	

?>
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
				<div class="panel-heading">
					<h3 class="panel-title">Blog Post</h3>
					<p class="panel-subtitle"></p>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<form class="form-horizontal" id="add_blog" method="post" enctype="multipart/form-data">
							
							<fieldset>
								<legend>Blog</legend>
								
								
								<div class="form-group">
									<label class="col-sm-4 col-xs-2 control-label" for="Bank_Name">  Blog Title: <span class="required">*</span> </label>
									<div class="col-sm-8 col-xs-10">
										<input name="blog_title" id="blog_title" class="form-control" title="Enter Blog Title" placeholder="Enter Blog Title" value="" type="text">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-2 control-label" for="Bank_Address"> Blog Details: <span class="required">*</span> </label>
									<div class="col-sm-8 col-xs-10">
										<textarea class="form-control" name="detail" title="Enter Blog Details" placeholder="Enter Blog Details"  rows="4"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-4 col-xs-2 control-label" for="Bank_Address"> Blog Image: <span class="required">*</span> </label>
									<div class="col-sm-8 col-xs-10">
										<input name="blog_image" id="blog_image" title="Enter Blog Title"type="file">
									</div>
								</div>
							</fieldset>
							
							  
							  <div class="form-group">
								<div class="col-sm-offset-5 col-sm-7">
								  <button type="submit" class="btn btn-success">Save</button>
								</div>
							  </div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
	</div>
<?php include('include/footer.php'); ?>
