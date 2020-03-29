
<div class="row">
    <div class="col-lg-12">
        <section class="panel"></section>
            <header class="panel-heading">
            {{ $categoriestitle }}
            
                <span class="tools pull-right">
                    <a class="fa fa-chevron-down" href="javascript:;"></a>
                    <a class="fa fa-cog" href="javascript:;"></a>
                    <a class="fa fa-times" href="javascript:;"></a>
                </span>
            </header>
            <div class="panel-body">
                <div class=" form">
                {{ $categoriestitle }}
                    <form class="cmxform form-horizontal " id="commentForm" method="get" action="">
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : ''}}"> 
                            {!! Form::label('name', 'Name (required)', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                            {!! Form::text('name', null, ['class' => ' form-control', 'required', 'id' => 'name', 'placeholder' => 'Your Name']) !!}
                            {!! $errors->first('name', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                        {!! Form::label('name', 'Descriotion (required)', ['class' => 'control-label col-lg-3']) !!}
                            <div class="col-lg-6">
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'required', 'placeholder'=>'Description', 'rows' => '5', 'id' => 'description']) !!}
                                {!! $errors->first('description', '<p class="errors">:message</p>') !!}
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Submit', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
</div>