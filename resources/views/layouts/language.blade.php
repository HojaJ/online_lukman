<div class="dropdown">
    <button class="dropbtn">Dil<i class="fa fa-caret-down"></i></button>
    <div class="dropdown-content">
        @foreach($available_locales as $localeCode => $properties)
            <a  hreflang="{{ $localeCode }}" class="animated-hover {{ $localeCode == app()->getLocale() ? 'active' : '' }}" href="{{ route('language', $localeCode) }}">
                <img src="{{ asset('files/assets/img/'. $localeCode .'.png') }}" style="height: 35px; width: 50px">
            </a>
        @endforeach
    </div>
</div>