<!DOCTYPE html>
<html lang="en">

@include('admin.blocks.head')
<body data-sidebar="dark">
   @include('admin.blocks.header')

   <!-- ========== Left Sidebar-menu Start ========== -->
    @include('admin.blocks.menu.sidebar')
    <!-- Left Sidebar End -->

   <!-- Begin page -->
   <div id="layout-wrapper">
        <div class="main-content">

            @yield('content')

            @include('admin.blocks.footer')

        </div>
   </div>
   <!-- JAVASCRIPT -->
    @include('admin.inc.scripts')
</body>
</html>
