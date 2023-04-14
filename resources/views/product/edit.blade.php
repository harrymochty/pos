@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('breadcrumbs')
    @parent
    <li><a href="#" class="active">Edit Product</a></li>
@endsection



@section('content')
    <div class="data">
        <div class="content-data">
            <div class="head">
                <h3>Edit Data Product</h3>
            </div>
            @include('alert.alert')
            <!-- START FORM -->
            <form action='{{ url('product/' . $data->id) }}' method='post'>
                @csrf
                @method('PUT')
                <div class="my-3 p-3">
                    <div class="mb-3 row">
                        <label for="name" class="col-sm-2 col-form-label">Nama Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='name' id="name"
                                value="{{ $data->name }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="category_id" class="col-sm-2 col-form-label">Category Product</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="category_id" id="category_id">
                                <option disabled>Pilih Category</option>
                                {{-- <option value="{{ $data->category_id }}">{{ $data->category->name }} --}}
                                </option>
                                @foreach ($cate as $item)
                                    {{-- <option value="{{ $item->id }}">{{ $item->name }}</option> --}}
                                    <option @selected($item->id == $data->category_id) value="{{ $item->id }}">{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk Product</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='merk' id="merk"
                                value="{{ $data->merk }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='harga_beli' id="harga_beli"
                                value="{{ $data->harga_beli }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="diskon" class="col-sm-2 col-form-label">Diskon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='diskon' id="diskon"
                                value="{{ $data->diskon }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga_jual" class="col-sm-2 col-form-label">Harga Jual</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='harga_jual' id="harga_jual"
                                value="{{ $data->harga_jual }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stock" class="col-sm-2 col-form-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name='stock' id="stock"
                                value="{{ $data->stock }}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!-- AKHIR FORM -->
    </div>
    </div>
@endsection
