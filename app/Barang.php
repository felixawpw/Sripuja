<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    //
    public function pembelians()
    {
    	return $this->belongsToMany('App\Pembelian')
    				->withPivot('quantity', 'hbeli', 'subtotal', 'sisa');
    }

    public function penjualans()
    {
    	return $this->belongsToMany('App\Penjualan')
    				->withPivot('quantity', 'hbeli', 'hjual', 'disc', 'hgrosir', 'subtotal');
    }
}
