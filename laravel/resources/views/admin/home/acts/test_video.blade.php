@extends('adm_theme::layouts.app')
@section('content')
    <div class="col-md-3">
        <x-theme::video-player :player="$player" :mp4Src="$mp4_src"></x-theme::video-player>
        {{-- @component('theme::video_player', ['player' => $player, 'mp4_src' => $mp4_src])
        @endcomponent --}}
    </div>
@endsection
