@extends('template')

@section('content')
<!DOCTYPE html>
<html>
  <head>
  <title>Ubah Merchant Kelongan.id</title>
</head>

<br>
<br>
<div class="container"><br>
<h1>Update Data Merchant</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
      @foreach($data as $dt)
			<form class="row g-3" action="{{ url('merchant_update', $dt->id) }}" method="post">
			{{ csrf_field() }}
            {{ method_field('PUT') }}	
            <div class="col-md-4">
    				<label for="validationDefault01" class="form-label">Nama Toko</label>
    				<input type="text" class="form-control" id="validationDefault01" name="nama_merchant" placeholder="Nama Toko" value="{{ $dt->nama_merchant }}" required>
  				</div>
				<div class="col-md-4">
					<label for="validationDefault02" class="form-label">Alamat</label>
					<input type="text" class="form-control" id="validationDefault02" name="alamat" placeholder="Alamat" value="{{ $dt->address }}" required>
				</div>
				<div class="col-md-6">
					<label for="validationDefault03" class="form-label">ID Seller</label>
					<input type="text" class="form-control" id="validationDefault03" name="id_user" placeholder="ID Seller" value="{{ $dt->id_users }}" required>
				</div>
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="{{url('merchant')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
            @endforeach
		<!-- </div> -->
	</div>
@stop