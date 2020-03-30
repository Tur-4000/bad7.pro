<div class="row mt-2">
    <div class="col-12">
        <a href="{{ route('manage.pages.edit', $tags->name) }}" class="btn btn-outline-primary btn-sm float-left">
            {{--<a href="#" class="btn btn-outline-primary btn-sm float-left">--}}
            <i class="fas fa-edit"></i>
            Редактировать</a>
        @hasanyrole('Developer|Admin')
        <a href="{{ route('manage.pages.create') }}" class="btn btn-outline-success btn-sm float-right">
            <i class="fas fa-plus-square"></i>
            Добавить страницу</a>
        @endhasrole
    </div>
</div>

<div class="card mt-2">
    <h3 class="card-header">
        Title
    </h3>
    <div class="card-body">
        <p class="card-text h5">{{ $tags->title_tag }}</p>
    </div>
</div>

<div class="card mt-2">
    <h3 class="card-header">
        Description
    </h3>
    <div class="card-body">
        <p class="card-text h5">{{ $tags->description_tag }}</p>
    </div>
</div>

<div class="card mt-2">
    <h3 class="card-header">
        Keywords
    </h3>
    <div class="card-body">
        <p class="card-text h5">{{ $tags->keywords_tag }}</p>
    </div>
</div>
