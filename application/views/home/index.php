
				<!--begin::Main-->
				<div class="d-flex flex-column flex-column-fluid">
					<!--begin::Content-->
					<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-xxl">
							<!--begin::Row-->
							<div class="row g-0 g-xl-5 g-xxl-8">
								<div class="col-xl-4">
									<!--begin::Engage Widget 5-->
									<div class="card card-stretch mb-5 mb-xxl-8">
										<!--begin::Body-->
										<div class="card-body pb-0" style="opacity:100%">
											<!--begin::Wrapper-->
											<div class="d-flex flex-column h-100">
												<!--begin::Text-->
												<h3 class="text-dark text-center fs-1 fw-bolder pt-15 lh-lg">Selamat
													Datang Administrator
													<br />Dumai Berkhidmat
												</h3>
												<!--end::Text-->
												<!--begin::Action-->
												<!-- <div class="text-center pt-7">
													<a href="#" class="btn btn-primary fw-bolder fs-6 px-7 py-3"
														data-bs-toggle="modal"
														data-bs-target="#kt_modal_create_app">Create App</a>
												</div> -->
												<!--end::Action-->
												<!--begin::Image-->
												<div class="flex-grow-1 bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom card-rounded-bottom h-200px"
													style="background-image:url('<?= base_url('assets/') ?>assets/media/illustrations/sigma-1/3.png')">
												</div>
												<!--end::Image-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Engage Widget 5-->
								</div>
								<div class="col-xl-8">
									<!--begin::Table Widget 1-->
									<div class="card card-stretch mb-5 mb-xxl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark fs-3">Capaian Target
													OPD</span>
												<span class="text-muted mt-2 fw-bold fs-6">36 Organisasi Perangkat
													Daerah</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-light">
													<li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2"
															data-bs-toggle="tab" href="#kt_tab_pane_1_1">Bulanan</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2"
															data-bs-toggle="tab" href="#kt_tab_pane_1_2">Triwulan</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder"
															data-bs-toggle="tab" href="#kt_tab_pane_1_3">Tahunan</a>
													</li>
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2 pb-0 mt-n3">
											<div class="tab-content mt-5" id="myTabTables1">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_tab_pane_1_1"
													role="tabpanel" aria-labelledby="kt_tab_pane_1_1">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless align-middle">
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<!-- <th class="p-0 min-w-40px"></th> -->
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px me-5">
																			<span class="symbol-label bg-light-primary">
																				<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-primary">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-1.png"
																						width="150" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Persampahan dan Pariwisata</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DLH/DISKOPAR/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-primary">
																					<div class="progress-bar bg-primary"
																						role="progressbar"
																						style="width: <?= $prog_sampah->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																					class="text-muted fs-7 fw-bold ps-3"><?= $prog_sampah->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<td class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-warning">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-warning">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-2.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Tertib Administrasi</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DPUPR/
																			BPBD/BAPEDALITBANG/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-warning">
																					<div class="progress-bar bg-warning"
																						role="progressbar"
																						style="width: <?= $prog_administrasi->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																				class="text-muted fs-7 fw-bold ps-3"><?= $prog_administrasi->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-success">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-success">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-3.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Pembangunan dan Penerangan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/BPKAD/DINKES/BAPEDALITBANG/DISKOMINFO/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-success">
																					<div class="progress-bar bg-success"
																						role="progressbar"
																						style="width: <?= $prog_pembangunan->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																				class="text-muted fs-7 fw-bold ps-3"><?= $prog_pembangunan->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-info">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-info">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-4.png"
																						width="70" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Drainase, Rutin Jalan dan Infrastruktur</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/DINSOS/DISKOPAR/DISPERKIMTAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-info">
																					<div class="progress-bar bg-info"
																						role="progressbar"
																						style="width: <?= $prog_drainase->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																				class="text-muted fs-7 fw-bold ps-3"><?= $prog_drainase->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-dark">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-dark">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-5.png"
																						width="60" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Sosial dan Kesejahteraan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DISDAG/DPMTSP/DISHUB</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-dark">
																					<div class="progress-bar bg-dark"
																						role="progressbar"
																						style="width: <?= $prog_sosial->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																				class="text-muted fs-7 fw-bold ps-3"><?= $prog_sosial->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm">
																			begin::Svg Icon | path: icons/duotune/arrows/arr064.svg -->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-danger">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-6.png"
																						width="65" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Inovasi Pelayanan dan Penunjang</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">Seluruh
																			OPD Dilingkungan Kota Dumai</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-danger">
																					<div class="progress-bar bg-danger"
																						role="progressbar"
																						style="width: <?= $prog_pelayanan->percentage ?>%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																			</div>
																			<span
																				class="text-muted fs-7 fw-bold ps-3"><?= $prog_pelayanan->percentage ?>%</span>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_tab_pane_1_2" role="tabpanel"
													aria-labelledby="kt_tab_pane_1_2">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless align-middle">
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<!-- <th class="p-0 min-w-40px"></th> -->
																</tr>
															</thead>

															<tbody>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px me-5">
																			<span class="symbol-label bg-light-primary">
																				<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-primary">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-1.png"
																						width="150" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Persampahan dan Pariwisata</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DLH/DISKOPAR/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-primary">
																					<div class="progress-bar bg-primary"
																						role="progressbar"
																						style="width: 46%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">46%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<td class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-warning">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-warning">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-2.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Tertib Administrasi</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DPUPR/
																			BPBD/BAPEDALITBANG/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-warning">
																					<div class="progress-bar bg-warning"
																						role="progressbar"
																						style="width: 87%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">87%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-success">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-success">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-3.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Pembangunan dan Penerangan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/BPKAD/DINKES/BAPEDALITBANG/DISKOMINFO/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-success">
																					<div class="progress-bar bg-success"
																						role="progressbar"
																						style="width: 53%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">53%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-info">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-info">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-4.png"
																						width="70" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Drainase, Rutin Jalan dan Infrastruktur</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/DINSOS/DISKOPAR/DISPERKIMTAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-info">
																					<div class="progress-bar bg-info"
																						role="progressbar"
																						style="width: 70%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">70%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-dark">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-dark">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-5.png"
																						width="60" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Sosial dan Kesejahteraan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DISDAG/DPMTSP/DISHUB</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-dark">
																					<div class="progress-bar bg-dark"
																						role="progressbar"
																						style="width: 29%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">29%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-danger">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-6.png"
																						width="65" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Inovasi Pelayanan dan Penunjang</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">Seluruh
																			OPD Dilingkungan Kota Dumai</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-danger">
																					<div class="progress-bar bg-danger"
																						role="progressbar"
																						style="width: 92%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">92%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_tab_pane_1_3" role="tabpanel"
													aria-labelledby="kt_tab_pane_1_3">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless align-middle">
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-200px"></th>
																	<th class="p-0 min-w-100px"></th>
																	<!-- <th class="p-0 min-w-40px"></th> -->
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px me-5">
																			<span class="symbol-label bg-light-primary">
																				<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-primary">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-1.png"
																						width="150" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Persampahan dan Pariwisata</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DLH/DISKOPAR/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-primary">
																					<div class="progress-bar bg-primary"
																						role="progressbar"
																						style="width: 4%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">4%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<td class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-warning">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-warning">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-2.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</td>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Tertib Administrasi</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DPUPR/
																			BPBD/BAPEDALITBANG/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-warning">
																					<div class="progress-bar bg-warning"
																						role="progressbar"
																						style="width: 11%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">11%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-success">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-success">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-3.png"
																						width="80" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Pembangunan dan Penerangan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/BPKAD/DINKES/BAPEDALITBANG/DISKOMINFO/KECAMATAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-success">
																					<div class="progress-bar bg-success"
																						role="progressbar"
																						style="width: 7%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">7%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-info">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-info">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-4.png"
																						width="70" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Drainase, Rutin Jalan dan Infrastruktur</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">SETDA/DINSOS/DISKOPAR/DISPERKIMTAN</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-info">
																					<div class="progress-bar bg-info"
																						role="progressbar"
																						style="width: 12%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">12%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-dark">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs026.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-dark">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-5.png"
																						width="60" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Sosial dan Kesejahteraan</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">DISDAG/DPMTSP/DISHUB</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-dark">
																					<div class="progress-bar bg-dark"
																						role="progressbar"
																						style="width: 8%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">8%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<tr>
																	<th class="px-0 py-3">
																		<div class="symbol symbol-65px">
																			<span class="symbol-label bg-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-danger">
																					<img src="<?= base_url('assets/') ?>assets/media/logos/k-6.png"
																						width="65" viewBox="0 0 24 24"
																						fill="none">
																					<path opacity="0.3"
																						d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																						fill="black" />
																					<rect x="6" y="12" width="7"
																						height="2" rx="1"
																						fill="black" />
																					<rect x="6" y="7" width="12"
																						height="2" rx="1"
																						fill="black" />
																					</img>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</div>
																	</th>
																	<td class="ps-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6">Khidmat
																			Inovasi Pelayanan dan Penunjang</a>
																		<span
																			class="text-muted fw-bold d-block mt-1">Seluruh
																			OPD Dilingkungan Kota Dumai</span>
																	</td>
																	<td>
																		<div class="d-flex flex-column w-100 me-3">
																			<div class="d-flex flex-stack mb-2">
																				<span
																					class="text-dark me-2 fs-6 fw-bolder">Progress</span>
																			</div>
																			<div class="d-flex align-items-center">
																				<div
																					class="progress h-6px w-100 bg-light-danger">
																					<div class="progress-bar bg-danger"
																						role="progressbar"
																						style="width: 30%;"
																						aria-valuenow="50"
																						aria-valuemin="0"
																						aria-valuemax="100"></div>
																				</div>
																				<span
																					class="text-muted fs-7 fw-bold ps-3">30%</span>
																			</div>
																		</div>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
											</div>
										</div>
									</div>
									<!--end::Table Widget 1-->
								</div>
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row g-0 g-xl-5 g-xxl-8">
								<div class="col-xl-4">
									<!--begin::Stats Widget 1-->
									<div class="card card-stretch mb-5 mb-xxl-8">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="fw-bolder text-dark fs-3">Target Umum</span>
												<span class="text-muted mt-2 fw-bold fs-6">Seluruh OPD</span>
											</h3>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-12">
											<!--begin::Chart-->
											<div class="d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center h-175px"
												style="background-image:url('<?= base_url('assets/')?>assets/media/svg/illustrations/bg-1.svg')">
												<div class="fw-bolder fs-1 text-gray-800 position-absolute">38%</div>
												<canvas id="kt_stats_widget_1_chart"></canvas>
											</div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="d-flex justify-content-around pt-18">
												<!--begin::Item-->
												<div class="">
													<span class="fw-bolder text-gray-800">38% Tercapai</span>
													<span class="bg-primary w-25px h-5px d-block rounded mt-1"></span>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="">
													<span class="fw-bolder text-gray-800">62% Belum Tercapai</span>
													<span class="bg-warning w-25px h-5px d-block rounded mt-1"></span>
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<!-- <div class="">
													<span class="fw-bolder text-gray-800">32% SAP</span>
													<span class="bg-warning w-25px h-5px d-block rounded mt-1"></span>
												</div> -->
												<!--end::Item-->
											</div>
											<!--end::Items-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Stats Widget 1-->
								</div>
								<div class="col-xl-8">
									<!--begin::Stats Widget 2-->
									<div class="card card-stretch mb-5 mb-xxl-8">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0 mt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="fw-bolder text-dark fs-3">Statistik</span>
												<span class="text-muted mt-2 fw-bold fs-6">Dumai Berkhidmat</span>
											</h3>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-0">
												<div
													class="d-flex flex-wrap flex-xxl-nowrap justify-content-center justify-content-md-start pt-4">
													<!--begin::Nav-->
													<div class="me-sm-10 me-0">
														<ul class="nav flex-column nav-pills nav-pills-custom">
															<li class="nav-item mb-3">
																<a class="nav-link active w-225px h-70px"
																	data-bs-toggle="pill" id="kt_stats_widget_2_tab_1"
																	href="#kt_stats_widget_2_tab_1_content">
																	<div class="nav-icon me-3">
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/gray/aven.svg"
																			class="default" />
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/aven.svg"
																			class="active" />
																	</div>
																	<div class="ps-1">
																		<span
																			class="nav-text text-gray-600 fw-bolder fs-6">Pengaduan
																			Masuk</span>
																		<!-- <span
																			class="text-muted fw-bold d-block pt-1">Pengaduan
																			Masyarakat</span> -->
																	</div>
																</a>
															</li>
															<li class="nav-item mb-3">
																<a class="nav-link w-225px h-70px" data-bs-toggle="pill"
																	id="kt_stats_widget_2_tab_2"
																	href="#kt_stats_widget_2_tab_2_content">
																	<div class="nav-icon me-3">
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/gray/tower.svg"
																			class="default" />
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/tower.svg"
																			class="active" />
																	</div>
																	<div class="ps-1">
																		<span
																			class="nav-text text-gray-600 fw-bolder fs-6">Pengaduan
																			Selesai</span>
																		<!-- <span class="text-muted fw-bold d-block pt-1">HR
																			Solutions</span> -->
																	</div>
																</a>
															</li>
															<li class="nav-item mb-3">
																<a class="nav-link w-225px h-70px" data-bs-toggle="pill"
																	id="kt_stats_widget_2_tab_3"
																	href="#kt_stats_widget_2_tab_3_content">
																	<div class="nav-icon me-3">
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/gray/fox-hub-2.svg"
																			class="default" />
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/fox-hub-2.svg"
																			class="active" />
																	</div>
																	<div class="ps-1">
																		<span
																			class="nav-text text-gray-600 fw-bolder fs-6">Capaian
																			Target</span>
																		<!-- <span class="text-muted fw-bold d-block pt-1">HR
																			Solutions</span> -->
																	</div>
																</a>
															</li>
															<li class="nav-item mb-5">
																<a class="nav-link w-225px h-70px" data-bs-toggle="pill"
																	id="kt_stats_widget_2_tab_4"
																	href="#kt_stats_widget_2_tab_4_content">
																	<div class="nav-icon me-3">
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/gray/kanba.svg"
																			class="default" />
																		<img alt=""
																			src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/kanba.svg"
																			class="active" />
																	</div>
																	<div class="ps-1">
																		<span
																			class="nav-text text-gray-600 fw-bolder fs-6">Realisasi
																			Anggaran</span>
																		<!-- <span class="text-muted fw-bold d-block pt-1">HR
																			Solutions</span> -->
																	</div>
																</a>
															</li>
														</ul>
													</div>
													<!--end::Nav-->
													<!--begin::Tab Content-->
													<div class="tab-content flex-grow-1">
														<!--begin::Tab Pane 1-->
														<div class="tab-pane fade show active"
															id="kt_stats_widget_2_tab_1_content">
															<!--begin::Content-->
															<div class="d-flex justify-content-center mb-10">
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Bulanan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$650</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span
																		class="text-muted fw-bold fs-7">Triwulan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$2,040</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Tahunan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">8,926</span>
																</div>
																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Chart-->
															<div id="kt_stats_widget_2_chart_1" style="height: 250px">
															</div>
															<!--end::Chart-->
														</div>
														<!--end::Tab Pane 1-->
														<!--begin::Tab Pane 2-->
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_2_content">
															<!--begin::Content-->
															<div class="d-flex justify-content-center mb-10">
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Bulanan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$1250</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span
																		class="text-muted fw-bold fs-7">Triwulan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$5,000</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Tahunan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">4,926</span>
																</div>
																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Chart-->
															<div id="kt_stats_widget_2_chart_2" style="height: 250px">
															</div>
															<!--end::Chart-->
														</div>
														<!--end::Tab Pane 2-->
														<!--begin::Tab Pane 3-->
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_3_content">
															<!--begin::Content-->
															<div class="d-flex justify-content-center mb-10">
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Bulanan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$350</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span
																		class="text-muted fw-bold fs-7">Triwulan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$1,200</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Tahunan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">5,500</span>
																</div>
																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Chart-->
															<div id="kt_stats_widget_2_chart_3" style="height: 250px">
															</div>
															<!--end::Chart-->
														</div>
														<!--end::Tab Pane 3-->
														<!--begin::Tab Pane 4-->
														<div class="tab-pane fade" id="kt_stats_widget_2_tab_4_content">
															<!--begin::Content-->
															<div class="d-flex justify-content-center mb-10">
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">
																		Bulanan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$450</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">
																		Triwulan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">$6,500</span>
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="px-10">
																	<span class="text-muted fw-bold fs-7">Tahunan</span>
																	<span
																		class="text-gray-800 fw-bolder fs-3 d-block">500</span>
																</div>
																<!--end::Item-->
															</div>
															<!--end::Content-->
															<!--begin::Chart-->
															<div id="kt_stats_widget_2_chart_4" style="height: 250px">
															</div>
															<!--end::Chart-->
														</div>
														<!--end::Tab Pane 4-->
													</div>
													<!--end::Tab Content-->
												</div>
											</div>
											<!--end: Card Body-->
										</div>
										<!--end::Stats Widget 2-->
									</div>
								</div>
								<!--end::Row-->
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-5">
									<!--begin::Table Widget 2-->
									<div class="card card-stretch mb-5 mb-xxl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bolder text-dark fs-3">Realisasi
													Anggaran</span>
												<span class="text-muted mt-2 fw-bold fs-6">890,344,000,000 Anggaran Kota
													Dumai
													2023S</span>
											</h3>
											<div class="card-toolbar">
												<ul class="nav nav-pills nav-pills-sm nav-light">
													<li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 active fw-bolder me-2"
															data-bs-toggle="tab" href="#kt_tab_pane_2_1">Tahunan</a>
													</li>
													<!-- <li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder me-2"
															data-bs-toggle="tab" href="#kt_tab_pane_2_2">Triwulan</a>
													</li>
													<li class="nav-item">
														<a class="nav-link btn btn-active-light btn-color-muted py-2 px-4 fw-bolder"
															data-bs-toggle="tab" href="#kt_tab_pane_2_3">Tahunan</a>
													</li> -->
												</ul>
											</div>
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-3 pb-0 mt-n3">
											<div class="tab-content mt-4" id="myTabTables2">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_tab_pane_2_1"
													role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
													<!--begin::Table-->
													<div class="table-responsive">
														<table class="table table-borderless align-middle">
															<thead>
																<tr>
																	<th class="p-0 w-50px"></th>
																	<th class="p-0 min-w-150px"></th>
																	<th class="p-0 min-w-120px"></th>
																	<th class="p-0 min-w-70px"></th>
																	<th class="p-0 min-w-70px"></th>
																	<!-- <th class="p-0 min-w-50px"></th> -->
																</tr>
															</thead>
															<tbody>
																<?php foreach ($realisasi as $data) : ?>
																<tr>
																	<td class="px-0 py-3">
																		<div class="symbol symbol-55px mt-1 me-5">
																			<span
																				class="symbol-label bg-light-primary align-items-end">
																				<img alt="Logo"
																					src="<?= base_url('assets/') ?>assets/media/logos/logo.png"
																					class="mh-40px" />
																			</span>
																		</div>
																	</td>
																	<td class="px-0">
																		<a href="#"
																			class="text-gray-800 fw-bolder text-hover-primary fs-6"><?= $data->nama ?></a>
																		<span
																			class="text-muted fw-bold d-block mt-1">Rp.<?= $data->total_dana ?></span>
																	</td>
																	<td></td>
																	<td class="text-end">
																		<span
																			class="text-gray-800 fw-bolder d-block fs-6">Rp.<?= $data->terealisasi ?></span>
																		<span
																			class="text-muted fw-bold d-block mt-1 fs-7">Terrealisasi</span>
																	</td>
																	<td class="text-end">
																		<span
																			class="fw-bolder text-primary"><?= $data->percentage ?>%</span>
																	</td>
																	<!-- <td class="text-end pe-0">
																		<a href="#"
																			class="btn btn-icon btn-bg-light btn-active-primary btn-sm"> -->
																	<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																	<!-- <span class="svg-icon svg-icon-4">
																				<svg xmlns="http://www.w3.org/2000/svg"
																					width="24" height="24"
																					viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.5" x="18" y="13"
																						width="13" height="2" rx="1"
																						transform="rotate(-180 18 13)"
																						fill="black" />
																					<path
																						d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																						fill="black" />
																				</svg>
																			</span> -->
																	<!--end::Svg Icon-->
																	<!-- </a>
																	</td> -->
																</tr>
																<?php endforeach; ?>
															</tbody>
														</table>
													</div>
													<!--end::Table-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<!-- <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel"
													aria-labelledby="kt_tab_pane_2_2"> -->
												<!--begin::Table-->
												
												</tr>
												</tbody>
												</table>
											</div>
											<!-- end::Table -->
										</div>
										<!--end::Tap pane-->
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::Table Widget 2-->
						</div>
					</div>
					<!--end::Row-->
					<!--begin::Modals-->
					<!--begin::Modal - Create App-->
					<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
						<!--begin::Modal dialog-->
						<div class="modal-dialog modal-dialog-centered mw-900px">
							<!--begin::Modal content-->
							<div class="modal-content">
								<!--begin::Modal header-->
								<div class="modal-header">
									<!--begin::Modal title-->
									<h2>Create App</h2>
									<!--end::Modal title-->
									<!--begin::Close-->
									<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
													transform="rotate(-45 6 17.3137)" fill="black" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1"
													transform="rotate(45 7.41422 6)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body py-lg-10 px-lg-10">
									<!--begin::Stepper-->
									<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
										id="kt_modal_create_app_stepper">
										<!--begin::Aside-->
										<div
											class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
											<!--begin::Nav-->
											<div class="stepper-nav ps-lg-10">
												<!--begin::Step 1-->
												<div class="stepper-item current" data-kt-stepper-element="nav">
													<!--begin::Line-->
													<div class="stepper-line w-40px"></div>
													<!--end::Line-->
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="stepper-check fas fa-check"></i>
														<span class="stepper-number">1</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Details</h3>
														<div class="stepper-desc">Name your App</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Step 1-->
												<!--begin::Step 2-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<!--begin::Line-->
													<div class="stepper-line w-40px"></div>
													<!--end::Line-->
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="stepper-check fas fa-check"></i>
														<span class="stepper-number">2</span>
													</div>
													<!--begin::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Frameworks</h3>
														<div class="stepper-desc">Define your app framework
														</div>
													</div>
													<!--begin::Label-->
												</div>
												<!--end::Step 2-->
												<!--begin::Step 3-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<!--begin::Line-->
													<div class="stepper-line w-40px"></div>
													<!--end::Line-->
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="stepper-check fas fa-check"></i>
														<span class="stepper-number">3</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Database</h3>
														<div class="stepper-desc">Select the app database
															type
														</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Step 3-->
												<!--begin::Step 4-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<!--begin::Line-->
													<div class="stepper-line w-40px"></div>
													<!--end::Line-->
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="stepper-check fas fa-check"></i>
														<span class="stepper-number">4</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Billing</h3>
														<div class="stepper-desc">Provide payment details
														</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Step 4-->
												<!--begin::Step 5-->
												<div class="stepper-item" data-kt-stepper-element="nav">
													<!--begin::Line-->
													<div class="stepper-line w-40px"></div>
													<!--end::Line-->
													<!--begin::Icon-->
													<div class="stepper-icon w-40px h-40px">
														<i class="stepper-check fas fa-check"></i>
														<span class="stepper-number">5</span>
													</div>
													<!--end::Icon-->
													<!--begin::Label-->
													<div class="stepper-label">
														<h3 class="stepper-title">Completed</h3>
														<div class="stepper-desc">Review and Submit</div>
													</div>
													<!--end::Label-->
												</div>
												<!--end::Step 5-->
											</div>
											<!--end::Nav-->
										</div>
										<!--begin::Aside-->
										<!--begin::Content-->
										<div class="flex-row-fluid py-lg-5 px-lg-15">
											<!--begin::Form-->
											<form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
												<!--begin::Step 1-->
												<div class="current" data-kt-stepper-element="content">
													<div class="w-100">
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-5 fw-bold mb-2">
																<span class="required">App Name</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7"
																	data-bs-toggle="tooltip"
																	title="Specify your unique app name"></i>
															</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text"
																class="form-control form-control-lg form-control-solid"
																name="name" placeholder="" value="" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-5 fw-bold mb-4">
																<span class="required">Category</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7"
																	data-bs-toggle="tooltip"
																	title="Select your app category"></i>
															</label>
															<!--end::Label-->
															<!--begin:Options-->
															<div class="fv-row">
																<!--begin:Option-->
																<label class="d-flex flex-stack mb-5 cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin:Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label bg-light-primary">
																				<!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-primary">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="24" height="24"
																						viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3"
																							d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
																							fill="black" />
																						<path
																							d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
																							fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end:Icon-->
																		<!--begin:Info-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder fs-6">Quick
																				Online Courses</span>
																			<span class="fs-7 text-muted">Creating
																				a clear text structure is
																				just
																				one SEO</span>
																		</span>
																		<!--end:Info-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span
																		class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio"
																			name="category" value="1" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
																<!--begin:Option-->
																<label class="d-flex flex-stack mb-5 cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin:Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label bg-light-danger">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-danger">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="24px" height="24px"
																						viewBox="0 0 24 24">
																						<g stroke="none"
																							stroke-width="1" fill="none"
																							fill-rule="evenodd">
																							<rect x="5" y="5" width="5"
																								height="5" rx="1"
																								fill="#000000" />
																							<rect x="14" y="5" width="5"
																								height="5" rx="1"
																								fill="#000000"
																								opacity="0.3" />
																							<rect x="5" y="14" width="5"
																								height="5" rx="1"
																								fill="#000000"
																								opacity="0.3" />
																							<rect x="14" y="14"
																								width="5" height="5"
																								rx="1" fill="#000000"
																								opacity="0.3" />
																						</g>
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end:Icon-->
																		<!--begin:Info-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder fs-6">Face
																				to
																				Face Discussions</span>
																			<span class="fs-7 text-muted">Creating
																				a clear text structure is
																				just
																				one aspect</span>
																		</span>
																		<!--end:Info-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span
																		class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio"
																			name="category" value="2" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
																<!--begin:Option-->
																<label class="d-flex flex-stack cursor-pointer">
																	<!--begin:Label-->
																	<span class="d-flex align-items-center me-2">
																		<!--begin:Icon-->
																		<span class="symbol symbol-50px me-6">
																			<span class="symbol-label bg-light-success">
																				<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
																				<span
																					class="svg-icon svg-icon-1 svg-icon-success">
																					<svg xmlns="http://www.w3.org/2000/svg"
																						width="24" height="24"
																						viewBox="0 0 24 24" fill="none">
																						<path opacity="0.3"
																							d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
																							fill="black" />
																						<path
																							d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
																							fill="black" />
																					</svg>
																				</span>
																				<!--end::Svg Icon-->
																			</span>
																		</span>
																		<!--end:Icon-->
																		<!--begin:Info-->
																		<span class="d-flex flex-column">
																			<span class="fw-bolder fs-6">Full
																				Intro Training</span>
																			<span class="fs-7 text-muted">Creating
																				a clear text structure
																				copywriting</span>
																		</span>
																		<!--end:Info-->
																	</span>
																	<!--end:Label-->
																	<!--begin:Input-->
																	<span
																		class="form-check form-check-custom form-check-solid">
																		<input class="form-check-input" type="radio"
																			name="category" value="3" />
																	</span>
																	<!--end:Input-->
																</label>
																<!--end::Option-->
															</div>
															<!--end:Options-->
														</div>
														<!--end::Input group-->
													</div>
												</div>
												<!--end::Step 1-->
												<!--begin::Step 2-->
												<div data-kt-stepper-element="content">
													<div class="w-100">
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-5 fw-bold mb-4">
																<span class="required">Select
																	Framework</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7"
																	data-bs-toggle="tooltip"
																	title="Specify your apps framework"></i>
															</label>
															<!--end::Label-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer mb-5">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin:Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-warning">
																			<i
																				class="fab fa-html5 text-warning fs-2x"></i>
																		</span>
																	</span>
																	<!--end:Icon-->
																	<!--begin:Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">HTML5</span>
																		<span class="fs-7 text-muted">Base
																			Web
																			Projec</span>
																	</span>
																	<!--end:Info-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		checked="checked" name="framework" value="1" />
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer mb-5">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin:Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-success">
																			<i
																				class="fab fa-react text-success fs-2x"></i>
																		</span>
																	</span>
																	<!--end:Icon-->
																	<!--begin:Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">ReactJS</span>
																		<span class="fs-7 text-muted">Robust
																			and
																			flexible app framework</span>
																	</span>
																	<!--end:Info-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="framework" value="2" />
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer mb-5">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin:Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-danger">
																			<i
																				class="fab fa-angular text-danger fs-2x"></i>
																		</span>
																	</span>
																	<!--end:Icon-->
																	<!--begin:Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">Angular</span>
																		<span class="fs-7 text-muted">Powerful
																			data mangement</span>
																	</span>
																	<!--end:Info-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="framework" value="3" />
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer">
																<!--begin:Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin:Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-primary">
																			<i
																				class="fab fa-vuejs text-primary fs-2x"></i>
																		</span>
																	</span>
																	<!--end:Icon-->
																	<!--begin:Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">Vue</span>
																		<span class="fs-7 text-muted">Lightweight
																			and responsive framework</span>
																	</span>
																	<!--end:Info-->
																</span>
																<!--end:Label-->
																<!--begin:Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="framework" value="4" />
																</span>
																<!--end:Input-->
															</label>
															<!--end::Option-->
														</div>
														<!--end::Input group-->
													</div>
												</div>
												<!--end::Step 2-->
												<!--begin::Step 3-->
												<div data-kt-stepper-element="content">
													<div class="w-100">
														<!--begin::Input group-->
														<div class="fv-row mb-10">
															<!--begin::Label-->
															<label class="required fs-5 fw-bold mb-2">Database
																Name</label>
															<!--end::Label-->
															<!--begin::Input-->
															<input type="text"
																class="form-control form-control-lg form-control-solid"
																name="dbname" placeholder="" value="master_db" />
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Label-->
															<label class="d-flex align-items-center fs-5 fw-bold mb-4">
																<span class="required">Select Database
																	Engine</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7"
																	data-bs-toggle="tooltip"
																	title="Select your app database engine"></i>
															</label>
															<!--end::Label-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer mb-5">
																<!--begin::Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-success">
																			<i
																				class="fas fa-database text-success fs-2x"></i>
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">MySQL</span>
																		<span class="fs-7 text-muted">Basic
																			MySQL database</span>
																	</span>
																	<!--end::Info-->
																</span>
																<!--end::Label-->
																<!--begin::Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="dbengine" checked="checked" value="1" />
																</span>
																<!--end::Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer mb-5">
																<!--begin::Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-danger">
																			<i
																				class="fab fa-google text-danger fs-2x"></i>
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">Firebase</span>
																		<span class="fs-7 text-muted">Google
																			based app data management</span>
																	</span>
																	<!--end::Info-->
																</span>
																<!--end::Label-->
																<!--begin::Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="dbengine" value="2" />
																</span>
																<!--end::Input-->
															</label>
															<!--end::Option-->
															<!--begin:Option-->
															<label class="d-flex flex-stack cursor-pointer">
																<!--begin::Label-->
																<span class="d-flex align-items-center me-2">
																	<!--begin::Icon-->
																	<span class="symbol symbol-50px me-6">
																		<span class="symbol-label bg-light-warning">
																			<i
																				class="fab fa-amazon text-warning fs-2x"></i>
																		</span>
																	</span>
																	<!--end::Icon-->
																	<!--begin::Info-->
																	<span class="d-flex flex-column">
																		<span class="fw-bolder fs-6">DynamoDB</span>
																		<span class="fs-7 text-muted">Amazon
																			Fast NoSQL Database</span>
																	</span>
																	<!--end::Info-->
																</span>
																<!--end::Label-->
																<!--begin::Input-->
																<span
																	class="form-check form-check-custom form-check-solid">
																	<input class="form-check-input" type="radio"
																		name="dbengine" value="3" />
																</span>
																<!--end::Input-->
															</label>
															<!--end::Option-->
														</div>
														<!--end::Input group-->
													</div>
												</div>
												<!--end::Step 3-->
												<!--begin::Step 4-->
												<div data-kt-stepper-element="content">
													<div class="w-100">
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label
																class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
																<span class="required">Name On Card</span>
																<i class="fas fa-exclamation-circle ms-2 fs-7"
																	data-bs-toggle="tooltip"
																	title="Specify a card holder's name"></i>
															</label>
															<!--end::Label-->
															<input type="text" class="form-control form-control-solid"
																placeholder="" name="card_name" value="Max Doe" />
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-column mb-7 fv-row">
															<!--begin::Label-->
															<label class="required fs-6 fw-bold form-label mb-2">Card
																Number</label>
															<!--end::Label-->
															<!--begin::Input wrapper-->
															<div class="position-relative">
																<!--begin::Input-->
																<input type="text"
																	class="form-control form-control-solid"
																	placeholder="Enter card number" name="card_number"
																	value="4111 1111 1111 1111" />
																<!--end::Input-->
																<!--begin::Card logos-->
																<div
																	class="position-absolute translate-middle-y top-50 end-0 me-5">
																	<img src="<?= base_url('assets/') ?>assets/media/svg/card-logos/visa.svg"
																		alt="" class="h-25px" />
																	<img src="<?= base_url('assets/') ?>assets/media/svg/card-logos/mastercard.svg"
																		alt="" class="h-25px" />
																	<img src="<?= base_url('assets/') ?>assets/media/svg/card-logos/american-express.svg"
																		alt="" class="h-25px" />
																</div>
																<!--end::Card logos-->
															</div>
															<!--end::Input wrapper-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="row mb-10">
															<!--begin::Col-->
															<div class="col-md-8 fv-row">
																<!--begin::Label-->
																<label
																	class="required fs-6 fw-bold form-label mb-2">Expiration
																	Date</label>
																<!--end::Label-->
																<!--begin::Row-->
																<div class="row fv-row">
																	<!--begin::Col-->
																	<div class="col-6">
																		<select name="card_expiry_month"
																			class="form-select form-select-solid"
																			data-control="select2"
																			data-hide-search="true"
																			data-placeholder="Month">
																			<option></option>
																			<option value="1">1</option>
																			<option value="2">2</option>
																			<option value="3">3</option>
																			<option value="4">4</option>
																			<option value="5">5</option>
																			<option value="6">6</option>
																			<option value="7">7</option>
																			<option value="8">8</option>
																			<option value="9">9</option>
																			<option value="10">10</option>
																			<option value="11">11</option>
																			<option value="12">12</option>
																		</select>
																	</div>
																	<!--end::Col-->
																	<!--begin::Col-->
																	<div class="col-6">
																		<select name="card_expiry_year"
																			class="form-select form-select-solid"
																			data-control="select2"
																			data-hide-search="true"
																			data-placeholder="Year">
																			<option></option>
																			<option value="2021">2021
																			</option>
																			<option value="2022">2022
																			</option>
																			<option value="2023">2023
																			</option>
																			<option value="2024">2024
																			</option>
																			<option value="2025">2025
																			</option>
																			<option value="2026">2026
																			</option>
																			<option value="2027">2027
																			</option>
																			<option value="2028">2028
																			</option>
																			<option value="2029">2029
																			</option>
																			<option value="2030">2030
																			</option>
																			<option value="2031">2031
																			</option>
																		</select>
																	</div>
																	<!--end::Col-->
																</div>
																<!--end::Row-->
															</div>
															<!--end::Col-->
															<!--begin::Col-->
															<div class="col-md-4 fv-row">
																<!--begin::Label-->
																<label
																	class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
																	<span class="required">CVV</span>
																	<i class="fas fa-exclamation-circle ms-2 fs-7"
																		data-bs-toggle="tooltip"
																		title="Enter a card CVV code"></i>
																</label>
																<!--end::Label-->
																<!--begin::Input wrapper-->
																<div class="position-relative">
																	<!--begin::Input-->
																	<input type="text"
																		class="form-control form-control-solid"
																		minlength="3" maxlength="4" placeholder="CVV"
																		name="card_cvv" />
																	<!--end::Input-->
																	<!--begin::CVV icon-->
																	<div
																		class="position-absolute translate-middle-y top-50 end-0 me-3">
																		<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
																		<span class="svg-icon svg-icon-2hx">
																			<svg xmlns="http://www.w3.org/2000/svg"
																				width="24" height="24"
																				viewBox="0 0 24 24" fill="none">
																				<path d="M22 7H2V11H22V7Z"
																					fill="black" />
																				<path opacity="0.3"
																					d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
																					fill="black" />
																			</svg>
																		</span>
																		<!--end::Svg Icon-->
																	</div>
																	<!--end::CVV icon-->
																</div>
																<!--end::Input wrapper-->
															</div>
															<!--end::Col-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="d-flex flex-stack">
															<!--begin::Label-->
															<div class="me-5">
																<label class="fs-6 fw-bold form-label">Save
																	Card
																	for further billing?</label>
																<div class="fs-7 fw-bold text-muted">If you
																	need
																	more info, please check budget planning
																</div>
															</div>
															<!--end::Label-->
															<!--begin::Switch-->
															<label
																class="form-check form-switch form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox"
																	value="1" checked="checked" />
																<span class="form-check-label fw-bold text-muted">Save
																	Card</span>
															</label>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
													</div>
												</div>
												<!--end::Step 4-->
												<!--begin::Step 5-->
												<div data-kt-stepper-element="content">
													<div class="w-100 text-center">
														<!--begin::Heading-->
														<h1 class="fw-bolder text-dark mb-3">Release!</h1>
														<!--end::Heading-->
														<!--begin::Description-->
														<div class="text-muted fw-bold fs-3">Submit your app
															to
															kickstart your project.</div>
														<!--end::Description-->
														<!--begin::Illustration-->
														<div class="text-center px-4 py-15">
															<img src="<?= base_url('assets/') ?>assets/media/illustrations/sigma-1/9.png" alt=""
																class="w-100 mh-300px" />
														</div>
														<!--end::Illustration-->
													</div>
												</div>
												<!--end::Step 5-->
												<!--begin::Actions-->
												<div class="d-flex flex-stack pt-10">
													<!--begin::Wrapper-->
													<div class="me-2">
														<button type="button" class="btn btn-lg btn-light-primary me-3"
															data-kt-stepper-action="previous">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
															<span class="svg-icon svg-icon-3 me-1">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="6" y="11" width="13"
																		height="2" rx="1" fill="black" />
																	<path
																		d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->Back</button>
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div>
														<button type="button" class="btn btn-lg btn-primary"
															data-kt-stepper-action="submit">
															<span class="indicator-label">Submit
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
																<span class="svg-icon svg-icon-3 ms-2 me-0">
																	<svg xmlns="http://www.w3.org/2000/svg" width="24"
																		height="24" viewBox="0 0 24 24" fill="none">
																		<rect opacity="0.5" x="18" y="13" width="13"
																			height="2" rx="1"
																			transform="rotate(-180 18 13)"
																			fill="black" />
																		<path
																			d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																			fill="black" />
																	</svg>
																</span>
																<!--end::Svg Icon--></span>
															<span class="indicator-progress">Please wait...
																<span
																	class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<button type="button" class="btn btn-lg btn-primary"
															data-kt-stepper-action="next">Continue
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
															<span class="svg-icon svg-icon-3 ms-1 me-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
																	height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="18" y="13" width="13"
																		height="2" rx="1" transform="rotate(-180 18 13)"
																		fill="black" />
																	<path
																		d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
																		fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon--></button>
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Stepper-->
								</div>
								<!--end::Modal body-->
							</div>
							<!--end::Modal content-->
						</div>
						<!--end::Modal dialog-->
					</div>
					<!--end::Modal - Create App-->
					<!--begin::Modal - Select Location-->
					<div class="modal fade" id="kt_modal_select_location" tabindex="-1" aria-hidden="true">
						<!--begin::Modal dialog-->
						<div class="modal-dialog mw-1000px">
							<!--begin::Modal content-->
							<div class="modal-content">
								<!--begin::Modal header-->
								<div class="modal-header">
									<!--begin::Title-->
									<h2>Select Location</h2>
									<!--end::Title-->
									<!--begin::Close-->
									<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
										<span class="svg-icon svg-icon-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
												viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
													transform="rotate(-45 6 17.3137)" fill="black" />
												<rect x="7.41422" y="6" width="16" height="2" rx="1"
													transform="rotate(45 7.41422 6)" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Close-->
								</div>
								<!--end::Modal header-->
								<!--begin::Modal body-->
								<div class="modal-body">
									<div id="kt_modal_select_location_map" class="w-100 rounded" style="height:450px">
									</div>
								</div>
								<!--end::Modal body-->
								<!--begin::Modal footer-->
								<div class="modal-footer d-flex justify-content-end">
									<a href="#" class="btn btn-active-light me-5" data-bs-dismiss="modal">Cancel</a>
									<button type="button" id="kt_modal_select_location_button" class="btn btn-primary"
										data-bs-dismiss="modal">Apply</button>
								</div>
								<!--end::Modal footer-->
							</div>
							<!--end::Modal content-->
						</div>
						<!--end::Modal dialog-->
					</div>
					<!--end::Modal - Select Location-->
					<!--end::Modals-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Main-->
		<!--begin::Footer-->
		<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
			<!--begin::Container-->
			<div class="container-xxl d-flex flex-column flex-md-row flex-stack">
				<!--begin::Copyright-->
				<div class="text-dark order-2 order-md-1">
					<span class="text-muted fw-bold me-2">2023©</span>
					<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Dumai
						Berkhidmat</a>
				</div>
				<!--end::Copyright-->

			</div>
			<!--end::Container-->
		</div>
		<!--end::Footer-->
	</div>
	<!--end::Wrapper-->
	<!--begin::Sidebar-->
	<div id="kt_sidebar" class="sidebar bg-info sidebarDash" data-kt-drawer="true" data-kt-drawer-name="sidebar"
		data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'150px', '200px': '50px'}" data-kt-drawer-direction="end"
		data-kt-drawer-toggle="#kt_sidebar_toggler">
		<!--begin::Sidebar Content-->
		<div class="d-flex flex-column sidebar-body">
			<!--begin::Sidebar Nav-->
			<ul class="sidebar-nav nav nav-tabs pt-15 pb-3 px-0" id="kt_sidebar_tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_1" id="kt_sidebar_tab_1">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/logos/1.png" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/logos/1.png" class="active" />
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_2" id="kt_sidebar_tab_2">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/logos/2.png" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/logos/2.png" class="active" />
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_3" id="kt_sidebar_tab_3">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/purple/fox-hub-2.svg" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/fox-hub-2.svg" class="active" />
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_4" id="kt_sidebar_tab_4">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/purple/tower.svg" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/tower.svg" class="active" />
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_5" id="kt_sidebar_tab_5">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/purple/treva.svg" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/treva.svg" class="active" />
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-bs-toggle="tab" href="#kt_sidebar_tab_pane_6" id="kt_sidebar_tab_6">
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/purple/treva.svg" class="default" />
						<img alt="" src="<?= base_url('assets/') ?>assets/media/svg/logo/colored/treva.svg" class="active" />
					</a>
				</li>
			</ul>
			<!--end::Sidebar Nav-->
			<!--begin::Sidebar Content-->
			<div id="kt_sidebar_content" class="py-10 px-5 px-lg-5">
				<div class="hover-scroll-y me-lg-n2 pe-lg-2" data-kt-scroll="true" data-kt-scroll-height="auto"
					data-kt-scroll-offset="0px" data-kt-scroll-dependencies="#kt_sidebar_tabs, #kt_sidebar_footer"
					data-kt-scroll-wrappers="#kt_sidebar_content">
					<div class="tab-content">
						<div class="tab-pane active" id="kt_sidebar_tab_pane_1" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Persampahan dan
										Pariwisata</h3>
									<div class="card-toolbar">
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_1_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Lingkungan Hidup</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">10
												Pengaduan
												On Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Kepemudaan, <br> Olah raga dan Pariwisata</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">3
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Se-Kota Dumai</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<div class="tab-pane" id="kt_sidebar_tab_pane_2" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Tertib
										Administrasi
									</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_2_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Pekerjaan Umum <br> Penataan Ruang</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Penanggulangan <br> Bencana Daerah</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Perencanaan <br> Pembangunan Daerah<br> Penelitian dan
												Pengembangan</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Se-Kota Dumai</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<div class="tab-pane" id="kt_sidebar_tab_pane_3" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Pembangunan dan
										Penerangan</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_3_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Sekertariat
												Daerah</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Pengelola Keuangan <br> Dan Aset Daerah</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Perencanaan <br> Pembangunan Daerah <br> Penelitian dan
												Pengembangan
											</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												kesehatan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Komunikasi Informai, <br> Statistik dan Persandian</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Se-Kota Dumai</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<div class="tab-pane" id="kt_sidebar_tab_pane_4" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Drainase, Rutin
										Jalan dan Infrastruktur</h3>
									<div class="card-toolbar">
										<!-- <button type="button"
													class="btn btn-md btn-icon btn-icon-white btn-info"
													data-kt-menu-trigger="click" data-kt-menu-overflow="true"
													data-kt-menu-placement="bottom-end"> -->
										<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
										<!-- <span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
														viewBox="0 0 24 24">
														<g stroke="none" stroke-width="1" fill="none"
															fill-rule="evenodd">
															<rect x="5" y="5" width="5" height="5" rx="1"
																fill="#000000" />
															<rect x="14" y="5" width="5" height="5" rx="1"
																fill="#000000" opacity="0.3" />
															<rect x="5" y="14" width="5" height="5" rx="1"
																fill="#000000" opacity="0.3" />
															<rect x="14" y="14" width="5" height="5" rx="1"
																fill="#000000" opacity="0.3" />
														</g>
													</svg>
												</span> -->
										<!--end::Svg Icon-->
										</button>
										<!--begin::Menu-->
										<!-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
													data-kt-menu="true">
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
															Manage</div>
													</div>
													<div class="separator mb-3 opacity-75"></div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Add User</a>
													</div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Add Role</a>
													</div>
													<div class="menu-item px-3" data-kt-menu-trigger="hover"
														data-kt-menu-placement="right-start"
														data-kt-menu-flip="left-start, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Add Group</span>
															<span class="menu-arrow"></span>
														</a>
														<div class="menu-sub menu-sub-dropdown w-200px py-4">
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
														</div>
													</div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Reports</a>
													</div>
													<div class="separator mt-3 opacity-75"></div>
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary fw-bold btn-sm px-4"
																href="#">Create New</a>
														</div>
													</div>
												</div> -->
										<!--end::Menu-->
									</div>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_4_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
									<!-- <div class="card-toolbar">
												<button type="button"
													class="btn btn-md btn-icon btn-icon-white btn-info"
													data-kt-menu-trigger="click" data-kt-menu-overflow="true"
													data-kt-menu-placement="bottom-end"> -->
									<!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
									<!-- <span class="svg-icon svg-icon-1">
														<svg xmlns="http://www.w3.org/2000/svg" width="24px"
															height="24px" viewBox="0 0 24 24">
															<g stroke="none" stroke-width="1" fill="none"
																fill-rule="evenodd">
																<rect x="5" y="5" width="5" height="5" rx="1"
																	fill="#000000" />
																<rect x="14" y="5" width="5" height="5" rx="1"
																	fill="#000000" opacity="0.3" />
																<rect x="5" y="14" width="5" height="5" rx="1"
																	fill="#000000" opacity="0.3" />
																<rect x="14" y="14" width="5" height="5" rx="1"
																	fill="#000000" opacity="0.3" />
															</g>
														</svg>
													</span> -->
									<!--end::Svg Icon-->
									<!-- </button> -->
									<!--begin::Menu-->
									<!-- <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px"
													data-kt-menu="true">
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">
															Manage</div>
													</div>
													<div class="separator mb-3 opacity-75"></div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Add User</a>
													</div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Add Role</a>
													</div>
													<div class="menu-item px-3" data-kt-menu-trigger="hover"
														data-kt-menu-placement="right-start"
														data-kt-menu-flip="left-start, top">
														<a href="#" class="menu-link px-3">
															<span class="menu-title">Add Group</span>
															<span class="menu-arrow"></span>
														</a>
														<div class="menu-sub menu-sub-dropdown w-200px py-4">
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Admin Group</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Staff Group</a>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Member Group</a>
															</div>
														</div>
													</div>
													<div class="menu-item px-3">
														<a href="#" class="menu-link px-3">Reports</a>
													</div>
													<div class="separator mt-3 opacity-75"></div>
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary fw-bold btn-sm px-4"
																href="#">Create New</a>
														</div>
													</div>
												</div> -->
									<!--end::Menu-->
									<!-- </div> -->
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Sekretariat
												Daerah</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Sosial</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Kepemudaan, <br> Olahraga dan Pariwisata</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perumahan Rakyat, <br> Permukiman dan Pertanahan</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center">
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<div class="tab-pane" id="kt_sidebar_tab_pane_5" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Sosial dan
										Kesejahteraan</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_5_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perdagangan</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Penanaman Modal dan<br> Pelayanan Terpadu Satu Pintu</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perhubungan</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<div class="d-flex flex-wrap align-items-center">
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
						<div class="tab-pane" id="kt_sidebar_tab_pane_6" role="tabpanel">
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">Khidmat Inovasi
										Pelayanan
										dan Penunjang</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body px-3 py-0">
									<!--begin::Chart-->
									<div id="kt_sidebar_tab_6_chart" class="apexcharts-bar-hover-danger"
										style="height: 250px"></div>
									<!--end::Chart-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
							<!--begin::Card-->
							<div class="card bg-transparent">
								<!--begin::Header-->
								<div class="card-header align-items-center border-0">
									<h3 class="card-title fw-bolder text-white fs-3">OPD Terkait</h3>
								</div>
								<!--end::Header-->
								<!--begin::Body-->
								<div class="card-body pt-0">
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Sekertariat
												Daerah</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan
												On Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin: Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Sekertariat
												DPRD</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end: Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#"
												class="text-white fw-bolder text-hover-primary fs-6">Inspektorat</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Kepegawaian dan <br> Pengembangan Sumber Daya <br>
												Masyarakat</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Perencanaan <br> Pembangunan Daerah<br> Penelitian dan
												Pengembangan</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Kesatuan Bangsa <br> dan Politik</a>
											<span class="text-white opacity-50 fw-bold fs-7 my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->

									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Pengelolaan keuangan <br> dan Aset</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Pendapatan Daerah</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Badan
												Penanggulangan Bencana <br> Daerah</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">RSUD
												Kota
												Dumai</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Kesehatan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Kependudukan dan <br> Catatan Sipil</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												tenaga Kerja</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Ketahanan Pangan <br> dan Pertanian</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perikanan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Pendidikan dan Kebudayaan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perlindungan Perempuan <br> dan Anak</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Pengendalian Penduduk <br> dan Keluarga Berencana</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Keperasi, Usaha Kecil <br> Menengah dan Perindustrian</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perpustakaan dan Arsip</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perhubungan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Pekerjaan Umum<br>dan Penataan Ruang </a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Penanaman Modal dan<br>Pelayanana Terpadu Satu Pintu</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Komunisai, Informatika, <br> Statistik dan Persandian</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Kepemudaan, <br> Olahraga dan Pariwisata</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perdagangan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Sosial dan <br> Pemberbayaan Masyarkat</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Lingkugan Hidup</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Dinas
												Perumahan Rakyat, <br> Permukiman dan Pertanahan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Satuan
												Polisi Pamong Praja</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Dumai Kota</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Dumai Barat</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Dumai Selatan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Dumai timur</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Bukit Kapur</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->

									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center mb-7">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Sungai Sembilan</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex flex-wrap align-items-center">
										<!--begin::Symbol-->
										<div class="symbol-2by3 me-4">
											<img src="<?= base_url('assets/') ?>assets/media/logos/logo.png" width="40px" alt="" class="mw-100" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pe-3">
											<a href="#" class="text-white fw-bolder text-hover-primary fs-6">Kecamatan
												Medang Kampai</a>
											<span class="text-white opacity-50 fs-7 fw-bold my-1">0
												Pengaduan On
												Progress</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
								</div>
								<!--end: Card Body-->
							</div>
							<!--end::Card-->
						</div>
					</div>
				</div>
			</div>
			<!--end::Sidebar Content-->
			<!--begin::Sidebar footer-->
			<!-- <div id="kt_sidebar_footer" class="py-2 px-5 pb-md-6 text-center">
						<a href="../dist/dashboards/extended.html"
							class="btn btn-color-white bg-white bg-opacity-10 bg-hover-opacity-20 fw-bolder w-100">View
							Extended Layout</a>
					</div> -->
			<!--end::Sidebar footer-->
		</div>
		<!--end::Sidebar Content-->
	</div>
	<!--end::Sidebar-->
	</div>
	<!--end::Page-->
	</div>
	<!--end::Root-->
	
	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
		<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
		<span class="svg-icon">
			<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
				<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
					fill="black" />
				<path
					d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
					fill="black" />
			</svg>
		</span>
		<!--end::Svg Icon-->
	</div>
	<!--end::Scrolltop-->
	<!--end::Main-->