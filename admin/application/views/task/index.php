<section class="content">
	<div class="row">
		<div class="col-12">

			<!-- /.card -->

			<div class="card">
				<div class="btn_teacher_add">
					<a href="<?= site_url('task/add/'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Qo'shish</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th class="align-middle">№</th>
							<th class="align-middle">Name</th>
							<th class="text-center">Harakat</th>
						</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($task as $k => $t): ?>

							<tr class="js_tr_hover">
								<td class="align-middle"><?= $i++; ?></td>
								<td class="align-middle"><?= $t['name']; ?></td>
								<td class="align-middle text-right">
									<div class="btn-group btn-group-sm">
										<a href="<?= site_url('task/edit/'.$t['id']); ?>" class="btn btn-primary" title="Tahrirlash">
											<i class="fas fa-edit"></i>
										</a>
										<button type="button" data-href="<?= site_url("task/delete/".$t['id']);?>" class="btn btn-danger js_delete_item" title="O'chirish" data-toggle="modal" data-target="#delete_notify">
											<i class="fas fa-trash"></i>
										</button>
									</div>
								</td>
							</tr>

						<?php endforeach; ?>
						</tbody>

					</table>
				</div>
				<!-- /.card-body -->
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
