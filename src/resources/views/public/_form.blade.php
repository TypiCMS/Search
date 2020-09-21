{!! Form::setToken(null) !!}
{!! BootForm::open()->action(route($lang.'::search'))->method('get')->class('search-form') !!}
    {!! Form::label('Search')->addClass('search-label sr-only')->forId('search') !!}
    {!! Form::text('search')->id('search')->placeholder(__('Search'))->addClass('search-input form-control')->value(old('search') ?? request('search')) !!}
    <button class="search-button" type="submit">
        <span class="fa fa-search"></span>
        <span class="sr-only">Search</span>
    </button>
{!! BootForm::close() !!}
