@extends('layouts.adminLayout.admin_design')
@section('content')

<!-- page start-->
<div class="row">
    <div class="col-sm-12">
        <section class="panel">
            <header class="panel-heading">
                Products
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
                <!-- <span class="tools pull-right">
<a href="javascript:;" class="fa fa-chevron-down"></a>
<a href="javascript:;" class="fa fa-cog"></a>
<a href="javascript:;" class="fa fa-times"></a>
</span> -->
            </header>
            <div class="panel-body">
                <div class="adv-table">
                    <table class="display table table-bordered table-striped" id="dynamic-table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr class="gradeA">
                                <td>{{ $product->name }}</td>
                                <td>{{$product->category->name}}</td>
                                <td><img src="{{ URL::to('/') }}/images/backend_images/product/{{ $product->image }}" class="img-thumbnail" width="75" /></td>
                                <td>{{ $product->price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="center">
                                <a href="{{ url('/admin/add_images/'.$product->id) }}"
                                        class="btn btn-primary btn-mini">Add Images</a>

                                    <a href="{{ url('/admin/edit-product/'.$product->id) }}"
                                        class="btn btn-primary btn-mini">Edit</a>
                                    
                                    <form class="formGeneral" action="{{ url('/admin/delete-product/') }}/{{ $product->id }}" method="PUT">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger">Delete</button>
                                    </form>
                                    

                                    <!-- <a <?php /* id="delCat" href="{{ url('/admin/delete-product/'.$product->id) }}" */ ?>
                                        rel="{{ $product->id }}" rel1="delete-product" href="javascript:"
                                        class="btn btn-danger btn-mini deleteRecord">Delete</a> -->
                                  </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Actions</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- page end-->
@endsection