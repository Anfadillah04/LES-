@extends('layouts.app')
@section('content')
 <div class="container">
    <h4>About Table</h4>
    <a href="{{ route('about.create') }}" class="btn -sm btn-primary mb-2">Tambah</a>
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Pengalaman</th>
            <th scope="col">Pendidikan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($abouts as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->pengalaman }}</td>
                <td>{{ $item->pendidikan }}</td>
                <td>
                    <a href="{{ route('about.edit',$item->id) }}" class="btn btn-sm btn-danger">Edit</a>
                    <a href="{{ route('about.destroy',$item->id) }}" class="btn btn-sm btn-success">Delete</a>
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
 </div>
@endsection