@extends('_layouts.master')

@section('body')
<header class="p-xs-b-4">
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
    <div class="container text-center">
        <div class="constrain constrain-lg">
            <div class="m-xs-y-8">
                <h1 class="text-xjumbo m-xs-b-4">
                    Take your first steps.
                </h1>
                <h2 class="text-lg">
                    Want to learn how to develop web sites? We've listed a few basic first steps to get you started in your free time&mdash;and to give you a test to see if it's something you want to continue on with.
                </h2>
            </div>
        </div>
    </div>
</header>
<section class="p-xs-y-8 border-b bg-soft">
    <div class="container text-center">
        <h3 class="text-xl m-xs-b-6">
            Ready to get started?
        </h3>
        <div>
            <a href="{{ $asset_prefix }}/learn/start/" class="btn btn-lg btn-primary">
                Start learning now
            </a>
        </div>
    </div>
</section>
@endsection
