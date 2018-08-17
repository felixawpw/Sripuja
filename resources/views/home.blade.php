@extends('master')

@section('content')

<div class="col_1">
	<div class="col-md-8 span_8">
		<div class="activity_box">
			<div class="panel-heading" id="panel-heading-red">
				<h4 class="panel-title">Data Absensi</h4>
			</div>

			<div id="calendar">
			</div>

		</div>
	</div>
	<div class="col-md-4 span_8">
		<div class="activity_box">
			<div class="panel-heading" id="panel-heading-red">
				<h4 class="panel-title">Absensi</h4>
			</div>

			<div class="row">
				<div class="col-md-12">
					<form class="form-inline" enctype="multipart/form-data">
						<div class="form-group">
							<label for="tanggalAbsensi" class="sr-only">Pilih Tanggal : </label>
							<input type="date" name="tanggalAbsensi" id="tanggalAbsensi" class="form-control">
						</div>
					</form>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<form id="formAbsensi">
						<input type="hidden" name="tanggal" value="" id="tanggal">
						<table data-toggle="table" class="table table-striped">
							<thead>
								<tr class="warning">
									<th>Nama Pegawai</th>
									<th>Status Absensi</th>
								</tr>
							</thead>
							<tbody id="bodyAbsensi">
							@foreach($pegawais as $pegawai)
								<tr>
									<td><label>{{$pegawai->user->name}}</label></td>
									<td>
										<label class="col-md-6"><input type="radio" name="radio_{{$pegawai->id}}" value="1" required>Masuk</label>
										<label><input type="radio" name="radio_{{$pegawai->id}}" value="0">Tidak Masuk</label>
									</td>
								</tr>
							@endforeach
							</tbody>
						</table>
						<input type="submit" name="submit" value="Submit" class="btn btn-primary col-xs-12 confirmation">
					</form>
				</div>
			</div>		
		</div>
	</div>
	<div class="clearfix"></div>
</div>

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
	</div>
	<div class="clear-fix"></div>
</div>
<script type="text/javascript">

	$(document).ready(function(){
		$('#calendar').fullCalendar({
			header:{
				left: '',
				center: 'title',
				right: 'month,listMonth',
			},
			views:{
				listMonth: { buttonText: 'List Month'}
			},
			defaultView: 'month',
			navLinks: true, // can click day/week names to navigate views
			editable: true,
			eventLimit: true,
			events: {!! $events !!}// allow "more" link when too many events
		});
		Date.prototype.toDateInputValue = (function() {
		    var local = new Date(this);
		    local.setMinutes(this.getMinutes() - this.getTimezoneOffset());
		    return local.toJSON().slice(0,10);
		});

		$('#tanggalAbsensi').val(new Date().toDateInputValue());
	});

	$('#formAbsensi').submit(function(e){
		e.preventDefault();
		$('#tanggal').val($('#tanggalAbsensi').val());
		$.ajax({
	        type: "POST",
	        url: '/absen/store',
	        data:{
	        	form: $('#formAbsensi').serialize()
	        },
	        success: function( data ) {
	        	alert(data);
	        }
	    });
	});
	$('.confirmation').on('click', function () {
	    return confirm('Apakah data sudah benar?');
	});
</script>
@endsection
