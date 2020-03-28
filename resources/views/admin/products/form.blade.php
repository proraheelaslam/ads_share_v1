<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                {{ $productstitle }}
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    {{ $productstitle }}
                    <form class="cmxform form-horizontal " id="commentForm" method="get" action="">
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Name', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::text('name', null, ['class' => ' form-control', 'required', 'id' => 'name', 'placeholder' => 'Your Name']) !!}
                                {!! $errors->first('name', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('cat_id') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Categories', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                            {!! Form::select('cat_id', getCategory(), isset($productDetails)?$productDetails->cat_id:null, ['class' => 'form-control','required' => 'required']) !!}
                            {!! $errors->first('cat_id', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Price', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::number('price', null, ['class' => ' form-control', 'required', 'id' => 'price',
                                'placeholder' => 'Price','min' => '0']) !!}
                                {!! $errors->first('price', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('quantity') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Quantity', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::number('quantity', null, ['class' => ' form-control', 'required', 'id' => 'quantity', 'placeholder' => 'Quantity','min' => '0']) !!}
                                {!! $errors->first('quantity', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Descriotion', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'placeholder'=>'Description','rows' => '5']) !!}
                                {!! $errors->first('description', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <!-- <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Image Upload', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::file('image', null, ['class' => 'form-control', 'required',
                                'placeholder'=>'Image']) !!}
                                {!! $errors->first('image', '<p class="errors">:message</p>') !!}

                                @if(isset($productDetails->image))
                                {{ Form::hidden('current_image', $productDetails->image , array('id' => 'current_image')) }}
                                <img src="{{ URL::to('/') }}/images/backend_images/product/{{ $productDetails->image }}" class="img-thumbnail" width="100" />
                                {{-- <input type="hidden" name="hidden_image" value="{{ $productDetails->image }}" /> --}}
                                @endif
                            </div>
                        </div> -->



                        <div class="form-group last">
                        <label class="control-label col-md-3">Image Upload</label>
                        <div class="col-md-9">
                        <div class="fileupload fileupload-new" data-provides="fileupload">
                        <div style="border:0px;" class="fileupload-new thumbnail" style="width:100px; height:100px;">
                        @if(isset($productDetails->image))
                                {{ Form::hidden('current_image', $productDetails->image , array('id' => 'current_image')) }}
                                <img src="{{ URL::to('/') }}/images/backend_images/product/{{ $productDetails->image }}" class="img-thumbnail" />
                                {{-- <input type="hidden" name="hidden_image" value="{{ $productDetails->image }}" /> --}}
                        @endif
                        </div>
                        <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>

                        <div>
                        <span style="border:1px solid; border-color:rgba(150, 160, 180, 0.3)" class="btn btn-white btn-file">
                        <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                        {!! Form::file('image', null, ['class' => 'default', 'required',
                        'placeholder'=>'Image']) !!}
                        {!! $errors->first('image', '<p class="errors">:message</p>') !!}
                        </span>
                        </div>

                        </div>
                        </div>
                        </div>






                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' =>
                                'btn btn-primary']) !!}
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>