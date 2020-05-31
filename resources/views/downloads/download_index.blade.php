@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Download Section</h1>
		<br><br>
        <div   data-aos="flip-up" class="row">
                @foreach($downloads as $download)
			<div class="col-md-3">
				<a href="/downloads/{{$download->slug}}">
                    <img src="{{ Voyager::image( $download->image ) }}" style="width:100%">
                    <br />
                    <hr />
					<p>{{ $download->title }}</p>
				</a>
			</div>
		@endforeach
		</div>
	</div>
@endsection
