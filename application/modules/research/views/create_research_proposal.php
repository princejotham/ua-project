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
					<label for="title">Title</label>
					<input type="text" class="form-control" id="title" placeholder="Enter Title">
				</div>
				<div class="form-group" id="proponent-inputs">
					<label for="proponent">Name of Proponent/s</label>
					<div class="input-group">
						<input type="text" class="form-control" id="proponent" placeholder="Enter Name of Proponent" name="proponent[]">
                        <span class="input-group-append">
                            <button type="button" name="add" id="add-proponents-input" class="btn btn-success">Add Proponent</button>
                        </span>
                    </div>
				</div>
				<div class="form-group">
					<label for="college-affiliation">College Affiliation</label>
					<input type="text" class="form-control" id="college-affiliation" placeholder="Enter College Affiliation">
				</div>
				<div class="form-group">
					<label for="background-study">Background of the Study</label>
					<textarea class="form-control" id="background-study" placeholder="Enter Background of the Study"></textarea>
				</div>
				<div class="form-group">
					<label for="significant">Significant of the Study</label>
					<input type="text" class="form-control" id="significant" placeholder="Enter Significant of the Study">
				</div>
				<div class="form-group">
					<label for="definition-of-terms">Definition of Terms</label>
					<input type="text" class="form-control" id="definition-of-terms" placeholder="Enter Definition of Terms">
				</div>
				<div class="form-group">
					<label for="methodology">Methodology</label>
					<input type="text" class="form-control" id="methodology" placeholder="Enter Methodology">
				</div>
				<div class="form-group">
					<label for="work-plan">Work Plan (Gantt Chart)</label>
					<input type="text" class="form-control" id="work-plan" placeholder="Enter Work Plan (Gantt Chart)">
				</div>
				<div class="form-group">
					<label for="budget">Line Item Budget</label>
					<input type="text" class="form-control" id="budget" placeholder="Enter Budget">
				</div>
				<div class="form-group" id="item-budget-inputs">
					<label for="budget">Line Item Budget</label>
					<div class="input-group">
						<input type="text" class="form-control" id="budget-item" placeholder="Enter Budget Item" name="budgetitem[]">
						<input type="text" class="form-control" id="budget-amount" placeholder="Enter Budget Amount" name="budgetamount[]">
                        <span class="input-group-append">
                            <button type="button" name="addbudget" id="add-budget-input" class="btn btn-success">Add Item Budget</button>
                        </span>
                    </div>
				</div>
				<div class="form-group">
					<label for="credentials">Credentials of Key Personel / Staff Involved</label>
					<input type="text" class="form-control" id="credentials" placeholder="Enter Credentials of Key Personel / Staff Involved">
				</div>
				<div class="form-group">
					<label for="references">References</label>
					<input type="text" class="form-control" id="references" placeholder="Enter References">
				</div>
				<div class="form-group">
					<label for="prepared-by">Prepared By</label>
					<input type="text" class="form-control" id="prepared-by" placeholder="Enter Prepared By">
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
				<button type="button" class="btn btn-info">Upload Soft Copy</button>
			</form>
		</div>
	</div>
</div>
</div><!--end row-->