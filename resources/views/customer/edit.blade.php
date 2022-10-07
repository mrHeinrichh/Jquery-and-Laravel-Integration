@extends('layouts.base')
@section('body')
<div class="container">
    <h2>Edit Customer</h2>
    {!! Form::model($customer,['method'=>'PATCH','route' => ['customer.update',$customer->id]]) !!}
    <div class="form-group">
        <label for="customer_id" class="control-label">Title</label>
        {!! Form::select('id',$customers, null,['class' => 'form-control','id'=>'customer_id']) !!}
    </div>
    <div class="form-group">
        <label for="title" class="control-label">Title</label>
        {{ Form::text('title',null,array('class'=>'form-control','id'=>'title')) }}
    </div>
    <div class="form-group">
        <label for="lname" class="control-label">last name</label>
        {{ Form::text('lname',null,array('class'=>'form-control','id'=>'lname')) }}
    </div>
    <div class="form-group">
        <label for="fname" class="control-label">First Name</label>
        {{ Form::text('fname',null,array('class'=>'form-control','id'=>'fname')) }}
    </div>
    <div class="form-group">
        <label for="address" class="control-label">Address</label>
        {{ Form::text('addressline',null,array('class'=>'form-control','id'=>'address')) }}
    </div>
    <div class="form-group">
        <label for="town" class="control-label">Town</label>
        {{ Form::text('town',null,array('class'=>'form-control','id'=>'town')) }}
    </div>
    <div class="form-group">
        <label for="zipcode" class="control-label">Zip code</label>
        {{ Form::text('zipcode',null,array('class'=>'form-control','id'=>'zipcode')) }}
    </div>
    <div class="form-group">
        <label for="phone" class="control-label">Phone</label>
        {{ Form::text('phone',null,array('class'=>'form-control','id'=>'phone')) }}
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{url()->previous()}}" class="btn btn-default" role="button">Cancel</a>
</div>
</div>
{!! Form::close() !!}
@endsection