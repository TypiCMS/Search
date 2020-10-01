@if(Route::has($lang.'::search'))
<form method="get" action="{{ route($lang.'::search') }}" class="search-form">
    <div class="input-group">
        <input class="search-input form-control" type="text" name="search" id="search" aria-label="@lang('Search')" placeholder="@lang('Search')" value="{{ old('search') }}">
        <div class="input-group-append">
            <button class="search-button btn btn-primary" type="submit">
                <svg width="1rem" height="1rem" viewBox="0 0 1792 1792" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1216 832q0-185-131.5-316.5t-316.5-131.5-316.5 131.5-131.5 316.5 131.5 316.5 316.5 131.5 316.5-131.5 131.5-316.5zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225-55.5-273.5 55.5-273.5 150-225 225-150 273.5-55.5 273.5 55.5 225 150 150 225 55.5 273.5q0 220-124 399l343 343q37 37 37 90z"/>
                </svg>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>
@endif
