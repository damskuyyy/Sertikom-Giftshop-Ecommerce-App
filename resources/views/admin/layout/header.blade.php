<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{ asset('admin/css.css') }}" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css">
    <title>Dashboard Admin</title>
  </head>

  <body>
    <!-- Main Content -->
    <div class="content">
      <!-- Navbar -->
      <header>
        <nav>
          <i class="bx bx-menu"></i>
          <form action="POST">
            <div class="form-input">
              <input type="search" placeholder="Search..." />
              <button class="search-btn" type="submit">
                <i class="bx bx-search"></i>
              </button>
            </div>
          </form>
          <input type="checkbox" id="theme-toggle" hidden />
          <label for="theme-toggle" class="theme-toggle"></label>
          <div class="profile">
            <img src="{{asset('admin')}}/images/profile-1.jpg" />
            <div class="profile-content">
              <ul>
              <li><a href="{{url('admin/profile')}}">
                  {{ Auth::user()->name }} </a>
              </li>
                <li>
                  <a href="#" class="profil-content-menu">Profile Setting</a>
                </li>
                <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <i class="bx bx-log-out-circle"></i> Logout
                    </button>
                </form>
            </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
          <!-- End of Navbar -->