@extends($activeTemplate.'layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8">
            <h3>{{__($pageTitle)}}</h3>
            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <input name="name" type="text" placeholder="@lang('Your Name')" class="form-control" value="@if(auth()->user()) {{ auth()->user()->fullname }} @else {{ old('name') }} @endif" @if(auth()->user()) readonly @endif required>
                </div>
                <div class="form-group">
                    <input name="email" type="text" placeholder="@lang('Enter E-Mail Address')" class="form-control" value="@if(auth()->user()) {{ auth()->user()->email }} @else {{old('email')}} @endif" @if(auth()->user()) readonly @endif required>
                </div>
                <div class="form-group">
                    <input name="subject" type="text" placeholder="@lang('Write your subject')" class="form-control" value="{{old('subject')}}" required>
                </div>
                <div class="form-group">
                    <textarea name="message" wrap="off" placeholder="@lang('Write your message')" class="form-control">{{old('message')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">@lang('Submit')</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
