  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Configuration</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('config.edit', 1)}}">
              <i class="bi bi-circle"></i><span>Paramètres de configuration</span>
            </a>
          </li>

          <li>
            <a href="{{route('permis.index')}}">
              <i class="bi bi-circle"></i><span>Nos permis auto</span>
            </a>
          </li>

          <li>
            <a href="{{route('formation.index')}}">
              <i class="bi bi-circle"></i><span>Formations moto</span>
            </a>
          </li>

          <li>
            <a href="{{route('contact.index')}}">
              <i class="bi bi-circle"></i><span>Section Contact</span>
            </a>
          </li>

         
        </ul>
      </li><!-- End Components Nav -->

<!--
      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li>
    -->


    </ul>

  </aside><!-- End Sidebar-->