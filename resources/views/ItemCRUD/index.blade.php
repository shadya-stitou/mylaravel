@extends('layouts.default')
 
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>application laravel</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('itemCRUD.create') }}"> Create New Item</a>
            </div>
        </div>
    </div>

  

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
    @foreach ($items as $key => $item)
    <tr>
     
         <td><a href="{{ route('itemCRUD.show',$item->id) }}">{{ $item->id }}</a></td>
         <td><a href="{{ route('itemCRUD.show',$item->id) }}">{{ $item->title }}</a></td>
       <td><a href="{{ route('itemCRUD.show',$item->id) }}">{{ $item->description }}</a></td>

        <td>
          
        <form class="" action="{{route('itemCRUD.destroy', $item->id)}}" method="post">
                 <a class="btn btn-info" href="{{ route('itemCRUD.show',$item->id) }}">Show</a>
                    <input type="hidden" name="_method" value="delete">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <a class="btn btn-primary" href="{{ route('itemCRUD.edit',$item->id) }}">Edit</a>
                    <input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this data');" name="name" value="delete">

                </form>
            </td>

    </tr>
    @endforeach
    </table>

    {!! $items->links() !!}

@endsection