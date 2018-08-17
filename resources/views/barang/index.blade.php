@extends('master')

@section('content')
<h3>DAFTAR BARANG</h3>

<!-- SEARCH FORM
<form id="formSearch" class="form-inline">
	<input type="text" name="search" id="search" placeholder="Search" class="form-control">
	<input type="submit" name="submit" class="btn btn-primary" value="Submit" class="form-control">
</form>
-->

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="tablebarang" data-toggle="table" data-url="/barang/json" data-pagination="true" data-search="true" data-show-toggle="true" data-show-columns="true">
			<thead>
				<tr class="warning">
					<th data-sortable="true" data-field="kode">Kode</th>
					<th data-sortable="true" data-field="nama">Nama</th>
					<th data-sortable="true" data-field="kodeharga">Kode Harga</th>
					<th data-sortable="true" data-field="hbeli">H.Beli</th>
					<th data-sortable="true" data-field="hjual">H.Jual</th>
					<th data-sortable="true" data-field="stoktotal">Stok Total</th>
					<th data-sortable="true" data-field="hgrosir">H.Grosir</th>
					<th data-field="id" data-formatter="LinkFormatter">Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>

<script type="text/javascript">
	function LinkFormatter(value, row, index) {
		return "<a href='/barang/show/"+ value +"' class='btn btn-primary'>Show</a>";
	}

	$(document).ready(function(){

	});
</script>
@endsection