
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <title>Student Management</title>
   <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper" id="app">

  <!-- Main Header -->
  <header class="main-header">
      <span class="logo-lg"><b>Student Management</b></span>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="">
           <a href="{{ route('student') }}" >
             <i class="fa fa-power-off text-red"></i>   <span>Student</span>
            </a>
          
        </li>
        <li class="">
           <a href="{{ route('marks') }}" >
             <i class="fa fa-power-off text-red"></i>   <span>Marks</span>
            </a>
          
        </li>

      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   

    <!-- Main content -->
    <section class="content container-fluid">
        @yield('content')
    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>
</div>


<script src="{{asset('js/app.js')}}"></script>

<script>

  
  $('#studentEdit').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 
      var studId = button.data('studentId')
      var name = button.data('studentName') 
      var age = button.data('studentAge') 
      var gender = button.data('studentGender')
      var teacher = button.data('teacher') 
      var modal = $(this)

      modal.find('.modal-body #studentId').val(studId);
      modal.find('.modal-body #studentName').val(name);
      modal.find('.modal-body #studentAge').val(age);
      modal.find('.modal-body #studentGender').val(gender);
      modal.find('.modal-body #teacher').val(teacher);
})


  $('#delete').on('show.bs.modal', function (event) {

      var button = $(event.relatedTarget) 

      var studId = button.data('studentId') 
      var modal = $(this)

      modal.find('.modal-body #studentId').val(studId);
})


</script>

</body>
</html>
