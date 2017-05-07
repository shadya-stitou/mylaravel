@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1> Edit Data</h1>
    </div>

</div>
<div class="row">
  <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>

</div>

@stop