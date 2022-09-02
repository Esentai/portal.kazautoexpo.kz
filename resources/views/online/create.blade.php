@extends('layouts.app')

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('online')}}">Онлайн регистрация</a></li>
                <li class="breadcrumb-item active" aria-current="page">Добавить участника</li>
            </ol>
        </nav>
        <div style="display: inline-block; justify-content: space-between">
            <h2 class="mb-8 mt-3"><b> Добавить участника</b></h2>
        </div>
        <form action="{{route('online.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Имя:*">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Фамилия:*</label>
                <input type="text" name="surname" class="form-control" id="surname" placeholder="Фамилия:*">
            </div>
            <div class="mb-3">
                <label for="company" class="form-label">Ваша компания (организация):*</label>
                <input type="text" name="company" class="form-control" id="company" placeholder="Ваша компания (организация):*">
            </div>
            <div class="mb-3">
                <label for="job" class="form-label">Должность:*</label>
                <input type="text" name="job" class="form-control" id="job" placeholder="Должность:*">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email:*</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email:*">
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефон:*</label>
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Телефон:*">
            </div>
            <div class="mb-3">
                <label for="website" class="form-label">Сайт:</label>
                <input type="text" name="website" class="form-control" id="website" placeholder="Сайт:">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Откуда узнали о выставке*</label>
                <textarea type="text" name="content" class="form-control" id="content" placeholder="Откуда узнали о выставке*"> </textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Добавить</button>
        </form>
    </div>
@endsection
