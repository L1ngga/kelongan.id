@extends('template')
  
@section('content')
 <!DOCTYPE html>
<html>
  <head>
  <title>Ubah transaksi Kelongan.id</title>
</head>

<br>
<br>
<div class="container"><br>
<h1>Update Data Transaksi</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
      @foreach($data as $dt)
			<form class="row g-3" action="{{ url('transaksi_update', $dt->id) }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}	
            {{ method_field('PUT') }}
				<div class="col-md-6">
					<label class="form-label">Id Item</label><br>
					<!-- <input type="text" class="form-control" id="validationDefault01" name="type" placeholder="type" required> -->
					<select style="width: 100%; height: 37px;" name="id_items">
						<option value="{{$dt->id_items}}"></option>
					</select>
				</div>
				<div class="col-md-6">
					<label for="validationDefaultUsername" class="form-label">Nama Produk</label>
					<div class="input-group">
					<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="items_name" placeholder="Produk" value="{{$dt->nama_items}}" readonly>
					</div>
				</div>
				<div class="col-md-6">
				<label for="validationDefault03" class="form-label">Qty</label>
					<input type="number" id="validationDefault03" class="form-control" aria-label="file example" name="qty" min="1" max="5" value="{{$dt->qty}}" required>
  				</div>
				<div class="col-md-6">
					<label for="validationDefault04" class="form-label">Total Price</label>
					<input type="number" class="form-control" id="validationDefault04" name="total_price" placeholder="Harga yang dibayar" value="{{$dt->total_price}}" readonly>
				</div>
				<div class="col-md-6">
    				<label for="validationTextarea" class="form-label">ID Merchant</label>
    				<input class="form-control" id="validationTextarea" name="id_merchant" value="{{$dt->id_merchant}}" placeholder="ID Merchant" readonly>
    			</div>
				<!-- <div class="col-md-6">
    				<label for="validationTextarea2" class="form-label">Nama Merchant</label>
    				<input class="form-control" id="validationTextarea2" value="{{$dt->name_merchant}}" name="name_merchant" placeholder="Merchant" required>
    			</div> -->
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="{{url('/transaksi')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
            @endforeach
		<!-- </div> -->
	</div>


@stop