<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Tambah Data Pengunjung</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Forecasting</a></li>
                        <li class="breadcrumb-item active">Tambah Data Pengunjung</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <div class="col-lg-12">
                <div class="card">
                    <form action="system/add-data-proses.php" method="post">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Minggu</label>
                                <input class="form-control" type="week" name="Nama" placeholder="Masukkan Minggu" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Pengunjung</label>
                                <input class="form-control" type="text" name="username" placeholder="Masukkan Jumlah Pengunjung" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.container-fluid -->
    </div>
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->