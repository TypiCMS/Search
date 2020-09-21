@extends('pages::public.master')

@section('bodyClass', 'body-search body-search-index body-page body-page-'.$page->id)

@section('page')

<div class="container pt-5">

    @if (!$errors->has('search'))
        <div class="search-results">

            <h1 class="search-results-title">@lang('Search results for “:search”', ['search' => request('search')])</h1>

            @if ($count)

                <div class="search-results-content">
                    @foreach ($results as $key => $result)
                    <div class="search-results-module">
                        <h2 class="search-results-module-title">{{ $result['models']->count() }} @choice('search-results.'.$result['module'], $result['models']->count())</h2>
                        <div class="search-results-module-results">
                            @include($result['module'].'::public._list-results', ['items' => $result['models']])
                        </div>
                    </div>
                    @endforeach
                </div>

            @else

                <p class="search-results-no-results text-center">@lang('There are no results that match your query.')</p>

            @endif

        </div>
    @else
        <p class="search-results-no-results text-center">{{ $errors->first('search') }}</p>
    @endif

</div>

@endsection
