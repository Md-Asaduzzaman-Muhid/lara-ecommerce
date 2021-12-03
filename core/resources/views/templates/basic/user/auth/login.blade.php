@extends($activeTemplate.'layouts.frontend')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">@lang('Login')</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <h4>@lang('Welcome back to SITENAME')</h4>
                                <p>@lang('If you do not have an account with us, please register to have one.')</p>
                                <a href="{{ route('user.register') }}" class="btn btn-primary">@lang('Register')</a>
                            </div>
                            <div class="col-md-8">
                                <form method="POST" action="{{ route('user.login')}}" onsubmit="return submitUserForm();">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">@lang('Username or Email')</label>
                                        <div class="col-md-6">
                                            <input type="text" name="username" value="{{ old('username') }}" placeholder="@lang('Username or Email')" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control" name="password" required required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                                <label class="form-check-label" for="remember">
                                                    @lang('Remember Me')
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4 ">
                                        </div>
                                        <div class="col-md-6 ">
                                            @php echo loadReCaptcha() @endphp
                                        </div>
                                    </div>
                                    @include($activeTemplate.'partials.custom_captcha')


                                    <div class="form-group row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit" id="recaptcha" class="btn btn-primary">
                                                @lang('Login')
                                            </button>
                                        </div>

                                        <div class="col-md-12">
                                            <a class="btn btn-link float-right" href="{{route('user.password.request')}}">
                                                @lang('Forgot Your Password?')
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        "use strict";
        function submitUserForm() {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                document.getElementById('g-recaptcha-error').innerHTML = '<span class="text-danger">@lang("Captcha field is required.")</span>';
                return false;
            }
            return true;
        }
    </script>
@endpush
