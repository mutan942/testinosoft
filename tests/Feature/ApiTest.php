<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getdata()
    {
        $response = $this->get('/api/getstok');
        $response->assertStatus(200);
    }

    public function test_penjualan()
    {
        $car["id_barang"] = "62455e59121101fbbc07e0b6";
        $car["mesin"] = "HRD 9000CC";
        $car["jenis"] = "mobil";        
        $car["qty"] = "1";  
        $car["harga"] = "2000000";
        $response = $this->post('/api/penjualan',$car);
        $response->assertStatus(200);
    }
}
