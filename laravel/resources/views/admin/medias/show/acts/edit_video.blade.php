@extends('adm_theme::layouts.app')
@section('content')
    <livewire:video-editor-sub.model :model="$row" />
@endsection