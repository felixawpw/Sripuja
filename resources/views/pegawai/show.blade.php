@extends('master')

@section('content')
<h3>Detail Pegawai {{$pegawai->nama}}:</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table">
			<thead>
				<tr class="warning">
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Hp</th>
					<th>Gaji</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><a href="/pegawai/show/{{$pegawai->id}}">{{$pegawai->user->name}}</a></td>
					<td>{{$pegawai->alamat}}</td>
					<td>{{$pegawai->telepon}}</td>
					<td>{{$pegawai->hp}}</td>
					<td>{{$pegawai->gaji}}</td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin-top: 3px;">
			<div class="col-md-6">
				<a href="/pegawai/edit/{{$pegawai->id}}" class="btn btn-primary" style="width:100%;">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="/pegawai/delete/{{$pegawai->id}}" class="btn btn-warning confirmation" style="width:100%;">Delete</a>
			</div>
		</div>
		<script type="text/javascript">
		    $('.confirmation').on('click', function () {
	    	    return confirm('Ciyus mau delete?');
	    	});
		</script>
	</div>
</div>
@endsection