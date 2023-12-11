
@extends('master2')
@section('judulhalaman','Data Nilai Kuliah')
@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Data Nilai Kuliah</h3>

    <a href="/nilai/tambah" class="btn btn-primary"> + Tambah Data </a>

	<br/>
	<br/>


	<table class="table table-stripped table-hover">
		<tr>
			<th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
		    </tr>
        @foreach($nilaikuliah as $nk)
		<tr>
			<td>{{ $nk->id_kuliah }}</td>
            <td>{{ $nk->nrp_kuliah }}</td>
            <td>{{ $nk->nilai_kuliah }}</td>
            <td>{{ $nk->sks_kuliah }}</td>
            <td> @if ($nk->nilai_kuliah <= 40)
                D
            @elseif ($nk->nilai_kuliah >= 41 && $nk->nilai_kuliah <= 60)
                C
            @elseif ($nk->nilai_kuliah >= 61 && $nk->nilai_kuliah <= 80)
                B
            @else
                A
            @endif
            </td>
            <td>{{ $nk->nilai_kuliah * $nk->sks_kuliah }}</td>
            <td></td>
            <td>
        </td>
		</tr>
		@endforeach
	</table>
    {{-- $nilaikuliah->links()--}}
@endsection

