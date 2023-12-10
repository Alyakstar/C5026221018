@extends('master2')
@section('judulhalaman','Data Mouse')
@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Mouse</h3>

	<a href="/mouse/tambah" class="btn btn-primary"> + Tambah Mouse Baru</a>

    <p>Cari Data Mouse :</p>
	<form action="/mouse/cari" method="GET">
		<input class = "form-control" type="text" name="cari" placeholder="Cari Nama Mouse .."
        value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input type="submit" value="CARI" class = "btn btn-info">
	</form>

	<br/>
	<br/>

	<table class="table table-stripped table-hover">
		<tr>
			<th>Kode Mouse</th>
			<th>Merk Mouse</th>
			<th>Stock Mouse</th>
			<th>Tersedia</th>
			<th>Opsi</th>
		</tr>
		@foreach($mouse as $m)
		<tr>
			<td>{{ $m->kodemouse }}</td>
			<td>{{ $m->merkmouse }}</td>
			<td>{{ $m->stockmouse }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
                <a href="/mouse/view/{{ $m->kodemouse }}" class=" btn btn-success">View</a>
                |
				<a href="/mouse/edit/{{ $m->kodemouse }}" class="btn btn-warning">Edit</a>
				|
				<a href="/mouse/hapus/{{ $m->kodemouse }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{--{{ $mouse->links()}}--}}
@endsection
