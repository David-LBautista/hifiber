@extends('layouts.app')

@section('content')
    <div class="card card-dashed">
        <div class="card-header">
            <h3 class="card-title">Planes</h3>
            <div class="card-toolbar">
                <div data-bs-toggle="tooltip" data-bs-custom-class="tooltip-inverse" data-bs-placement="top"
                    aria-label="Nueva unidad" data-kt-initialized="1">
                    <button type="button" class="btn btn-icon btn-light-primary" data-bs-toggle="modal"
                        data-bs-target="#modal-unit">
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
                                        {{ Number::currency($plans->price, in: 'USD') }}
                                    </td>
                                    <td>
                                        {{ $plans->get_cat_type_service->name }}
                                    </td>
                                    <td>
                                        {{ $plans->get_cat_type_service_plan->name }}
                                    </td>
                                    <td>
                                        {{ $plans->get_cat_type_equipment->name }}
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown" data-id="1">
                                            <form action="{{ route('serviceplans.destroy', [ 'id' => $plans->id ]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
  
                                                <button type="submit" class="btn btn-sm btn-clean btn-icon mr-2 btn-del">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                        <defs/>
                                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                            <rect x="0" y="0" width="24" height="24"/>
                                                            <path d="M6,8 L18,8 L17.106535,19.6150447 C17.04642,20.3965405 16.3947578,21 15.6109533,21 L8.38904671,21 C7.60524225,21 6.95358004,20.3965405 6.89346498,19.6150447 L6,8 Z M8,10 L8.45438229,14.0894406 L15.5517885,14.0339036 L16,10 L8,10 Z" fill="currentColor" fill-rule="nonzero"/>
                                                            <path d="M14,4.5 L14,3.5 C14,3.22385763 13.7761424,3 13.5,3 L10.5,3 C10.2238576,3 10,3.22385763 10,3.5 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="currentColor" opacity="0.3"/>
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
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/service-plans.js') }}"></script>
@endpush
