@extends('home')

@section('navbar')
<a href="/ehome"><button class="tablink" id="Home">Home</button></a>
<a href="/ehome"><button class="tablink">Git</button></a>
<a href="/egaleri"><button class="tablink">Galeri</button></a>
@endsection

@section('konten')
<div class="content">
    <h1>Cards</h1>
    <button class="green btn-tambah" onclick="openTambah()">TAMBAH</button>

    <div class="card-container">
@foreach($barang as $v)
<div class="card">
    <div class="card-content-1">
        <img src="{{ asset('img/alice.jpg') }}">
    </div>
    <div class="card-content-3">
        <a>{{ $v->nama }}</a><br>
        <a>Rp.{{ $v->harga }}</a><br>
        <a>stok : {{ $v->stok }}</a><br>
        <p class="hide">{{$v->id}}</p>
    </div>
    <div class="card-content-4">
        <button class="btn-in-card red-hover" >Hapus</button>
        <button class="btn-in-card orange-hover" onclick="openEdit('{{ $v->nama }}', '{{ $v->harga }}', '{{ $v->stok }}', '{{ $v->id }}')">Edit</button>
    </div>
</div>
@endforeach
    </div>
</div>

<div class="form-popup" id="formTambah">
    <form action="/ehome/tambah" class="form-popup-container" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h1>Tambah<h1>

        <label for="nama2"><b>Nama</b></label>
        <input type="text" placeholder="Nama" name="nama2" required><br>

        <label for="harga2"><b>Harga</b></label>
        <input type="number" placeholder="..." name="harga2" required><br>

        <label for="stok2"><b>Stok</b></label>
        <input type="number" placeholder="..." name="stok2" required><br>

        <button type="submit" class="green btn-in-form" value="tambah">Tambah</button><br>
        <div class="red btn-in-form" onclick="tutup()">BATAL</div>
    </form>
</div>

<div class="form-popup" id="formEdit">
    <form action="/ehome/update" class="form-popup-container" method="post">
        {{ csrf_field() }}
        <h1 id="idJudulForm"><h1>

        <label for="nama"><b>Nama</b></label>
        <input type="text" placeholder="Nama" name="nama" id="idNama" required><br>

        <label for="harga"><b>Harga</b></label>
        <input type="number" placeholder="..." name="harga" id="idHarga" required><br>

        <label for="stok"><b>Stok</b></label>
        <input type="number" placeholder="..." name="stok" id="idStok" required><br>
        <input type="hidden" name="id" id="idId" value="">
        <button type="submit" class="green btn-in-form" value="simpan">SIMPAN</button>
        <div class="red btn-in-form" onclick="tutup()">BATAL</div>
    </form>
</div>

<script>
function openEdit(nama, harga, stok, id) {
  tutup();
  document.getElementById("formEdit").style.display = "block";
  document.getElementById("idJudulForm").innerHTML = nama;
  document.getElementById("idNama").value = nama;
  document.getElementById("idHarga").value = harga;
  document.getElementById("idStok").value = stok;
  document.getElementById("idId").value = id;
}

function openTambah() {
  tutup();
  document.getElementById("formTambah").style.display = "block";
}

function tutup() {
  document.getElementById("formEdit").style.display = "none";
  document.getElementById("formTambah").style.display = "none";
}
</script>
@endsection