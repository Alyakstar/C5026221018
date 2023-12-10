@extends('master2')
@section('judulhalaman','Data Mouse')

@section('konten')

    <br/>
	<h3>Edit Daftar Mouse</h3>

	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>
    <br/>

	@foreach($mouse as $m)
	<form action="/mouse/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkmouse" class="col-sm-2 col-form-label">Merk Mouse</label>
            <div class="col-sm-10">
                <input type="text"  class="form-control" id="merkmouse" required="required" name="merkmouse" value="{{ $m->merkmouse }}">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmouse" class="col-sm-2 col-form-label">Stock Mouse</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stockmouse" required="required" name="stockmouse" value="{{ $m->stockmouse }}">
            </div>
        </div>
		<input type="hidden" name="kodemouse" value="{{ $m->kodemouse }}"> <br/>

		<input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>
	@endforeach

    @endsection
