<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="{{ url('Asset/css/bootstrap.min.css') }}">

<nav class="navbar navbar-expand-lg bg-primary" style="color:white;">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href= "#">English</a></li>
            <li><a class="dropdown-item text-black" href="#">Hindi</a></li>
            <li><a class="dropdown-item text-black" href="#">Punjabi</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-black" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled text-white" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search" action="search" method="get">
        @csrf
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="{{ $search ?? '' }}">
        <button class="btn btn-outline-success text-white" type="submit">Search</button>
      </form>
      <form action="{{ route('change.language') }}" method="POST" class="d-flex ms-3">
    @csrf
    <select name="locale" class="form-select form-select-sm" onchange="this.form.submit()">
        <option value="en" {{ app()->getLocale() == 'en' ? 'selected' : '' }}>English</option>
        <option value="hi" {{ app()->getLocale() == 'hi' ? 'selected' : '' }}>Hindi</option>
        <option value="pun" {{ app()->getLocale() == 'pun' ? 'selected' : '' }}>Punjabi</option>
    </select>
</form>

    </div>
  </div>
</nav>
<script src="{{ url('Asset/js/bootstrap.bundle.min.js') }}"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
