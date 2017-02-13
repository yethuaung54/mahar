@extends('vendors.layouts.master')
@section('content')
    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET -->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption caption-md">
                            <i class="icon-bar-chart theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Your Uploaded Products</span>
                        </div>
                        <!-- Date filter -->
                        <!-- <div class="actions">
                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm active">
                                    <input type="radio" name="options" class="toggle" id="option1">Today</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Week</label>
                                <label class="btn btn-transparent grey-salsa btn-circle btn-sm">
                                    <input type="radio" name="options" class="toggle" id="option2">Month</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table table-hover table-light">
                                <thead>
                                <tr class="uppercase">
                                    <th colspan="2"> MEMBER </th>
                                    <th> Productname </th>
                                    <th> Price </th>
                                    <th> Uploaded Date </th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar4.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Item1</a>
                                    </td>
                                    <td> Testing123 </td>
                                    <td> $345 </td>
                                    <td> Feb.10.2017 </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar5.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Item2</a>
                                    </td>
                                    <td> Testing123 </td>
                                    <td> $345 </td>
                                    <td> Feb.10.2017 </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar6.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Item3</a>
                                    </td>
                                    <td> Testing123 </td>
                                    <td> $345 </td>
                                    <td> Feb.10.2017 </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Item4</a>
                                    </td>
                                    <td> Testing123 </td>
                                    <td> $345 </td>
                                    <td> Feb.10.2017 </td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Item5</a>
                                    </td>
                                    <td> Testing123 </td>
                                    <td> $345 </td>
                                    <td> Feb.10.2017 </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET -->
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                            <!-- <div class="product-order">
                                <a href="itemdetail" class="product-order-toggle">Position</a>
                                <ul class="product-order-list">
                                    <li><a href="itemdetail">Name</a></li>
                                    <li><a href="itemdetail">Price</a></li>
                                </ul>
                            </div>
                            <div class="product-per-page">
                                <a href="itemdetail" class="per-page-toggle">show <span>6</span></a>
                                <ul class="per-page-list">
                                    <li><a href="itemdetail">6</a></li>
                                    <li><a href="itemdetail">9</a></li>
                                    <li><a href="itemdetail">12</a></li>
                                    <li><a href="itemdetail">18</a></li>
                                    <li><a href="itemdetail">24</a></li>
                                </ul>
                            </div> -->
                            <div class="search-pagination" style="float: right;">
                                <ul class="pagination">
                                    <li class="page-active">
                                        <a href="javascript:;"> 1 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 2 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 3 </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;"> 4 </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="gmap_polygons"></div>
    </div>
@endsection