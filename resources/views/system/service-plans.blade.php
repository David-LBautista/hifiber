@extends('layouts.app')

@section('content')
    <div class="card card-dashed">
        <div class="card-header">
            <h3 class="card-title">Planes</h3>
            <div class="card-toolbar">
                <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top"
                    aria-label="Nueva unidad" data-kt-initialized="1">
                    <button type="button" class="btn btn-icon btn-light-primary" data-bs-toggle="modal"
                        data-bs-target="#modal-plans">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">

                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect fill="currentColor" x="4" y="11" width="16" height="2" rx="1" />
                                <rect fill="currentColor" opacity="0.3"
                                    transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000) "
                                    x="4" y="11" width="16" height="2" rx="1" />
                            </g>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (session('error'))
                <div class="alert alert-success" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            <!--begin::Datatable-->
            <div id="prices-table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div id="prices-table_filter" class="dataTables_filter"><label>Search:<input type="search"
                            class="form-control form-control-solid w-250px" placeholder=""
                            aria-controls="prices-table"></label></div>
                <div class="table-responsive">
                    <table id="prices-table" data-url="https://belive.test/api/unit"
                        class="table align-middle table-row-dashed fs-6 gy-5 datatable dataTable no-footer"
                        aria-describedby="prices-table_info" style="width: 1161px;">
                        <thead>
                            <tr>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    aria-label="Nombre: activate to sort column ascending">
                                    ID
                                </th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 sorting_desc"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    style="width: 232.25px;" aria-sort="descending"
                                    aria-label="Descripción: activate to sort column ascending">
                                    Nombre
                                </th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0 sorting_desc"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    style="width: 232.25px;" aria-sort="descending"
                                    aria-label="Descripción: activate to sort column ascending">
                                    Ordenamiento
                                </th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    aria-label="Abreviatura: activate to sort column ascending">
                                    Precio</th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    aria-label="Actualización: activate to sort column ascending">
                                    Servicio</th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    aria-label="Actualización: activate to sort column ascending">
                                    Servicio Plan</th>
                                <th class="sorting text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    tabindex="0" aria-controls="prices-table" rowspan="1" colspan="1"
                                    aria-label="Actualización: activate to sort column ascending">
                                    Tipo de equipamiento</th>
                                <th class="text-center sorting_disabled text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    rowspan="1" colspan="1" style="width: 142.25px;" aria-label="Acciones">
                                    Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @foreach ($data->plans as $plans)
                                <tr class="odd">
                                    <td>
                                        {{ $plans->id }}
                                    </td>
                                    <td>
                                        {{ $plans->name }}
                                    </td>
                                    <td>
                                        {{ $plans->ordering }}
                                    </td>
                                    <td>
                                        {{ Number::currency($plans->price, in: 'USD') }}
                                    </td>
                                    <td>
                                        @isset($plans->get_cat_type_service)
                                            {{ $plans->get_cat_type_service->name }}
                                        @endisset
                                    </td>
                                    <td>
                                        @isset($plans->get_cat_type_service_plan)
                                            {{ $plans->get_cat_type_service_plan->name }}
                                        @endisset
                                    </td>
                                    <td>
                                        @isset($plans->get_cat_type_equipment)
                                            {{ $plans->get_cat_type_equipment->name }}
                                        @endisset
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown"
                                            data-id="1">
                                            <button 
                                                type="button"
                                                class="btn btn-sm btn-clean btn-icon mr-2 btn-edit"
                                                data-url="{{ route('serviceplans.get', ['id' => $plans->id ]) }}" 
                                                title="Editar"
                                                id="edit-plan"
                                            >
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24" height="24"/>
                                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="currentColor" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
                                                        <rect fill="currentColor" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
                                                    </g>
                                                </svg>
                                            </button>

                                            <form action="{{ route('serviceplans.destroy', ['id' => $plans->id]) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-sm btn-clean btn-icon mr-2 btn-del">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                        height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <defs />
                                                        <g stroke="none" stroke-width="1" fill="none"
                                                            fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24" />
                                                            <path
                                                                d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z"
                                                                fill="currentColor" fill-rule="nonzero" />
                                                            <path
                                                                d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
                                                                fill="currentColor" opacity="0.3" />
                                                        </g>
                                                    </svg>
                                                </button>
                                            </form>

                                            {{-- <button type="button"
                                                class="btn btn-sm btn-clean btn-icon mr-2 btn-edit"
                                                data-url="https://belive.test/api/unit/update/1" title="Editar"><i
                                                    class="fa fa-edit"></i>
                                            </button>
                                            <button
                                                 title="Eliminar"><i
                                                    class="fa fa-trash-alt"></i>
                                            </button> --}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <!--end::Datatable-->
        </div>
    </div>


    <div class="modal fade" tabindex="-1" id="modal-plans">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('serviceplans.save') }}" method="POST" class="automatic-submit" id="form-plans-services">
                @csrf

                <input type="hidden" name="id" id="id" value="0">

                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Plan</h3>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-1"></span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="form-group mb-3">
                            <label class="form-label" for="name">Nombre</label>
                            <input type="text" class="form-control" value="" name="name" id="name">
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="ordering">Ordenamiento</label>
                            <input type="number" class="form-control" value="1" name="ordering" id="ordering">
                        </div>
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Precio</label>
                                    <input type="number" class="form-control" value="" name="price" id="price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-3">
                                    <label class="form-label" for="name">Color</label>
                                    <input type="color" class="form-control" id="color" name="color" value="#1E61D0" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="">Servicio</label>
                            <select name="cat_type_service" class="form-select" id="cat_type_service">
                                <option value="0">Selecciona una opción</option>
                                @foreach ($data->cat_type_services as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="">Tipo de Plan</label>
                            <select name="cat_type_service_plan" class="form-select" id="cat_type_service_plan">
                                <option value="0">Selecciona una opción</option>
                                @foreach ($data->cat_type_services_plan as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="">Equipo</label>
                            <select name="cat_type_equipment" class="form-select" id="cat_type_equipment">
                                <option value="0">Selecciona una opción</option>
                                @foreach ($data->cat_type_equipment as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="description_short">Descripción Corta</label>
                            <textarea name="description_short" id="description_short" class="form-control" style="min-height: 100px"></textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label class="form-label" for="description_long">Descripción</label>
                            <textarea name="description_long" id="kt_docs_ckeditor_classic" style="min-height: 200px"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>
    <script src="{{ asset('assets/js/service-plans.js') }}"></script>
@endpush
