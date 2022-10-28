@extends('layouts.admin_header')

@section('content')

@if ($message = Session::get('success_add'))
                            

                            <div class="alert alert-success">
                                        <h5 class="alert-title">Success</h5>
                                        {{$message}}
                                    </div>
                      
                          @endif  
    <!-- (B) MAIN -->
    <main id="pgmain">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productsModal">Add Products </button>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Add Colour </button>
    </main>


     <!-- brand _modal -->
      <div class="modal fade" id="myModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form data-datatable_id="videoDatatable" id="addVideoForm" class="modal-content" method="POST"
                action="{{route('colour.create')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Colour </h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
            
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Colour Name </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="colour_name" type="text" class="form-control" placeholder="Colour name" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

      <!-- products _modal -->
      <div class="modal fade" id="productsModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form data-datatable_id="videoDatatable" id="addVideoForm" class="modal-content" method="POST"
                action="{{route('colour.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title">Add Products </h5>
                    <button type="button" class="close" data-dismiss="modal"><span>×</span></button>
                </div>
                <div class="modal-body">
            
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Product Code </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="product_code" type="text" class="form-control" placeholder="Product Code" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Product Name </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="product_name" type="text" class="form-control" placeholder="Product Name" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Purchases Price </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="purchases_price" type="text" class="form-control" placeholder="Purchases Price" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Sales Price </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="sales_price" type="text" class="form-control" placeholder="Sales Price" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group mb-3">
                                    <label for="image" class="mb-1"><strong>Wholesale Price </strong></label>
                                    <div id="preview_file"></div>
                                    <input id="registration_product_image" name="wholesale_price" type="text" class="form-control" placeholder="Wholesale Price" aria-describedby="registration_product_image-error" aria-invalid="false" required>
                                    <div id="registration_product_image-error" class="invalid-feedback animated fadeInUp" style="display:none"></div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
@endsection

