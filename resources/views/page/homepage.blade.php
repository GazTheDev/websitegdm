
@extends('layouts.app')
@section('content')
    <!-- Sidebar Widgets Column -->
<br />
 <div class="container">
        <div class="jumbotron">
                <h1 class="display-4">Hello, world!</h1>
                <p class="lead">Welcome to my brand new website. The website is still under full development and will be changing on a regular basis.</p>
                <hr class="my-4">
                <p class="lead">
                  <a class="btn btn-primary btn-lg" href="/posts" role="button">Blog</a>
                  <a class="btn btn-primary btn-lg" href="/downloads" role="button">Downloads</a>
                </p>
              </div>



              <h1>Latest Pictures</h1>
              <p class="lead">In my spare time I like to take pictures of flowers and other subjects</p>
              <hr />

        <div data-aos="fade-right" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/101526686_4383314111694388_3481634660620959744_o.jpg?_nc_cat=107&_nc_sid=8024bb&_nc_ohc=cwChx5owljYAX9CBdmX&_nc_ht=scontent-lhr8-1.xx&oh=9c350ebf715241f0436258f488a4ae6e&oe=5EF7B921" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/101654482_4383314845027648_8063579001186156544_o.jpg?_nc_cat=109&_nc_sid=8024bb&_nc_ohc=mRH3LB4QgdcAX_ZfsLW&_nc_ht=scontent-lhr8-1.xx&oh=94cf1a3f1686076b3207b826e2fdf997&oe=5EF72B2A" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="https://scontent-lhr8-1.xx.fbcdn.net/v/t1.0-9/101875132_4383315505027582_6082953234907922432_o.jpg?_nc_cat=101&_nc_sid=8024bb&_nc_ohc=fTzdFbdFD8wAX9lIEtn&_nc_ht=scontent-lhr8-1.xx&oh=2841c97b6f8c3eb15158b57ffb0e8288&oe=5EF78F8F" alt="Third slide">
                  </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
                <br />
                <h1>Latest TS2020 Download</h1>
                <a href="https://garethdaviesmedia.tech/downloads/2F14%20-%20Witham%20To%20Braintree">
                    <img data-aos="fade-right" class="img-fluid" src="https://garethdaviesmedia.tech/storage/downloads/June2020/2UMkeWJjAQ2J3cqG02md.jpg">

                </a>
 </div>



    @endsection

