
@extends('layouts.app')
@section('content')


 <div class="container">

    <div class="row">
        <div class="col-md-8">

                <h1 class="mt-4">{{ $pages->title }}</h1>
                <p class="lead">


                      </p>

				<p class="lead">{!! $pages->body !!}</p>

            </div>

        </div>
        <br />


    </div>

    @endsection

