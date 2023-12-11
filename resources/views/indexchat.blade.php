@extends('master2')
@section('judulhalaman','Data Chat')
@section('konten')

	<h3>Chat ke emoji</h3>

    <style>
        .emot {

        max-width: 20px;
        max-height: 20px;
        }
    </style>

    @foreach ($chat as $c)
    <div>
        @php
            $emojiconvert = [
                ':))' => '1.png',
                ':3'  => '2.png',
                ':P'  => '3.png',
                ':C'  => '4.png',
                ';)'  => '5.png',
            ];
            // memecah pesan menjadi array kata-kata
            $kalimat = explode(' ', $c->chat_pesan);
            // menggantikan kata-kata tertentu dengan gambar
            $kalimat = array_map(function($kata) use ($emojiconvert) {
                return isset($emojiconvert[$kata]) ? '<img src="' . asset('eas-src/' . $emojiconvert[$kata]) . '" alt="' . $kata . '" class="emot" />' : $kata;
            }, $kalimat);
            $c->chat_pesan = implode(' ', $kalimat);
        @endphp

        {!! $c->chat_pesan !!}
    </div>
@endforeach
</div>
<br>
<br>
<br>
@endsection


