@extends('layouts.app')

@section('content')
    <div id="kt_content_container" class="container-xxl  container ">
        <div class="card card-dashed">
            <div class="card-body">
                <div
                    class="alert alert-dismissible bg-light-info border border-info border-3 border-dashed d-flex flex-column flex-sm-row w-100 p-5 mb-10">
                    <!--begin::Icon-->
                    <i class="ki-duotone ki-notification-bing fs-2hx text-info me-4 mb-5 mb-sm-0"><span
                            class="path1"></span><span class="path2"></span><span class="path3"></span></i> <!--end::Icon-->

                    <!--begin::Content-->
                    <div class="d-flex flex-column pe-0 pe-sm-10">
                        <h5 class="mb-0">Bienvenidos</h5>
                        {{-- <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo mollitia
                            dolorum accusantium id saepe voluptates, voluptas, doloribus sed
                            necessitatibus numquam laboriosam itaque laborum quis temporibus sint,
                            deleniti explicabo magnam animi.</span> --}}
                    </div>
                    <!--end::Content-->

                    <!--begin::Close-->
                    <button type="button"
                        class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto"
                        data-bs-dismiss="alert">
                        <i class="ki-duotone ki-cross fs-1 text-info"><span class="path1"></span><span
                                class="path2"></span></i> </button>
                    <!--end::Close-->
                </div>
            </div>
        </div>
    </div>
@endsection
