@extends('layouts.default')
@section('content')
<div class="row">
    <div class="col-md-12">
        <h1> Edit Data</h1>
    </div>

</div>
<div class="row">
    <form class="" action="{{route('itemCRUD.update', $item->id)}}" method="post">
    <input type="hidden" name="_method" value="PATCH">
  {{csrf_field()}}
  <div class="form-group{{ ($errors->has('title')) ? $errors->first('title') : ''}}">
  <input type="text" name="title" class="form-control" placeholder="Entrer title here" value="{{ $item-> title}}">
  {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
      
</div>
  <div class="form-group{{ ($errors->has('description')) ? $errors->first('title') : ''}}">
  <input type="text" name="description" class="form-control" placeholder="Entrer description here" value="{{$item->description}}">
  {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
      
</div> 
  
  <div class="form-group">
      <input type="submit" class="btn btn-primary" value="save">
  </div>  
</form>

</div>

@stop