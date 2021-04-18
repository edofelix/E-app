<?php

namespace App\View\Components;

use Illuminate\View\Component;

class KontenHome extends Component
{
    public $barang;
    public function __construct($barang)
    {
        $this->barang = $barang;
    }

    public function render()
    {
        return view('components.konten-home');
    }
}
