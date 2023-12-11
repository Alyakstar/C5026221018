@extends('master2')
@section('judulhalaman','Data Chat')
@section('konten')

	<h2>www.malasngoding.com</h2>
	<h3>Chat ke emoji</h3>

    @foreach($chat as $c)
		<tr>
            <td>
                {{ $c->chat_pesan }}
            </td>
        </tr>
	@endforeach

@endsection

