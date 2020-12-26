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
					<label for="title">Activity</label>
					<input type="text" class="form-control" id="activity" placeholder="Enter Activity">
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="title">Date</label>
							<input type="date" class="form-control" id="activity-date">
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="title">Venue</label>
							<input type="text" class="form-control" id="activity-venue" placeholder="Enter Venue">
						</div>
					</div>
				</div>
				<div class="form-group" id="person-inputs">
					<label for="person">Persons Involved</label>
					<div class="input-group">
						<input type="text" class="form-control" id="person" placeholder="Enter Persons Involved" name="person[]">
                        <span class="input-group-append">
                            <button type="button" name="add" id="add-person-input" class="btn btn-success">Add Person</button>
                        </span>
                    </div>
				</div>
				<button type="submit" class="btn btn-primary">Save</button>
				<a href="<?=base_url();?>research/activities" class="btn btn-danger">Cancel</a>
			</form>
		</div>
	</div>
</div>
</div><!--end row-->