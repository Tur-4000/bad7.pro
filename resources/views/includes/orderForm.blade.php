{{ Form::model($order, ['route' => 'order.add', 'method' => 'POST']) }}
<div class="form__element">
    {{ Form::label('name', 'Привет, меня зовут *') }}
    {{ Form::text('name', null, ['class' => 'form__control', 'aria-describedby' => 'nameHelp', 'required' => 'required']) }}
    <p class="form__help">Укажите своё имя</p>
    @error('name')
        <div class="form__alert form__alert--danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__element">
    {{ Form::label('company', 'я представляю компанию') }}
    {{ Form::text('company', null, ['class' => 'form__control', 'aria-describedby' => 'companyHelp']) }}
    <p class="form__help">Укажите название компании</p>
    @error('company')
        <div class="form__alert form__alert--danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__element">
    {{ Form::label('description', 'я хочу') }}
    {{ Form::textarea('description', null, ['class' => 'form__control', 'rows' => 5]) }}
    @error('description')
        <div class="form__alert form__alert--danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__element">
    {{ Form::label('contact', 'со мной можно связаться *') }}
    {{ Form::text('contact', null, ['class' => 'form__control', 'aria-describedby' => 'contactHelp', 'required' => 'required']) }}
    <p class="form__help">Укажите номер телефона или электронную почту</p>
    @error('contact')
        <div class="form__alert form__alert--danger">{{ $message }}</div>
    @enderror
</div>
<div class="form__element">
    {{ Form::submit('Отправить', ['class' => 'form__button']) }}
</div>
{{ Form::close() }}
