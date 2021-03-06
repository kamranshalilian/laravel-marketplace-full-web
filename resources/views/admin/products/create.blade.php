@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Create products</div>

                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    {{Form::open(['route'=>'adminProductsStore', 'files' => true])}}
                        <div class="form-group">
                            {!! Form::label('name', 'Product Name') !!}
                            <div class="form-controls">
                                {{ Form::text('name', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('photo', 'Photo') !!}
                            <div class="form-controls">
                                {{ Form::file('photo', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {{ Form::hidden('image') }}
                        <div class="form-group">
                            {!! Form::label('description', 'Description') !!}
                            <div class="form-controls">
                                {{ Form::textarea('description', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('price', 'Price') !!}
                            <div class="form-controls">
                                {{ Form::text('price', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('quantity', 'Quantity') !!}
                            <div class="form-controls">
                                {{ Form::text('quantity', null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Category') !!}
                            <div class="form-controls">
                                {{ Form::select('category_id', $categories, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        <div class="form-group">
                            {!! Form::label('shop_id', 'Shop') !!}
                            <div class="form-controls">
                                {{ Form::select('shop_id', $shops, null, ['class'=>'form-control']) }}
                            </div>
                        </div>
                        {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
                        <a href="{{ route('adminProducts') }}">Cancel</a>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
