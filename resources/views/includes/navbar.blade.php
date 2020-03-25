<div class="navbar__logo">
    <a href="/" class="logo__link">
        <svg class="logo__img">
            <use xlink:href="/img/BAD7_Logo.svg#full_logo"></use>
        </svg>
    </a>
</div>

<ul class="navbar__list list">
    <li class="list__element {{ request()->is('services') ? 'list__element--active' : null }}">
        <a href="{{ route('services') }}" class="list__link">Услуги</a>
    </li>
    <li class="list__element {{ request()->is('portfolio') ? 'list__element--active' : null }}">
        <a href="{{ route('portfolio') }}" class="list__link">Работы</a>
    </li>
    <li class="list__element {{ request()->is('contacts') ? 'list__element--active' : null }}">
        <a href="{{ route('contacts') }}" class="list__link">Контакты</a>
    </li>
</ul>

<ul class="navbar__socials socials">
    <li class="socials__element">
        <a href="https://www.facebook.com/" class="socials__link" aria-label="Facebook">
            <svg class="socials__facebook">
                <use xlink:href="/img/symbol/sprite.svg#fb"></use>
            </svg>
        </a>
    </li>
    <li class="socials__element">
        <a href="https://twitter.com/" class="socials__link" aria-label="Twitter">
            <svg class="socials__twitter">
                <use xlink:href="/img/symbol/sprite.svg#twitter"></use>
            </svg>
        </a>
    </li>
    <li class="socials__element">
        <a href="https://www.instagram.com/" class="socials__link" aria-label="Instagram">
            <svg class="socials__instagram">
                <use xlink:href="/img/symbol/sprite.svg#instagram"></use>
            </svg>
        </a>
    </li>
    <li class="socials__element">
        <a href="https://www.youtube.com/channel/UCKCNjLQGyFdnxz5bhGMsxMQ" class="socials__link" aria-label="Youtube">
            <svg class="socials__youtube">
                <use xlink:href="/img/symbol/sprite.svg#youtube"></use>
            </svg>
        </a>
    </li>
</ul>

<div class="navbar__hamburger hamburger">
    <span class="hamburger__element"></span>
</div>

<ul class="navbar__contacts">
    <li class="navbar__contacts--element">
        <a href="mailto:sales@bad7.pro" class="navbar__contacts--link">sales@bad7.pro</a>
    </li>
    <li class="navbar__contacts--element">
        <a href="tel:+380675973963" class="navbar__contacts--link">+38 (067) 597 39 63</a>
    </li>
</ul>