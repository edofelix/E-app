@foreach($barang as $v)
<div class="card">
    <div class="card-content-1">lah lah</div>
    <div class="card-content-2">
        <a>Nama</a><br>
        <a>Harga</a><br>
        <a>Stok</a><br>
        <a>Expired</a><br>
    </div>
    <div class="card-content-3">
        <a>{{ $v->nama }}</a><br>
        <a>{{ $v->harga }}</a><br>
        <a>{{ $v->stok }}</a><br>
        <a>{{ $v->exp }}</a>
    </div>
</div>
@endforeach