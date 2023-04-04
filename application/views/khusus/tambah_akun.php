<style>
        #kt_wrapper {
            margin-right: 0;
        }

        #kt_header {
            right: 0 !important;
        }
    </style>
    <style>
        .grow-shrink-enter-active {
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .grow-shrink-leave-active {
            transition: all 0.5s cubic-bezier(0.68, -0.55, 0.265, 1.55);
        }

        .grow-shrink-enter,
        .grow-shrink-leave-to {
            transform: scale(0.5) rotate(10deg);
            opacity: 0;
        }
    </style>
<!--begin::Main-->
<div class="d-flex flex-column flex-column-fluid">

<!--begin::Content-->
<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container-xxl">
        <!--begin::Profile Account-->
        <div class="card">
            <!--begin::Form-->
            <form class="form d-flex flex-center" action="<?= base_url('khusus/proses_tambah_khusus') ?>" method="POST" Enctype="Multipart/Form-Data">
                <div class="card-body mw-800px py-20">
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Nama Akun Khusus</label>
                        <div class="col-lg-9">
                            <div class="spinner spinner-sm spinner-primary spinner-right">
                                <input class="form-control form-control-lg form-control-solid"
                                    type="text" placeholder="Nama Lengkap" name="nama"/>
                            </div>
                        </div>
                    </div>
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Username</label>
                        <div class="col-lg-9">
                            <div class="spinner spinner-sm spinner-primary spinner-right">
                                <input class="form-control form-control-lg form-control-solid"
                                    type="text" placeholder="Nama Username" name="username" />
                            </div>
                        </div>
                    </div>
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Email</label>
                        <div class="col-lg-9">
                            <div class="input-group input-group-lg input-group-solid">
                                <input type="text"
                                    class="form-control form-control-lg form-control-solid"
                                    placeholder="email@dumaikota.go.id" name="email" />
                            </div>
                            <!-- <div class="form-text">Email will not be publicly displayed.
                                <a href="#" class="fw-bold">Learn more</a>.
                            </div> -->
                        </div>
                    </div>
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Password</label>
                        <div class="col-lg-9">
                            <div class="spinner spinner-sm spinner-primary spinner-right">
                                <input class="form-control form-control-lg form-control-solid"
                                    type="password" name="password" placeholder="Masukkan Password" />
                            </div>
                        </div>
                    </div>
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Level</label>
                        <div class="col-lg-9">
                            <div class="spinner spinner-sm spinner-primary spinner-right">
                                <!-- <input class="form-control form-control-lg form-control-solid"
                                    type="password" placeholder="Masukkan Password" /> -->
                                    <select class="form-select form-select-solid" name="level" aria-label="Select example">
                                        <option>Pilih</option>
                                        <option value="1">Akun Khusus</option>
                                        <option value="2">Super Admin</option>
                                    </select>
                            </div>
                        </div>
                    </div>

                    
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row mb-8">
                        <label class="col-lg-3 col-form-label">Foto</label>
                        <div class="col-lg-9">
                            <div class="spinner spinner-sm spinner-primary spinner-right">
                                <input class="form-control form-control-lg form-control-solid"
                                    type="file" name="file" />
                            </div>
                        </div>
                    </div>
                    <!--end::Form row-->
                    <!--begin::Form row-->
                    <div class="row">
                        <label class="col-lg-3 col-form-label"></label>
                        <div class="col-lg-9">
                            <button type="submit"
                                class="btn btn-primary fw-bolder px-6 py-3 me-3">Tambah
                                Akun</button>
                            <button type="reset"
                                class="btn btn-color-gray-600 btn-active-light-danger fw-bolder px-6 py-3">Cancel</button>
                                <a href="<?= base_url('khusus') ?>" class="btn btn-danger btn-hover-scale me-5">Kembali</a>
                        </div>
                    </div>
                    <!--end::Form row-->
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Profile Account-->
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
        <a href="https://keenthemes.com" target="_blank"
            class="text-gray-800 text-hover-primary">Dumai
            Berkhidmat</a>
    </div>
    <!--end::Copyright-->
</div>
<!--end::Container-->
</div>
<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->