<nav class="navbar navbar-expand-lg navbar-dark bg-dark w-100">
    <a class="navbar-brand ml-5 h1" href="#">八芳園</a>
    <div class="" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            @if(session('admin_auth'))
            <a class="nav-item nav-link active ml-5 m-2 bg-secondary" href="{{ route('list') }}">ゆうやの一覧へ <span class="sr-only"></span></a>
            <a class="nav-item nav-link active ml-5 m-2 bg-secondary" href="{{ route('list_for_wife') }}">さとこの一覧へ <span class="sr-only"></span></a>
        </div>
        @endif
    </div>
</nav>