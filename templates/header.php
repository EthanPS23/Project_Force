<?php

?>
<nav class="navbar navbar-expand-sm navbar-dark sticky-top">
  <a class="navbar-brand" href="#">LOGO</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)"><a class="nav-link" href="#">Home</a></li>
      <li class="nav-item" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)"><a class="nav-link" href="#">Link</a></li>
      <li class="nav-item" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)"><a class="nav-link" href="#">Link</a> </li>
      <li class="nav-item dropdown" onmouseover="changeColorG(this)" onmouseout="defaultColor(this)">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop" href="#">More</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">Link</a>
          <a class="dropdown-item" href="#">Link</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
