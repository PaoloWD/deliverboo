@extends('layouts.app')

@section('content')

<div class="container py-5">
    <h1>Edit your plate</h1>

          {{-- aggiungere action:
            action="{{ route() }}" --}}
        <form  method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        {{-- name-input --}}
        <div class="mb-3">
            <label class="form-label">Flatname</label>
            <input type="text" 
            class="form-control @error('name') is-invalid @elseif(old('name')) is-valid  @enderror"
            value="{{$project->description}}"
            name="name">

            @error('name')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>

        {{-- description-input --}}
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea cols="30" rows="5" 
             name="description"
             class="form-control @error('description') is-invalid @enderror">{{$project->description}}</textarea>
        </div>

        {{-- image input --}}
        <div class="mb-3">
            <label class="form-label">Cover Image</label>
            <input type="file" class="form-control  @error('image') is-invalid @enderror" name="image">
            @error('image')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror 

            <img  class="img-thumbnail" src="{{asset('/storage/'. $project->cover_img)}}" alt="">
          </div>
          
          {{-- visibility input --}}
          <div class="mb-3 form-check form-switch">
            <input class="form-check-input" type="checkbox" role="switch" id="switch_visibility" name="visibility"
              {{ old('visibility', 1) ? 'checked' : '' }} >
            <label class="form-check-label" for="switch_visibility">Visibility</label>
          </div>

           {{-- categories input --}}
          {{-- @dd($categories) --}}
          <div class="py-3">
            <div class="py-2">Categories:</div>
            @foreach ($categories as $category)
              <div class="form-check">
                <input class="form-check-input @error('categories') is-invalid @enderror"
                type="checkbox" value="{{$category->id}}" id="category_{{$loop->index}}"
                name="categories[]"   {{ $project->categories->contains( 'id', $category->id) ? 'checked' : '' }} >
                <label class="form-check-label" for="category_{{$loop->index}}">
                  {{$category->name}}
                </label>
                @error('categories')
                  <div class="invalid-feedback">
                    {{$message}}
                  </div>
                @enderror
                
              </div>
            @endforeach
          </div>

          
      
        <button type="submite" class="btn btn-primary">Save</button>

        <a class="btn btn-warning" href="{{route('dashboard')}}">Return To Projects</a>


        {{-- <a href="{{route('admin.projects.index')}}">Return index</a> --}}

        </form>
</div>

@endsection