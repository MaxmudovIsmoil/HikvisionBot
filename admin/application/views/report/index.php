<section class="content report">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<?= form_open("report/", array("class" => "needs-validation","novalidate" => "novalidate")) ?>
					<div class="row mt-4 ml-2 mb-4">
						<div class="col-md-3">
							<select class="form-control" name="user_id">
								<option value="">---</option>
								<?php foreach($hodimlar as $k => $hodim): ?>

									<option value="<?= $hodim['id']; ?>" <?= (isset($_POST['user_id']) && $_POST['user_id'] == $hodim['id']) ? "selected": ""; ?>><?= $hodim['job_title']; ?></option>

								<?php endforeach; ?>
							</select>
						</div>
						<div class="col-md-3">
							<input type="text" class="form-control" name="startDay_endDay" value="<?= isset($_POST['startDay_endDay']) ? $_POST['startDay_endDay'] : ""; ?>" placeholder="Boshlangan sana" required>
						</div>

						<div class="col-md-3">
							<input type="submit" class="text-bold btn btn-primary mr-2" name="save" value="Ko'rish">
						</div>
					</div>
				<?= form_close(); ?>

				<?php if(isset($_POST['save'])): ?>

					<div class="report_name">
						<h5>
							<span class="mr-3"><?= $name; ?></span>
							<span class="badge badge-info" data-toggle="tooltip" title="Bajarilgan"><i class="fas fa-check"></i> <?= $done; ?></span>
							<span class="badge badge-danger" data-toggle="tooltip" title="Bajarilmagan"><i class="fas fa-times"></i> <?= $unfulfilled; ?></span>
							<span class="badge badge-secondary" data-toggle="tooltip" title="E'tiborsiz qoldirilgan"><i class="fas fa-exclamation"></i> <?= $unpublished; ?></span>
						</h5>

					</div>
					<!-- /.card-header -->

					<div class="card-body pt-0">
						<table id="reportTable" class="table table-bordered table-striped">
							<thead>
							<tr>
								<th class="align-middle">№</th>
								<th class="align-middle">Vazifa nomi</th>
								<th class="align-middle">Xabar kelgan vaqt</th>
								<th class="align-middle">Bajarilgan vaqt</th>
							</tr>
							</thead>
							<tbody>
							<?php $i=1; foreach($report as $k => $r): ?>

								<tr class="js_tr_hover">
									<td class="align-middle"><?= $i++; ?></td>
									<td class="align-middle">
										<?php if ($r['status']): ?>
											<i class="fas fa-check"></i>
										<?php elseif($r['status'] == 0 && $r['confirmation_time']): ?>
											<i class="fas fa-times"></i>
										<?php elseif($r['status'] == 0 && $r['confirmation_time'] == ''): ?>
											<i class="fas fa-exclamation"></i>
										<?php endif; ?>
										<?= $r['name']; ?></td>
									<td class="align-middle"><?= date('H:i', strtotime($r['remind_time'])); ?></td>
									<td class="align-middle"><?= !empty($r['confirmation_time']) ? date('H:i', strtotime($r['confirmation_time'])) : ""; ?></td>
								</tr>

							<?php endforeach; ?>
							</tbody>

						</table>
					</div>
					<!-- /.card-body -->

				<?php endif; ?>
			</div>
			<!-- /.card -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
