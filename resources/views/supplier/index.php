@extends('layouts.master')
@section('title','Supplier')
@section('content')

<div>
    @include('common.errors')

    <form action="#" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <div id="main" class="container">
            <h2 id="elements">供應商</h2>
            <div>
                <form method="post" action="/supplier/search">
                    <div class="row uniform">
                        <div class="4u 12u$(small)">
                            <input type="text" name="query" id="query" value="" placeholder="Query" />
                        </div>
                        <div class="3u$ 12u$(small)">
                            <button class="button icon fa-search">Search</button>
                        </div>

                    </div>
                </form>

                <div class="table-wrapper">
                    <table>
                        <thead>
                        <tr>
                            <th></th>
                            <th>供應商編號</th>
                            <th>供應商</th>
                            <th>連絡人</th>
                            <th>連絡人職稱</th>
                            <th>郵遞區號</th>
                            <th>地址</th>
                            <th>電話</th>
                            <th>傳真</th>
                            <th>手機</th>
                            <th>統一編號</th>
                            <th>電子信箱</th>
                        </tr>
                        </thead>
                        <tbody>




                        @foreach($suppliers as $supplier)
                        <tr>
                            <td><input type="checkbox" id="checkbox" name="checkbox"  ><label for="{{$supplier->id}}"></label></td>
                            <td>{{ $supplier->sid }}</td>
                            <td>{{ $supplier->name }}</td>
                            <td>{{ $supplier->POC }}</td>
                            <td>{{ $supplier->contact }}</td>
                            <td>{{ $supplier->postal }}</td>
                            <td>{{ $supplier->address }}</td>
                            <td>{{ $supplier->phone}}</td>
                            <td>{{ $supplier->fax }}</td>
                            <td>{{ $supplier->cellphone }}</td>
                            <td>{{ $supplier->TaxID }}</td>
                            <td>{{ $supplier->email }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <ul class="actions" align="right">
                        <a href="{{route('supplier.create')}}"class="button special">新增</a>
                        <a href="{{route('supplier.edit',$supplier->id)}}" class="button special">修改</a>
                        <a class="button">刪除</a>
                        <form action="{{ route('supplier.destroy', $supplier->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                        </form>

                    </ul>

                </div>
            </div>
        </div>
    </form>
</div>
@endsection