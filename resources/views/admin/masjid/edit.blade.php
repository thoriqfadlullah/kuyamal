@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Data Info Donasi</h1>
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
                <form method="post" action="/admin/masjid/{{ $masjid -> id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama :</label>
                      <input type="text" class="form-control" id="nama" name="nama" value="{{ $masjid -> nama}}">
                    </div>
                    <div class="form-group">
                      <label for="nama">Kontak :</label>
                      <input type="text" class="form-control" id="kontak" name="kontak" value="{{ $masjid -> kontak}}">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat :</label>
                      <textarea type="text" class="form-control" id="alamat" name="alamat">{{ $masjid -> alamat}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nama">Tujuan :</label>
                        <input type="text" class="form-control" id="tujuan" name="tujuan" value="{{ $masjid -> tujuan}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Detail :</label>
                        <input type="text" class="form-control" id="detail" name="detail" value="{{ $masjid -> detail}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nominal :</label>
                        <input type="text" class="form-control" id="nominal" name="nominal" value="{{ $masjid -> nominal}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Bank :</label>
                        <input type="text" class="form-control" id="bank" name="bank" value="{{ $masjid -> bank}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">No Rek :</label>
                        <input type="text" class="form-control" id="rekbank" name="rekbank" value="{{ $masjid -> rekbank}}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Rek Atas Nama :</label>
                        <input type="text" class="form-control" id="atasnama" name="atasnama" value="{{ $masjid -> atasnama}}">
                    </div>
                    <button type="submit" class="btn btn-primary" name="action" value="edit">Edit</button>
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
