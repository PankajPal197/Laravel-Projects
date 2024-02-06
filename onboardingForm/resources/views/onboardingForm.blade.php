{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .new-login-area {
  padding: 24px;
}
h3 {
  font-size: 24px;
  line-height: 30px;
}
label {
  font-size: 12px;
}
.request-otp-header {
  margin: 40px 0px;
}
.login-label label {
  color: #c74032;
  font-weight: 600;
}
.input-edit {
  border: none !important;
  border-bottom: 2px solid #ccc !important;
  padding: 6px 0px;
  opacity: 0.8;
}
.input-edit:focus {
  border-bottom-color: #c74032 !important;
  box-shadow: none;
  outline: 0;
}

.request-otp {
  margin-top: 40px;
  background: linear-gradient(#c74032, #91041b);
  font-size: 14px;
  color: #fff;
}
.request-otp:focus {
  box-shadow: none;
}
.fa-chevron-left {
  cursor: pointer;
}
.resend-otp {
  margin-top: 6px;
  cursor: pointer;
}

    </style>
</head>
<body>
    <div class="container new-login-area">
        <div id='sign-in' class='login-setup-section'>
          <h3 class="request-otp-header">Please verify your mobile number</h3>
          <div class="form-group login-label">
            <label for="inputnumber">mobile number</label>
            <input type="number" class="form-control input-edit" placeholder='Enter mobile number' id="number" required >
          </div>
          <button type="button" class="btn btn-default btn-lg btn-block request-otp" id='request-otp'>Get OTP</button>
        </div>
        <div id='verify-otp' class="login-setup-section">
          <i class="fa fa-chevron-left" aria-hidden="true"></i>
          <h3 class="request-otp-header">Verify OTP</h3>
          <div class="form-group login-label">
            <label for="inputnumber">One Time Password</label>
            <input type="number" class="form-control input-edit" placeholder='Enter OTP' id="number">
            <label class="pull-right resend-otp">Resend otp</label>
          </div>
          <button type="button" class="btn btn-default btn-lg btn-block request-otp ">Verify</button>
        </div>
      </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $("#verify-otp").hide();
$("#request-otp").on("click", function () {
  $("#sign-in").hide();
  $("#verify-otp").show();
});
$(".fa-chevron-left").on("click", function () {
  $("#sign-in").show();
  $("#verify-otp").hide();
});
</script>
</body>
</html> --}}
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('OTP Login') }}</div>

                <div class="card-body">

                    @if (session('error'))
                    <div class="alert alert-danger" role="alert"> {{session('error')}}
                    </div>
                    @endif

                    <form method="POST" >
                        @csrf

                        <div class="row mb-3">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-end">{{ __('Mobile No') }}</label>

                            <div class="col-md-6">
                                <input id="mobile_no" type="text" class="form-control @error('mobile_no') is-invalid @enderror" name="mobile_no" value="{{ old('mobile_no') }}" required autocomplete="mobile_no" autofocus placeholder="Enter Your Registered Mobile Number">

                                @error('mobile_no')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Generate OTP') }}
                                </button>

                                @if (Route::has('login'))
                                    <a class="btn btn-link" href="{{ route('login') }}">
                                        {{ __('Login With Email') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
