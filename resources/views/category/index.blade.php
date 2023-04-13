@extends('layouts.master')

@section('title')
    Category
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Category</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Data Category</h3>
                <a href="{{ route('category.create') }}"><button type="button" class="btn btn-outline-primary">Tambah
                        Data</button>
            </div>
            @include('alert.alert')
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th style="width: 5%">No</th>
                        <th>Nama</th>
                        <th style="width: 10%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href='' class="btn btn-warning btn-sm">Edit</a>
                                    <a href='' class="btn btn-danger btn-sm">Del</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        @endforeach
                    </tbody>

                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
@endsection
