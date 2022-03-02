<!--desde aqui-->
<!DOCTYPE html>
<html lang="en">

@include('sections.head')

<body class="hold-transition sidebar-mini layout-fixed">
  
<div class="wrapper" id="app">
<contenido-component ruta="{{route('basepath')}}"></contendio-component> <!--aqui llama a la plantilla principal-->
</div>


@include('sections.script')
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

</body>
</html>
