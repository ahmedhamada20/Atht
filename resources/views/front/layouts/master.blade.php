<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    @include('front.layouts.head')
</head>
<body>
    @include('front.layouts.mobilemenu')

    <div class="site">
        <div class="site__container">
            @include('front.layouts.header')
            @yield('contact')
            @include('front.layouts.footer')
        </div>
    </div>
    @include('front.layouts.footerjs')
</body>
</html>
