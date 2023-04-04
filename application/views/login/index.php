<!--begin::Body-->

<body id="kt_body" class="bg-white">
	<!--begin::Main-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Login-->
		<div class="d-flex flex-column flex-lg-row flex-column-fluid" id="kt_login">
			<!--begin::Aside-->
			<div class="d-flex flex-column flex-lg-row-auto bg-info w-lg-600px pt-15 pt-lg-0">
				<!--begin::Aside Top-->
				<div class="d-flex flex-row-fluid flex-center flex-column-auto flex-column text-center mb-5">
					<!--begin::Aside Logo-->
					<a href="../dist/index.html" class="m-6">
						<img alt="Logo" src="<?= base_url('assets/') ?>assets/media/logos/logo.png" class="h-50px h-lg-100px" />
					</a>
					<!--end::Aside Logo-->
					<!--begin::Aside Subtitle-->
					<h3 class="fw-bolder fs-2x text-white lh-lg">Dumai Berkhidmat
						<br />Menuju Kota Idaman
					</h3>
					<!--end::Aside Subtitle-->
				</div>
				<!--end::Aside Top-->
				<!--begin::Illustration-->
				<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-550px"
					style="background-image: url(<?= base_url('assets/') ?>assets/media/illustrations/sigma-1/walkot.png"></div>
				<!--end::Illustration-->
			</div>
			<!--begin::Aside-->
			<!--begin::Content-->
			<div
				class="login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-10 py-lg-20 px-10 p-lg-7 mx-auto mw-450px w-100">
				<!--begin::Wrapper-->
				<div class="d-flex flex-column-fluid flex-center py-10">
					<!--begin::Signin Form-->
					<form action="http://localhost/front/login/aksi_login" class="form w-100" 
						 method="POST">
						<!--begin::Title-->
						<div class="pb-5 pb-lg-15">
							<h3 class="fw-bolder text-dark display-6">Login Administrator</h3>
							<div class="text-muted fw-bold fs-3">Input Your Username and Password
								<!-- <a href="#" class="text-primary fw-bolder"
									id="kt_login_signin_form_singup_button">Create Account</a> -->
							</div>
						</div>
						<!--begin::Title-->
						<!--begin::Form group-->
						<div class="fv-row mb-10">
							<label class="form-label fs-6 fw-bolder text-dark">Email</label>
							<input class="form-control form-control-lg form-control-solid" type="text" name="username"
								autocomplete="off" placeholder="email@dumaikota.go.id" />
						</div>
						<!--end::Form group-->
						<!--begin::Form group-->
						<div class="fv-row mb-10">
							<div class="d-flex justify-content-between mt-n5">
								<label class="form-label fs-6 fw-bolder text-dark pt-5">Password</label>
								<!-- <a href="#" class="text-primary fs-6 fw-bolder text-hover-primary pt-5"
									id="kt_login_signin_form_password_reset_button">Forgot Password ?</a> -->
							</div>
							<input class="form-control form-control-lg form-control-solid" type="password"
								name="password" autocomplete="off" placeholder="Input Your Password Here" />
						</div>
						<!--end::Form group-->
						<!--begin::Action-->
						<div class="pb-lg-0 pb-5">
							<button type="submit" id="kt_login_signin_form_submit_button"
								class="btn btn-info fw-bolder fs-6 px-12 py-4 my-3 me-3" >Login</button>
						</div>
						<!--end::Action-->
					</form>
					<!--end::Signin Form-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Login-->
	</div>
	<!--end::Main-->