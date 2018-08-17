@extends('master')

@section('content')
<h3>EDIT CUSTOMER</h3>

<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="#">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Customer" name="nama" value="{{$customer->nama}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Alamat" name="alamat" value="{{$customer->alamat}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Telepon" name="telepon" value="{{$customer->telepon}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Hp</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Hp" name="hp" value="{{$customer->hp}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Fax</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Fax" name="fax" value="{{$customer->fax}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Hutang</label>
                
                <div class="col-sm-8">
                    <input type="number" class="form-control1" id="focusedinput" placeholder="Hutang" name="hutang" value="{{$customer->hutang}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Deposit</label>
                
                <div class="col-sm-8">
                    <input type="number" class="form-control1" id="focusedinput" placeholder="Deposit" name="deposit" value="{{$customer->deposit}}">
                </div>
            </div>

            <div class="panel-footer">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2">
                        <button type="submit" class="btn-primary btn">Kirim</button>
                    </div>
                </div>
            </div>
		</form>
	</div>
</div>
@endsection