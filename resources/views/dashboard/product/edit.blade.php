@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Masukkan data produk</h1>
    
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/product/{{ $product->slug }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" required autofocus value="
          {{ $product->nama }}">
          <input type="hidden" name="slug" id="slug">
          
          @error('nama')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>

        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required autofocus value="{{ old('harga',$product->harga) }}">
            @error('harga')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" required autofocus value="{{ old('stok',$product->stok) }}">
            @error('stok')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="berat" class="form-label">Berat</label>
            <input type="text" class="form-control @error('berat') is-invalid @enderror" id="berat" name="berat" required autofocus value="{{ old('berat',$product->berat) }}">
            
            @error('berat')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>

          <div class="mb-3">
            <label for="ukuran" class="form-label">Ukuran</label>
            <input type="text" class="form-control @error('ukuran') is-invalid @enderror" id="ukuran" name="ukuran" required autofocus value="{{ old('ukuran',$product->ukuran) }}">
            
            @error('ukuran')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>

        
        
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" name="category_id">
                @foreach ($categories as $category)
                    @if (old('category_id', $product->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                    @else
                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                    @endif
                @endforeach 
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Product Image</label>
            <input type="hidden" name="oldImage" value="{{ $product->image }}">
            @if ($product->image)
                <img src=" {{ asset('storage/'.$product->image) }}"class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @endif
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            @error('deskripsi')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            
            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi', $product->deskripsi) }}">
            <trix-editor input="deskripsi"></trix-editor>
        </div>
        
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
      </form>
</div>

<script>
    

    document.addEventListener('trix-file-accept', function(e){
        e.preventDefault();
    })

    const title = document.querySelector('#nama');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function(){
        fetch('/dashboard/product/checkSlug?nama=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    function previewImage()
    {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent)
        {
            imgPreview.src = oFREvent.target.result;
        }

    }
</script>
@endsection