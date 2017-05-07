@extends('master')
@section('content')

<head>
	<title>pagination</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style type="text/css">
	.wrapper{
	width: 75%;
	margin: 0 auto;

	} </style>
</head>
<body>
<div class="wrapper">
<section class="panel panel-success">
<div class="panel-heading"><b> post info </b></div>
<div class="panel-body">
<table class="table table-hover table-bordered">
	<thead>
		<th>ID</th>
		<th>Title</th>
		<th>Description</th>
	</thead>
	<a href="{{route('blog.create')}}" class="btn btn-info pull-right">Create new Data</a><br><br>

		<?php  $no=1; ?>
	<tbody>
	@foreach($posts as $post)
	<tr>
		<td>{!!$post->id!!}</td>
		<td>{!!$post->title!!}</td>
		<td>{!!$post->description!!}</td>
		<td>
				<form class="" action="{{route('blog.destroy', $post->id)}}" method="post">
				 <a class="btn btn-info" href="{{ route('blog.show',$post->id) }}">Show</a>
					<input type="hidden" name="_method" value="delete">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<a href="{{route('blog.edit', $post->id)}}" class="btn btn-primary">Edit</a>
					<input type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete this data');" name="name" value="delete">

				</form>
			</td>

	</tr>
		@endforeach

	</tbody>

</table>


</div>

</div>
</body>
@stop