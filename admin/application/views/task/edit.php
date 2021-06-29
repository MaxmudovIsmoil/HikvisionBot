<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">

					<?= form_open("task/edit/".$task['id'], array("class" => "needs-validation","novalidate" => "novalidate"), array("id" => $task['id'])) ?>
					<div class="row">
						<div class="col-md-3">
							<label for="lastname">Familiya</label>
							<input type="text" class="form-control" id="name" name="name" value="<?= $task['name']; ?>" required>
							<div class="invalid-feedback">
								Vazifani kiriitng!
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
