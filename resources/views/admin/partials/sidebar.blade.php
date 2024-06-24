<li class="nav-item mb-3 border" style="border-radius: 5px">
    <a href="{{ route('admin.dashboard.index') }}"
        class="nav-link text-light py-3 hover-menu {{ $title === 'Dashboard' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-house-door"></i></span>
        Dashboard
    </a>
</li>
<li class="nav-item mb-3 border" style="border-radius: 5px">
    <a href="{{ route('admin.pegawai.index') }}"
        class="nav-link text-light py-3 hover-menu {{ $title === 'Pegawai' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-people"></i></span>
        Pegawai
    </a>
</li>
<li class="nav-item mb-3 border" style="border-radius: 5px"">
    <a href="{{ route('admin.profil.index') }}"
        class="nav-link text-light py-3 hover-menu {{ $title === 'Profil' ? 'active-menu' : '' }}">
        <span style="margin-right: 3px"><i class="bi bi-person-circle"></i></span>
        Profil
    </a>
</li>