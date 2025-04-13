<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css'])

    <title>{{ $title ?? 'Page Title' }}</title>

</head>
<body>

    {{ $header }}
    {{ $slot }}
    {{--        @livewireScripts--}}
    @vite(['resources/js/app.js'])
    <script >
function clickArticle(e) {
    e.classList.add("activ_article")
    
}
    </script>


</body>
</html>