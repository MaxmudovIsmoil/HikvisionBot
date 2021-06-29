<section class="content">
	<div class="row mt-3">
		<div class="offset-3 col-5">

			<div class="card">
				<div class="card-body">

					<?= form_open("auth/admin_edit", array("class" => "needs-validation","novalidate" => "novalidate")) ?>
					<div class="row">
						<div class="col-md-12">
							<label for="username">Login</label>
							<input type="text" class="form-control" id="username" name="username" value="<?= $login; ?>" readonly>
							<div class="invalid-feedback">
								Loginni kiriitng!
							</div>
						</div>

						<div class="col-md-12 mt-3">
							<label for="password">Parol</label>
							<input type="password" class="form-control" id="password" name="password" required>
							<div class="invalid-feedback">
								Parolni kiriting!
							</div>
						</div>


						<div class="col-md-12">
							<button class="mt-4 btn btn-primary" type="submit">Saqlash</button>
							<a href="<?= site_url('auth/'); ?>" class="mt-4 ml-3 btn btn-secondary">Qaytish</a>
						</div>
					</div>

					<?= form_close(); ?>

				</div>
			</div>
		</div>

</section>
