@extends('master')

@section('content')
<h3>Detail Pembelian:</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table">
			<thead>
				<tr class="warning">
					<th>No Nota</th>
					<th>Tanggal</th>
					<th>Total</th>
					<th>No Faktur</th>
					<th>Nama Supplier</th>
				</tr>
			</thead>

			<tbody>
				<tr>
					<td>{{$pembelian->no_nota}}</td>
					<td>{{$pembelian->tanggal}}</td>
					<td>{{$pembelian->total}}</td>
					<td>{{$pembelian->no_faktur}}</td>
					<td>{{$pembelian->supplier->nama}}</td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin-top: 3px;">
			<div class="col-md-6">
				<a href="/pembelian/edit/{{$pembelian->id}}" class="btn btn-primary" style="width:100%;">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="/pembelian/delete/{{$pembelian->id}}" class="btn btn-warning confirmation" style="width:100%;">Delete</a>
			</div>
		</div>
		<script type="text/javascript">
		    $('.confirmation').on('click', function () {
	    	    return confirm('Ciyus mau delete?');
	    	});
		</script>
	</div>
</div>
<h3>Data Barang</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table">
			<thead>
				<tr class="warning">
					<th>Kode</th>
					<th>Nama</th>
					<th>H.Beli</th>
					<th>Jumlah</th>
				</tr>
			</thead>
			<tbody>
				@foreach($pembelian->barangs as $barang)
					<td>{{$barang->kode}}</td>
					<td>{{$barang->nama}}</td>
					<td>{{$barang->pivot->hbeli}}</td>
					<td>{{$barang->pivot->quantity}}</td>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection