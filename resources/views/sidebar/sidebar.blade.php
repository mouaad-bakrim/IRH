<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li class="has-child open">
                    <a href="#" class="active">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Table de bord</span>

                    </a>

                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="layout" class="nav-icon"></span>
                        <span class="menu-text">Les outils</span>

                    </a>

                </li>

                <li class="menu-title m-top-30">
                    <span>Applications</span>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="mail" class="nav-icon"></span>
                        <span class="menu-text">Employer</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="" href="inbox.html">Table de bord</a>
                        </li>
                        @if (Session::get('isAdmin') === '1')  @endif
                            <li>
                                <a href="{{ route('user.create') }}">Add Employer</a>
                            </li>

                        <li>
                            <a href="{{ route('employer.index') }}">List des Employer</a>
                        </li>
                        <li>
                            <a class="" href="">Edit Employer</a>
                        </li>
                        <li>
                            <a class="" href="inbox.html">Show Employer</a>
                        </li>
                        <li>
                            <a class="" href="read-email.html">Temps de travaile</a>
                        </li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">Department</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('absence.index')}}" class="">Table de bord</a>
                        </li>
                        <li>
                            <a href="{{route('department.index')}}" class="">List des Department</a>
                        </li>

                    </ul>
                </li>   <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">AuditLog</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('AuditLog.index')}}" class="">AuditLog</a>
                        </li>
                    </ul>
                </li>  <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">SalaryAdvance</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('SalaryAdvanceRequests.index')}}" class="">SalaryAdvance</a>
                        </li>
                    </ul>
                </li> <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">Document</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('document.index')}}" class="">document</a>
                        </li>
                    </ul>
                </li>    <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">Profession</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="products.html" class="">Table de bord</a>
                        </li>
                        <li>
                            <a href="{{route('Profession.index')}}" class="">List des Profession</a>
                        </li>

                    </ul>
                </li>

                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="folder" class="nav-icon"></span>
                        <span class="menu-text">Manager</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="users-membar.html" class="">Table de bord</a>
                        </li> <li>
                            <a href="{{route('manager.index')}}" class="">list des manager</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">EmployeeCertification</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('EmployeeCertification.index')}}">EmployeeCertification </a>
                        </li>

                    </ul>
                </li>   <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">EmployeeTrainings</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('EmployeeTrainings.index')}}">EmployeeTrainings
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="user-check" class="nav-icon"></span>
                        <span class="menu-text">Gestion des congés</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="" href="">Table de bord</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="shopping-cart" class="nav-icon"></span>
                        <span class="menu-text">Absence</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('document.index')}}" class="">Table de bord</a>
                        </li>
                        <li>
                            <a href="{{route('AbsenceType.index')}}" class="">absenceTypes</a>
                        </li> <li>
                            <a href="{{route('absence.index')}}" class="">List des Absence</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child">
                    <a href="kanban.html" class="">
                        <span data-feather="columns" class="nav-icon"></span>
                        <span class="menu-text">Gestion RH</span>
                        <span class="toggle-icon"></span>
                    </a>
                <ul>
                    <li>
                        <a class="" href="contact-2.html">Table de bord</a>
                    </li>

                </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="repeat" class="nav-icon"></span>
                        <span class="menu-text">Gestion logistique</span>
                        <span class="toggle-icon"></span>

                    </a>
                    <ul>
                        <li>
                            <a class="" href="import.html">Import</a>
                        </li>
                        <li>
                            <a class="" href="export.html">Export</a>
                        </li>

                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="aperture" class="nav-icon"></span>
                        <span class="menu-text">Performance</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li class="nav-item">
                            <a href="profile.html" class="">Table de bord</a>
                        </li>
                    </ul>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="target" class="nav-icon"></span>
                        <span class="menu-text">Planification</span>

                    </a>

                </li>

                <li>
                    <a href="profile-setting.html" class="">
                        <span data-feather="settings" class="nav-icon"></span>
                        <span class="menu-text">Settings</span>
                    </a>
                </li>
            </ul>

        </div>
    </div>
</aside>
