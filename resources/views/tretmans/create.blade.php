@extends('layouts.layout')

@section('content')

		<form enctype="multipart/form-data" action="/t" method="post">
			 @csrf
  <div class="form-group">
    <label for="title">Naslov</label>
    <input type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="" name="title">
  </div>
  <div class="form-group">
    <label for="body">Tekst</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="body">
    <div class="form-group">
    <label for="price">Cena</label>
    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="price">
  </div>
  <label for="image" class="col-md-4 col-form-label">Slika</label>
                        <input type="file" class="form-control-file" id="image" name="image">
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection