@section('title')
    Home
@endsection

@extends('home')

@section('main')
    <!-- Carousel Start -->

    <section id="carousel-home">
        <div class="container-fluid p-0">
            <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <i class="fa fa-home fa-4x text-primary mb-4 d-none d-sm-block"></i>
                                <h1 class="display-2 text-uppercase text-white mb-md-4">Build Your Dream House With Us</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <i class="fa fa-tools fa-4x text-primary mb-4 d-none d-sm-block"></i>
                                <h1 class="display-2 text-uppercase text-white mb-md-4">We Are Trusted For Your Project</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <!-- Carousel End -->
@endsection
