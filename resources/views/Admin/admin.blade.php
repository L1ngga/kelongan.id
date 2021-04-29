@extends('template')

@section('content')
<!DOCTYPE html>
<html>
  <head>
  <title>Pengguna Kelongan.id</title>
</head>

<br>
<br>
    <div class="container"><br>
    <h1 style="float: left;">Admin</h1><br>
    <a href="{{url('admin_create')}}" style="float: right;" class="btn btn-sm btn-success">Tambah data admin</a><br><br>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="clear: both;">
            <thead>
              <tr>
                <th>ID Admin</th>
                <th>Name</th>
                <th>Email</th>
                <th>Level</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <!-- @php $no = 1; @endphp -->
              @foreach($data as $dt)
              <tr>
                <td>{{ $dt->id }}</td>
                <td>{{ $dt->name}}</td>
                <td>{{ $dt->email}}</td>
                <td>{{ $dt->level}}</td>
                <td>

                  <form action="{{ url('admin_destroy', $dt->id )}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <!-- <a href="{{ url('seller_edit', $dt->id) }}" class="btn btn-sm btn-primary">Edit</a> -->
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus data?')">Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      
    </div>

@stop