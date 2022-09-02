@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Онлайн регистрация</li>
            </ol>
        </nav>
        <div style="display: inline-block; justify-content: space-between">
            <h2 class="mb-8 mt-3"><b> Онлайн регистрация</b></h2>
            <a href="{{route('online.create')}}"  class="btn-primary btn">Добавить участника</a>
        </div>
        <table class="table table-bordered table-hover mt-4">
            <thead>
                <th>#</th>
                <th>ФИО</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Бейджик</th>
                <th>Действие</th>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
@endsection
