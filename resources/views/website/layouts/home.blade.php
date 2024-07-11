<!DOCTYPE html>
<html lang="en">

<head>
   @include('website.includes.head')
</head>

<body>
   @include('website.includes.header')
   @include('website.components.hero')
   <main id="main">
        @yield('content')
   </main>

   @include('website.includes.foot')
   @include('website.includes.footer')

</body>

</html>