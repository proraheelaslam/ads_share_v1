
<div class="row">
    <div class="col-lg-12">
        <section class="panel"></section>
            <header class="panel-heading">
               Ads
            
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}"> 
                            {!! Form::label('name', 'Name', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                            {!! Form::text('name', null, ['class' => ' form-control', 'required', 'id' => 'name', 'placeholder' => 'Name']) !!}
                            {!! $errors->first('name', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Description', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'placeholder'=>'Description', 'rows' => '5', 'id' => 'description']) !!}
                                {!! $errors->first('description', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Duration (days)', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                <select class="form-control" name="duration">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4"> 4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                            {!! Form::label('name', 'Ads', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                <input type="file" name="image" class="form-control form-control-file" >
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Save', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>

                </div>

            </div>
        </section>
    </div>
</div>