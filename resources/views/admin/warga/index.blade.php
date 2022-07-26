<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
 @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Warga</h1>
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
                <h3 class="card-title"><a href="/admin/warga/create" class="btn btn-primary" type="submit">Tambah Warga</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="example2" class="table table-bordered table-hover table-responsive">
                  <thead>
                  <tr>
                    <th>No.</th>
                    <th>NO KK</th>
                    <th>NIK</th>
                    <th>Nama Kepala Keluarga</th>
                    <th>Nama</th>
                    <th>JK</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Golongan Darah</th>
                    <th>Agama</th>
                    <th>15543</th>
                    <th>Status Kawin</th>
                    <th>SHDRT</th>
                    <th>Pendidikan</th>
                    <th>Pekerjaan</th>
                    <th>Ibu</th>
                    <th>Ayah</th>
                    <th>No HP</th>
                    <th>Dusun</th>
                    <th>RT</th>
                    <th>RW</th>
                    <th style="width: 200px!important;">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($data as $key => $w)
                    <tr>
                      <td>{{$key+=1}}</td>
                      <td>{{$w->nokk}}</td>
                      <td>{{$w->nik}}</td>
                      <td>{{$w->nmkk}}</td>
                      <td>{{$w->nama}}</td>
                      <td>{{$w->jk}}</td>
                      <td>{{$w->tmp_lahir}}</td>
                      <td>{{$w->tgl_lahir}}</td>
                      <td>{{$w->gdr}}</td>
                      <td>{{$w->agama}}</td>
                      <td>{{$w->satulimalima}}</td>
                      <td>{{$w->st_kawin}}</td>
                      <td>{{$w->shdrt}}</td>
                      <td>{{$w->pddkn}}</td>
                      <td>{{$w->pkrjaan}}</td>
                      <td>{{$w->ibu}}</td>
                      <td>{{$w->ayah}}</td>
                      <td>{{$w->no_hp}}</td>
                      <td>{{$w->dusun}}</td>
                      <td>{{$w->rt}}</td>
                      <td>{{$w->rw}}</td>
                      <td><a href="/admin/warga/edit/{{$w->nik}}" class="btn btn-primary"><i class="fas fa-edit"></i></a> <a href="/admin/warga/delete/{{$w->nik}}" class="btn btn-danger" onclick="return confirm('Apakah anda yakin untuk menghapus data ini?');"><i class="fa fa-trash"></i></a></td>
                    </tr>
                    @endforeach
                  </tbody>
                  <tfoot>

                  </tfoot>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": false,
    });
  });
</script>
</body>
</html>
