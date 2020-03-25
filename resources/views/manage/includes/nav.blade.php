<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="/">bad7</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            @hasanyrole('Developer|Admin|SalesManager')
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('manage.index') }}">Заявки <span class="sr-only">(current)</span></a>
                </li>
            @endhasrole
            <li class="nav-item">
                <a class="nav-link" href="{{ route('manage.portfolio.index') }}">Работы</a>
            </li>
        </ul>

        @hasanyrole('Developer|Admin')
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Администрирование</a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="{{ route('manage.user.index') }}">
                            <i class="fas fa-user-friends"></i>
                            Пользователи
                        </a>
                        <a class="dropdown-item" href="{{ route('manage.role.index') }}">
                            <i class="fas fa-tags"></i>
                            Роли
                        </a>
                        @hasanyrole('Developer')
                            <a class="dropdown-item" href="{{ route('manage.permission.index') }}">
                                <i class="fas fa-lock"></i>
                                Разрешения
                            </a>
                        @endhasrole
                    </div>
                </li>
            </ul>
        @endhasrole

        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ auth()->user()->name }}</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="{{ route('change-password') }}">
                        <i class="fas fa-key"></i>
                        Изменить пароль
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                        Выйти
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
