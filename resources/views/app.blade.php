<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!--  ICONOS  -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('icono/apple-touch-icon.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('icono/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('icono/favicon-16x16.png')}}">
        <link rel="manifest" href="{{asset('icono/site.webmanifest')}}">
        <link rel="mask-icon" href="{{asset('icono/safari-pinned-tab.svg')}}" color="#5bbad5">
        <link rel="shortcut icon" href="{{asset('icono/favicon.ico')}}">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="{{asset('icono/browserconfig.xml')}}">
        <meta name="theme-color" content="#ffffff">

        <!-- META TWITTER, FACEBOOK, GOOGLE, ETC -->
        <!-- Primary Meta Tags -->
        <title>ENCOR S.A. - Energias de Corrientes S.A.</title>
        <meta name="title" content="ENCOR S.A. - Energía Correntina S.A.">
        <meta name="description" content="Somos la Primer Empresa Correntina dedicada al desarrollo de Energías Alternativas mediante el uso de fuentes renovables.">
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://encorsa.corrientes.gob.ar">
        <meta property="og:title" content="ENCOR S.A. - Energía Correntina S.A.">
        <meta property="og:description" content="Somos la Primer Empresa Correntina dedicada al desarrollo de Energías Alternativas mediante el uso de fuentes renovables.">
        <meta property="og:image" content="{{asset('img/encorsa.jpg')}}">
        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://encorsa.corrientes.gob.ar">
        <meta property="twitter:title" content="ENCOR S.A. - Energía Correntina S.A.">
        <meta property="twitter:description" content="Somos la Primer Empresa Correntina dedicada al desarrollo de Energías Alternativas mediante el uso de fuentes renovables.">
        <meta property="twitter:image" content="{{asset('img/encorsa.jpg')}}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
 <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>

    <body class="bg-gray-100">
        @inertia
    </body>
</html>


