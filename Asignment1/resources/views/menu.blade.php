<!DOCTYPE html>
<html>

<head>
  @include('layouts.css')
</head>

<body class="sub_page">
    <!-- header section strats -->
     @include('layouts.header')
    <!-- end header section -->


  <!-- food section -->

  <section class="food_section layout_padding">
     @include('layouts.food')
  </section>

  <!-- end food section -->

  <!-- footer section -->
@include('layouts.footer')
  <!-- footer section -->
@include('layouts.js')

</body>

</html>