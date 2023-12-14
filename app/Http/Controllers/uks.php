<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uks extends Controller
{
    public function tampilkanuks()
    {
        // Logika atau manipulasi data jika diperlukan sebelum menampilkan view

        return view('uks'); // Mengembalikan view 'uks.blade.php'
    }
}

?>
