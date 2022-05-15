@extends('dashboard.layoutd.maind')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap
align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
    @csrf
    <form method="post" action="/dashboard">
    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control" id="nama"> 
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug"> 
      </div>
      <div class="mb-3">
        <label for="waktu" class="form-label">Waktu</label>
        <input type="text" class="form-control" id="waktu"> 
      </div>
      <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="text" class="form-control" id="harga"> 
      </div>
      {{-- <div class="mb-3">
        <label for="Categpry" class="form-label">Category</label>
        <select class="form-select" name='category_id'>
          @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach 
        </select> 
      </div> --}}
      {{-- <div class="mb-3">
        <label for="kategoriLayanan" class="form-label">Category</label>
        <select class="form-select" name='kategoriLayanan_id'>
          @foreach ($kategorilayanans as $kategoriLayanan)
          <option value="{{ $kategoriLayanan->id }}">{{ $kategoriLayanan->name }}</option>
          @endforeach 
        </select> 
      </div> --}}
      <div class="mb-3">
        <label for="body" class="form-label">Description</label>
        <input id="body" value="Editor content goes here" 
        type="hidden" name="body">
        <trix-editor input="body"></trix-editor> 
      </div>

      <script>
        document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
        })
      </script>


   
    <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

{{-- <script>
  const title = document.querySelection('#title');
  const slug = document.querySelection('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/serice/createSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });

</script> --}}
@endsection