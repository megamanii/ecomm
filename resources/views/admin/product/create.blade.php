@extends('admin.layout.admin')

@section('content')

    <h3>Add Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => true, 'data-parsley-validate'=>'']) !!}

            <div class="form-group">
                {{ Form::label('name', 'Name') }}
                {{ Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description') }}
                {{ Form::text('description', null, array('class' => 'form-control','required'=>'')) }}
            </div>
            <div class="form-group">
                {{ Form::label('price', 'Price') }}
                {{ Form::text('price', null, array('class' => 'form-control','required'=>'')) }}
            </div>

            <div class="form-group">
                {{ Form::label('size', 'Size') }}
                {{ Form::select('size', [ '9' => '9US', '9.5' => '9.5US','10'=>'10US'], null, ['class' => 'form-control', 'placeholder' => 'Select Size','required'=>'']) }}
            </div>

            <div class="form-group">
                {{ Form::label('category_id', 'Categories') }}
                {{ Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category','required'=>'']) }}
                
            </div>

            <div class="form-group">
                {{ Form::label('image', 'Image (jpg,jpeg,png only)') }}
                {{ Form::file('image',array('class' => 'form-control','required'=>'')) }}
            </div>

             {{ Form::submit('Create Product', array('class' => 'btn btn-primary')) }}
            {!! Form::close() !!}

        </div>
    </div>



@endsection