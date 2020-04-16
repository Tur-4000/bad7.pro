@extends('manage.layouts.manage-content')

@section('tab-content')

    <div class="col-8">
        <div class="card">
            <h2 class="card-header">Контент страницы "Контакты"</h2>
            <div class="card-body">
                <h4 class="card-title">Адрес</h4>
                <p class="card-text">{{ $data->address }}</p>
                <hr>
                <h4 class="card-title">Контактный e-mail Sales</h4>
                <p class="card-text">{{ $data->email }}</p>
                <hr>
                <h4 class="card-title">Контактный e-mail Info</h4>
                <p class="card-text">{{ $data->email_info }}</p>
                <hr>
                <h4 class="card-title">Контактный телефон</h4>
                <p class="card-text">{{ $data->phone }}</p>
                <hr>
                <h4 class="card-title">Контактный телефон связанный с Viber</h4>
                <p class="card-text">{{ $data->phone_viber }}</p>
                <hr>
                <h4 class="card-title">Ссылка на страницу Facebook</h4>
                <p class="card-text">{{ $data->facebook }}</p>
                <hr>
                <h4 class="card-title">Ссылка на страницу Instagram</h4>
                <p class="card-text">{{ $data->instagram }}</p>
                <hr>
                <h4 class="card-title">Ссылка на канал Youtube</h4>
                <p class="card-text">{{ $data->youtube }}</p>
            </div>
        </div>
    </div>

    <div class="col-4">
        <div class="card">
            <div class="card-body">
                <p class="card-text">Изменена: {{ Date::parse($data->updated_at)->format('j M Y г.') }}</p>
            </div>
        </div>
        <div class="card mt-3">
            <div class="card-body">
                <a href="{{ route('manage.contacts.edit') }}" class="btn btn-primary">
                    <i class="fas fa-edit"></i>
                    Редактировать
                </a>
            </div>
        </div>
    </div>

@endsection
