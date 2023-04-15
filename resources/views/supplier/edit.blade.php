@extends('layouts.master')

@section('title')
    Edit Supplier
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Supplier</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Supplier</h3>
            </div>
            @include('alert.alert')

            <!-- START FORM -->
            <form action='{{ url('supplier/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Supplier</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="name"
                                value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="alamat" class="col-sm-2 col-form-label">Alamat Supplier</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name='alamat' id="alamat" rows="5" cols="100">{{ $data->alamat }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="telepon" class="col-sm-2 col-form-label">Telepon Supplier</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='telepon' id="telepon"
                                value="{{ $data->telepon }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
            </form>
        </div>
        <!-- AKHIR FORM -->
    </div>
    </div>
@endsection
