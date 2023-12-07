@extends('master2')

@section('judulhalaman','Beli Barang Belanja')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Beli Barang Belanja</h3>

	<a href="/keranjang"> Kembali</a>

	<br/>
	<br/>


        <div class="row">


            <div class="col-8">
                <form action="/keranjang/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label form="kodebarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="kodebarang" name="kodebarang">
            </div>
        </div>
        <div class="form-group row">
            <label form="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="jumlah" name="jumlah">
            </div>
        </div>
        <div class="form-group row">
            <label form="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

</div>
</div>
@endsection

