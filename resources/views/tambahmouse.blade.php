@extends('master2')

@section('judulhalaman','Data Mouse')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Mouse</h3>

	<a href="/mouse"> Kembali</a>

	<br/>
	<br/>


        <div class="row">
            <div class="col-8">
                <form action="/mouse/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merkmouse" class="col-sm-2 col-form-label">Merk Mouse</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merkmouse" name="merkmouse">
            </div>
        </div>
        <div class="form-group row">
            <label for="stockmouse" class="col-sm-2 col-form-label">Stock Mouse</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="stockmouse" name="stockmouse">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

</div>
</div>
@endsection

