<!-- resources/views/admin/partials/sidebar.blade.php -->
<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <div class="sidebar">
            <div class="scrollbar-inner sidebar-wrapper">
                <div class="user">
                    {{-- <div class="photo">
                        <img src="/img/profile.jpg">
                    </div> --}}
                    <div class="info">
                        <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                            <span>
                                Hizrian
                                <span class="user-level">Administrator</span>
                                <span class="caret"></span>
                            </span>
                        </a>
                        <div class="clearfix"></div>

                        <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                            <ul class="nav">
                                <li>
                                    <a href="#profile">
                                        <span class="link-collapse">My Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#edit">
                                        <span class="link-collapse">Edit Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#settings">
                                        <span class="link-collapse">Settings</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a href="index.html">
                            <i class="la la-dashboard"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    {{-- <li class="nav-item">
                        <a href="components.html">
                           
                            <p>Components</p>
                            <span class="badge badge-count">14</span>
                        </a>
                    </li> --}}
                    <li class="nav-item">
                        <a href="{{ route('admin.products.index') }}" class="item-anchor">
                            <i class="la la-table"></i>
                           <p> {{ __('Manage Products') }}</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="item-anchor" data-toggle="collapse" href="#collapseManageWebsite" aria-expanded="false" aria-controls="collapseManageWebsite">
                            <i class="la la-keyboard-o"></i>
                            <p>{{ __('Manage Website') }}</p>
                            <span class="caret"></span>
                        </a>
                        <!-- Sub-menu -->
                        <div class="collapse" id="collapseManageWebsite">
                            <ul class="nav">
                                <li>
                                    <a href="{{ route('admin.homePage.index')}}">
                                        <span class="link-collapse">Home</span>
                                    </a>
                                </li>                             
                          
                                <li>
                                    <a href="{{ route('admin.contact.index')}}">
                                        <span class="link-collapse">Contact</span>
                                    </a>
                                </li>                          
                                <li>
                                    <a href="{{ route('admin.about.index')}}">
                                        <span class="link-collapse">About</span>
                                    </a>
                                </li>                          
                            </ul>
                        </div>
                      
                    </li>
                    
                   
                  
                    
                </ul>
            </div>
        </div>
    </div>
</div>
