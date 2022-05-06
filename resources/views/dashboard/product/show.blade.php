@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row justify-content-">
        <div class="col-lg-8">
            <h1>{{ $product->nama }}</h1>
            <h3 class="mb-5">{{ $product->category->nama }}</h3>

            @if ($product->image)
            <div style="max-height: 360px; overflow:hidden;">
                
                <img src="{{ asset('storage/' . $product->image)}}" alt="" class="img-fluid mb-3">
            </div>
            @else
            <div style="max-height: 360px; overflow:hidden;">
                <img src="{{ asset("assets/img/NoImage.png") }}" alt="" class="img-fluid mb-3">
            </div>
            @endif
            
            <p class="mt-4">
                Stok : {{ $product->stok }} <br/>
                Harga : {{ $product->harga }} <br/>
                {!! $product->deskripsi !!}
               
               
            
            </p>
            <p>
                <a href="/dashboard/product/{{ $product->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
                <form action="/dashboard/product/{{ $product->slug }}" method="product" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Are you sure ?')"><span data-feather="x-circle"></span>Delete</button>
                  </form>
            </p>
            
        </div>
    </div>
</div>

@endsection