<header class="navbar sticky-top bg-danger flex-md-nowrap p-0 shadow" data-bs-theme="dark">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-white" href="/">Kembali</a>
  
    <ul class="navbar-nav flex-row d-md-none">
      <li class="nav-item text-nowrap">
        <button class="nav-link px-3 text-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <svg class="bi"><use xlink:href="#list"/></svg>
        </button>
      </li>
    </ul>
    <div class="navbar-nav">
      <div class="nav-item text-nowarp">
          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link px-3 bg- border-0"><i class="bi bi-box-arrow-right"></i> Logout</a></button>
          </form>
      </div>
    </div>
</header>