@extends('master')

@section('content')
<h3>Detail Supplier {{$supplier->nama}}:</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table">
			<thead>
				<tr class="warning">
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Fax</th>
					<th>Nama Sales</th>
					<th>Telepon Sales</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><a href="/supplier/show/{{$supplier->id}}">{{$supplier->nama}}</a></td>
					<td>{{$supplier->alamat}}</td>
					<td>{{$supplier->telepon}}</td>
					<td>{{$supplier->fax}}</td>
					<td>{{$supplier->namasales}}</td>
					<td>{{$supplier->teleponsales}}</td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin-top: 3px;">
			<div class="col-md-6">
				<a href="/supplier/edit/{{$supplier->id}}" class="btn btn-primary" style="width:100%;">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="/supplier/delete/{{$supplier->id}}" class="btn btn-warning confirmation" style="width:100%;">Delete</a>
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