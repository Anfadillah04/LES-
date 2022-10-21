@extends('layouts.app')
@section('content')
<div class="container">
    <div class="card">
        <div class="card-header"></div>
            <h3>FORM TAMBAH FORTOFOLIO</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('portofolio.store') }} "method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="" required>
                </div>
                <div class="form-group">
                    <label for="image">image</label>
                    <input type="file" class="form-control" name="image" required>
                </div>
                    <label for="caption">Caption</label>
                    <input type="text" class="form-control"  name="caption" id="" required>
                </div>
                <button class="btn btn-sm btn-success" type="submit">simpan</button>
            </form>

        </div>
    </div>
</div>

@endsection