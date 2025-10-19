<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title></title>


  <!-- Website Icon -->  
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" rel="stylesheet">
 
@include('home.GradiantCSS')
 

  <style>
    body {
      margin: 0;
      font-family: "Poppins", sans-serif;
      background: #0f172a;
      color: #fff;
    }

    /* ===================== HEADER ===================== */
    .header_main {
      width: 100%;
      height: 90px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 20px rgba(0, 0, 0, 0.4);
    }

    .container-fluid {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 7%;
      height: 100%;
    }

    .logo img {
      height: 40px;
      display: block;
      filter: drop-shadow(0px 0px 6px rgba(255, 255, 255, 0.6));
      transition: transform 0.3s ease;
    }
    .logo img:hover {
      transform: rotate(-5deg) scale(1.1);
    }

    /* ===================== MENU ===================== */
    .menu_main ul {
      display: flex;
      align-items: center;
      gap: 40px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .menu_main ul li a {
      position: relative;
      display: inline-flex;
      align-items: center;
      padding: 10px 15px;
      text-decoration: none;
      color: #fff;
      font-weight: 600;
      font-size: 16px;
      border-radius: 10px;
      transition: all 0.3s ease;
    }

    .menu_main ul li a::after {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 0%;
      height: 100%;
      background: rgba(28, 40, 171, 0.9);
      border-radius: 10px;
      transition: width 0.3s ease;
      z-index: -1;
    }

    .menu_main ul li a:hover::after {
      width: 100%;
    }
    .menu_main ul li a:hover {
      color: #ffe600;
      text-shadow: 0 0 8px #fff;
    }

    /* ===================== USER DROPDOWN ===================== */
   /* ===================== USER DROPDOWN ===================== */
.user-menu {
  position: relative;
  margin-left: 20px;
}

.user-btn {
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.25);
  color: #fff;
  border-radius: 25px;
  padding: 8px 20px;
  cursor: pointer;
  font-weight: 600;
  font-size: 15px;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
}
.user-btn:hover {
  background: rgba(255,255,255,0.25);
  color: #ffe600;
  text-shadow: 0 0 8px #fff;
}

/* Optional: Add a small user icon */
.user-btn::before {
  content: "👤";
  font-size: 16px;
}

/* Dropdown */
.dropdown-menu-custom {
  position: absolute;
  top: 120%;
  right: 0;
  background: #1e293b;
  border-radius: 12px;
  padding: 10px 0;
  min-width: 170px;
  box-shadow: 0 8px 25px rgba(0,0,0,0.55);
  display: none;
  flex-direction: column;
  z-index: 2000;
}

.dropdown-menu-custom a {
  padding: 12px 20px;
  color: #fff;
  text-decoration: none;
  font-size: 14px;
  font-weight: 500;
  transition: background 0.3s ease;
}
.dropdown-menu-custom a:hover {
  background: rgba(255,255,255,0.1);
  color: #ffe600;
}

.user-menu.open .dropdown-menu-custom {
  display: flex;
}

  </style>
</head>
<body>

<div class="header_main gradient-animated">
  <div class="container-fluid">
    <!-- Logo -->
    <div class="logo">
      <a href="/"><img src="images/logo.png" alt="Logo"></a>
    </div>

    <!-- Navigation -->
    <div class="menu_main">
      <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/blog">Blog</a></li>
    

        @if (Route::has('login'))
          @auth
             <li>

                  <li><a href="{{url('create_post')}}">Create Post</a></li>
                  <li><a href="{{url('my_post')}}">My Post</a></li>
                    
                  <x-app-layout>   
                  </x-app-layout>   
            </li>
          @else
            <li><a href="{{route('login')}}" class="btn">Login</a></li>
            <li><a href="{{route('register')}}" class="btn">Register</a></li>
          @endauth
        @endif
      </ul>
    </div>
  </div>
</div>

<!-- Bootstrap + Custom Script -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
  function toggleUserMenu() {
    document.querySelector('.user-menu').classList.toggle('open');
  }
  // Close menu when clicking outside
  document.addEventListener('click', function(e) {
    const menu = document.querySelector('.user-menu');
    if (menu && !menu.contains(e.target)) {
      menu.classList.remove('open');
    }
  });
</script>

</body>
</html>




