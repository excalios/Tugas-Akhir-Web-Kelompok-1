<nav class="navbar navbar-expand-lg">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">GAME<span>09</span></a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav d-flex justify-content-between w-100 ms-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ route('home') }}">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('news') }}">NEWS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('features') }}">FEATURES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guides') }}">GUIDES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('releases') }}">GAME RELEASE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('reviews') }}">REVIEWS</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
