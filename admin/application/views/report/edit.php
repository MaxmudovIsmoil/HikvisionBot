<section class="content">
	<div class="row">
		<div class="col-12">

			<div class="card">
				<div class="card-body">

					<?= form_open("auth/edit", array("class" => "needs-validation","novalidate" => "novalidate"), array("id" => $user["id"])) ?>
					<div class="row">
						<div class="col-md-3">
							<label for="lastname">Familiya</label>
							<input type="text" class="form-control" id="lastname" name="lastname" value="<?= $user['lastname']; ?>" required>
							<div class="invalid-feedback">
								Familiyani kiriitng!
							</div>
						</div>

						<div class="col-md-3">
							<label for="firstname">Ism</label>
							<input type="text" class="form-control" id="firstname" name="firstname" value="<?= $user['firstname']; ?>" required>
							<div class="invalid-feedback">
								Ismni kiriting!
							</div>
						</div>

						<div class="col-md-3">
							<label for="phone">Telefon</label>
							<input type="text" class="form-control" id="phone" name="phone" value="<?= $user['phone']; ?>" required>
							<div class="invalid-feedback">
								Telefron nomerni kiriitng!
							</div>
						</div>

						<div class="col-md-3">
							<label for="job_title">Lavozim</label>
							<input type="text" class="form-control" id="job_title" name="job_title" value="<?= $user['job_title']; ?>" required>
							<div class="invalid-feedback">
								Lavozimni kiriting!
							</div>
						</div>

						<div class="col-md-3 mt-3">
							<label for="">Jins</label>
							<div class="d-flex">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="gender" id="male" value="1" <?= ($user['gender'] == 1) ? "checked": ""; ?>>
									<label class="form-check-label" for="male">
										Erkak
									</label>
								</div>
								<div class="form-check ml-4">
									<input class="form-check-input" type="radio" name="gender" id="female" value="0" <?= ($user['gender'] == 0) ? "checked": ""; ?>>
									<label class="form-check-label" for="female">
										Ayol
									</label>
								</div>
							</div>
						</div>

						<div class="col-md-3 mt-3">
							<label for="born">Tug'ilgan sana</label>
							<input type="text" class="form-control" id="born" name="born" value="<?= $user['born']; ?>">
							<div class="invalid-feedback">
								Familiyani kiriitng!
							</div>
						</div>

						<div class="col-md-3 mt-3">
							<label for="address">Manzil</label>
							<input type="text" class="form-control" id="address" name="address" value="<?= $user['address']; ?>">
							<div class="invalid-feedback">
								Manzilni kiriting!
							</div>
						</div>

						<div class="col-md-12">
							<button class="mt-4 ml-2 btn btn-primary" type="submit">Saqlash</button>
							<a href="<?= site_url('auth/index/'); ?>" class="mt-4 ml-3 btn btn-secondary">Qaytish</a>
						</div>
					</div>

					<?= form_close(); ?>

				</div>
			</div>
		</div>

</section>
