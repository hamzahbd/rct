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
<div class="table-responsive col-lg-8">
    <a href="/dashboard/project/create" class="btn btn-primary mb-3">Buat project baru</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Judul</th>
          <th scope="col">Mitra</th>
          <th scope="col">Lokasi</th>
          <th scope="col">Tahun</th>
          
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
          @foreach ($projects as $project)
          
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $project->judul }}</td>
            <td>{{ $project->mitra }}</td>
            <td>{{ $project->lokasi }}</td>
            <td>{{ $project->tahun }}</td>
            
            <td>
              <a href="#" class="badge bg-info"><i class="bi bi-info"></i></a>
                <a href="#/edit" class="badge bg-warning"><i class="bi bi-pencil"></i></a>
                <form action="/dashboard/project/ {{ $project->id }}" method="post" class="d-inline">
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