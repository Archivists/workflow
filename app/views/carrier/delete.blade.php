@extends('layouts.master')

{{-- Web site Title --}}
@section('title')
    {{{ $title }}} :: @parent
@stop

{{-- Content --}}
@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header clearfix">
            <h3 class="pull-left">{{{ $title }}}</h3>
            <div class="pull-right">
                <a href="{{{ URL::to('carriers') }}}" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-arrow-left"></span> Back</a>
            </div>
        </div>

         <!-- Notifications -->
        @include('notifications')
        <!-- ./ notifications -->

        {{-- Delete Role Form --}}
        {{ Form::open(array('url' => URL::to('carriers') . '/' . $carrier->id, 'method' => 'delete', 'class' => 'bf')) }}
        
           @include('carrier/_details', compact('carrier'))

        {{ Form::close() }}
    </div>
</div>
    
@stop
