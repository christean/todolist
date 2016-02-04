@extends('layout')
@section('content')

<section class="header section-padding">
	<div class="background">&nbsp;</div> 
	<div class="container">
		<div class="header-text">
			<h1>To-do List</h1>
			<p>Here you'll see a responsive To-do List page using Laravel framework!</p>
		</div>
	</div>
</section>

<div class="container">
	<section class="section-padding">
		<div class="jumbotron text-center">
			<div class="panelpanel-default"> 
				<div class="panel-heading">
					<h1><span class="grey">My</span> To-do List</h1>
				</div>
				@if ($tasks->isEmpty())
					<p> Currently, there is no task!</p> 
				@else
					<table class="table">
						<thead>
							<tr>
								<th>#</th>
								<th>Title</th>
								<th>Body</th>
								<th>Finish</th>
							</tr>
						</thead>
						<tbody>
							@foreach($tasks as $task)
								<tr>
									<td>{{ $task->id }} </td>
									<td><a href="{{action('TasksController@show',$task->id)}}">{{ $task->title }}</a></td>
									<td>{{ $task->body }}</td>
									<td>{{ $task->done ? 'Yes' : 'No' }}</td>
									<td><a href="{{ action('TasksController@edit',$task->id) }}" class="btnbtn-info">Edit</a> 
										<a href="{{ action('TasksController@delete',$task->id) }}" class="btnbtn-info">Delete</a>
									</td>
								</tr>
							@endforeach
						</tbody>
       				</table>
       			@endif
			</div>
		</div>
	</section>
</div>
@stop
</div>