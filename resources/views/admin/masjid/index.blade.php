@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Daftar Donasi <a href="/admin/masjid/create" type="button" class="btn btn-info">+ Data</a></h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status')}}
              </div>
          @endif
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    <div class="card-body">

                        <table class="table table-striped table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th>NO</th>
                                    <th>NAMA</th>
                                    <th>KONTAK</th>
                                    <th>ALAMAT</th>
                                    <th>TUJUAN</th>
                                    <th>DETAIL</th>
                                    <th>NOMINAL</th>
                                    <th>NAMA BANK</th>
                                    <th>NO REKENING</th>
                                    <th>REK ATAS NAMA</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($masjid as $contain)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$contain->nama}}</td>
                                <td>{{$contain->kontak}}</td>
                                <td>{{$contain->alamat}}</td>
                                <td>{{$contain->tujuan}}</td>
                                <td>{{$contain->detail}}</td>
                                <td>{{$contain->nominal}}</td>
                                <td>{{$contain->bank}}</td>
                                <td>{{$contain->rekbank}}</td>
                                <td>{{$contain->atasnama}}</td>
                                <td>
                                    <a class="btn btn-warning btn-sm" href="/admin/masjid/{{$contain -> id}}">Edit</a>
                                    <form action="/admin/masjid/{{ $contain -> id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endfor
                        </table>

                    </div>
                </div>
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
