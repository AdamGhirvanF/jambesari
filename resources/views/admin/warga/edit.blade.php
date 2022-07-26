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

  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Ubah Data Warga</h1>
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
                    <h3 class="card-title">Ubah Data Warga </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="/admin/warga/edit-store/{{$data->nik}}" method="POST">
                        @csrf
                    <div class="card-body">
                        <div class="form-group">
                        <label for="">NO KK</label>
                        <input type="text" class="form-control" value="{{$data->nokk}}" placeholder="NOKK" required name="nokk">
                        </div>
                        <div class="form-group">
                        <label for="">NIK</label>
                        <input type="text" class="form-control" value="{{$data->nik}}" placeholder="NIK" required name="nik">
                        </div>
                        <div class="form-group">
                        <label for="">Nama Kepala Keluarga</label>
                        <input type="text" class="form-control" value="{{$data->nmkk}}" placeholder="Nama Kepala Keluarga" required name="nmkk">
                        </div>
                        <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" value="{{$data->nama}}" placeholder="Nama" required name="nama">
                        </div>
                        <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select required name="jk" value="{{$data->jk}}" class="form-control">
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label for="">Tempat Lahir</label>
                        <input type="text" class="form-control" value="{{$data->tmp_lahir}}" placeholder="Tempat Lahir" required name="tmp_lahir">
                        </div>
                        <div class="form-group">
                        <label for="">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="{{$data->tgl_lahir}}" placeholder="Tanggal Lahir" required name="tgl_lahir">
                        </div>
                        <div class="form-group">
                        <label for="">Golongan Darah</label>
                        <input type="text" class="form-control" value="{{$data->gdr}}" placeholder="Golongan Darah" required name="gdr">
                        </div>
                        <div class="form-group">
                        <label for="">Agama</label>
                        <input type="text" class="form-control" value="{{$data->agama}}" placeholder="Agama" required name="agama">
                        </div>
                        <div class="form-group">
                        <label for="">satulimalima</label>
                        <input type="text" class="form-control" value="{{$data->satulimalima}}" placeholder="15543" required name="satulimalima">
                        </div>
                        <div class="form-group">
                        <label for="">Status Kawin</label>
                        <input type="text" class="form-control" value="{{$data->st_kawin}}" placeholder="Status Kawin" required name="st_kawin">
                        </div>
                        <div class="form-group">
                        <label for="">Shdrt</label>
                        <input type="text" class="form-control" value="{{$data->shdrt}}" placeholder="SHDRT" required name="shdrt">
                        </div>
                        <div class="form-group">
                        <label for="">Pendidikan</label>
                        <input type="text" class="form-control" value="{{$data->pddkn}}" placeholder="Pendidikan" required name="pddkn">
                        </div>
                        <div class="form-group">
                        <label for="">Pekerjaan</label>
                        <input type="text" class="form-control" value="{{$data->pkrjaan}}" placeholder="Pekerjaan" required name="pkrjaan">
                        </div>
                        <div class="form-group">
                        <label for="">Ibu</label>
                        <input type="text" class="form-control" value="{{$data->ibu}}" placeholder="Ibu" required name="ibu">
                        </div>
                        <div class="form-group">
                        <label for="">Ayah</label>
                        <input type="text" class="form-control" value="{{$data->ayah}}" placeholder="Ayah" required name="ayah">
                        </div>
                        <div class="form-group">
                        <label for="">NO HP</label>
                        <input type="text" class="form-control" value="{{$data->no_hp}}" placeholder="Nomor Handphone" required name="no_hp">
                        </div>
                        <div class="form-group">
                        <label for="">Dusun</label>
                        <input type="text" class="form-control" value="{{$data->dusun}}" placeholder="Dusun" required name="dusun">
                        </div>
                        <div class="form-group">
                        <label for="">RT</label>
                        <input type="text" class="form-control" value="{{$data->rt}}" placeholder="RT" required name="rt">
                        </div>
                        <div class="form-group">
                        <label for="">RW</label>
                        <input type="text" class="form-control" value="{{$data->rw}}" placeholder="RW" required name="rw">
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
