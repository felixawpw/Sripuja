<h3>TAMBAH SUPPLIER BARU</h3>

<div class="tab-content">
	<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" method="post" id="formaddsupplier">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Nama Supplier</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Supplier" name="nama">
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
				<label for="focusedinput" class="col-sm-2 control-label">Fax</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Fax" name="fax">
				</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Nama Sales</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Nama Sales" name="namasales">
				</div>
			</div>

			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Telepon Sales</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Telepon Sales" name="teleponsales">
				</div>
			</div>

			<div class="panel-footer">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-2">
						<button type="submit" name="submit" class="btn btn-primary" style="width:100%;">Submit</button>
					</div>
					<div class="col-sm-4">
						<button type="reset" id="buttonCancel" class="btn btn-primary" style="width:100%">Batal</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript">
	$('#buttonCancel').click(function(e){
		$('#divpembelian').removeAttr('hidden');
		$('#divsupplier').html("");
	});
	$('#formaddsupplier').submit(function(e){
		e.preventDefault();
		$.ajax({
            type: 'POST',
            url: '/ajax/add/supplier',
            data: $('#formaddsupplier').serialize(),
            success: function ( data ) {
            	var id = data.split('&')[0];
            	var nama = data.split('&')[1];
            	console.log(id + ' ' + nama);
            	if (data != 0)
		    	{
		    		alert('Tambah Supplier Berhasil');
		    		$('#divpembelian').removeAttr('hidden');
		    		$('#divsupplier').html("");
		    		$('#supplier_id').append("<option selected value='" + id + "'>" + nama + "</option>");
		    	}
            }

		});
	});
</script>