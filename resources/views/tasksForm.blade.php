@extends('layouts.app')

@section('content')
    <div class="container">
{{--        <div class="row">--}}
{{--            <div class="col">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">tasksForm</div>--}}
{{--                    <div class="card-body">Estas Logueado!</div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="row justify-content-center">
            <div class="col-6">
                <taskform></taskform>
            </div>
        </div>
    </div>
@endsection