@extends('master2')
@section('judulhalaman','Data Mouse')

@section('konten')


	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit Mouse</h3>

	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>

    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8">
            @foreach($mouse as $m)
    <fieldset disabled>
	<form action="/mouse/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodemouse" class="col-sm-2 col-form-label">Kode Mouse</label>
            <div class="col-sm-10">

                <input type="text" class="form-control" id="kodemouse" required="required" name="nama" value="{{ $m->kodemouse }}">
            </div>
        </div>
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
        <div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tersedia" required="required" name="tersedia" value="{{ $m->tersedia }}">
            </div>
        </div>
		<input type="hidden" name="id" value="{{ $m->kodemouse }}"> <br/>


	</form>
    </fieldset>
    <a href="/mouse"><input  type="submit" value="Oke" class="btn btn-primary"></a>
    </div>

</div>
	@endforeach

    @endsection
