@extends($activeTemplate .'layouts.master')
@section('content')
<div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">@lang('2FA Verification')</div>
                        <div class="card-body">
                            <form action="{{route('user.go2fa.verify')}}" method="POST" class="login-form">
                                @csrf
                                <div class="form-group">
                                    <p class="text-center">@lang('Current Time'): {{\Carbon\Carbon::now()}}</p>
                                </div>
                                <div class="form-group">
                                    <label>@lang('Verification Code')</label>
                                    <input type="text" name="code" id="code" class="form-control">
                                </div>
                                <div class="form-group">
                                    <div class="btn-area text-center">
                                        <button type="submit" class="btn btn-success">@lang('Submit')</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
@push('script')
<script>
    (function($){
        "use strict";
        $('#code').on('input change', function () {
          var xx = document.getElementById('code').value;
          
              $(this).val(function (index, value) {
                 value = value.substr(0,7);
                  return value.replace(/\W/gi, '').replace(/(.{3})/g, '$1 ');
              });
          
      });
    })(jQuery)
</script>
@endpush