@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Panel</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        <a href="{{route('online')}}" class="btn btn-secondary mt-2 d-block" style="text-align: left">Онлайн регистрация</a>
                        <a href="#" class="btn btn-secondary mt-2 d-block" style="text-align: left">Запрос на участие</a>
                        <a href="#" class="btn btn-secondary mt-2 d-block" style="text-align: left">Отчет</a>
                        <a href="#" class="btn btn-secondary mt-2 d-block" style="text-align: left">Статистика</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
