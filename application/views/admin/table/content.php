<div class="content">
	<div class="container-fluid">
		<div class="row justify-content-between">
			<div class="col-md-4">
				<a type="button" href="<?=base_url().'admin/table/form' ?>" class="btn btn-primary btn-lg">Add member</a>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header" data-background-color="purple">
						<h4 class="title">Member List</h4>
						<p class="category">Here is a subtitle for this table</p>
					</div>
					<div class="card-content table-responsive">
						<table class="table">
							<thead class="text-primary">
								<th>Username</th>
								<th>Email</th>
								<th>Level</th>
								<th></th>
							</thead>
							<tbody>
							<?php
								foreach ($data as $info) {
									?>
									<tr>
										<td><?=$info['username']?></td>
										<td><?=$info['email']?></td>
										<td><?=($info['level'] == 1 ? 'Admin' : 'Student')?></td>
										<td>
											<i class="material-icons">edit</i>
											<i class="material-icons">delete_forever</i>
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
	</div>
</div>
