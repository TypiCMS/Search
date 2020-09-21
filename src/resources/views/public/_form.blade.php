<form method="get" action="{{ route($lang.'::search') }}" class="search-form">
    <div class="input-group">
        <input class="search-input form-control" type="text" name="search" id="search" aria-label="@lang('Search')" placeholder="@lang('Search')" value="{{ old('search') }}">
        <div class="input-group-append">
            <button class="search-button btn btn-primary" type="submit">
                <span class="fa fa-search"></span>
                <span class="sr-only">Search</span>
            </button>
        </div>
    </div>
</form>
