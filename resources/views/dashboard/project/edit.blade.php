@extends('dashboard.layouts.main')

@section('container')
<title>Edit</title>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Project</h1>
    
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/project/{{ $project->id }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul" required autofocus value="{{ old('judul',$project->judul)}}">
          @error('judul')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="mitra" class="form-label">Mitra</label>
            <input type="text" class="form-control @error('mitra') is-invalid @enderror" id="mitra" name="mitra" value="{{ old('mitra',$project->mitra) }}" required>
            @error('mitra')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ old('lokasi',$project->lokasi) }}" required>
            @error('lokasi')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun" name="tahun" value="{{ old('tahun',$project->tahun) }}" required>
            @error('tahun')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
          

        <div class="mb-3">
            <label for="image" class="form-label">Project Image</label>
            <input type="hidden" name="oldImage" value="{{ $project->image }}">
            @if ($project->image)
                <img src=" {{ asset('storage/'.$project->image) }}"class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @else
                <img class="img-preview img-fluid mb-3 col-sm-5 d-block">
            @endif
            
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
            @error('image')
                <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>  

        
        
        <button type="submit" class="btn btn-primary mb-5">Edit Project</button>
      </form>
</div>

<script>
    

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