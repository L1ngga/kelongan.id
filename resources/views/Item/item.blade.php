@extends('template')

@section('content')
<!DOCTYPE html>
<html>
<head>
  <title>Produk Kelongan.id</title>
</head>
<br>
<br>
    <div class="container">
    @if (session('alert_pesan'))
      <div class="alert alert-success">
          {{ session('alert_pesan') }}
      </div>
    @endif
    <br>
    <h1 style="float: left;">Produk</h1><br>
        <a href="{{url('item_create')}}" class="btn btn-sm btn-success" style="float: right;">Tambah data produk</a><br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="clear: both;">
            <thead>
              <tr>
                <th>ID</th>
                <th>Gambar</th>
                <th>Produk</th>
                <!-- <th>type</th>
                <th>deskription</th> -->
                <th>Harga</th>
                <th>Stok</th>
                <th>Toko</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- @php $no = 1; @endphp -->
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td><img src="/Uploads/{{$dt->picture}}" alt="picture" width="100px"></td>
                <td>
                <strong>{{ $dt->nama_items}}</strong><br>
                         <!-- ADAPUN NAMA KATEGORINYA DIAMBIL DARI HASIL RELASI PRODUK DAN KATEGORI -->
                         <label>Kategori: <span >{{ $dt->type}}</span></label><br>
                         <label>Deskripsi: <span >{{ $dt->deskription}}</span></label>
                </td>
                <!-- <td>{{ $dt->type}}</td>
                <td>{{ $dt->deskription}}</td> -->
                <td>Rp. {{ $dt->price}}</td>
                <td>{{ $dt->stock}}</td>
                <td>{{ $dt->nama_merchant}}</td>
                <td>

                  <form action="{{ url('item_destroy', $dt->id )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <a href="{{ url('item_edit', $dt->id) }}" class="btn btn-sm btn-primary">Edit</a>
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
        
    </div>

@stop