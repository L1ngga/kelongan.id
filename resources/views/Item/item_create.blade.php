@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Produk Kelongan.id</title>
</head>

<br>
<br>
<div class="container">
	<br>
<h1>Tambah Produk Baru</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
			<form class="row g-3" action="{{ url('item_store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
				<div class="col-md-4">
    				<label for="validationDefault01" class="form-label">nama_items</label>
    				<input type="text" class="form-control" id="validationDefault01" name="nama_items" placeholder="nama_items" required>
  				</div>
				<div class="col-md-4">
					<label for="validationDefault02" class="form-label">type</label>
					<input type="text" class="form-control" id="validationDefault02" name="type" placeholder="type" required>
				</div>
				<div class="col-md-4">
					<label for="validationDefaultUsername" class="form-label">price</label>
					<div class="input-group">
					<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="price" placeholder="price" required>
					</div>
				</div>
				<div class="mb-3">
				<label for="validationDefault03" class="form-label">picture</label>
					<input type="file" class="form-control" aria-label="file example" name="picture" required>
  				</div>
				<div class="col-md-6">
					<label for="validationDefault03" class="form-label">Stock</label>
					<input type="text" class="form-control" id="validationDefault03" name="stock" placeholder="Stock" required>
				</div>
				<div class="mb-3">
    				<label for="validationTextarea" class="form-label">deskription</label>
    				<textarea class="form-control" id="validationTextarea" name="deskription" placeholder="Deskription" required></textarea>
    			</div>
				<div class="mb-3">
    				<label for="validationTextarea" class="form-label">ID Merchant</label>
    				<input class="form-control" id="validationTextarea" name="id_merchant" placeholder="ID Merchant" required>
    			</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit" >Simpan</button>
					<a href="{{url('item')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
		</div>
	</div>


@stop