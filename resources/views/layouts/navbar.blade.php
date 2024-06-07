<nav class="navbar navbar-expand-lg bg-danger" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">{{ config('app.name') }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" aria-current="page" href="{{ route('dashboard', ['id'=>1]) }}">Dashboard</a>
                </li>
                @if (auth()->user()->role == "Admin")
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">Data User</a>
                </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('kategori-todo*') ? 'active' : '' }}" href="{{ route('kategori-todo.index') }}">Kategori Todo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('todolist*') ? 'active' : '' }}" href="{{ route('todolist.index') }}">Todo</a>
                </li>
            </ul>
            <div class="d-flex gap-3 align-items-center">
                <div class="d-flex flex-column text-end">
                    <h6 class="text-light fw-bold m-0">{{ auth()->user()->name }}</h6>
                    <p class="fst-italic text-light fw-light m-0">({{ auth()->user()->role }})</p>
                </div>
                <span class="text-light">|</span>
                 <a href="{{ route('logout') }}" class="btn btn-sm btn-outline-light" style="height: fit-content;">Logout</a>
            </div>
        </div>
    </div>
</nav>
