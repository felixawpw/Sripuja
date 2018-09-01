<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Barang::class, 5000)->create()->each(function ($u) {
        	$u->make();
	    });
    }
}
