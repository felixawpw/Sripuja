@extends('master')

@section('content')
<h3>EDIT BARANG</h3>

<div class="tab-content">
    <div class="tab-pane active" id="horizontal-form">
        <form class="form-horizontal" method="post" action="#">
            {{csrf_field()}}
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Kode Barang</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Kode Barang" name="kode" value="{{$barang->kode}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Nama Barang</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Barang" name="nama" value="{{$barang->nama}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Kode Harga</label>
                
                <div class="col-sm-8">
                    <input required type="text" class="form-control1" id="focusedinput" placeholder="Kode Harga" name="kodeharga" value="{{$barang->kodeharga}}">
                </div>
            </div>
            
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Harga Beli</label>
                
                <div class="col-sm-8">
                    <input required type="number" class="form-control1" id="focusedinput" placeholder="Harga Beli" name="hbeli" value="{{$barang->hbeli}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Harga Jual</label>
                
                <div class="col-sm-8">
                    <input required type="number" class="form-control1" id="focusedinput" placeholder="Harga Jual" name="hjual" value="{{$barang->hjual}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Stok Total</label>
                
                <div class="col-sm-8">
                    <input required type="number" class="form-control1" id="focusedinput" placeholder="Stok Total" name="stoktotal" value="{{$barang->stoktotal}}">
                </div>
            </div>

            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Harga Grosir</label>
                
                <div class="col-sm-8">
                    <input required type="number" class="form-control1" id="focusedinput" placeholder="Harga Grosir" name="hgrosir" value="{{$barang->hgrosir}}">
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