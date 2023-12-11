@extends('master2')

@section('judulhalaman','Data Nilai Kuliah')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Nilai Kuliah</h3>

	<a href="/nilai"> Kembali</a>

	<br/>
	<br/>


        <div class="row">


            <div class="col-8">
                <form action="/nilai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai" class="col-sm-2 col-form-label">Nilai Kuliah</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nilai" name="nilai">
            </div>
        </div>
        <div class="form-group row">
            <label for="sks" class="col-sm-2 col-form-label">SKS Kuliah</label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="sks" name="sks">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-primary">
	</form>

</div>
</div>
@endsection

