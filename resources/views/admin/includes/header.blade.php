<nav class="navbar top-bar navbar-light py-0 py-xl-3">
    <div class="container-fluid p-0">
        <div class="d-flex align-items-center w-100">

            <div class="d-flex align-items-center d-xl-none">
                <a class="navbar-brand" href="#">
                    <img class="navbar-brand-item h-40px" src="{{ asset('logo.png') }}" alt="">
                </a>
            </div>

            <div class="navbar-expand-xl sidebar-offcanvas-menu">
                <button class="navbar-toggler me-auto p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar" aria-controls="offcanvasSidebar" aria-expanded="false" aria-label="Toggle navigation" data-bs-auto-close="outside">
                    <i class="bi bi-list text-primary fa-fw" data-bs-target="#offcanvasMenu"></i>
                </button>
            </div>
            
            <div class="navbar-expand-lg ms-auto ms-xl-0">
                {{-- <h2 class="h4 mb-2 mb-sm-0">@yield('page-title')</h2> --}}
            </div>
            
            <ul class="nav flex-row align-items-center list-unstyled ms-xl-auto">
                <li class="nav-item dropdown ms-3">
                    <button class="nav-notification lh-0 btn btn-light p-0 mb-0" id="bd-theme"
                    type="button"
                    aria-expanded="false"
                    data-bs-toggle="dropdown"
                    data-bs-display="static">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw theme-icon-active" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                            <use href="#"></use>
                        </svg>
                    </button>

                    <ul class="dropdown-menu min-w-auto dropdown-menu-end" aria-labelledby="bd-theme">
                        <li class="mb-1">
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light">
                                <svg width="16" height="16" fill="currentColor" class="bi bi-brightness-high-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                    <path d="M12 8a4 4 0 1 1-8 0 4 4 0 0 1 8 0zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
                                    <use href="#"></use>
                                </svg>Light						
                            </button>
                        </li>
                        <li class="mb-1">
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill fa-fw mode-switch me-1" viewBox="0 0 16 16">
                                    <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                                    <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
                                    <use href="#"></use>
                                </svg>Dark
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-half fa-fw mode-switch" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
                                    <use href="#"></use>
                                </svg>Auto
                            </button>
                        </li>
                    </ul>
                </li>

                
                <li class="nav-item ms-3 dropdown">
                    <a class="avatar avatar-sm p-0" href="#" id="profileDropdown" role="button" data-bs-auto-close="outside" data-bs-display="static" data-bs-toggle="dropdown" aria-expanded="false">
                        <img class="avatar-img rounded-5" src="{{ Auth::user()->profile_image == null ? asset('avatar.png') : asset('images/profile_images').'/'.Auth::user()->profile_image }}" alt="avatar">
                    </a>
                    <ul class="dropdown-menu dropdown-animation dropdown-menu-end shadow pt-3" aria-labelledby="profileDropdown">
                        <li class="px-3 mb-3">
                            <div class="d-flex align-items-center">
                                <div>
                                    <a class="h6 mt-2 mt-sm-0" href="#">{{ Auth::user()->name }}</a>
                                    <p class="small m-0">{{ Auth::user()->email }}</p>
                                </div>
                            </div>
                        </li>
                        <li> <hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item bg-success-soft-hover" href="{{ route('logout') }}"><i class="fa fa-power-off me-2"></i>Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>