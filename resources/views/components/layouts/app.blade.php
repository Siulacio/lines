

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Merck - {{$title}}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}')"/>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>


<body class="antialiased bg-slate-100 white:bg-slate-900">

<x-layouts.navigation />
@if(session('status'))
    <div>{{ session('status') }}</div>
        <div class="max-w-screen-xl px-3 py-2 mx-auto font-bold text-white sm:px-6 lg:px-8 bg-emerald-500 dark:bg-emerald-700">
            {{ session('status') }}
        </div>

@endif

{{$slot}}

</body>
</html>

