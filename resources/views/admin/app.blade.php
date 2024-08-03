<!DOCTYPE html>
<html lang="fa" class="js">

<head>
    <base href="../" />
    <meta charset="utf-8" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />
    <!-- Page Title  -->
    <title>{{ $title }}</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.rtl.css') }}" />
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/theme.css') }}" />
</head>

<body class="has-rtl nk-body bg-lighter npc-default has-sidebar" dir="rtl">
    <!-- main @s -->
    <div class="nk-main">

        @include('admin.partial.nav')
        <!-- wrap @s -->
        <div class="nk-wrap">
            <!-- main header @s -->
            @include('admin.partial.topbar')

            @yield('content')
        </div>
    </div>
    </div>

    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    @yield('scripts')
</body>

</html>
