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
            </div>
            <div class="box-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <th style="width: 5%">No</th>
                        <th>Nama</th>
                        <th style="width: 10%"><i class="bx bx-cog"></i></th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pakaian</td>
                            <td>X</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Pakaian</td>
                            <td>X</td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
@endsection
