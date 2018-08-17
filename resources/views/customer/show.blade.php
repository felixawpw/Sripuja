@extends('master')

@section('content')
<h3>Detail Customer {{$customer->nama}}:</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table">
			<thead>
				<tr class="warning">
					<th>Nama</th>
					<th>Alamat</th>
					<th>Telepon</th>
					<th>Hp</th>
					<th>Fax</th>
					<th>Hutang</th>
					<th>Deposit</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td><a href="/customer/show/{{$customer->id}}">{{$customer->nama}}</a></td>
					<td>{{$customer->alamat}}</td>
					<td>{{$customer->telepon}}</td>
					<td>{{$customer->hp}}</td>
					<td>{{$customer->fax}}</td>
					<td>{{$customer->hutang}}</td>
					<td>{{$customer->deposit}}</td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin-top: 3px;">
			<div class="col-md-6">
				<a href="/customer/edit/{{$customer->id}}" class="btn btn-primary" style="width:100%;">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="/customer/delete/{{$customer->id}}" class="btn btn-warning confirmation" style="width:100%;">Delete</a>
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