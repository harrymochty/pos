<!-- NAVBAR -->
<nav>
    <i class='bx bx-menu toggle-sidebar'></i>
    <form action="#">
        <div class="form-group">
            <input type="text" placeholder="Search...">
            <i class='bx bx-search icon'></i>
        </div>
    </form>
    <a href="#">{{ Auth::user()->name }} </a>
    <span class="divider"></span>
    <div class="profile">
        <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
            alt="">
        <ul class="profile-link">
            <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
            <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
            <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{ __('') }}<i class='bx bxs-log-out-circle'></i> Logout</a></li>

            </li>
        </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
<!-- NAVBAR -->
