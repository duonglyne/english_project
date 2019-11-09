<!DOCTYPE html>
<html lang="en">
<!--head-->
@include('frontend.partial.head')
<!--//head-->

<body>
<!-- header-starts -->
@include('frontend.partial.header')
<!-- //header-ends -->
@yield('content')
<!--footer-->
@include('frontend.partial.footer')
<!--//footer-->
</body>
</html>
