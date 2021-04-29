@extends('template')

@section('content')
<!DOCTYPE html>
<html>
  <head>
  <title>Tambah Merchant Kelongan.id</title>
</head>

<br>
<br>
<div class="container"><br>
<h1>Tambah Merchant Baru</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
			<form class="row g-3" action="{{ url('merchant_store') }}" method="post">
			{{ csrf_field() }}	
				<div class="col-md-4">
    				<label for="validationDefault01" class="form-label">Nama Toko</label>
    				<input type="text" class="form-control" id="validationDefault01" name="nama_merchant" placeholder="Nama Toko" required>
  				</div>
				<div class="col-md-4">
					<label for="validationDefault02" class="form-label">Alamat</label>
					<input type="text" class="form-control" id="validationDefault02" name="alamat" placeholder="Alamat" required>
				</div>
				<div class="col-md-6">
					<label for="validationDefault03" class="form-label">ID Seller</label>
					<input type="text" class="form-control" id="validationDefault03" name="id_user" placeholder="ID Seller" required>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="{{url('merchant')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
			<br>
			
		<!-- </div> -->
	</div>


@stop