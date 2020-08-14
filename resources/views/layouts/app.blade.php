<!DOCTYPE html>
<html lang="en">
@include('plantilla.components.head')
@livewireStyles
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
@include('plantilla.components.navbar')
@include('plantilla.components.aside')

  <div class="content-wrapper">
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </section>
  </div>
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
@include('plantilla.components.footer')
</div>
@include('plantilla.components.script')
@livewireScripts
</body>
</html>
