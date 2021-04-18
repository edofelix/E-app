<h1>INI KOMPONEN</h1>
@foreach($barang as $v)
<a>{{ $v->nama }}</a>
<a>{{ $v->exp }}</a>
<a>{{ $v->stok }}</a>
<a>{{ $v->harga }}</a><br><br>
@endforeach