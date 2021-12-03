@extends($activeTemplate.'layouts.frontend')
@section('content')

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-8">
                <form action="{{ route('user.password.verify.code') }}" method="POST" class="cmn-form mt-30">
                    @csrf

                    <input type="hidden" name="email" value="{{ $email }}">

                    <div class="form-group">
                        <label>@lang('Verification Code')</label>
                        <input type="text" name="code" id="code" class="form-control">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">@lang('Verify Code') <i class="las la-sign-in-alt"></i></button>
                    </div>

                    <div class="form-group d-flex justify-content-between align-items-center">
                        @lang('Please check including your Junk/Spam Folder. if not found, you can')
                        <a href="{{ route('user.password.request') }}">@lang('Try to send again')</a>
                    </div>

                </form>
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