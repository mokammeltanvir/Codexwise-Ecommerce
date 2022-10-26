                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <img class="profile" alt="profile"
                            src="{{ asset('assets/backend') }}/img/profile/profile-11.jpg" />
                        <div class="name">Zayn Hartley</div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">

                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-3 pt-3">
                                <div class="separator-light"></div>
                            </div>

                            <div class="col-12 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                                            <span class="align-middle">Settings</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.logout') }}">
                                            <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>
                                            <span class="align-middle">Logout</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->
