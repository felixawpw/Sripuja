@extends('master')

@section('content')
<h3>DETAIL BARANG ({{$barang->kode}})</h3>
<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" data-toggle="table">
			<thead>
				<tr class="warning">
					<th>Kode</th>
					<th>Nama</th>
					<th>Kode Harga</th>
					<th>H.Beli</th>
					<th>H.Jual</th>
					<th>Stok Total</th>
					<th>H.Grosir</th>
					<th>Action</th>
				</tr>
			</thead>
			
			<tbody>
				<tr>
					<td>{{$barang->kode}}</td>
					<td><a href="/barang/show/{{$barang->id}}">{{$barang->nama}}</a></td>
					<td>{{$barang->kodeharga}}</td>
					<td>{{$barang->hbeli}}</td>
					<td>{{$barang->hjual}}</td>
					<td>{{$barang->stoktotal}}</td>
					<td>{{$barang->hgrosir}}</td>
					<td>
						<a href="/barang" class="btn btn-primary">Back</a>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="row" style="margin-top: 3px;">
			<div class="col-md-6">
				<a href="/barang/edit/{{$barang->id}}" class="btn btn-primary" style="width:100%;">Edit</a>
			</div>
			<div class="col-md-6">
				<a href="/barang/delete/{{$barang->id}}" class="btn btn-warning confirmation" style="width:100%;">Delete</a>
			</div>
		</div>
		<script type="text/javascript">
		    $('.confirmation').on('click', function () {
	    	    return confirm('Ciyus mau delete?');
	    	});
		</script>
	</div>
</div>

<div class="col_1">
	<div class="col-md-6 span_8">
		<div class="activity_box">
			
			<!-- Judul -->
			<div class="panel-heading" id="panel-heading-red">
				<h4 class="panel-title">Data Pembelian Bulan Ini</h4>
			</div>

			<!-- Content -->
			<div id="divPembelian">
			</div>		

		</div>
	</div>
	
	<!-- Expire Segera -->
	<div class="col-md-6 span_8">
		<div class="activity_box">
		
			<!-- Judul -->
			<div class="panel-heading" id="panel-heading-red">
				<h4 class="panel-title">Data Penjualan Bulan Ini</h4>
			</div>
			
			<!-- Content -->
			<div id="duivP">
			</div>
			
		</div>
	</div>
	
	<div class="clearfix"></div>
</div>

@endsection