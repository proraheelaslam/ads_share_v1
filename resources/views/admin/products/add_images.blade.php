@extends('layouts.adminLayout.admin_design')
@section('content')

<div id="content">
    <div id="content-header">
        <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>
                Home</a> <a href="#">Products</a> <a href="#" class="current">Add Attributes</a> </div>
        <h1>Products</h1>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_error') !!}</strong>
        </div>
        @endif
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{!! session('flash_message_success') !!}</strong>
        </div>
        @endif
    </div>
    <div class="container-fluid">
        <hr>
        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
                        <h5>Add Images</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <!-- <form enctype="multipart/form-data" class="form-horizontal" method="post"
                            action="{{ url('admin/add_images/'.$productDetails->id) }}" name="add_product"
                            id="add_product" novalidate="novalidate">
                            {{ csrf_field() }} -->
                            <!-- {!! Form::open(['url' => 'admin/add-product', 'data-toggle' => 'validator','data-disable' => 'false', 'class' => 'form-horizontal', 'files' => true]) !!} -->
                            
                            {!! Form::open(['url' => array('/admin/add_images', $productDetails->id), 'data-toggle' => 'validator','data-disable' => 'false', 'class' => 'form-horizontal', 'files' => true]) !!}

                            {{--<input type="hidden" name="hidden_proid" value="{{ $productDetails->id }}">--}}
                            {{ Form::hidden('hidden_proid', $productDetails->id , array('id' => 'hidden_proid')) }}
                            <div class="control-group">
                                <label class="control-label">Category Name : </label>
                                <label class="control-label">{{ $category_name }}</label>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Product Name : </label>
                                <label class="control-label">{{ $productDetails->name }}</label>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Price : </label>
                                <label class="control-label">{{ $productDetails->price }}</label>
                            </div>

                            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Image', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                            {!! Form::file('image[]', array('multiple'=>true, 'class'=>'form-control', 'id' => 'image', 'required')) !!}
                                
                                {!! $errors->first('image', '<p class="errors">:message</p>') !!}

                            </div>
                        </div>

                            
                            <!-- <div class="control-group form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                                <label class="control-label">Product Alt Image(s)</label>
                                <div class="controls">
                                    <div class="uploader" id="uniform-undefined"><input name="image[]" id="image"
                                            type="file" multiple="multiple"></div>
                                </div>
                            </div> -->

                            <br>
                            <div class="form-actions">
                                <input type="submit" value="Add Images" class="btn btn-success">
                            </div>
                            <!-- {!! Form::close() !!} -->
                        <!-- </form> -->
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div class="row-fluid">
            <div class="span12">
                <div class="widget-box">
                    <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                        <h5>Images</h5>
                    </div>
                    <div class="widget-content nopadding">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>Image ID</th>
                                    <th>Product ID</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productImages as $image)
                                <tr class="gradeX">
                                    <td class="center">{{ $image->id }}</td>
                                    <td class="center">{{ $image->pro_id }}</td>
                                    <td class="center"><img width=130px
                                            src="{{ asset('images/backend_images/product/small/'.$image->image) }}">
                                    </td>
                                    <td class="center"><a id="delImage" rel="{{ $image->id }}" rel1="delete_image"
                                            href="javascript:" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection