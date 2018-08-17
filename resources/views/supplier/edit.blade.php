@extends('master')

@section('content')
<h3>EDIT Supplier</h3>

<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="#">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama Supplier</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Supplier" name="nama" value="{{$supplier->nama}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Alamat" name="alamat" value="{{$supplier->alamat}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Telepon" name="telepon" value="{{$supplier->telepon}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Fax</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Fax" name="fax" value="{{$supplier->fax}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama Sales</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Sales" name="namasales" value="{{$supplier->namasales}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Telepon Sales</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Telepon Sales" name="teleponsales" value="{{$supplier->teleponsales}}">
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