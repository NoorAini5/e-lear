<html>
    <head>
        <title>Data Tables Dengan Bootstrap | Suckittrees.com</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
        <!--Jika Tidak di download File Bootstrapnya silahkan gunakan link berikut-->
        <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.css">
        <script type="text/javascript" language="javascript" src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
        <script type="text/javascript" language="javascript" src="http://cdn.datatables.net/plug-ins/3cfcc339e89/integration/bootstrap/3/dataTables.bootstrap.js"></script>
        <!--End Link yang langsung ke website nya -->
        </head>
    <body>
        <div class="container">
            <h2 class="text-center">  {{ $data->judul }}</h2>
            <h2 class="text-center"> Mata Kuliah {{ $data->mapel->nama }}</h2>
            <div class="box-body table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nama Siswa</th>
                            <th>Nilai</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ( as ) --}}
                        <tr>
                            <td> n</td>
                            <td> 4</td>
                            <td> 4</td>
                        </tr>
                        {{-- @endforeach --}}

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <td> 4</td>
                        </tr>
                    </tfoot>
                </table>
            </div><!-- /.box-body -->
        </div>
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.dataTables.min.js"></script>
        <script src="js/dataTables.bootstrap.js"></script>
        <script type="text/javascript">
            $(function() {
                $('#example1').dataTable();
            });
        </script>
    </body>
</html>
