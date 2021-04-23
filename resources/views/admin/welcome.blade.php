@extends('admin.layout.webapp')
@section('content')
    <div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row" style="display: block;">
            <div class="tile_count">
                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-shopping-cart"></i> Total Orders</span>
                    <div><a class="count green" href="javascript:void(0)">{{ 10 }}</a></div>
                </div>
                <div class="col-md-3 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-credit-card"></i> Total Sales</span>
                    <div><a class="count green" href="javascript:void(0)">${{ 10 }}</a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-product-hunt"></i> Total Products</span>
                    <div><a class="count green" id="total_views"
                            href="{{ action('admin\DashboardController@index') }}">{{ 10 }}</a></div>
                </div>
                <div class="col-md-3 col-sm-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total Customers</span>
                    <div><a class="count green" id="total_downloads"
                            href="{{ action('admin\DashboardController@index') }}">{{ 10 }}</a></div>
                </div>
            </div>
        </div>
        <!-- /top tiles -->
   

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Recent Activities <small>Sessions</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">
                            <ul class="list-unstyled timeline widget">
                                @foreach ($recentActivities as $recentActivity)
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>{{ $recentActivity->causer->full_name ?? 'Guest' }}</a>
                                                </h2>
                                                <div class="byline">
                                                    <span>{{ $recentActivity->created_at }}</span>
                                                </div>
                                                <p class="excerpt">{{ $recentActivity->description }}</p>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

