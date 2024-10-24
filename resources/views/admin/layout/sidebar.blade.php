    <!-- Sidebar -->
    <aside class="sidebar">
      <a href="#" class="logo">
        <img src="{{asset('admin')}}/images/logo.png" class="logo-img" />
        <div class="nama-logo"><span>Gift</span>Admin</div>
      </a>
      <ul class="side-menu">
        <li class="active">
          <a href="{{url('dashboard')}}"><i class="bx bxs-dashboard"></i>Dashboard</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-store-alt"></i>Toko</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-analyse"></i>analisis</a>
        </li>
        <li>
          <a href="{{url('admin/user')}}"><i class="bx bx-group"></i>Pengguna</a>
        </li>
        <li>
          <a href="#"><i class="bx bx-cog"></i>Pengaturan</a>
        </li>
      </ul>
      <ul class="side-menu">
      <li>
        <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="bx bx-log-out-circle"></i>
                {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
      </ul>
    </aside>
    <!-- End of Sidebar -->