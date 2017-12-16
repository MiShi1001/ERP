@extends('layouts.master')
@section('title','Supplier')
@section('content')

<div class="col-md-8 col-md-offset-2">
    @include('common.errors')
    <div class="panel-heading">
        <h1>供應商</h1>
    </div>
    <form action="{{ route('supplier.store')}}" method="post" class="bootstrap-frm">
        {{ csrf_field() }}
        <div id="main" class="container">


            /*供應商編號*/

            <div class="form-group{{ $errors->has('sid') ? ' has-error' : '' }}">
                <label for="sid" class="col-md-4 control-label">ID</label>

                <div class="col-md-6">
                    <input id="sid"  type="text" class="form-control" name="sid" value="{{ old('sid') }}" required autofocus>

                    @if ($errors->has('sid'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('sid') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            /*供應商名稱*/

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Name</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            /*聯絡人*/

            <div class="form-group{{ $errors->has('POC') ? ' has-error' : '' }}">
                <label for="POC" class="col-md-4 control-label">POC</label>

                <div class="col-md-6">
                    <input id="POC" type="text" class="form-control" name="POC" value="{{ old('POC') }}" required autofocus>

                    @if ($errors->has('POC'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('POC') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            /*聯絡人職稱*/

            <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                <label for="contact" class="col-md-4 control-label">contact</label>

                <div class="col-md-6">
                    <input id="contact" type="text" class="form-control" name="contact" value="{{ old('contact') }}" required autofocus>

                    @if ($errors->has('contact'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('contact') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            /*郵遞區號*/

            <div class="form-group{{ $errors->has('postal') ? ' has-error' : '' }}">
                <label for="postal" class="col-md-4 control-label">postal</label>

                <div class="col-md-6">
                    <input id="postal" type="text" class="form-control" name="postal" value="{{ old('postal') }}" required autofocus>

                    @if ($errors->has('postal'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('postal') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            /*地址*/

            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                <label for="address" class="col-md-4 control-label">address</label>

                <div class="col-md-6">
                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                    @if ($errors->has('address'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            /*供應商電話*/

            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                <label for="phone" class="col-md-4 control-label">phone</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}" required autofocus>

                    @if ($errors->has('phone'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            /*傳真電話*/

            <div class="form-group{{ $errors->has('fax') ? ' has-error' : '' }}">
                <label for="fax" class="col-md-4 control-label">fax</label>

                <div class="col-md-6">
                    <input id="fax" type="text" class="form-control" name="fax" value="{{ old('fax') }}" required autofocus>

                    @if ($errors->has('fax'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('fax') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>


            /*聯絡電話*/

            <div class="form-group{{ $errors->has('cell phone') ? ' has-error' : '' }}">
                <label for="cellphone" class="col-md-4 control-label">cell phone</label>

                <div class="col-md-6">
                    <input id="cellphone" type="text" class="form-control" name="cellphone" value="{{ old('cellphone') }}" required autofocus>

                    @if ($errors->has('cellphone'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('cellphone') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            /*統一編號*/

            <div class="form-group{{ $errors->has('taxid') ? ' has-error' : '' }}">
                <label for="TaxID" class="col-md-4 control-label">Tax ID</label>

                <div class="col-md-6">
                    <input id="TaxID" type="text" class="form-control" name="TaxID" value="{{ old('TaxID') }}" required >

                    @if ($errors->has('TaxID'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('TaxID') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            /*電子信箱*/

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>



            <ul class="actions" align="right">
                <button class="button special">新增</button>
                <a href="#" class="button special">重填</a>
                <a href="{{route('supplier.recall')}}" class="button">取消</a>
            </ul>


        </div>
    </form>
</div>
@endsection