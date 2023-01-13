<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3 sidebar-sticky">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{Request::is('dash') ? 'active' : ''}}" aria-current="page" href="{{ route('dashboard.index') }}">
            <span data-feather="home" class="align-text-bottom"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{Request::is('dashboard/news') ? 'active' : ''}}" href="{{ route('dashboard.news.index') }}">
            <span data-feather="file" class="align-text-bottom"></span>
            News
          </a>
        </li>
      </ul>
    </div>
  </nav>