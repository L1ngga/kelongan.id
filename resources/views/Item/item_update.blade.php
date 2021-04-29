@extends('template')

@section('content')
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Ubah Produk Kelongan.id</title>
 </head>

<br>
<br>
<div class="container"><br>
<h1>Update Data Produk</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
      @foreach($data as $dt)
			<form class="row g-3" action="{{ url('item_update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
            {{ method_field('PUT') }}
				<div class="col-md-4">
    				<label for="validationDefault01" class="form-label">nama_item</label>
    				<input type="text" class="form-control" id="validationDefault01" name="nama_items" placeholder="nama_items" value="{{$dt->nama_items}}" required>
  				</div>
				<div class="col-md-4">
					<label for="validationDefault02" class="form-label">type</label>
					<input type="text" class="form-control" id="validationDefault02" name="type" placeholder="type" value="{{$dt->type}}" required>
				</div>
				<div class="col-md-4">
					<label for="validationDefaultUsername" class="form-label">price</label>
					<div class="input-group">
					<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="price" placeholder="price" value="{{$dt->price}}" required>
					</div>
				</div>
				<div class="mb-3">
				<label for="validationDefault03" class="form-label">picture</label>
					<input type="file" class="form-control" aria-label="file example" name="picture" value="{{$dt->picture}}" required>
  				</div>
				<div class="col-md-6">
					<label for="validationDefault03" class="form-label">Stock</label>
					<input type="text" class="form-control" id="validationDefault03" name="stock" placeholder="Stock" value="{{$dt->stock}}" required>
				</div>
				<div class="mb-3">
    				<label for="validationTextarea" class="form-label">deskription</label>
    				<textarea class="form-control" id="validationTextarea" name="deskription" placeholder="deskription" value="{{$dt->deskription}}" required></textarea>
    			</div>
				<div class="mb-3">
    				<label for="validationTextarea" class="form-label">id_merchant</label>
    				<input class="form-control" id="validationTextarea" name="id_merchant" placeholder="id_merchant" value="{{$dt->id_merchant}}" required>
    			</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="{{url('/item')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
            @endforeach
		<!-- </div> -->
	</div>


@stop