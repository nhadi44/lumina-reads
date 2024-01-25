 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel"
     data-bs-theme="dark">
     <div class="offcanvas-header">
         <h5 class="offcanvas-title" id="offcanvasRightLabel">{{ $header }}</h5>
         <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
     </div>
     <div class="offcanvas-body mx-auto">
         <div class="pt-5 pb-1">
             @foreach ($menus as $menu)
                 <ul class="list-unstyled text-center py-3">
                     <li class="">{{ $menu['name'] }}</li>
                 </ul>
             @endforeach
         </div>
         <div class="d-flex flex-column align-items-center">
             <a href="/" class="bg-danger text-white text-decoration-none p-3 rounded-1 w-75 text-center mb-3">
                 Create an account</a>
             <small class="text-muted">or <a href="" class="text-warning">log in</a> if you already have an
                 account.</small>
         </div>
     </div>
 </div>
