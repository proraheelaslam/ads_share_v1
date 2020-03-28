@extends('layouts.adminLayout.admin_design')
@section('content')

{!! Form::model($productDetails, [
                'method' => 'POST',
                'url' => ['admin/edit-product',$productDetails->id],
                'class' => 'form-horizontal',
                'files' => true,
                'data-toggle' => 'validator',
                'data-disable' => 'false',
                'id' =>'category_form'
                ]) !!}
                
                @include ('admin.products.form', ['submitButtonText' => 'Edit'])

            {!! Form::close() !!}

@endsection