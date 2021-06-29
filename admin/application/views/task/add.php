<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">

					<?= form_open("task/add", array("class" => "needs-validation","novalidate" => "novalidate")) ?>
						<div class="row">
							<div class="col-md-3">
								<label for="name">Nomi</label>
								<input type="text" class="form-control" id="name" name="name" required>
								<div class="invalid-feedback">
									Vazivani kiriitng!
								</div>
							</div>

							<div class="col-md-12">
								<button class="mt-4 btn btn-primary" type="submit">Saqlash</button>
								<a href="<?= site_url('task/index/'); ?>" class="mt-4 ml-3 btn btn-secondary">Qaytish</a>
							</div>
						</div>

					<?= form_close(); ?>

				</div>
			</div>
		</div>

</section>
