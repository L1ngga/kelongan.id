@extends('template')

@section('content')
<!DOCTYPE html>
<html>
  <head>
  <title>Ubah Seller Kelongan.id</title>
</head>

<br>
<br>
<div class="container"><br>
<h1>Update Data Seller</h1>
		<!-- <div class="wrap-contact100"> -->
      <!-- @if($errors->any())
      @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
      @endforeach
      @endif -->
      @foreach($data as $dt)
			<form class="row g-3" action="{{ url('seller_update', $dt->id) }}" method="post">
			{{ csrf_field() }}
            {{ method_field('PUT') }}	
				<div class="col-md-4">
    				<label for="validationDefault01" class="form-label">Nama Lengkap</label>
    				<input type="text" class="form-control" id="validationDefault01" name="nama" placeholder="Nama Lengkap" value="{{$dt->name}}" required>
  				</div>
				<div class="col-md-4">	
					<label for="validationDefault02" class="form-label">E-mail</label>
					<input type="text" class="form-control" id="validationDefault02" name="email" placeholder="email" value="{{$dt->email}}" required>
				</div>
				<!-- <div class="col-md-4">
					<label for="validationDefaultUsername" class="form-label">E-Mail</label>
					<div class="input-group">
					<span class="input-group-text" id="inputGroupPrepend2">@</span>
					<input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" name="email" placeholder="E-Mail" value="{{ $dt->email }}" disabled>
					</div>
				</div>
				<div class="col-md-6">
					<label for="validationDefault03" class="form-label">Password</label>
					<input type="password" class="form-control" id="validationDefault03" name="password" placeholder="Password" value="{{ $dt->password }}" disabled>
				</div>
				<div class="col-md-3">
					<label for="validationDefault04" class="form-label">Level</label>
					<select class="form-select" id="validationDefault04" name="level" value="{{ $dt->level }}" required>
					<option selected disabled value="">--Pilih--</option>
					<option>Admin</option>
					<option>Seller</option>
					</select>
				</div> -->
				<div class="col-12">
					<button class="btn btn-primary" type="submit">Simpan</button>
					<a href="{{url('seller')}}" class="btn btn-success">Kembali</a><br><br>
				</div>
			</form>
            @endforeach
		<!-- </div> -->
	</div>
@stop