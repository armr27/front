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
   <div class="d-flex flex-column flex-column-fluid" id="viewOpd">
        <!--begin::Content-->
        <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
            <!--begin::Container-->
            <div class="container-xxl">
                <!--begin::Card-->
                <div class="card">
                    <div class="card-body">
                        <!--begin::Engage Widget 1-->
                        <div class="card mb-12">
                            <div class="card-body d-flex justify-content-between card-rounded p-0 d-flex bg-info">
                                <div class="d-flex flex-column flex-lg-row-auto p-10 p-md-20">
                                    <h1 class="fw-bolder text-white">DATA ORGANISASI PERANGKAT DAERAH</h1>
                                    <div class="fs-3 text-white mb-8">Dumai Berkhidmat</div>
                                    <!--begin::Form-->
                                    <form class="d-flex flex-center py-2 px-6 bg-white rounded">
                                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-info">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546"
                                                    height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
                                                    fill="black" />
                                                <path
                                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                                    fill="black" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <input type="search" v-model="search"
                                            class="form-control border-0 fw-bold ps-2 w-xxl-350px" placeholder="Cari OPD" />
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <div class="d-none d-md-flex flex-row-fluid mw-400px ms-auto bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-contain"
                                    style="background-image: url(<?= base_url('assets/') ?>assets/media/illustrations/sigma-1/walkot.png);">
                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 1-->
                        <!--begin::Section-->
                        <div class="mb-10">
                            <!--begin::Heading-->
                            <div class="d-flex justify-content-end align-items-center mb-7">
                                <a href="<?= base_url('Opd/tambah_opd') ?>" class="btn btn-light-primary btn-sm fw-bolder">Tambah
                                    OPD</a>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Products-->
                            <transition-group class="row g-5 g-xxl-8" name="grow-shrink">
                                <!--begin::Product-->
                                <div class="col-md-4 col-xxl-4 col-lg-12" v-for="(a,index) in filteredItems"
                                :key="a.idOpd">
                                <?php foreach ($opd as $data) : ?>
                                <!--begin::Card-->
                                    <div class="card shadow-none">
                                        <div class="card-body p-0">
                                            <!--begin::Image-->
                                            <div class="overlay rounded overflow-hidden">
                                                <div class="overlay-wrapper rounded bg-light text-center">
                                                    <img src="<?= base_url() ?>assets/media/logos/logo.png" alt=""
                                                        class="mw-80 w-150px" />
                                                </div>
                                                <div class="overlay-layer">
                                                    <a :href="'{{ url('OPD') }}/' + a.idOpd"
                                                        class="btn fw-bolder btn-sm btn-primary me-2">Detail
                                                    </a>
                                                    <a v-if="isDeleting[index]" href="javascript:;"
                                                        class="btn fw-bolder disabled btn-sm btn-light-danger"
                                                        disabled>Processing...</a>
                                                    <a v-else href="javascript:;" @click="Hapus(a.idOpd,index)"
                                                        class="btn fw-bolder btn-sm btn-light-danger">Hapus
                                                        OPD</a>
                                                </div>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Details-->
                                            <div
                                                class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                                                <a href="../dist/apps/shop/product.html"
                                                    class="fs-4 fw-bolder text-gray-800 text-hover-primary mb-1">@{{ a.nama }}</a>
                                                <span class="fs-6">@{{ a.alamat }}</span>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                    </div>
                                <?php endforeach;?>
                                    <!--end::Card-->
                                </div>
                                <!--end::Product-->
                            </transition-group>

                            <!--end::Products-->
                        </div>
                        <!--end::Section-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Content-->
    </div>
