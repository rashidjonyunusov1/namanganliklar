            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    @php
                    $messages = DB::table('applies')->where('status', 0)->latest()->take(5)->get();
                    $c = DB::table('applies')->where('status', 0)->count();
                    @endphp
                    @if(auth()->user()->role_id == 1 or auth()->user()->role_id == 3)
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

                                <i class="fa fa-envelope me-lg-2"></i>
                                @if($c != 0)
                                <font style="color: red;">{{ $c }}</font>
                                @endif
                                <span class="d-none d-lg-inline-flex">Message</span>
                            </a>

                            
                                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                    @foreach($messages as $item)
                                    <a href="{{ route('admin.messages.show', $item->id) }}" class="dropdown-item">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle" src="/admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                            <div class="ms-2">
                                                <h6 class="fw-normal mb-0">{{ $item->full_name }}</h6>
                                                <small>{{ $item->created_at }}</small>
                                            </div>
                                        </div>
                                    </a>
                                    @endforeach
                                    <hr class="dropdown-divider">
                                    <a href="{{ route('admin.messages.index') }}" class="dropdown-item text-center">See all message</a>
                                </div>
                            
                        </div>
                    @endif    
                    @if(auth()->user()->role_id == 1 or auth()->user()->role_id == 3)
                        <div class="nav-item dropdown">
                            @php
                            $audits = DB::table('audits')->where('status', 0, )->take(5)->get();
                            $c = DB::table('audits')->where('status', 0)->count();
                            @endphp
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fa fa-bell me-lg-2"></i>
                                @if($c != 0)
                                <font style="color: red;">{{ $c }}</font>
                                @endif
                                <span class="d-none d-lg-inline-flex">Notificatin</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                                @foreach($audits as $item)
                                <a href="{{ route('admin.audits.show', $item->id) }}" class="dropdown-item">
                                    <h6 class="fw-normal mb-0">{{ $item->event }}</h6>
                                    <small>{{ $item->date }}</small>
                                </a>
                                @endforeach
                                <hr class="dropdown-divider">
                                <a href="{{ route('admin.audits.index') }}" class="dropdown-item text-center">See all notifications</a>
                            </div>
                        </div>
                    @endif
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/admin/img/human.jpeg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ auth()->user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="/profile" class="dropdown-item">My Profile</a>
                            <!-- <a href="#" class="logout"> -->
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="text">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </nav>