@extends('layouts.master')

@section('title')
    Product
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Product</a></li>
@endsection

@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Data Product</h3>
                <a href="{{ route('product.create') }}"><button type="button" class="btn btn-outline-primary">Tambah
                        Data</button></a>
            </div>
            @include('alert.alert')
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th style="width: 5%">No</th>
                        <th>Nama Product</th>
                        <th>Category</th>
                        <th>Merk</th>
                        <th>Harga Beli</th>
                        <th style="width: 5%">Diskon</th>
                        <th>Harga Jual</th>
                        <th style="width: 5%">Stock</th>
                        <th style="width: 10%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <?php $i = $data->firstItem(); ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->category->name ?? '' }}</td>
                                <td>{{ $item->merk }}</td>
                                <td>{{ format_rupiah($item->harga_beli) }}</td>
                                <td>{{ $item->diskon }}</td>
                                <td>{{ format_rupiah($item->harga_jual) }}</td>
                                <td>{{ $item->stock }}</td>
                                <td>
                                    <a href='' class="btn btn-primary btn-sm"><span class="bx bx-edit"></span></a>
                                    <a href='' class="btn btn-danger btn-sm"><span class="bx bx-trash"></span></a>
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
