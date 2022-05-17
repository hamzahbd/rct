@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
    
</div>

@if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
@endif


{{ $products['0']->nama }}
<div class="table-responsive col-lg-8">
    <a href="/dashboard/product/create" class="btn btn-primary mb-3">Tambah produk</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nama</th>
          <th scope="col">Stok</th>
          <th scope="col">Harga</th>
          
          
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
          
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $product->nama }}</td>
            <td>{{ $product->stok }}</td>
            <td>Rp {{ number_format($product->harga) }}</td>
            
            
            <td>
                <a href="/dashboard/product/{{ $product->slug }}" class="badge bg-primary"><i class="bi bi-eye"></i></a>
                <a href="/dashboard/product/{{ $product->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/product/{{ $product->slug }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><i class="bi bi-trash"></i></button>
                </form>
                
            </td>
            
          </tr>
          @endforeach
        
      </tbody>
    </table>
  </div>
@endsection