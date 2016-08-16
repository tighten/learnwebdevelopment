<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Learn Web Development - Sponsored by Tighten Co.</title>

        <link rel="stylesheet" href="{{ $asset_prefix }}/css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300italic,400,400italic,500,500italic,700,700italic" rel="stylesheet" type="text/css">
    </head>
    <body class="full-height flex-col">
        <div class="flex-fit">
            @yield('body')
        </div>
        <footer class="bg-dark text-center p-xs-y-6 p-xs-x-4 text-light-muted text-sm">
            <p>&copy; {{ date('Y') }} <a href="https://tighten.co" class="link-light-muted">Tighten Co.</a></p>
        </footer>
    </body>
</html>
