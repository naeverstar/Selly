@extends('template')
@section('page_title', 'Create Stok')

@section('page_content')

    <!-- Content -->
    <section class="bg-dark text-white py-5">

        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <!-- Title -->
                <h1 class="text-center display-5 fw-bolder mb-2 animate__animated animate__zoomIn my-3">

                    Edit Sale: {{ $sale->stock->product_name }} -- {{ $sale->date }}

                </h1>

                <div class="col-lg-12">
                    <!-- Card -->
                    <div class="card-border-0">
                        <!-- Cardhead -->
                        <div class="text-center">
                            <a href="{{ route('penjualan.index') }}" class="btn btn-outline-dark mt-2 mb-0">
                                <h2 class="text-white">
                                    <i class="fas fa-arrow-left"></i>
                                    Back to Penjualan
                                </h2>
                            </a>
                        </div>

                        <!-- Cardbody -->
                        <div class="card-body overflow-auto my-3" style="width: 100%;" align="center">

                            <div class="form-body my-3">
                                <div class="container">
                                    {{-- <div class="form-holder"> --}}
                                        <div class="form-content">
                                            <div class="form-items">
                                                {{-- <h3>Create New Data</h3> --}}
                                                {{-- <p class="text-center mb-3 fw-bold">Edit Stock: {{ $stock->product_name }}</p> --}}

                                                <form action="{{ route('penjualan.update', $sale->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form outline mb-2">
                                                        <label for="date">Date</label>

                                                        {{-- <div class="input-group mb-2"> --}}
                                                            {{-- <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                            </div> --}}

                                                        <input class="mt-0 form-control @error('date') is-invalid @enderror" id="date" type="text" name="date"
                                                            placeholder="enter date..." required value="{{ $sale->date }}">
                                                            @error('date')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="product_name">Product Name</label>

                                                        {{-- <div class="input-group mb-2">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                            </div> --}}
                                                        <select name="stock_id" id="stock_id" onchange="halah()">
                                                            <option value="" selected disabled >Product Name</option>
                                                            @foreach ($stocks as $stock)
                                                                <option value="{{ $stock->id }}">{{ $stock->product_name }}</option>
                                                            @endforeach
                                                        </select>
                                                            @error('product_name')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="quantity">Quantity</label>

                                                        {{-- <div class="input-group mb-2"> --}}
                                                            {{-- <div class="input-group-prepend">
                                                                <div class="input-group-text">Pc</div>
                                                            </div> --}}

                                                        <input type="number" id="quantity" name="quantity" class="form-control @error('quantity') is-invalid @enderror"
                                                            placeholder="enter quantity..." required value="{{ $sale->stock_sold }}">
                                                            @error('quantity')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="price">Price</label>

                                                        {{-- <input type="text" id="taudeh"> --}}
                                                        {{-- <p>{{ App\Models\Stock::where('id', myFunction()) }}</p> --}}

                                                        {{-- <div class="input-group mb-2"> --}}
                                                            {{-- <div class="input-group-prepend">
                                                                <div class="input-group-text">Rp</div>
                                                            </div> --}}
                                                            <select name="price" id="price">
                                                                <option value="" selected disabled>Price</option>
                                                                @foreach ($stocks as $stock)
                                                                    <option value="{{ $stock->price }}">{{ $stock->price }}</option>
                                                                @endforeach
                                                            </select>
                                                                @error('price')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-button mt-3 text-end">
                                                        <button id="submit" type="submit" class="btn btn-success">
                                                            Create
                                                            {{-- <i class="fas fa-circle-plus"></i> --}}
                                                        </button>
                                                        <button id="reset" type="reset" class="btn btn-primary">
                                                            Reset
                                                        </button>
                                                        {{-- <button id="submit" type="submit"
                                                            class="btn btn-success">Submit</button> --}}
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    {{-- </div> --}}
                                </div>
                            </div>


                        </div>

                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- /Content -->

    <script>
        // menampilkan gambar
        function previewImage() {
            const img = document.querySelector('#product_img');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(img.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
