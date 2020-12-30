<nav>
  <div class="nav-parent">
    <div class="nav-dropdown" id="nav-dropdown">
      <div class="dropdown-btn">
        <p>DROPDOWN</p>
      </div>

      <ul id="dropdown-content">
        <a href="#" id="about-dropdown">ABOUT US</a>
        <a href="#" id="donate-dropdown">DONATE</a>
        <a href="#" id="volunteer-dropdown">VOLUNTEER</a>
      </ul>
    </div>
  </div>
  <ul class="nav">
    <li class="<?php
          if (strpos($_SERVER['REQUEST_URI'], 'home')) {
              ?>active <?php
          } ?>nav-item col-6 col-md-4">
      <a href="?page=home" id="about">ABOUT US
      </a>
    </li>
    <li class="<?php
      if (strpos($_SERVER['REQUEST_URI'], 'donate')) {
          ?>active <?php
      } ?>nav-item col-6 col-md-4">
      <a href="?page=donate" id="donate">DONATE
      </a>
    </li>
    <li class="<?php
      if (strpos($_SERVER['REQUEST_URI'], 'volunteer')) {
          ?>active <?php
      } ?>nav-item col-6 col-md-4 ">
      <a href="?page=volunteer" id="volunteer">VOLUNTEER
      </a>
    </li>
  </ul>
</nav>