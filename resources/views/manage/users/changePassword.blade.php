@extends('manage.layouts.manage-app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 class="card-header">Изменить пароль ({{ auth()->user()->name }})</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('change-password.update') }}">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger" role="alert">
                                        {{ $error }}
                                    </div>
                                @endforeach
                            @endif
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Действующий пароль</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="current_password" autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="new_password" class="col-md-4 col-form-label text-md-right">Новый пароль</label>
                                <div class="col-md-6">
                                    <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="new_confirm_password" class="col-md-4 col-form-label text-md-right">Подтверждение нового пароля</label>
                                <div class="col-md-6">
                                    <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update Password
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection