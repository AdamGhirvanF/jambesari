<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta required name="viewport" content="width=device-width, initial-scale=1">
  <title>Desa Jambesari</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <style>th{text-align: center;}</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-alt"></i>
              <p> Data Warga</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Tambah Data Warga</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Warga</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                    <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                    <h3 class="card-title">Isikan Data Warga </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/warga-store" method="POST">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                        <label for="">NO KK</label>
                        <input type="text" class="form-control" id="" placeholder="NOKK" required name="nokk">
                        </div>
                        <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" id="" placeholder="NIK" required name="nik">
                        </div>
                        <div class="form-group">
                        <label for="">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" id="" placeholder="Nama Kepala Keluarga" required name="nmkk">
                        </div>
                        <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" id="" placeholder="Nama" required name="nama">
                        </div>
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select required name="jk" id="" class="form-control">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" id="" placeholder="Tempat Lahir" required name="tmp_lahir">
                        </div>
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="text" class="form-control" id="" placeholder="Tanggal Lahir" required name="tgl_lahir">
                        </div>
                        <div class="form-group">
                        <label for="">Golongan Darah</label>
                        <input type="text" class="form-control" id="" placeholder="Golongan Darah" required name="gdr">
                        </div>
                        <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" class="form-control" id="" placeholder="Agama" required name="agama">
                        </div>
                        <div class="form-group">
                        <label for="">satulimalima</label>
                        <input type="text" class="form-control" id="" placeholder="15543" required name="satulimalima">
                        </div>
                        <div class="form-group">
                        <label for="">Status Kawin</label>
                        <input type="text" class="form-control" id="" placeholder="Status Kawin" required name="st_kawin">
                        </div>
                        <div class="form-group">
                        <label for="">Shdrt</label>
                        <input type="text" class="form-control" id="" placeholder="SHDRT" required name="shdrt">
                        </div>
                        <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" class="form-control" id="" placeholder="Pendidikan" required name="pddkn">
                        </div>
                        <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <input type="text" class="form-control" id="" placeholder="Pekerjaan" required name="pkrjaan">
                        </div>
                        <div class="form-group">
                        <label for="">Ibu</label>
                        <input type="text" class="form-control" id="" placeholder="Ibu" required name="ibu">
                        </div>
                        <div class="form-group">
                        <label for="">Ayah</label>
                        <input type="text" class="form-control" id="" placeholder="Ayah" required name="ayah">
                        </div>
                        <div class="form-group">
                        <label for="">NO HP</label>
                        <input type="text" class="form-control" id="" placeholder="Nomor Handphone" required name="no_hp">
                        </div>
                        <div class="form-group">
                        <label for="">Dusun</label>
                        <input type="text" class="form-control" id="" placeholder="Dusun" required name="dusun">
                        </div>
                        <div class="form-group">
                        <label for="">RT</label>
                        <input type="text" class="form-control" id="" placeholder="RT" required name="rt">
                        </div>
                        <div class="form-group">
                        <label for="">RW</label>
                        <input type="text" class="form-control" id="" placeholder="RW" required name="rw">
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
                <!-- /.card -->

            </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
