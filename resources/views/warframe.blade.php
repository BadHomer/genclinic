<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @yield('styles')
    @vite('resources/js/app.js')
</head>
<body>
@include('components.header')
<div class="primary-btn" x-data x-on:click="$dispatch('open-modal')">
    showMore
</div>
@livewire('drop-down')
@yield('main')

@include('components.footer')

</body>
</html>
