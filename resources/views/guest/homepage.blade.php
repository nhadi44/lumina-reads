@extends('layouts.gues-layout')

@push('styles')
    <link rel="stylesheet" href="/assets/compiled/css/guest/homepage/recomendation-book.css">
@endpush

@section('guest_title', 'Lumina Reads')
@section('content')
    <section class="py-4 h-75 d-flex align-items-center bg-light">
        <div class="container">
            <livewire:guest.homepage.RecomendationBookSection>
        </div>
    </section>
    <section class="d-flex align-items-center bg-light-gray position-relative">
        <div class="container overflow-hidden tabs">
            <ul class="row gx-3 tab-links list-unstyled">
                <li class="col text-center">
                    <a href="#tab1">Tab 1</a>
                </li>
                <li class="col text-center">
                    <a href="#tab2">Tab 2</a>
                </li>
                <li class="col text-center">
                    <a href="#tab3">Tab 3</a>
                </li>
            </ul>

            <form autocomplete="off" class="py-5">
                <div class="tab-content" id="tab1">
                    <p>Content 1</p>
                </div>
                <div class="tab-content" id="tab2">
                    <p>Content 2</p>
                </div>
                <div class="tab-content" id="tab3">
                    <p>Content 3</p>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.tab-links a').on('click', function(e) {
                var currentAttrValue = $(this).attr('href');
                $('.tabs ' + currentAttrValue).show().siblings().hide();
                $(this).parent('li').addClass('active').siblings().removeClass('active');
                e.preventDefault();
            })
            $('#tab1').addClass('active');
            $('.tab-links li:first-child').addClass('active');
        })
    </script>
@endpush
