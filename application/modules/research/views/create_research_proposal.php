<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
<div class="col-12">
	<div class="card m-b-30 my-2">
		<div class="card-body">
			<div class="page-head">
				<h3 class="text-center"><?=$page_title;?></h3>
			</div>
			<h5 class="header-title pb-3 text-center">Fill out the forms</h5>           
			<form role="form" method="post" action="#" enctype="multipart/form-data" id="research_form">
				<div class="form-group" id="title_input">
					<label for="title">Title</label>
					<input type="text" class="form-control" name="title" placeholder="Enter Title">
        	<span class="help-block text-danger" id="title_error"></span>
				</div>
				<div class="form-group" id="proponent_inputs">
					<label for="proponent">Name of Proponent/s</label>
					<div class="input-group">
						<input type="text" class="form-control" name="proponent[]" placeholder="Enter Name of Proponent" name="proponent[]">
            <span class="input-group-append">
                <button type="button" name="proponent[]" id="add-proponents-input" class="btn btn-success">Add Proponent</button>
            </span>
          </div>
          <span class="help-block text-danger" id="proponent_error"></span>
				</div>
				<div class="form-group">
					<label for="college-affiliation">College Affiliation</label>
					<input type="text" class="form-control" name="college_affiliation" placeholder="Enter College Affiliation">
				</div>
				<div class="form-group">
					<label for="background-study">Background of the Study</label>
					<textarea class="form-control" name="background_study" placeholder="Enter Background of the Study" rows="5"></textarea>
				</div>
				<div class="form-group">
					<label for="significant">Significant of the Study</label>
					<input type="text" class="form-control" name="significant" placeholder="Enter Significant of the Study">
				</div>
				<div class="form-group">
					<label for="definition-of-terms">Definition of Terms</label>
					<input type="text" class="form-control" name="definition_terms" placeholder="Enter Definition of Terms">
				</div>
				<div class="form-group">
					<label for="methodology">Methodology</label>
					<input type="text" class="form-control" name="methodology" placeholder="Enter Methodology">
				</div>
				<div class="form-group">
					<label for="work-plan">Work Plan (Gantt Chart)</label>
					<input type="text" class="form-control" name="work_plan" placeholder="Enter Work Plan (Gantt Chart)">
				</div>
				<div class="form-group" id="item-budget-inputs">
					<label for="budget">Line Item Budget</label>
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Enter Budget Item" name="budgetitem[]">
						<input type="text" class="form-control" placeholder="Enter Budget Amount" name="budgetamount[]">
						<span class="input-group-append">
							<button type="button" name="addbudget" id="add-budget-input" class="btn btn-success">Add Item Budget</button>
						</span>
					</div>
				</div>
				<div class="form-group">
					<label for="credentials">Credentials of Key Personel / Staff Involved</label>
					<input type="text" class="form-control" name="credentials" placeholder="Enter Credentials of Key Personel / Staff Involved">
				</div>
				<div class="form-group">
					<label for="references">References</label>
					<input type="text" class="form-control" name="references" placeholder="Enter References">
        	<span class="help-block text-danger" id="references_error"></span>
				</div>
				<div class="form-group">
					<label for="prepared-by">Upload Soft Copy</label>
          <input type="file" id="input-file-now" class="dropify" name="research_soft_copy" />
				</div>
				<button type="submit" class="btn btn-primary btn-block" name="research_submit" id="btn_research_save">Submit Proposal</button>
			</form>
		</div>
	</div>
</div>
</div><!--end row-->