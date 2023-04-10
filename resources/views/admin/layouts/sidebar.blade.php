
<aside class="main-sidebar">
    <div class="user-profile">
        <div class="profile-pic">
            <img src="{{ asset('dash/images/user5-128x128.jpg') }}" alt="user">
            <div class="profile-info text-white"><h4>John Doe</h4>
                <div class="list-icons-item dropdown">
                    <a href="#" class="list-icons-item dropdown-toggle text-white-50 hover-primary"
                       data-bs-toggle="dropdown"><span class="badge badge-ring fill badge-primary mx-2"></span>Online</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Update data</a>
                        <a href="#" class="dropdown-item">Detailed log</a>
                        <a href="#" class="dropdown-item">Statistics</a>
                        <a href="#" class="dropdown-item">Clear list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- sidebar-->
    <section class="sidebar position-relative">
        <div class="multinav">
            <div class="multinav-scroll" style="height: 100%;">
                <!-- sidebar menu-->
                <ul class="sidebar-menu" data-widget="tree">
                    <li><a href="{{ route('admin') }}"><i data-feather="monitor"></i><span>Dashboard</span></a></li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="grid"></i>
                            <span>الاعدادات الرئسيه</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ route('setting') }}"><i class="icon-Commit {{ request()->is('setting') ? ' active' : null }}"><span
                                    class="path1"></span><span class="path2"></span></i>اعدادات الموقع</a></li>
                            <li><a href="contact_app.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>حالات الطلبات</a></li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="edit"></i>
                            <span>Widgets</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="widgets_blog.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Blog</a></li>
                            <li><a href="widgets_chart.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Chart</a></li>
                            <li><a href="widgets_list.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>List</a></li>
                            <li><a href="widgets_social.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Social</a></li>
                            <li><a href="widgets_statistic.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Statistic</a></li>
                            <li><a href="widgets_weather.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Weather</a></li>
                            <li><a href="widgets.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Widgets</a></li>
                            <li><a href="email_index.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Emails</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Maps
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="map_google.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Google Map</a></li>
                                    <li><a href="map_vector.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Vector Map</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Modals
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="component_modals.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Modals</a></li>
                                    <li><a href="component_sweatalert.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Sweet Alert</a></li>
                                    <li><a href="component_notification.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Toastr</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="shopping-cart"></i>
                            <span>Ecommerce</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ecommerce_products.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Products</a></li>
                            <li><a href="ecommerce_cart.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Products Cart</a></li>
                            <li><a href="ecommerce_products_edit.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Products Edit</a></li>
                            <li><a href="ecommerce_details.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Product Details</a></li>
                            <li><a href="ecommerce_orders.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Product Orders</a></li>
                            <li><a href="ecommerce_checkout.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Products Checkout</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="cast"></i>
                            <span>Pages</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="invoice.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Invoice</a></li>
                            <li><a href="invoicelist.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Invoice List</a></li>
                            <li><a href="extra_app_ticket.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Support Ticket</a></li>
                            <li><a href="extra_profile.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>User Profile</a></li>
                            <li><a href="contact_userlist_grid.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Userlist Grid</a></li>
                            <li><a href="contact_userlist.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Userlist</a></li>
                            <li><a href="sample_faq.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>FAQs</a></li>
                            <li><a href="sample_blank.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Blank</a></li>
                            <li><a href="sample_coming_soon.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Coming Soon</a></li>
                            <li><a href="sample_custom_scroll.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Custom Scrolls</a></li>
                            <li><a href="sample_gallery.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Gallery</a></li>
                            <li><a href="sample_lightbox.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Lightbox Popup</a></li>
                            <li><a href="sample_pricing.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Pricing</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="package"></i>
                            <span>Features</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="ui_grid.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Grid System</a></li>
                            <li><a href="ui_badges.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Badges</a></li>
                            <li><a href="ui_border_utilities.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Border</a></li>
                            <li><a href="ui_buttons.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Buttons</a></li>
                            <li><a href="ui_color_utilities.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Color</a></li>
                            <li><a href="ui_dropdown.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Dropdown</a></li>
                            <li><a href="ui_dropdown_grid.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Dropdown Grid</a></li>
                            <li><a href="ui_progress_bars.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Progress Bars</a></li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Icons
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="icons_fontawesome.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Font Awesome</a>
                                    </li>
                                    <li><a href="icons_glyphicons.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Glyphicons</a></li>
                                    <li><a href="icons_material.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Material Icons</a>
                                    </li>
                                    <li><a href="icons_themify.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Themify Icons</a>
                                    </li>
                                    <li><a href="icons_simpleline.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Simple Line
                                        Icons</a></li>
                                    <li><a href="icons_cryptocoins.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Cryptocoins
                                        Icons</a></li>
                                    <li><a href="icons_flag.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Flag Icons</a></li>
                                    <li><a href="icons_weather.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Weather Icons</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="ui_ribbons.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Ribbons</a></li>
                            <li><a href="ui_sliders.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Sliders</a></li>
                            <li><a href="ui_typography.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Typography</a></li>
                            <li><a href="ui_tab.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Tabs</a></li>
                            <li><a href="ui_timeline.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Timeline</a></li>
                            <li><a href="ui_timeline_horizontal.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Horizontal Timeline</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="credit-card"></i>
                            <span>Card</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="box_cards.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>User Card</a></li>
                            <li><a href="box_advanced.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Advanced Card</a></li>
                            <li><a href="box_basic.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Basic Card</a></li>
                            <li><a href="box_color.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Card Color</a></li>
                            <li><a href="box_group.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Card Group</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="eye"></i>
                            <span>Components</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="component_bootstrap_switch.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Bootstrap Switch</a></li>
                            <li><a href="component_date_paginator.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Date Paginator</a></li>
                            <li><a href="component_media_advanced.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Advanced Medias</a></li>
                            <li><a href="component_rangeslider.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Range Slider</a></li>
                            <li><a href="component_rating.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Ratings</a></li>
                            <li><a href="component_animations.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Animations</a></li>
                            <li><a href="extension_fullscreen.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Fullscreen</a></li>
                            <li><a href="extension_pace.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Pace</a></li>
                            <li><a href="component_nestable.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Nestable</a></li>
                            <li><a href="component_portlet_draggable.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Draggable Portlets</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="inbox"></i>
                            <span>Forms & Tables</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Forms
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="forms_advanced.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Form Elements</a>
                                    </li>
                                    <li><a href="forms_general.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Form Layout</a></li>
                                    <li><a href="forms_wizard.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Form Wizard</a></li>
                                    <li><a href="forms_validation.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Form Validation</a>
                                    </li>
                                    <li><a href="forms_mask.html"><i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Formatter</a></li>
                                    <li><a href="forms_xeditable.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Xeditable Editor</a>
                                    </li>
                                    <li><a href="forms_dropzone.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Dropzone</a></li>
                                    <li><a href="forms_code_editor.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Code Editor</a></li>
                                    <li><a href="forms_editors.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Editor</a></li>
                                    <li><a href="forms_editor_markdown.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Markdown</a></li>
                                </ul>
                            </li>
                            <li class="treeview">
                                <a href="#">
                                    <i class="icon-Commit"><span class="path1"></span><span
                                            class="path2"></span></i>Tables
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-right pull-right"></i>
                        </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li><a href="tables_simple.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Simple tables</a>
                                    </li>
                                    <li><a href="tables_data.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Data tables</a></li>
                                    <li><a href="tables_editable.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Editable Tables</a>
                                    </li>
                                    <li><a href="tables_color.html"><i class="icon-Commit"><span
                                            class="path1"></span><span class="path2"></span></i>Table Color</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="pie-chart"></i>
                            <span>Charts</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="charts_chartjs.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>ChartJS</a></li>
                            <li><a href="charts_flot.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Flot</a></li>
                            <li><a href="charts_inline.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Inline charts</a></li>
                            <li><a href="charts_morris.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Morris</a></li>
                            <li><a href="charts_peity.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Peity</a></li>
                            <li><a href="charts_chartist.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Chartist</a></li>
                            <li><a href="charts_c3_axis.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Axis Chart</a></li>
                            <li><a href="charts_c3_bar.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Bar Chart</a></li>
                            <li><a href="charts_c3_data.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Data Chart</a></li>
                            <li><a href="charts_c3_line.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Line Chart</a></li>
                            <li><a href="charts_echarts_basic.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Basic Charts</a></li>
                            <li><a href="charts_echarts_bar.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Bar Chart</a></li>
                            <li><a href="charts_echarts_pie_doughnut.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Pie & Doughnut Chart</a>
                            </li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="lock"></i>
                            <span>Authentication</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="auth_login.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Login</a></li>
                            <li><a href="auth_register.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Register</a></li>
                            <li><a href="auth_lockscreen.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Lockscreen</a></li>
                            <li><a href="auth_user_pass.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Recover password</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i data-feather="alert-triangle"></i>
                            <span>Miscellaneous</span>
                            <span class="pull-right-container">
                  <i class="fa fa-angle-right pull-right"></i>
                </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="error_404.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Error 404</a></li>
                            <li><a href="error_500.html"><i class="icon-Commit"><span class="path1"></span><span
                                    class="path2"></span></i>Error 500</a></li>
                            <li><a href="error_maintenance.html"><i class="icon-Commit"><span
                                    class="path1"></span><span class="path2"></span></i>Maintenance</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="sidebar-widgets">
                    <div class="copyright text-white-50 text-start m-25">
                        <p><strong class="d-block">CrmX Admin Dashboard</strong> © 2021 All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</aside>