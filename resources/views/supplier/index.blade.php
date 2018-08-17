@extends('master')

@section('content')
<h3>DAFTAR SUPPLIER</h3>

<!-- SEARCH FORM
<form id="formSearch" class="form-inline">
	<input type="text" name="search" id="search" placeholder="Search" class="form-control">
	<input type="submit" name="submit" class="btn btn-primary" value="Submit" class="form-control">
</form> 
-->

<div class="panel panel-warning" data-widget="{&quot;draggable&quot;: &quot;false&quot;}" data-widget-static="">
	<div class="panel-body no-padding">
		<table class="table table-striped" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-toggle="true" data-show-columns="true" data-url="/supplier/json">
			<thead>
				<tr class="warning">
					<th data-sortable="true" data-field="nama">Nama</th>
					<th data-field="telepon">Telepon</th>
					<th data-field="fax">Fax</th>
					<th data-sortable="true" data-field="namasales">Nama Sales</th>
					<th data-field="teleponsales">Telepon Sales</th>
					<th data-field="id" data-formatter="LinkFormatter">Action</th>
				</tr>
			</thead>
		</table>
	</div>
</div>
<script type="text/javascript">
	function LinkFormatter(value, row, index) {
		return "<a href='/supplier/show/"+ value +"' class='btn btn-primary'>Show</a>";
	}

</script>
@endsection