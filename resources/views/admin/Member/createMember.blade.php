@extends('layouts.admin-master')
@section('breadcrumb','Add Member')
@section('content')

<div class="card-body ">
   <div class="row">
    
    {!! Form::open(['method'=>'POST','action'=>'TeamMemberController@store','files'=>true])!!}
    <div class="col-md-12">
        <div class="form-group">
            {!! Form::label('name','Name')!!}
            {!! Form::text('name',null,['class'=>'form-control'])!!}
        </div>
        <div class="form-group">
            {!! Form::label('post','Post')!!}
            {!! Form::text('post',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('photo','Photo')!!}
            {!! Form::file('photo',['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('about','Description')!!}
            {!! Form::textarea('about',null,['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::button('<i class="fa fa-paper-plane"></i>Submit',['type'=>'submit','class'=>'btn btn-primary pull-right'])!!}
        </div>
        <a type="cancel" href="{{ route('member.index') }}" class="btn btn-default pull-right">Cancel</a>
    </div>

    {!! Form::close()!!}

</div>
</div>

@endsection
