@extends('_layouts.master')

@section('body')
<nav class="navbar navbar-brand">
    <div class="container">
        <div class="navbar-content">
            <div>
                <a class="link-plain text-xxl flex-y-center" href="{{ $asset_prefix }}/">
                    <strong>Learn Web Development</strong>
                </a>
            </div>
        </div>
    </div>
</nav>

<div class="container m-xs-b-6">
    <div class="row">
        <div class="col-md-3 m-xs-b-6">
            <p class="p-xs-x-1 p-xs-y-4 text-dark-soft">
                <small>Brought to you by <a href="https://tighten.co" class="link-tighten">Tighten Co.</a></small>
            </p>
        </div>
        <div class="col-md-9 documentation-page">
            @yield('learn_content')
        </div>
    </div>
</div>
@endsection
