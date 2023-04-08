@section('content')


    <div class="card-harder">
        <h2> Tambah Data</h2>
        <a href="{{ route('index') }}" class=" btn btn-warning float-end mt-2">Kembali</a>
    </div>


        <!-- /resources/views/post/create.blade.php -->

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card-body">

        <!-- Create Post Form -->

        <form action="{{ route('course.store') }}" method="post">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="form-group">
                <label for="">Institution</label>
                <input type="text" class="form-control" name="institution">
            </div>
            <div class="card-harder">
                <input type="submit" value="Simpan" class="btn btn-primary float-right">
            </div>
            <div class="card-harder">
                <input type="submit" value="Ubah" class="btn btn-warning float-right">
            </div>
        </form>
    </div>
    </div>
@endsection
