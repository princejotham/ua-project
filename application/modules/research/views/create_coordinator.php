<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
<div class="col-12">
	<div class="card m-b-30 my-2">
		<div class="card-body">
			<div class="page-head">
				<h2 class="text-center"><?=$page_title;?></h2>
			</div>
			<h5 class="header-title pb-3 text-center">Fill out the forms</h5>           
			<form role="form">
				<div class="form-group">
					<label for="title">Coordinator Name</label>
					<input type="text" class="form-control" id="coordinator" placeholder="Enter Coordinator Name">
				</div>
				<div class="form-group">
					<label for="title">College / Campus</label>
					<select class="form-control" id="college-campus">
						<option value="">Select College / Campus</option>
						<option>CBA</option>
						<option>CEA</option>
						<option>CTE</option>
						<option>CMS</option>
						<option>CAS</option>
					</select>
				</div>
				<div class="form-group">
					<label for="title">Contact Number</label>
					<input type="text" class="form-control" id="contact-number" placeholder="Enter Contact Number">
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<a href="<?=base_url();?>research/coordinators-list" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
</div>
</div><!--end row-->