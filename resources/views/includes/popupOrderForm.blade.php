{{ Form::model($order, ['route' => 'order.add', 'method' => 'POST']) }}
<p style="text-align: right;"><a class="popup-modal-dismiss" href="#">Закрыть</a></p>
<h2>Форма обратной связи</h2>
<div class="popupOrderForm__element">
    {{ Form::label('name', 'Привет, меня зовут *') }}
    {{ Form::text('name', null, ['class' => 'form__control', 'aria-describedby' => 'nameHelp']) }}
    <p class="popupOrderForm__help">Укажите своё имя</p>
</div>
<div class="popupOrderForm__element">
    {{ Form::label('company', 'я представляю компанию *') }}
    {{ Form::text('company', null, ['class' => 'form__control', 'aria-describedby' => 'companyHelp']) }}
    <p class="popupOrderForm__help">Укажите название компании</p>
</div>
<div class="popupOrderForm__element">
    {{ Form::label('description', 'я хочу *') }}
    {{ Form::textarea('description', null, ['class' => 'form__control', 'rows' => 5]) }}
</div>
<div class="popupOrderForm__element">
    {{ Form::label('contact', 'со мной можно связаться *') }}
    {{ Form::text('contact', null, ['class' => 'form__control', 'aria-describedby' => 'contactHelp']) }}
    <p class="popupOrderForm__help">Укажите номер телефона или электронную почту</p>
</div>
<div class="popupOrderForm__element">
    {{ Form::submit('Отправить', ['class' => 'popupOrderForm__button']) }}
</div>
{{ Form::close() }}
