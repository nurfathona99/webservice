@extends('app')
@section('content')

<div class="container mt-3">

    <form action="{{ route('course.update', $table_jurnal->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="">Id</label>
            <input type="text" class="form-control" name="id" value="{{ $table_courses->id }}">
        </div>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" class="form-control" name="yayasan" value="{{ $table_courses->name }}">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="nama_jurnal" value="{{ $table_courses->description }}">
        </div>
        <div class="form-group">
            <label for="">Price</label>
            <input type="text" class="form-control" name="chief_editor" value="{{ $table_courses->price }}">
        </div>
        <div class="form-group">
            <label for="">Institution</label>
            <input type="text" class="form-control" name="email_pengelola" value="{{ $table_courses->institution_id }}">
        </div>
        <div class="card-harder">
            <input type="submit" value="Simpan" class="btn btn-primary float-right">
        </div>
    </form>


</div>

@endsection
