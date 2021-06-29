<section class="content">
	<div class="row">
		<div class="col-12">

			<!-- /.card -->

			<div class="card">
				<div class="btn_teacher_add">
					<a href="<?= site_url('auth/add/'); ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Qo'shish</a>
				</div>
				<!-- /.card-header -->
				<div class="card-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th class="align-middle">№</th>
							<th class="align-middle">Fish</th>
							<th class="align-middle">Tug'ilgan sana</th>
							<th class="align-middle">Telefon</th>
							<th class="align-middle">Lavozim</th>
							<th class="text-center">Ish reja</th>
							<th class="text-center">Harakat</th>
						</tr>
						</thead>
						<tbody>
						<?php $i=1; foreach($users as $k => $u): ?>

							<tr class="js_tr_hover">
								<td class="align-middle"><?= $i++; ?></td>
								<td class="align-middle"><?= $u['firstname']." ".$u['lastname']; ?></td>
								<td class="align-middle"><?= date('d.m.Y', strtotime($u['born'])); ?></td>
								<td class="align-middle"><?= phone_format_helper($u['phone']); ?></td>
								<td class="align-middle"><?= $u['job_title']; ?></td>
								<td class="align-middle text-center">
									<a href="<?= site_url('UserTask/index/'.$u['id']); ?>" class="btn btn-info btn-sm">Ish reja</a>
								</td>
								<td class="align-middle text-right">
									<div class="btn-group btn-group-sm">
										<a href="<?= site_url('auth/edit/'.$u['id']); ?>" class="btn btn-primary" title="Tahrirlash">
											<i class="fas fa-edit"></i>
										</a>
										<button type="button" data-href="<?= site_url("auth/delete/".$u['id']);?>" class="btn btn-danger js_delete_item" title="O'chirish" data-toggle="modal" data-target="#delete_notify">
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
