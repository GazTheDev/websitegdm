
@extends('layouts.app')
@section('content')


 <div class="container">

    <div class="row">
        <div class="col-md-8">

                <h1 class="mt-4">{{ $downloads->title }}</h1>
                <p class="lead">


                      </p>

				<img class="img-fluid rounded"src="{{ Voyager::image( $downloads->image ) }}" style="width:100%">
                <p class="lead">{!! $downloads->about !!}</p>

                <div class="btn btn-succsess">

                <a href="{{$downloads->download_link}}">Download Today</a>
                </div>
            <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
        <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
        <a class="a2a_button_facebook"></a>
        <a class="a2a_button_twitter"></a>
        <a class="a2a_button_email"></a>
        </div>
        <script async src="https://static.addtoany.com/menu/page.js"></script>
        <!-- AddToAny END -->
            </div>

        </div>
        <br />


    </div>

    @endsection

