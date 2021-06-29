<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">

					<?= form_open("userTask/add", array("class" => "needs-validation","novalidate" => "novalidate")) ?>
						<div class="row">
							<div class="col-md-3">
								<label for="task">Vaziva</label>
								<select class="form-control" id="task" name="name" required>
									<option value="">---</option>
									<option value="">salom</option>
									<option value="">test</option>
								</select>
								<div class="invalid-feedback">
									Vazivani tanlang!
								</div>
							</div>

							<span class="div_remind_time d-flex">
								<div class="remind_time1">
									<label for="name">1. Vaqt</label>
									<input type="time" class="form-control" id="name" name="name" required>
									<div class="invalid-feedback">
										Vazivani kiriitng!
									</div>
								</div>
							</span>

							<div class="col-md-3" style="margin-top: 31px;">
								<a href="" class="btn btn-danger js_remind_time_remove_btn d-none"><i class="fas fa-times"></i></a>
								<a href="" class="btn btn-info js_remind_time_add_btn"><i class="fas fa-plus"></i></a>
							</div>

<!--							<select id='task-selected-options' multiple='multiple' name="task_id">-->
<!--								<option value='elem_1' selected>elem 1</option>-->
<!--								<option value='elem_2'>elem 2</option>-->
<!--								<option value='elem_3'>elem 3</option>-->
<!--								<option value='elem_4' selected>elem 4</option>-->
<!--								<option value='elem_100'>elem 100</option>-->
<!--							</select>-->

							<div class="col-md-12">
								<button class="mt-4 btn btn-primary" type="submit">Saqlash</button>
								<a href="<?= site_url('userTask/index/'); ?>" class="mt-4 ml-3 btn btn-secondary">Qaytish</a>
							</div>
						</div>

					<?= form_close(); ?>

				</div>
			</div>
		</div>

</section>
