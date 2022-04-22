@extends('layouts.main')
@section('style')
<style>
    @media (min-width: 1024px) {
        .container {
            max-width: 950px !important;
            padding-top: 30px !important;
        }
    }
</style>
@endsection
@section('feed')
<li class="active">
@endsection
@section('container')
<div class="container mx-auto">
<form method="POST" action="/" enctype="multipart/form-data">
    @csrf
    <label class="block">
      <span class="block text-sm font-medium text-slate-700 mb-3">Post Image</span>
      <div>
        <span id='button' style="background-color: white; border: 5px; padding: 10px">Select File</span>
        <input type="file" id="image" name="image" class="form-control" onchange="previewImage()" style="color: transparent; opacity: 0;">
        
      </div>
     
     <img class="img-preview img-fluid my-3 col-sm-5">
     @error('image')
               <div class="flex items-center bg-blue-500 text-red-700 text-sm font-bold px-4" style="margin-bottom: 5px" role="alert">
                   <svg class="fill-current w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="color: red"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                   <small style="color: red">{{ $message }}</small>
                 </div>
               @enderror
    </label>
    <label class="block">
      <span class="block text-sm font-medium text-slate-700">Deskripsi</span>
     <textarea name="content" id="content" cols="30" rows="10" class="@error('content') is-invalid @enderror"></textarea>
     @error('content')
               <div class="flex items-center bg-blue-500 text-red-700 text-sm font-bold px-4" style="margin-bottom: 5px" role="alert">
                   <svg class="fill-current w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" style="color: red"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                   <small style="color: red">{{ $message }}</small>
                 </div>
               @enderror
    </label>
    <button type="submit" class="bg-gradient-to-br from-pink-500 py-3 rounded-md text-white text-xl to-red-400 w-full">Posting</button>
  </form>
  </div>
  <script>
    function previewImage(){
  const image = document.querySelector('#image');
  const imgPreview = document.querySelector('.img-preview');
  imgPreview.style.display = 'block';
  const oFReader = new FileReader();
  oFReader.readAsDataURL(image.files[0]);
  oFReader.onload = function(oFREvent){
    imgPreview.src = oFREvent.target.result;
  }
  }
  $('#button').click(function(){
   $("input[type='file']").trigger('click');
})
  </script>
@endsection