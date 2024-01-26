@extends('layouts.gues-layout')
@section('title', 'Lumina Reads')
@section('content')
    <section class="container py-2" data-aos="fade-in">
        <livewire:guest.homepage.RecomendationBookSection>
    </section>
@endsection
