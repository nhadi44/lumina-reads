@extends('layouts.gues-layout')

@push('styles')
    <link rel="stylesheet" href="/assets/compiled/css/guest/homepage/recomendation-book.css">
@endpush

@section('guest_title', 'Lumina Reads')
@section('content')
    <section class="py-2 h-75 d-flex align-items-center bg-light">
        <div class="container">
            <livewire:guest.homepage.RecomendationBookSection>
        </div>
    </section>
    <section class="py-2 h-75 d-flex align-items-center bg-light-gray">
        <div class="container">
        </div>
    </section>
@endsection
