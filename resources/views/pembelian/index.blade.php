@extends('master')

@section('content')
<h3>DAFTAR PEMBELIAN</h3>

<!-- SEARCH FORM
<form id="formSearch" class="form-inline">
	<input type="text" name="search" id="search" placeholder="Search" class="form-control">
	<input type="submit" name="submit" class="btn btn-primary" value="Submit" class="form-control">
</form> 
-->

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-toggle="true" data-show-columns="true" data-url="/pembelian/json">
			<thead>
				<tr class="warning">
					<th data-sortable="true" data-field="no_nota">No Nota</th>
					<th data-sortable="true" data-field="tanggal">Tanggal</th>
					<th data-sortable="true" data-field="total">Total</th>
					<th data-sortable="true" data-field="no_faktur">No Faktur</th>
					<th data-sortable="true" data-field="nama_supplier">Nama Supplier</th>
					<th data-field="id" data-formatter="LinkFormatter">Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<script type="text/javascript">
	function LinkFormatter(value, row, index) {
		return "<a href='/pembelian/show/"+ value +"' class='btn btn-primary'>Show</a>";
	}

</script>
@endsection