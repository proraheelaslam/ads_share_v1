@extends('layouts.adminLayout.admin_design')
@section('content')

{!! Form::open(['url' => 'admin/add-product', 'data-toggle' => 'validator','data-disable' => 'false', 'class' => 'form-horizontal', 'files' => true]) !!}

@include ('admin.products.form')

{!! Form::close() !!}

@endsection