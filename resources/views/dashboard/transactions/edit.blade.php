@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit transaction</h1>
</div>
<div class="col-lg-8">
    <form method="post" action="/dashboard/posts/{{ $transaction->id }}" class="mb-5" enctype="multipart/form-data">
      @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title', $transaction->title) }}">
          @error('title')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="id" class="form-label">Slug</label>
          <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" required value="{{ old('id', $transaction->id) }}"">
          @error('id')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $transaction->category_id) == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
            @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
                
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">transaction Image</label>
          <input type="hidden" name="oldImage" value="{{ $transaction->image }}">
          @if ($transaction->image)
          <img src="{{ asset('storage/' . $transaction->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
              
          @else
          <img class="img-preview img-fluid mb-3 col-sm-5">
              
          @endif
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>   
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
          <p class="text-danger">{{ $message }}</p>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body', $transaction->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary">Update transaction</button>
    </form>
</div>

<script>
  const title = document.querySelector('#title');
  const id = document.querySelector('#id');

  title.addEventListener('change', function() {
    fetch('/dashboard/transactions/checkSlug?title=' + title.value)
    .then(response => response.json())
    .then(data => id.value = data.id)
  });

  function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREvent){
      imgPreview.src = oFREvent.target.result ;
    }
  }
</script>
    
@endsection