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
                                    <th colspan="2"> Buyer </th>
                                    <th> Product </th>
                                    <th> Total Price </th>
                                    <th> Buy Date </th>
                                </tr>
                                </thead>

                                @foreach ($orderItems as $orderItem)
                                    <tr>
                                        <td class="fit">
                                            <img class="user-pic" src="
                                                                /assets/pages/media/users/avatar4.jpg"> </td>
                                        <td>
                                            <a href="javascript:;" class="primary-link">{{ $orderItem->user->name}}</a>
                                        </td>
                                        <td> {{ $orderItem->product->name }} </td>
                                        <td> {{ $orderItem->price }} </td>
                                        <td> {{ \Carbon\Carbon::createFromFormat('Y-m-d', $orderItem->order_date)->format('l jS \\of F Y') }}</td>
                                    </tr>
                                @endforeach
                                
                               
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
                                      <th colspan="2"> Product </th>
                                    <th> Category </th>
                                    <th> Description </th>
                                    <th> Price </th>
                                    <th> Qty </th>
                                    <th> Uploaded Date </th>
                                </tr>
                                </thead>
                                 @foreach ($products as $product)
                                   <tr>
                                    <td class="fit">
                                        <img class="user-pic" src="{{ url($product->image_url) }}"> </td>

                                    <td>
                                    <a href="javascript:;" class="primary-link">{{ $product->name }} </a>
                                    </td>
                                        <td> {{ $product->category->name }} </td>
                                        <td> {{ substr($product->descr, 0, 100) }}... </td>
                                        <td> {{ $product->price }} </td>
                                        <td> {{ $product->quantity }} </td>
                                        <td>{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $product->created_at )->format('l jS \\of F Y h:i:s A') }}</td>
                                        <td></td>
                                    </tr>
                                @endforeach
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