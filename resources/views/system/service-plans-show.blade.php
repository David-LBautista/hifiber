@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-stretch mb-5 mb-xl-8">
                    <div class="card-header">
                      Crear nuevo plan
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ route('serviceplans.save') }}" method="post">
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Plan</label>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="PLAN BÁSICO">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Precio</label>
                                        <input type="number" name="price" id="price" class="form-control" placeholder="$ 500.00">
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cat_type_service">Tipo de Servicio</label>
                                        <select name="cat_type_service" class="form-control" id="cat_type_service">
                                            @foreach ($data->get_cat_type_service as $cat_type_service)
                                                <option value="{{ $cat_type_service->id }}">{{ $cat_type_service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <select name="cat_type_equipment" class="form-control" id="">
                                            @foreach ($data->get_cat_type_equipment as $cat_type_equipment)
                                                <option value="{{ $cat_type_equipment->id }}">{{ $cat_type_equipment->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name"></label>
                                        <select name="cat_type_equipment" class="form-control" id="">
                                            @foreach ($data->get_cat_type_service_plan as $cat_type_service_plan)
                                                <option value="{{ $cat_type_service_plan->id }}">{{ $cat_type_service_plan->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-6">
                                    
                                </div>
                                <div class="col-md-6"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/service-plans.js') }}"></script>
@endpush
