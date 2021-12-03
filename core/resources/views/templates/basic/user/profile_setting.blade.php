@extends($activeTemplate.'layouts.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form class="register prevent-double-click" action="" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="InputFirstname" class="col-form-label">@lang('First Name'):</label>
                                    <input type="text" class="form-control" id="InputFirstname" name="firstname" placeholder="@lang('First Name')" value="{{$user->firstname}}" minlength="3">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="lastname" class="col-form-label">@lang('Last Name'):</label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="@lang('Last Name')" value="{{$user->lastname}}" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="email" class="col-form-label">@lang('E-mail Address'):</label>
                                    <input class="form-control" id="email" placeholder="@lang('E-mail Address')" value="{{$user->email}}" readonly>
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="phone" class="col-form-label">@lang('Mobile Number')</label>
                                    <input class="form-control" id="phone" value="{{$user->mobile}}" readonly>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <label for="address" class="col-form-label">@lang('Address'):</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="@lang('Address')" value="{{@$user->address->address}}" required="">
                                </div>
                                <div class="form-group col-sm-6">
                                    <label for="state" class="col-form-label">@lang('State'):</label>
                                    <input type="text" class="form-control" id="state" name="state" placeholder="@lang('state')" value="{{@$user->address->state}}" required="">
                                </div>
                            </div>


                            <div class="row">
                                <div class="form-group col-sm-4">
                                    <label for="zip" class="col-form-label">@lang('Zip Code'):</label>
                                    <input type="text" class="form-control" id="zip" name="zip" placeholder="@lang('Zip Code')" value="{{@$user->address->zip}}" required="">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label for="city" class="col-form-label">@lang('City'):</label>
                                    <input type="text" class="form-control" id="city" name="city" placeholder="@lang('City')" value="{{@$user->address->city}}" required="">
                                </div>

                                <div class="form-group col-sm-4">
                                    <label class="col-form-label">@lang('Country'):</label>
                                    <input class="form-control" value="{{@$user->address->country}}" disabled>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <div class="fileinput fileinput-new " data-provides="fileinput">
                                            <div class="fileinput-new thumbnail"
                                                 data-trigger="fileinput">
                                                <img src="{{ getImage(imagePath()['profile']['user']['path'].'/'. $user->image,imagePath()['profile']['user']['size']) }}" alt="@lang('Image')">

                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>

                                            <div class="img-input-div">
                                            <span class="btn btn-info btn-file">
                                                <span class="fileinput-new "> @lang('Select image')</span>
                                                <span class="fileinput-exists"> @lang('Change')</span>
                                                <input type="file" name="image" accept="image/*">
                                            </span>
                                                <a href="#" class="btn btn-danger fileinput-exists"
                                                   data-dismiss="fileinput"> @lang('Remove')</a>
                                            </div>

                                            <code>@lang('Image size') {{imagePath()['profile']['user']['size']}}</code>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row pt-5">
                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-block btn-success">@lang('Update Profile')</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('style-lib')
    <link href="{{ asset($activeTemplateTrue.'css/bootstrap-fileinput.css') }}" rel="stylesheet">
@endpush
@push('style')
    <link rel="stylesheet" href="{{asset('assets/admin/build/css/intlTelInput.css')}}">
    <style>
        .intl-tel-input {
            position: relative;
            display: inline-block;
            width: 100%;!important;
        }
    </style>
@endpush
