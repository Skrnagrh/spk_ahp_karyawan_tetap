<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar text-light">
        <a class="sidebar-brand" href="/dashboard">
            <span class="align-middle">SPK Karyawan Tetap</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item @if(Request::is('dashboard')) active @endif">
                <a class="sidebar-link" href="/dashboard">
                    <i style="font-size: 18px" class="bi bi-speedometer2 align-middle"></i><span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-item @if(Request::is('alternatif*') || Request::is('alternatif_detail*')) active @endif">
                <a class="sidebar-link" href="/alternatif">
                    <i style="font-size: 18px" class="bi bi-person-lines-fill align-middle"></i><span class="align-middle">Alternatif</span>
                </a>
            </li>

            <li class="sidebar-item @if(Request::is('kriteria*')) active @endif">
                <a class="sidebar-link" href="/kriteria">
                    <i style="font-size: 18px" class="bi bi-bar-chart-steps align-middle"></i><span class="align-middle">Kriteria</span>
                </a>
            </li>

            <li class="sidebar-item @if(Request::is('subkriteria')) active @endif">
                <a class="sidebar-link" href="/subkriteria">
                    <i style="font-size: 18px" class="bi bi-bar-chart-steps align-middle"></i><span class="align-middle">Subkriteria</span>
                </a>
            </li>


            <li class="sidebar-header">
                Perhitungan
            </li>

            <li class="sidebar-item @if(Request::is('perhitungan')|| Request::is('perhitungan/hasil')) active @endif">
                <a class="sidebar-link" href="/perhitungan">
                    <i style="font-size: 18px" class="bi bi-calculator align-middle"></i><span class="align-middle">Matrik
                        Kriteria</span>
                </a>
            </li>

            <li
                class="sidebar-item @if(Request::is('perhitungan_subkriteria') || Request::is('perhitungan_subkriteria/matrix*')) active @endif">
                <a class="sidebar-link" href="/perhitungan_subkriteria">
                    <i style="font-size: 18px" class="bi bi-calculator align-middle"></i><span class="align-middle">Matrik Subkriteria</span>
                </a>
            </li>

            <li class="sidebar-item @if(Request::is('perhitungan_subkriteria/alternatif')) active @endif">
                <a class="sidebar-link" href="/perhitungan_subkriteria/alternatif">
                    <i style="font-size: 18px" class="bi bi-calculator align-middle"></i><span class="align-middle">Perhitungan
                        Alternatif</span>
                </a>
            </li>

            <li class="sidebar-item @if(Request::is('perhitungan_subkriteria/prangkingan')) active @endif">
                <a class="sidebar-link" href="/perhitungan_subkriteria/prangkingan">
                    <i style="font-size: 18px" class="bi bi-award-fill align-middle"></i><span class="align-middle">Prangkingan</span>
                </a>
            </li>

            @if (Auth()->user()->admin == 'true')
            <li class="sidebar-header">
                User
            </li>

            <li class="sidebar-item @if(Request::is('datapengguna')) active @endif">
                <a class="sidebar-link" href="/datapengguna">
                    <i style="font-size: 18px" class="bi bi-people align-middle"></i><span class="align-middle">Pengguna</span>
                </a>
            </li>
            @endif

        </ul>

    </div>
</nav>
