<li class="nav-item mb-3" style="border-radius: 5px">
    <a href="{{ route('admin.dashboard.index') }}"
        class="btn btn-outline-warning col-12 text-start py-3 {{ $title === 'Dashboard' ? 'bg-warning text-dark' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-house-door"></i></span>
        Dashboard
    </a>
</li>
<li class="nav-item mb-3" style="border-radius: 5px">
    <a href="{{ route('admin.pegawai.index') }}"
        class="btn btn-outline-warning col-12 text-start py-3 {{ $title === 'Pegawai' ? 'bg-warning text-dark' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-people"></i></span>
        Pegawai
    </a>
</li>
<li class="nav-item mb-3" style="border-radius: 5px"">
    <a href="{{ route('admin.profil.index') }}"
        class="btn btn-outline-warning col-12 text-start py-3 {{ $title === 'Profil' ? 'bg-warning text-dark' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-person-circle"></i></span>
        Profil
    </a>
</li>
<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-danger col-12 mb-3 py-3">
        <i class="bi bi-caret-left"></i>
        <span>Logout</span>
    </button>
</form>