@extends('layout.app')
@section('content')
    <main id="page-content" class="flex max-w-full flex-auto flex-col pt-16">
        <livewire:dashboard.play-movie :$id>
    </main>
@endsection
