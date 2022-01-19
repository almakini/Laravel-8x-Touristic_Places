        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User -->
                <div class="">
                    <img>
                </div>
                <div class="sidebar-item " style="color:#fff; text-align:center">{!!Auth::user()->name!!}</div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="pt-4">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_index')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-home-outline"></i><span class="hide-menu">Home</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_category')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-view-list"></i><span class="hide-menu">Categories</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_places')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-map-marker"></i><span class="hide-menu">Places</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_setting')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-settings"></i><span class="hide-menu">Settings</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_users')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-account-multiple"></i><span class="hide-menu">Users</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_messages')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-message"></i><span class="hide-menu">Contact Messages</span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_reviews')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-star"></i><span class="hide-menu">Reviews</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="{{route('admin_faqs')}}" aria-expanded="false"><i
                                    class="me-2 mdi mdi-comment-question-outline"></i><span
                                    class="hide-menu">FAQs</span></a></li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
