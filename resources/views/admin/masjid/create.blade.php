@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tambah Data Info Donasi</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form method="post" action="/admin/masjid">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama :</label>
                      <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                    <div class="form-group">
                      <label for="nama">Kontak :</label>
                      <input type="text" class="form-control" id="kontak" name="kontak">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat :</label>
                      <textarea type="text" class="form-control" id="alamat" name="alamat"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tujuan :</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan">
                    </div>
                    <div class="form-group">
                        <label for="nama">Detail :</label>
                        <textarea type="text" class="form-control" id="detail" name="detail"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nominal :</label>
                        <input type="text" class="form-control" id="nominal" name="nominal">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Bank :</label>
                        <input type="text" class="form-control" id="bank" name="bank">
                    </div>
                    <div class="form-group">
                        <label for="nama">No Rek :</label>
                        <input type="text" class="form-control" id="rekbank" name="rekbank">
                    </div>
                    <div class="form-group">
                        <label for="nama">Atas Nama :</label>
                        <input type="text" class="form-control" id="atasnama" name="atasnama">
                    </div>
                    <button type="submit" class="btn btn-primary" name="action" value="tambah">Tambah</button>
                    <button type="submit" class="btn btn-success" name="action" value="kembali">Kembali</button>
                  </form>
            </div>
        </div>
        <div class="row">
          <section class="col-lg-5 connectedSortable">
          </section>
        </div>
      </div>
    </section>
  </div>

@endsection
