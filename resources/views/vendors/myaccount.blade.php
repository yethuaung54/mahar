@extends('vendors.layouts.master')
@section('content')
    @include('vendors.layouts.partials.usersidebar')
    <div class="profile-content">
            <div class="row">
                <div class="col-md-12">
                    <form role="form" action="#">
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <input type="text" placeholder="John" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" placeholder="testing@gmail.com" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <input type="text" placeholder="about product" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Password</label>
                            <input type="text" placeholder="20000Ks" class="form-control" /> </div>
                        <div class="form-group">
                            <label class="control-label">Image</label>
                            <input type="file" placeholder="example.jpg"  /> </div>
                        <div class="margiv-top-10">
                            <a href="javascript:;" class="btn green"> Update Changes </a>
                            <a href="home" class="btn default"> Cancel </a>
                        </div>
                    </form>
                </div>
        </div>
    </div>
@endsection