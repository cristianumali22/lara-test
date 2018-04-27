@extends('books.layout.default')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('books.index') }}"> Back</a>
            </div>
        </div>
    </div>

    {{ Form::open(array('route' => 'books.store'))}}
    <div class="row">


        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ISBN:</strong>
                {{ Form::text('isbn', null, array('placeholder' => 'ISBN','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Author:</strong>
                 {{ Form::text('author', null, array('placeholder' => 'Author','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Publisher:</strong>
                 {{ Form::text('publisher', null, array('placeholder' => 'Publisher','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                 <strong>Year Published:</strong>
                 {{ Form::text('yearPublished', null, array('placeholder' => 'Year Published','class' => 'form-control')) }}
            </div>
        </div> 

        <div class="col-xs-12 col-sm-12 col-md-12">
             <div class="form-group">
                <strong>Category:</strong>
                 {{ Form::text('category', null, array('placeholder' => 'category','class' => 'form-control')) }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    {{ Form::close() }}

    <div>
        <p>Errors:</p>
        @if(count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach( $errors->all() as $error )
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection