@push('styles')
    <link rel="stylesheet" href="/assets/compiled/css/guest/homepage/recomendation-book.css">
@endpush
<section class="py-5">
    <h2>Rekomendasi Hari Ini</h2>
    <div class="row">
        <div class="col-md-3">
            <livewire:card :bookTitleChild="$bookTitle" />
        </div>
        <div class="col-md-3">
            <livewire:card />
        </div>
        <div class="col-md-3">
            <livewire:card />
        </div>
        <div class="col-md-3">
            <livewire:card />
        </div>

    </div>
</section>
