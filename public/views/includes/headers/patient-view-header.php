<?php //Just to can understand file as .php ?>
    
    <meta charset="utf-8" />
    <link rel="stylesheet" href="../../styles/headers/patient-views-header-styling.css" />
    <link rel="stylesheet" href="../../styles/footers/patient-views-footer-styling.css" />
    <meta name="viewport" content="width=device-width" , initial-scale="1.0" />
    <title>DocWebox - Find your Doctor!</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
    <script src="../../src/js/utils/scroll/no-scrolling.js" defer></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="icon" href="../../resources/favicon/the-icon.ico" />
  </head>
  <body>
    <header>
      <nav class="header-nav">
        <input type="checkbox" id="check" />
        <label for="check" class="checkbtn">
          <i class="fas fa-bars"></i>
        </label>
        <a class="header-logo" href="user-dashboard.php">
          <img src="../../resources/logos/logo-main-transparent.png" alt="DocWebox logo" class="nav__logo" id="logo" />
        </a>
        <ul class="header-ul">
          <li class="header-li">
            <a class="header-a" href="user-dashboard.php">Dashboard</a>
          </li>
          <li class="header-li">
            <a class="header-a" href="user-profile.php">Profile</a>
          </li>
          <li class="header-li">
            <a class="header-a" href="my-appointments.php">Appointments</a>
          </li>
          <li class="header-li">
            <a class="header-a" href="../../../src/scripts/logout/patient-logout.php">Logout ↪</a>
          </li>
        </ul>
      </nav>
    </header>