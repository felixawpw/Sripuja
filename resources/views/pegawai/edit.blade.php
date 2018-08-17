@extends('master')

@section('content')
<h3>EDIT Supplier</h3>

<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="#">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Pegawai" name="nama" value="{{$pegawai->user->name}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Alamat" name="alamat" value="{{$pegawai->alamat}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
                
                <div class="col-sm-8">
                    <input type="text" class="form-control1" id="focusedinput" placeholder="Telepon" name="telepon" value="{{$pegawai->telepon}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Hp</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Hp" name="hp" value="{{$pegawai->hp}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Gaji</label>
                
                <div class="col-sm-8">
                    <input required type="number" class="form-control1" id="focusedinput" placeholder="Gaji" name="gaji" value="{{$pegawai->gaji}}">
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