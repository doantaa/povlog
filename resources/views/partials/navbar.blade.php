<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #D94336">
    <div class="container">
      <a class="navbar-brand" href="/">Poving Logistik</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"> 
            <a class="nav-link {{ ($title == 'Home') ? 'active' : '' }}" href="/">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Katalog') ? 'active' : '' }}" href="/catalog">Katalog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Lacak') ? 'active' : '' }}" href="/track">Lacak</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title == 'Form') ? 'active' : '' }}" href="/form">Form</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>