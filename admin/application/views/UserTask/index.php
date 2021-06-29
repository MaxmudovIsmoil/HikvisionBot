<section class="content userTask">
	<div class="row">
		<div class="col-12">
			<div class="card">
				<?= form_open("userTask/add", array("class" => "needs-validation pb-3","novalidate" => "novalidate", "style" => "background:#def0fbd1;"), array('user_id' => $id)) ?>
					<div class="row ml-3 mt-2">
						<div class="col-md-4">
							<label for="taskSelect">Vaziva</label>
							<select class="form-control" id="taskSelect" name="task_id" required>
								<option value="">---</option>
								<?php foreach($all_task as $k => $at): ?>

									<option value="<?= $at['id']; ?>"><?= $at['name']; ?></option>

								<?php endforeach; ?>
							</select>
							<div class="invalid-feedback">
								Vazivani tanlang!
							</div>
						</div>

						<div class="col-md-3">
							<label for="datefilter">Oraliq sana</label>
							<input type="text" name="startDay_endDay" id="datefilter" class="form-control" placeholder="01.04.2021 - 30.04.2021" required>
							<div class="invalid-feedback">
								Oraliq sanani kiriting!
							</div>
						</div>
						<div class="col-md-12 d-flex mt-2">
							<span class="div_remind_time d-flex">
								<div class="label-input js_RemindTimeDiv">
									<label for="remind_time1">1. Vaqt</label>
									<div class="remind_time1 input-group">
										<input type="time" class="form-control" id="remind_time" name="remind_time1" required>
										<div class="input-group-append js_remind_time_remove_btn js_noAdd">
											<span class="input-group-text remindTime"><i class="fas fa-times"></i></span>
										</div>
										<div class="invalid-feedback">
											Vaqtni kiriitng!
										</div>
									</div>
								</div><!--./label-input -->
							</span>
							<div class="ml-2 addBtnDiv">
								<a href="" class="btn btn-info js_remind_time_add_btn"><i class="fas fa-plus"></i></a>
							</div>
							<div class="ml-2" style="margin-top: 31.5px;">
								<button class="ml-3 btn btn-primary text-bold" type="submit"><i class="fas fa-check"></i> Saqlash</button>
							</div>
						</div>
					</div>
				<?= form_close(); ?>

				<hr class="mb-0 mt-0">
				<?= form_open("userTask/index", array("class" => "needs-validation formDateResult", "novalidate" => "novalidate",'style'=>"width: 800px;"), array('id' => $id)) ?>
					<div class="row mt-4">
						<div class="col-md-1 mr-2">
							<a href="<?= site_url('auth/'); ?>" class="userTask_back_btn" title="Qaytish">
								<i class="fas fa-long-arrow-alt-left"></i>
							</a>
						</div>
						<div class="col-md-4">
							<input type="text" class="form-control js_StartEndDays" name="startDay_endDay" required>
							<div class="invalid-feedback">
								Oraliq sanani kiriting!
							</div>
						</div>
						<div class="col-md-3">
							<button class="text-bold btn btn-primary mr-2" name="save"><i class="fas fa-eye"></i> Ko'rish</button>
						</div>
					</div>
				<?= form_close(); ?>



				<!-- /.card-header -->
				<div class="card-body">
					<table id="taskTable" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th class="align-middle" width="3%">№</th>
							<th class="align-middle">Ish reja</th>
							<th class="align-middle" width="45%">Vaqt</th>
							<th class="text-center">Harakat</th>
						</tr>
						</thead>
						<tbody>
						<?php if(isset($task)): ?>

							<?php $i=1; foreach($task as $key => $t): ?>

							<tr class="js_tr_hover">
								<td class="align-middle text-center"><?= $i++; ?></td>
								<td class="align-middle"><?= $t; ?></td>
								<td class="align-middle">
									<?php foreach($remind_time as $k => $rt): ?>

										<?php if($key == $k): ?>

											<span class="d-flex js_remindTimeInputs align-items-center flex-wrap" data-task_id="<?= $k; ?>" data-user_id="<?= $id; ?>" data-start_day="<?= $start_day; ?>" data-end_day="<?= $end_day; ?>">
												<?php foreach($rt as $kid => $v): ?>

													<span class="mr-3 remindTimeSpan"><?= date('H:i', strtotime($v)); ?></span>
													<div class="col-3 mt-1 input-group js_inputGroup d-none" data-user_task_id="<?= $kid; ?>">
														<input type="time" class="form-control form-control-sm" name="remind_time<?= $i; ?>" value="<?= date("H:i", strtotime($v)); ?>">
														<div class="input-group-append js_remindTimeThisRemove" data-url="<?= site_url('userTask/ajax_remove_time'); ?>">
															<span class="input-group-text"><i class="fas fa-times"></i></span>
														</div>
														<div class="invalid-feedback">
															Vaqtni kiriitng!
														</div>
													</div>

												<?php endforeach; ?>

												<div class="mt-1 ml-1 d-none js_remindTimePlusBtn">
													<a href="" class="btn btn-info btn-sm"><i class="fas fa-plus"></i></a>
												</div>
											</span>

										<?php endif; ?>

									<?php endforeach; ?>
								</td>
								<td class="align-middle text-right">
									<div class="btn-group btn-group-sm">
										<a href="" class="btn btn-primary js_remindTimeEditBtn" title="Tahrirlash">
											<i class="fas fa-edit"></i>
										</a>

										<a href="" class="btn btn-secondary js_remindTimeBackBtn d-none" title="Qaytish">
											<i class="fas fa-sign-out-alt"></i>
										</a>
										<a href="" data-url="<?= site_url('userTask/ajax_edit_insert'); ?>" class="btn btn-success js_remindTimeSaveBtn d-none" title="Saqlash">
											<i class="fas fa-check"></i>
										</a>

										<button type="button" data-name="<?= $t; ?>" data-href="<?= site_url("userTask/ajax_delete/");?>" data-ids="
										<?php foreach($remind_time as $k => $rt): ?>
											<?php if($key == $k): ?>
												<?php foreach($rt as $kid => $v): ?>
													<?= $kid.";"; ?>
												<?php endforeach; ?>
											<?php endif; ?>
										<?php endforeach; ?>" class="btn btn-danger js_remindTimeDeleteBtn" title="O'chirish" data-toggle="modal" data-target="#delete_notify">
											<i class="fas fa-trash"></i>
										</button>
									</div>
								</td>
							</tr>

						<?php endforeach; ?>

						<?php endif; ?>
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
