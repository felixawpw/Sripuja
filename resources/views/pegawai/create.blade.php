@extends('master')

@section('content')
<h3>TAMBAH PEGAWAI BARU</h3>

<div class="tab-content">
	<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" method="post" action="#">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Pegawai" name="nama">
				</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Alamat" name="alamat">
				</div>
			</div>
			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Telepon</label>
				
				<div class="col-sm-8">
					<input type="text" class="form-control1" id="focusedinput" placeholder="Telepon" name="telepon">
				</div>
			</div>
			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Hp</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Hp" name="hp">
				</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Gaji</label>
				
				<div class="col-sm-8">
					<input required type="number" class="form-control1" id="focusedinput" placeholder="Gaji" name="gaji">
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