<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <nav class="navbar bg-transparent">
        <a href="/" class="navbar-brand-custom">Lumina Reads</a>
        <ul class="d-none align-items-center mb-0 list-unstyled gap-4" id="menu-desktop">
            @foreach ($menus as $menu)
                <li class=""><a href="" class="text-decoration-none nav-item-custom">{{ $menu['name'] }}</a>
                </li>
            @endforeach
        </ul>
        <button class="btn btn-danger d-none" id="btnCreateAccount">{{ $btnCreateAccountName }}</button>
        <button class="navbar-btn-menu d-none" id="mobileMenu" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <i class="bi bi-list"></i>
        </button>
    </nav>
    <livewire:guest.offcanvas>
</div>
