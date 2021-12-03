@extends($activeTemplate.'layouts.frontend')
@section('content')
@php
	$blogs = getContent('blog.element');
@endphp
<section class="mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<h2 class="text-center">@lang('Blogs')</h2>
				<hr class="mb-5">
			</div>
		</div>
		<div class="row justify-content-center">
			@foreach($blogs as $blog)
				<div class="col-md-4">
					<div class="card">
						<div class="card-body">
							<a href="{{ route('blog.details',[$blog->id,slug($blog->data_values->title)]) }}">
								<img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->blog_image_1,'728x465') }}" class="w-100">
							</a>
							<h4 class="mt-2 text-center"> <a href="{{ route('blog.details',[$blog->id,slug($blog->data_values->title)]) }}"> {{ $blog->data_values->title }}</a></h4>
						</div>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</section>

    @if($sections->secs != null)
        @foreach(json_decode($sections->secs) as $sec)
            @include($activeTemplate.'sections.'.$sec)
        @endforeach
    @endif
@endsection
