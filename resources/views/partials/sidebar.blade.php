<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="index.html">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-question"></i><span>Questions</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>List</span>
                    </a>
                </li>
                <li>
                    <a href="{{ URL::shopifyRoute('qa.create') }}">
                        <i class="bi bi-circle"></i><span>Create</span>
                    </a>
                </li>

            </ul>
        </li><!-- End Components Nav -->

    </ul>

</aside><!-- End Sidebar-->
