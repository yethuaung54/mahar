@extends('vendors.layouts.master')
@section('content')
    @include('vendors.layouts.partials.usersidebar')
    <div class="profile-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN PORTLET -->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption caption-md">
                            <i class="icon-bar-chart theme-font hide"></i>
                            <span class="caption-subject font-blue-madison bold uppercase">Customers who bought your products</span>
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
                                    <th> Buy Date </th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar4.jpg"> </td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Brain</a>
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
                                        <a href="javascript:;" class="primary-link">Nick</a>
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
                                        <a href="javascript:;" class="primary-link">Tim</a>
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
                                        <a href="javascript:;" class="primary-link">Tom</a>
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
            </div>
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
                            </table>
                        </div>
                    </div>
                </div>
                <!-- END PORTLET -->
            </div>
        </div>
        <div id="gmap_polygons"></div>
    </div>
@endsection