<!DOCTYPE html>
<html lang="en">

<head>
   @include('auth.includes.head')
   @yield('customhead')
</head>

<body class="text-center">

   @include('auth.includes.header')


        @yield('content')


   @include('auth.includes.foot')
        @yield('customfooter')
   @include('auth.includes.footer')

</body>

</html>