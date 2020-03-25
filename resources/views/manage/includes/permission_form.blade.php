<div class="form-group">
    {{ Form::label('user_friendly_name', 'Название') }}
    {{ Form::text('user_friendly_name', null, ['class' => 'form-control', 'aria-describedby' => 'userFriendlyNameHelp']) }}
    <small id="userFriendlyNameHelp" class="form-text text-muted">Человекопонятное название разрешения.</small>
</div>

<div class="form-group">
    {{ Form::label('name', 'Техническое название') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'aria-describedby' => 'nameHelp']) }}
    <small id="nameHelp" class="form-text text-muted">Техническое название разрешения.</small>
</div>

<div class="form-group">
    {{ Form::label('guard_name', 'Guard name') }}
    {{ Form::text('guard_name', null, ['class' => 'form-control', 'aria-describedby' => 'guardHelp']) }}
    <small id="guardHelp" class="form-text text-muted">Guard name.</small>
</div>

{{--<div class="form-group">--}}
{{--    {{ Form::label('permissions', 'Разрешения') }}--}}
{{--    <select class="form-control" name="permissions[]" id="permissions" multiple aria-describedby="permissionsHelp" >--}}

{{--        @foreach($permissions as $permission)--}}
{{--            <option value="{{ $permission->id }}" @if($role->permissions->contains($permission->id)) selected @endif>{{ $permission->name }}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <small id="permissionsHelp" class="form-text text-muted">Разрешения для пользовательский роли.</small>--}}
{{--</div>--}}

<div class="form-group">
    {{ Form::label('description', 'Описание') }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'aria-describedby' => 'descriptionHelp']) }}
    <small id="descriptionHelp" class="form-text text-muted">Подробное описание разрешения.</small>
</div>

{{--<script>--}}
{{--    $(document).ready(function() {--}}
{{--        $('#permissions').select2();--}}
{{--    });--}}
{{--</script>--}}