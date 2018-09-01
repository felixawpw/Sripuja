@extends('layouts.master')

@section('content')
<div class="container-fluid">
	<div class="row">
    	<div class="col-md-12">
          <div class="card ">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <i class="material-icons">contacts</i>
              </div>
              <h4 class="card-title">Tambah Barang</h4>
            </div>
            <div class="card-body ">
              <form class="form-horizontal" action="{!! route('barang.update', $barang->id) !!}" method="POST">
              	{{csrf_field()}}
              	@method('PUT')
                <div class="row">
                  <label class="col-md-3 col-form-label">Kode Barang</label>
                  <div class="col-md-9">
                    <div class="form-group has-default">
                      <input type="text" class="form-control" name="kode" value="{!! $barang->kode !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Nama Barang</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" class="form-control" name="nama" value="{!! $barang->nama !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Kode Harga</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="text" class="form-control" name="kodeharga" value="{!! $barang->kodeharga !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Harga Beli</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="number" class="form-control" name="hbeli" value="{!! $barang->hbeli !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Harga Jual</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="number" class="form-control" name="hjual" value="{!! $barang->hjual !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Stok Total</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="number" class="form-control" name="stoktotal" value="{!! $barang->stoktotal !!}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <label class="col-md-3 col-form-label">Harga Grosir</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <input type="number" class="form-control" name="hgrosir" value="{!! $barang->hgrosir !!}">
                    </div>
                  </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<button type="submit" class="btn btn-fill btn-rose form-control">Submit</button>
					</div>
				</div>
              </form>
            </div>
            <div class="card-footer ">
            </div>
          </div>
        </div>
	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$(document).ready(function(){
		$('#nav_barang').addClass('active');
	});
</script>
@endsection