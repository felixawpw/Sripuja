<h3>TAMBAH customer BARU</h3>

<div class="tab-content">
	<div class="tab-pane active" id="horizontal-form">
		<form class="form-horizontal" method="post" id="formaddcustomer">
			{{csrf_field()}}
			
			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Nama Customer</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Nama customer" name="nama">
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
				<label for="focusedinput" class="col-sm-2 control-label">HP</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Fax" name="hp">
				</div>
			</div>


			<div class="form-group">
				<label for="focusedinput" class="col-sm-2 control-label">Fax</label>
				
				<div class="col-sm-8">
					<input required type="text" class="form-control1" id="focusedinput" placeholder="Fax" name="fax">
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
		$('#divcustomer').html("");
	});
	$('#formaddcustomer').submit(function(e){
		e.preventDefault();
		$.ajax({
            type: 'POST',
            url: '/ajax/add/customer',
            data: $('#formaddcustomer').serialize(),
            success: function ( data ) {
            	var id = data.split('&')[0];
            	var nama = data.split('&')[1];
            	console.log(id + ' ' + nama);
            	if (data != 0)
		    	{
		    		alert('Tambah customer Berhasil');
		    		$('#divpenjualan').removeAttr('hidden');
		    		$('#divcustomer').html("");
		    		$('#customer_id').append("<option selected value='" + id + "'>" + nama + "</option>");
		    	}
            }

		});
	});
</script>