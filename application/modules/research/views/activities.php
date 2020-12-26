<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
<div class="col-12">
	<div class="card m-b-30 my-2">
		<div class="card-body">
			<div class="page-head">
				<h2 class="text-center"><?=$page_title;?></h2>
				<a href="<?=base_url();?>research/create-activity" class="btn btn-info">New Activity</a>
			</div>

			<h4>A. Research Activities</h4>
			<div class="table-responsive-sm">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th scope="col">Activity/ies</th>
							<th scope="col" width="160">Date</th>
							<th scope="col" width="150">Venue</th>
							<th scope="col" width="150">Person Involved</th>
							<th scope="col" width="50"></th>
						</tr>
					</thead>
					<tbody>
					<?php
						for ($i = 1;$i < 10 + 1; $i++) {
					?>
					<tr>
						<td>Activity/ies <?=$i;?></td>
						<td>Date <?=$i;?></td>
						<td>Venue <?=$i;?></td>
						<td>Person Involved <?=$i;?></td>
						<td class="p-0 text-center">
									<a href="javascript:;" data-toggle="dropdown" class="btn btn-sm btn-info" style="float: none; margin: 5px; margin-right: 0px;">
                                        <span class="ti-pencil"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right profile-menu">
                                        <a class="dropdown-item" href="<?=base_url();?>research/create-coordinator">Update</a>
                                        <a class="dropdown-item" href="<?=base_url();?>research/create-coordinator">Delete</a>
                                    </div>
						</td>
					</tr>
					<?php
						}
					?>
					</tbody>
				</table>
			</div>                         
		</div>
	</div>
</div>
</div><!--end row-->