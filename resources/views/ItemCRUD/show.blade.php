@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Item</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('itemCRUD.index') }}"> Back</a>
            </div>
        </div>
    </div>



 <table class="table table-bordered">
        <tr>
         
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
   
    <tr>
     
       
         <td>{{ $item->title }}</td>
       <td>{{ $item->description }}</td>

        <td>
          
        <form class="" action="{{route('itemCRUD.destroy', $item->id)}}" method="post">
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
                    <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this data');" name="name" value="delete">

                </form>
            </td>

    </tr>

@endsection
    </table>