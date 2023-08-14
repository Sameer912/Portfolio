<!DOCTYPE html>
<html lang="en">
@include('frontend._partials._head')

<body>

    @include('frontend._partials._header')

    @yield('body')

    @include('frontend._partials._footer')
    @include('frontend._partials._script')
</body>

</html>