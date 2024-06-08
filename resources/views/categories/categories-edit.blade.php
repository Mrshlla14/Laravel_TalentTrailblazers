@extends('layouts.app')

@section('title')
Edit Category | TalentTrailblazers
@endsection

@section('content')
<h3>Edit Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/update/' . $category->id_categories) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <label for="categories">Categories</label>
    <input class="input" type="text" name="nama" id="categories" placeholder="Categories"
      value="{{ old('nama', $category->nama) }}" />
    @error('nama')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="tipe">Type</label>
    <textarea class="input" name="tipe" id="tipe"
      placeholder="tipe">{{ old('tipe', $category->tipe) }}</textarea>
    @error('tipe')
    <p style="font-size: 10px; color: red">{{ $message }}</p>  
    @enderror

    <label for="price">Price</label>
    <input class="input" type="text" name="harga" id="price" placeholder="Price"
      value="{{ old('harga', $category->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror
    <button type="submit" class="btn btn-simpan" name="edit" style="margin-top: 50px">
      Edit
    </button>
  </form>
</div>
@endsection
