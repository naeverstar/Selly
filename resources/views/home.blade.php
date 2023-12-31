@extends('template')

@section('page_title', 'Home')

@section('page_content')

    <!-- Carousel -->
    {{-- <header class="bg-dark">
        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <h1 class="my-5 text-center display-5 fw-bolder text-white mb-2 animate__animated animate__zoomIn">
                    Vestar Menu
                </h1>

                <div class="col-lg-9">

                    <div class="text-center my-5">

                        <div id="carouselExampleCaptions" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">

                                <div class="carousel-item active">

                                    <a href="/">
                                        <img src="/img/what duck.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>

                                    <div class="carousel-caption d-md-block">

                                        <div class="col-lg-8 col-xl-7 col-xxl-6 py-md-5 py-lg-7 overlay-content">
                                            <div class="my-5 text-center text-xl-start">

                                                <h1
                                                    class="display-5 fw-bolder text-white mb-2 animate__animated animate__lightSpeedInRight">
                                                    Salad
                                                </h1>
                                                <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                                    responsive mobile-first
                                                    sites with Bootstrap, the world's most popular front-end open source
                                                    toolkit!</p>
                                                <div
                                                    class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                    <a class="btn btn-outline-light btn-lg px-4" href="#Salad">Learn
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                                <div class="carousel-item">
                                    <a href="/">
                                        <img src="/img/samoyed.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>

                                    <div class="carousel-caption d-md-block">

                                        <div class="col-lg-8 col-xl-7 col-xxl-6 py-md-5 py-lg-7 overlay-content">
                                            <div class="my-5 text-center text-xl-start">

                                                <h1
                                                    class="display-5 fw-bolder text-white mb-2 animate__animated animate__lightSpeedInRight">
                                                    Nugget
                                                </h1>
                                                <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                                    responsive mobile-first
                                                    sites with Bootstrap, the world's most popular front-end open source
                                                    toolkit!</p>
                                                <div
                                                    class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                    <a class="btn btn-outline-light btn-lg px-4" href="#Salad">Learn
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="carousel-item">
                                    <a href="/">
                                        <img src="/img/im fine.jpg" class="d-block w-100 image_carousel" alt="...">
                                    </a>

                                    <div class="carousel-caption d-md-block">

                                        <div class="col-lg-8 col-xl-7 col-xxl-6 py-md-5 py-lg-7 overlay-content">
                                            <div class="my-5 text-center text-xl-start">

                                                <h1
                                                    class="display-5 fw-bolder text-white mb-2 animate__animated animate__lightSpeedInRight">
                                                    Commission
                                                </h1>
                                                <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                                                    responsive mobile-first
                                                    sites with Bootstrap, the world's most popular front-end open source
                                                    toolkit!</p>
                                                <div
                                                    class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                                    <a class="btn btn-outline-light btn-lg px-4" href="#Salad">Learn
                                                        More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </header> --}}

    <!-- Content -->
    <section class="bg-dark py-5">

        <h1 class="my-5 text-center display-5 fw-bolder text-white mb-2 animate__animated animate__zoomIn">
            Vestar Menu
        </h1>

        @foreach ($stocks as $stock)
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center">

                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-xl-start">

                            <h1 class="display-5 fw-bolder text-white mb-2 animate__animated animate__lightSpeedInRight">
                                {{ $stock->product_name }}
                            </h1>
                            <p class="lead fw-normal text-white mb-4 text-wrap text-break">
                                {!! nl2br(e($stock->product_description)) !!}
                            </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <p class="lead fw-normal text-white mb-4 border border-white px-4 py-2 rounded">Stok : {{ $stock->quantity }} pcs</p>
                                {{-- <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                    Started</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                        <img class="img-fluid rounded-3 my-5" src="{{ asset('storage/' . $stock->product_img) }}" alt="..." />
                    </div>
                </div>
            </div>
        @endforeach

        {{-- <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5" src="/img/what duck.jpg" alt="..." />
                </div>
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Nugget</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                            responsive mobile-first
                            sites with Bootstrap, the world's most popular front-end open source
                            toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center">
                <div class="col-lg-8 col-xl-7 col-xxl-6">
                    <div class="my-5 text-center text-xl-start">
                        <h1 class="display-5 fw-bolder text-white mb-2">Commission</h1>
                        <p class="lead fw-normal text-white-50 mb-4">Quickly design and customize
                            responsive mobile-first
                            sites with Bootstrap, the world's most popular front-end open source
                            toolkit!</p>
                        <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                            <a class="btn btn-success btn-lg px-4 me-sm-3" href="/">Get
                                Started</a>
                            <a class="btn btn-outline-light btn-lg px-4" href="/">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center">
                    <img class="img-fluid rounded-3 my-5" src="/img/what duck.jpg" alt="..." />
                </div>
            </div>
        </div> --}}

    </section>

    <!-- Features section-->
    {{-- <section class="py-5 bg-success-subtle" id="features">
        <div class="container px-5 my-5">
            <div class="row gx-5">
                <div class="col-lg-4 mb-5 mb-lg-0">
                    <h2 class="fw-bolder mb-0">A better way to start building.</h2>
                </div>
                <div class="col-lg-8">
                    <div class="row gx-5 row-cols-1 row-cols-md-2">
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-collection"></i></div>
                            <h2 class="h5">Featured title</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-building"></i></div>
                            <h2 class="h5">Featured title</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col mb-5 mb-md-0 h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Featured title</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                        <div class="col h-100">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i
                                    class="bi bi-toggles2"></i></div>
                            <h2 class="h5">Featured title</h2>
                            <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a
                                bit more text.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    </div>
    </section>
    <!-- /Content -->

@endsection
