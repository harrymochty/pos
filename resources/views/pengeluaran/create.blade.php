@extends('layouts.master')

@section('title')
    Create Pengeluaran
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Create Pengeluaran</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Create Data Pengeluaran</h3>
            </div>
            @include('alert.alert')
            <!-- START FORM -->
            <form action='{{ url('pengeluaran') }}' method='post'>
                @csrf
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Deskripsi Pengeluaran</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='deskripsi' id="deskripsi"
                                value="{{ Session::get('deskripsi') }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nominal" class="col-sm-2 col-form-label">Nominal Pengeluaran</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name='nominal' id="nominal"
                                value="{{ Session::get('nominal') }}">
                        </div>
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
