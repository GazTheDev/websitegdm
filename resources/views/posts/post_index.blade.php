@extends('layouts.app')
@section('content')
@section('pageTitle', 'News')

<div class=" container">

        <div  >

          <!-- Blog Entries Column -->
          <div class="col-md-8">
                <div class="card mb-4">
                        <section class="jumbotron text-center">
                                <div class="container">
                                  <h1 class="jumbotron-heading">News Section</h1>
                                  <p class="lead text-muted">Check Out my latest new below</p>

                                </div>
                            </div>

                              </section>

        @foreach ($posts as $post)


        <!-- Blog Post -->
        <div class="card mb-4">
        <img class="card-img-top" src="{{ Voyager::image( $post->image ) }}" alt="Card image cap">
                <div class="card-body">
                <h2 class="card-title">{{$post->title}}</h2>
                    <p class="card-tex">{{$post->excerpt}}</p>
                            <a href="/posts/{{$post->slug}}"
                                class="btn btn-primary">
                                Read More &rarr;</a>
                </div>
                <div class="card-footer text-muted">
                  {{$post->created_at}}
                  <a href="https://twitter.com/garethmedia"> By Gaz</a>
                </div>
            </div>


              @endforeach
            </div>
        </div>


    @endsection
