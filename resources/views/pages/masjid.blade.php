@extends('layouts.default')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <h2 class="mt-10">Daftar Info Donasi Masjid & Yayasan</h2>

            <div class="row">
            <div class="col-md-8">

            </div>
                <div class="col-md-4">
                    <form action="/masjid/search" method="get">
                        <div class="input-group mt-4">
                         <input type="search" name="search" class="form-control" value="{{ isset($_GET['search']) ? $_GET['search'] : '' }}">
                            <span class="input-group-prepend">
                                <button type="submit" class="btn btn-success">Search</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="content-wrapper">
    <section class="content" style="height: 500px">
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-auto">
                <div class="card mt-2">
                    <div class="card-body">

                        <table class="table table-responsive">
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
                                </tr>
                            </thead>
                            @for ($i = 1; $i <= 1; $i++)
                            @foreach ($masjids as $contain)
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
                            </tr>
                            @endforeach
                            @endfor
                        </table>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>

@endsection
