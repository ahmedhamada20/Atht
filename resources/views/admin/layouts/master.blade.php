<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.layouts.head')
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary fixed rtl" style="font-family: 'Cairo', sans-serif;">

    <div class="wrapper">
        <div id="loader"></div>
        @include('admin.layouts.header')
        @include('admin.layouts.sidebar')


        @yield('contct')
     
     

        @include('admin.layouts.footer')
    </div>






 
    @include('admin.layouts.footerjs')

</body>
</html>
