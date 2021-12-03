@extends($activeTemplate.'layouts.frontend')
@section('content')
<section class="mt-5">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-6">
						<img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->blog_image_1,'800x800') }}" class="w-100">
					</div>
					<div class="col-md-6">
						<img src="{{ getImage('assets/images/frontend/blog/'.$blog->data_values->blog_image_2,'800x800') }}" class="w-100">
					</div>
					<p class="mt-2">
						@php echo $blog->data_values->description_nic @endphp
					</p>
				</div>
			</div>
			<div class="fb-comments" data-href="{{ route('blog.details',[$blog->id,slug($blog->data_values->title)]) }}" data-numposts="5"></div>
		</div>
	</div>
</section>
@endsection
@push('fbComment')
	@php echo loadFbComment() @endphp
@endpush