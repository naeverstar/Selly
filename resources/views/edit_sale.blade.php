@extends('template')
@section('page_title', 'Create Stok')

@section('page_content')

    <!-- Content -->
    <section class="bg-dark text-white py-5">

        <div class="container container_center px-5">

            <div class="row gx-5 justify-content-center">

                <!-- Title -->
                <h1 class="text-center display-5 fw-bolder mb-2 animate__animated animate__zoomIn my-3">

                    Edit Sale: {{ $sales->stock->product_name }} -- {{ $sales->date }}

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

                                                <form action="{{ route('penjualan.update', $sales->id) }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')

                                                    <div class="form outline mb-2">
                                                        <label for="date">Date</label>

                                                        {{-- <div class="input-group mb-2"> --}}
                                                            {{-- <div class="input-group-prepend">
                                                                <div class="input-group-text">@</div>
                                                            </div> --}}
                                                            <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror" value="{{ $sales->date }}">

                                                        {{-- <input class="mt-0 form-control @error('date') is-invalid @enderror" id="date" type="date" name="date" required value="{{ $sale->date }}"> --}}
                                                            @error('date')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-outline mb-2">
                                                        <label for="product_name">Product Name</label>
                                                        <input type="hidden" name="old_stockid" value="{{ $sales->stock_id }}">
                                                        <select class="mt-0" name="stock_id" id="stock_id" required>
                                                            <option value="" disabled >Product Name - Price</option>
                                                            <option value="{{ $sales->stock_id }}" selected hidden>{{ $sales->stock->product_name }} - {{ $sales->stock->price }}</option>
                                                            @foreach ($stocks as $stock)
                                                                <option value="{{ $stock->id }}">{{ $stock->product_name }} - {{ $stock->price }}</option>
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
                                                        <input type="hidden" name="old_stock" value="{{ $sales->stock_sold }}">
                                                        <input type="number" id="stock_sold" name="stock_sold" class="form-control @error('stock_sold') is-invalid @enderror"
                                                            placeholder="enter quantity sold..." required value="{{ $sales->stock_sold }}" required>
                                                            @error('stock_sold')
                                                                <div class="invalid-feedback">
                                                                    {{ $message }}
                                                                </div>
                                                            @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    {{-- <div class="form-outline mb-2">
                                                        <label for="price">Price</label> --}}

                                                        {{-- <input type="text" id="taudeh"> --}}
                                                        {{-- <p>{{ App\Models\Stock::where('id', myFunction()) }}</p> --}}

                                                        {{-- <div class="input-group mb-2"> --}}
                                                            {{-- <div class="input-group-prepend">
                                                                <div class="input-group-text">Rp</div>
                                                            </div> --}}
                                                            {{-- <select name="price" id="price" required>
                                                                <option value="" selected disabled>Price</option>
                                                                @foreach ($stocks as $stock)
                                                                    <option value="{{ $stock->price }}">{{ $stock->price }}</option>
                                                                @endforeach
                                                            </select> --}}
                                                                {{-- @error('price')
                                                                    <div class="invalid-feedback">
                                                                        {{ $message }}
                                                                    </div>
                                                                @enderror --}}
                                                        {{-- </div> --}}
                                                    {{-- </div> --}}

                                                    <div class="form-outline mb-2">
                                                        <label for="harga_jual">Harga Jual</label>
    
                                                        {{-- <div class="input-group mb-2">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">Pc</div>
                                                                </div> --}}
                                                        <input type="text" id="harga_jual" name="harga_jual"
                                                            class="form-control @error('harga_jual') is-invalid @enderror"
                                                            placeholder="masukkan harga jual..." required value="{{ $sales->harga_jual }}">
                                                        @error('harga_jual')
                                                            <div class="invalid-feedback">
                                                                {{ $message }}
                                                            </div>
                                                        @enderror
                                                        {{-- </div> --}}
                                                    </div>

                                                    <div class="form-button mt-3 text-end">
                                                        <button id="submit" type="submit" class="btn btn-success">
                                                            Edit
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
