<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('backend/assets/images/logo-jambi.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text" style="color: darkgreen;">SDMK</h4>
        </div>
        <div class="toggle-icon ms-auto" style="color: black;"><i class='bx bx-menu'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('user.dashboard') }}">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Data Diri</li>
        <li>
            <a href="{{ route('user.profile') }}">
                <div class="parent-icon"><i class="bx bx-user"></i>
                </div>
                <div class="menu-title">Profil Saya</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bx bx-right-top-arrow-circle"></i>
                </div>
                <div class="menu-title">Naik Pangkat</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bx bx-label"></i>
                </div>
                <div class="menu-title">Naik Jenjang</div>
            </a>
        </li>
        <li>
            <a href="#">
                <div class="parent-icon"><i class="bx bx-book-reader"></i>
                </div>
                <div class="menu-title">Ukom</div>
            </a>
        </li>

        <!-- Link download APK -->
        <li>
            <a href="{{ asset('upload/apk/sifunkes.apk') }}" download>
                <div class="parent-icon"><i class="bx bx-download"></i>
                </div>
                <div class="menu-title">Download APK</div>
            </a>
        </li>

    </ul>
</div>