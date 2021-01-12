@extends('layouts.default')
@section('styles')
    <style>
      .tb-nim{
        text-align: end;
      }

      .tb-c{
        width: 10px;
      }
    </style>
@endsection
@section('content')
<section id="contact-page">
  <div class="container">
    <div class="center">
      <h2>Login | Pengajuan Donasi</h2>
    </div>
    <div class="row contact-wrap">
      <div class="status alert alert-success" style="display:none"></div>
      <div class="col-md-3"></div>
      <div class="col-md-4 mb-3 col-md-offset-1">
        <form class="contact-form" action="{{ route('login') }}" method="post">
          {{ csrf_field() }}
          <div style="display: block" class="input-group">
            <div class="form-group">
              <label>Email *</label>
              <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            </div>

            <div class="form-group">
              <label>Password *</label>
              <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
              @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <div class="col-12">
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">
                    {{ __('Remember Me') }}
                </label>
              </div>
              <!-- /.col -->
              <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button>
              </div>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <div class="col-md-5"></div>
    </div>
    {{-- <div class="row">
      <table class="table table-responsive table-dark">
        <tr>
          <td class="tb-nim">20170140004</td>
          <td class="tb-c"> | </td>
          <td>Khairun Nisa</td>
        </tr>
        <tr>
          <td class="tb-nim">20170140013</td>
          <td class="tb-c"> | </td>
          <td>Qodri Aziz</td>
        </tr>
        <tr>
          <td class="tb-nim">20170140020</td>
          <td class="tb-c"> | </td>
          <td>M. Thoriq Fadlullah</td>
        </tr>
        <tr>
          <td class="tb-nim">20170140025</td>
          <td class="tb-c"> | </td>
          <td>Farisan Azizi</td>
        </tr>
        <tr>
          <td class="tb-nim">20170140034</td>
          <td class="tb-c"> | </td>
          <td>Galuh Nurvan Saputra</td>
        </tr>
        <tr>
          <td class="tb-nim">20170140037</td>
          <td class="tb-c"> | </td>
          <td>Arifia Kasastra R</td>
        </tr>

      </table>
    </div> --}}
  </div>
</section>
@endsection
