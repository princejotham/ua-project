<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="row">
	<div class="col-12">
		<div class="card m-b-30 my-2">
			<div class="card-body">
				<div class="page-head">
					<h2 class="text-center"><?=$page_title;?></h2>
				</div>
				<div class="table-responsive-sm">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th scope="col" width="80">#</th>
								<th scope="col">Project Title</th>
								<th scope="col">Proponent/s</th>
								<th scope="col">College</th>
								<th scope="col">Budget</th>
							</tr>
						</thead>
						<tbody>
						<?php
							for ($i = 1;$i < 10 + 1; $i++) {
						?>
						<tr>
							<th scope="row"><?=$i;?></th>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<?php
							}
						?>
						</tbody>
					</table>
				</div>
				<div class="footer-form">
					<p><label>Prepared By:</label></p>
					<p><label>Name & Signature</label></p>
					<p><label>Director, Research & Development</label></p>
					<p><label>Recommending Approval:</label></p>
					<p><label class="line-top">VP RECETS</label></p>
					<p><label class="line-top">VPAF</label></p>
					<p><label>Approved:</label></p>
					<p><label class="line-top">President</label></p>
				</div>
			</div>
		</div>
	</div>
</div><!--end row-->