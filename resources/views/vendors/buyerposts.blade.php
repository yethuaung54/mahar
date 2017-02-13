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
                            <span class="caption-subject font-blue-madison bold uppercase">Customers who bought your products</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-scrollable table-scrollable-borderless">
                            <table class="table table-hover table-light">
                                <thead>
                                <tr class="uppercase">
                                    <th colspan="2"> MEMBER</th>
                                    <th> Productname</th>
                                    <th> Price</th>
                                    <th> Buy Date</th>
                                </tr>
                                </thead>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar4.jpg"></td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Brain</a>
                                    </td>
                                    <td> Testing123</td>
                                    <td> $345</td>
                                    <td> Feb.10.2017</td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar5.jpg"></td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Nick</a>
                                    </td>
                                    <td> Testing123</td>
                                    <td> $345</td>
                                    <td> Feb.10.2017</td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar6.jpg"></td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Tim</a>
                                    </td>
                                    <td> Testing123</td>
                                    <td> $345</td>
                                    <td> Feb.10.2017</td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"></td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">Tom</a>
                                    </td>
                                    <td> Testing123</td>
                                    <td> $345</td>
                                    <td> Feb.10.2017</td>
                                </tr>
                                <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="
                                                            /assets/pages/media/users/avatar7.jpg"></td>
                                    <td>
                                        <a href="javascript:;" class="primary-link">JC</a>
                                    </td>
                                    <td> Testing123</td>
                                    <td> $345</td>
                                    <td> Feb.10.2017</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
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
            <!-- END PORTLET -->
        </div>
    </div>
    <div id="gmap_polygons"></div>
</div>
@endsection