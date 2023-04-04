<!--begin::Modals-->

            <!--begin::Mega Menu-->
            <div class="modal bg-white fade" id="kt_mega_menu_modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-fullscreen">
                    <div class="modal-content shadow-none">
                        <div class="container">
                            <!--begin::Row-->
                            <div class="row  g-5">
                                <div class="col-lg-6 d-none d-lg-block ">
                                    <div class="d-flex flex-column flex-lg-row-auto bg-info w-lg-600px pt-15 pt-lg-0">
                                        <!--begin::Aside Top-->
                                        <div
                                            class="d-flex flex-row-fluid flex-center flex-column-auto flex-column text-center mb-5">
                                            <!--begin::Aside Logo-->
                                            <a href="<?= base_url('home')?>" class="m-6">
                                                <img alt="Logo" src="<?= base_url('assets/')?>assets/media/logos/logo.png"
                                                    class="h-50px h-lg-100px" />
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
                                            style="background-image: url(<?= base_url('assets/')?>assets/media/illustrations/sigma-1/walkot.png)">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-header d-flex flex-stack border-0">
                                        <div class="d-flex align-items-center">
                                            <!--begin::Logo-->
                                            <a href="<?= base_url('home')?>">
                                                <h3 alt="Logo" class="h-330px"><i
                                                        class="fas fa-home fa-fw fa-3x"></i></h3>
                                            </a>
                                            <!--end::Logo-->
                                        </div>
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-light-primary ms-2"
                                            data-bs-dismiss="modal">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                        width="16" height="2" rx="1"
                                                        transform="rotate(-45 6 17.3137)" fill="black" />
                                                    <rect x="7.41422" y="6" width="16"
                                                        height="2" rx="1"
                                                        transform="rotate(45 7.41422 6)" fill="black" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <div class="model-body  bg-light-dark" style="padding:3.25rem!important">
                                        <div class="row">
                                            <div class="col-lg-6 col-12">
                                                <a href="<?= base_url('opd')?>"
                                                    class="card bg-light-primary hoverable min-h-125px shadow-none mb-5">
                                                    <div class="card-body d-flex flex-column flex-center">
                                                        <img width="30"
                                                            src="<?= base_url('assets/')?>assets/gambar/opd.png"
                                                            alt="">

                                                        <h3 class="fs-3 mb-2 text-dark fw-bolder">Data OPD</h3>
                                                    </div>
                                                </a>
                                                <a href="{{ url('/TargetKegiatan') }}"
                                                    class="card bg-light-info hoverable min-h-125px shadow-none mb-5">
                                                    <div class="card-body d-flex flex-column flex-center">
                                                        <img width="188"
                                                            src="<?= base_url('assets/')?>assets/gambar/pengaduan.png"
                                                            alt="">

                                                        <h3 class="fs-3 mb-2 text-dark fw-bolder">Target Kegiatan</h3>
                                                    </div>
                                                </a>

                                            </div>
                                            <div class="col-6">
                                                <a href="{{ url('/Laporan/Target') }}"
                                                    class="card bg-light-success hoverable min-h-125px shadow-none mb-5">
                                                    <div class="card-body d-flex flex-column flex-center">
                                                        <img width="30"
                                                            src="<?= base_url('assets/')?>assets/gambar/opd.png"
                                                            alt="">

                                                        <h3 class="fs-3 mb-2 text-dark text-center  fw-bolder">Laporan
                                                            Target
                                                            Kegiatan</h3>
                                                    </div>
                                                </a>
                                                <a href="{{ url('/Laporan/Realisasi') }}"
                                                    class="card bg-light-warning hoverable min-h-125px shadow-none mb-5">
                                                    <div class="card-body d-flex flex-column flex-center">
                                                        <img width="30"
                                                            src="<?= base_url('assets/')?>assets/gambar/opd.png"
                                                            alt="">

                                                        <h3 class="fs-3 mb-2 text-dark text-center fw-bolder">Laporan
                                                            Realisasi
                                                            Target
                                                        </h3>
                                                    </div>
                                                </a>
                                                <a href="{{ url('/Users') }}"
                                                    class="card bg-light-danger hoverable min-h-125px shadow-none mb-5">
                                                    <div class="card-body d-flex flex-column flex-center">
                                                        <img width="30"
                                                            src="<?= base_url('assets/')?>assets/gambar/opd.png"
                                                            alt="">

                                                        <h3 class="fs-3 mb-2 text-dark fw-bolder">Akun</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--end::Row-->


                        </div>
                    </div>
                </div>
            </div>
            <!--end::Mega Menu-->
            <!--end::Modal - Select Location-->
            <!--end::Modals-->
