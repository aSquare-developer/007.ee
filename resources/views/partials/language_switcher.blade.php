@foreach($available_locales as $locale_name => $available_locale)
    @if ($available_locale != $current_locale)
        <a class="ml-1 underline ml-2 mr-2" href="/{{ $available_locale }}">
            <img src="images/{{ $locale_name }}.svg" alt="{{ $locale_name }}" width="27"/>
        </a>
    @endif
@endforeach