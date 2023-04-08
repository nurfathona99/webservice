@extends('master')

@section('title', 'course')

@section('isi')
 <div class="alert alert-info">Course</div>

 <a href="{{ route('course.create') }}" class=" btn btn-info float-end mt-2">Tambah Data</a>

 <table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Institution</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $d)
        <tr>
            <td>{{ $loop->iteration}}</td>
            <td>{{ $d->name}}</td>
            <td>{{ $d->description}}</td>
            <td>{{ $d->price}}</td>
            <td>{{ $d->institution_id}}</td>
            <td><a href="{{ route('course.edit', $d->id) }}" class = "btn btn-warning"> Edit </a>
            </td>
        </td>
        <td>
            <form action="{{ route('course.delete', ['id' => 1]) }}">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button class = "btn btn-danger">DELETE</button>

            </form>
    </td>
    </tr>
        @endforeach
    </tbody>
 </table>

@endsection
