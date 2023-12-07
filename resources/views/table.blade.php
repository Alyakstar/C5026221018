
@extends('master2')
@section('judulhalaman','Data Keranjang Belanja')
@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Keranjang Belanja</h3>

    <a href="/keranjang/beli/"class="btn btn-success">Beli</a>

	<br/>
	<br/>

	<table class="table table-stripped table-hover">
		<tr>
			<th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
		    </tr>
        @foreach($keranjangbelanjaalya as $kba)
		<tr>
			<td>{{ $kba->keranjang_id }}</td>
            <td>{{ $kba->keranjang_kode }}</td>
            <td>{{ $kba->keranjang_jumlah }}</td>
            <td>{{ number_format($kba->keranjang_harga, 0, ',','.') }}</td>
            <td>{{ number_format($kba->keranjang_jumlah * $kba->keranjang_harga, 0, ',','.')}}</td>
            <td></td>
            <td>
            <a href="/keranjang/batal/{{ $kba->keranjang_id }}"class=" btn btn-danger">Batal</a>
        </td>
		</tr>
		@endforeach
	</table>
    {{-- $keranjangbelanjaalya->links()--}}
@endsection

