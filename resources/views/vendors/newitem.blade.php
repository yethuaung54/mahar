@extends('vendors.layouts.master')
@section('content')
    <div class="portlet-body">
        <div class="tab-content">
            <!-- PERSONAL INFO TAB -->
            <div class="tab-pane active" id="tab_1_1">
                <h2>Upload your products to sell</h2>
                <form role="form" action="#">
                    <div class="form-group">
                        <label class="control-label">Product Name</label>
                        <input type="text" placeholder="name" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Product Category</label>
                            <select class="form-control"name="category">
                                <option>Category1</option>
                                <option>Category2</option>
                                <option>Category3</option>
                                <option>Category4</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Item Related Tags</label>
                        <input type="text" placeholder="medical,women,pregnancy" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Description</label>
                        <input type="text" placeholder="about product" class="form-control" /> </div>
                    <div id="id-custom-fields">
                        <div class="form-group">
                            <div class="margiv-top-10">
                                <a href="javascript:;" class="btn blue" onClick="addCustomField(); return false;"> Add More Description Fields </a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Price</label>
                        <input type="text" placeholder="20000Ks" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Quantity</label>
                        <input type="text" placeholder="5" class="form-control" /> </div>
                    <div class="form-group">
                        <label class="control-label">Image</label>
                        <input type="file" placeholder="example.jpg"  /> </div>
                    <div class="margiv-top-10">
                        <a href="javascript:;" class="btn green"> Save Changes </a>
                        <a href="home" class="btn default"> Cancel </a>
                    </div>

                    <script type="text/javascript">

                        var customFieldIndex = 0;

                        function addCustomField() {
                            var $ = jQuery;
                            customFieldIndex++;
                            var html = '\
                        <div id="id-custom-field-' + customFieldIndex + '" class="form-group" style="padding-bottom: 30px;">\
                              <div class="col-md-5">\
                                <input type="text" id="id-input-custom-field-key-' + customFieldIndex + '" name="custom_fields_keys[]" class="form-control" placeholder="Title" value="">\
                              </div>\
                              <div class="col-md-5">\
                                                            <input type="text" id="id-input-custom-field-value-' + customFieldIndex + '" name="custom_fields_values[]" class="form-control" placeholder="Description" value="">\
                              </div>\
                              <div class="col-md-2">\
                                <a href="#" class="btn btn-danger" onClick="removeCustomField(' + customFieldIndex + '); return false;"><i class="entypo-trash"></i> Remove</a>\
                              </div>\
                        </div>';
                            $("#id-custom-fields").append(html);
                        }
                        function removeCustomField(i) {
                            var $ = jQuery;
                            var cf = $("#id-custom-field-" + i);
                            if (cf != undefined) {
                                cf.remove();
                            }
                        }
                    </script>
                </form>
            </div>
        </div>
    </div>
@endsection