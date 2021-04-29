@extends('template')

@section('content')
<!DOCTYPE html>
<html>
  <head>
  <title>Tambah Transaksi Kelongan.id</title>
</head>

<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
<div class="container">
	<br>
<h1>Tambah Transaksi Baru</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->

			<form class="row g-3" action="{{ url('transaksi_store') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
				<div class="col-md-6">
					<label class="form-label">Id Item</label><br>
					<!-- <input type="text" class="form-control" id="validationDefault01" name="type" placeholder="type" required> -->
					<select style="width: 100%; height: 37px;" name="id_items">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
				<div class="col-md-6">
					<label for="validationDefaultUsername" class="form-label">Nama Produk</label>
					<div class="input-group">
					<input type="text" class="form-control" id="validationDefaultUsername" aria-describedby="inputGroupPrepend2" name="items_name" placeholder="Produk" required>
					</div>
				</div>
				<div class="col-md-6">
					<label for="validationDefault02" class="form-label"> Harga Barang</label>
					<input class="form-control" id="validationDefault03" value="" name="price" placeholder="Harga"required>
				</div>
				<div class="col-md-6">
				<label for="validationDefault03" class="form-label">Qty</label>
					<input type="number" id="validationDefault03" class="form-control" aria-label="file example" name="qty" min="1" max="5" v-model:value="qty" required>
  				</div>
				<!-- <div class="col-md-6">
					<label for="validationDefault04" class="form-label">Total Harga</label>
					<input class="form-control" id="validationDefault03" value="" name="total_price" placeholder="Harga"required>
				</div> -->
				<div class="col-md-6">
    				<label for="validationTextarea" class="form-label">ID Merchant</label>
    				<input class="form-control" id="validationTextarea" value="" name="id_merchant" placeholder="ID Merchant" required>
    			</div>
    			<div class="col-md-6">
    				<label for="validationTextarea2" class="form-label">Nama Merchant</label>
    				<input class="form-control" id="validationTextarea2" value="" name="name_merchant" placeholder="Merchant" required>
    			</div>
				<div class="col-12">
					<br>
					<button class="btn btn-primary" type="submit" >Simpan</button>
					<a href="{{url('transaksi')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
		</div>
	</div>


@stop