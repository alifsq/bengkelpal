@extends('index')
@section('isi')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Revisi Gambar </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/revisigambar">Home</a></li>
                        <li class="breadcrumb-item active">Revisi Gambar</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div class="d-flex justify-content-end mb-2">
        <button type="button" class="btn btn-default bg-green sm-right mr-3 mb-3" data-toggle="modal" data-target="#modal-add-aktivitas">Tambah Revisi</button>
    </div>

    <!-- /.modal Add Data-->
    <div class="modal fade" id="modal-add-aktivitas">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Revisi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <form method="POST" action="/revisigambar">
                        @csrf
                        <div class="card-body">
                            <!--select Project-->
                            <div class="form-group">
                                <label>Project</label>
                                <select class="form-control select2bs4" style="width: 100%;" id="id_project" name="id_project">
                                    <option>Menu1</option>
                                    <option>Menu1</option>
                                </select>
                            </div>
                            <!--/select Project-->
                            <div class="form-group">
                                <label for="InputNama">Judul Revisi</label>
                                <input type="text" class="form-control" id="judul_revisi" placeholder="Judul Revisi" name="judul_revisi">
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control select2bs4" style="width: 100%;" id="status_aktivitas" name="status_revisi">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Non Aktif">Non Aktif</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="InputKeterangan">Keterangan</label>
                                <input type="text" class="form-control" id="InputKeterangan" placeholder="Keterangan Revisi" name="keterangan_revisi">
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>

            </div>

            <!-- /.modal-content -->
        </div>

        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal Add Data-->

</div>

@endsection
