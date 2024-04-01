@extends('layouts.app')

@section('template_title')
    {{ $actividad->name ?? __('Show') . " " . __('Actividad') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Actividad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('actividads.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                        <div class="form-group mb-2 mb20">
                            <strong>Nombre:</strong>
                            {{ $actividad->nombre }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Dia:</strong>
                            {{ $actividad->dia }}
                        </div>
                        <div class="form-group mb-2 mb20">
                            <strong>Horario:</strong>
                            {{ $actividad->horario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
