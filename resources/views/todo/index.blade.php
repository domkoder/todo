<!DOCTYPE html>
<html>
<head>
	<title>My todo list</title>
	<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<style type="text/css">
	          .todolist{
	              background-color:#FFF;
	              padding:20px 20px 10px 20px;
	              margin-top:30px;
	          }
	          .todolist h1{
	              margin:0;
	              padding-bottom:20px;
	              text-align:center;
	          }
	          .form-control{
	              border-radius:0;
	          }
	          li.ui-state-default{
	              background:#fff;
	              border:none;
	              border-bottom:1px solid #ddd;
	              padding: 10px;
	          }

	          li.ui-state-default:last-child{
	              border-bottom:none;
	          }
	          .todo-footer{
	              background-color:#F4FCE8;
	              margin:0 -20px -10px -20px;
	              padding: 10px 20px;
	          }
	          .done-items li{
	              padding:10px 0;
	              border-bottom:1px solid #ddd;
	              text-decoration:line-through;
	          }
	          .done-items li:last-child{
	              border-bottom:none;
	          }
	          .checkAll{
	              margin-top:10px;
	          }
	</style>
</head>
<body style="background-color: #d9d9d9">
	<div class="contianer">
		<div class="row">
			@if($flash = session('message') )
			          <div id="flash1" class = "alert alert-success" role = "alert">
			                 {{ $flash }}
			          </div>
		      	@endif
			<div class="col-md-6">
				<div class="todolist">
					<h1>Todos</h1>
					<form method="post" action="/addtodo">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea id="body" name="body" class="form-control" placeholder="Add todos.
							" required=""></textarea>
						</div>
						<input type="submit" class="btn btn-success" value="Add">		
					</form><br>
						<ul class="">
						@if(! empty($todos))
							@foreach ($todos as $todo)							
								<p style="padding-right: 6px;">
									<strong style="color: #5cb85c;">
										<br>
										Added {{  $todo->created_at->diffForHumans()  }} :
									</strong>
								</p>		
								<li class="ui-state-default">				
									{{ $todo->body }} <br><br>
									<a href="/mark/{{  $todo->id }}"><button type="button" class="btn btn-success  btn-sm">Mark as done</button></a> 
									<a href="/remove/{{ $todo->id }}"><button type="button" class="btn btn-danger  btn-sm">Remove</button></a>
									<a href="/edit/{{ $todo->id }}"><button type="button" class="btn btn-info btn-sm">Edit</button></a>
								</li>   
							@endforeach
						@endif
						</ul>			
						
						<div class="todo-footer">
							<strong><span class="count-todos"></span></strong>&nbsp&nbsp
							<a href="/markall"><button class="btn btn-success" id="checkAll">Mark all as done</button></a>						
						</div>
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="todolist">
					<h1>Already Done</h1>
					<ul>
					@if (! empty($dones))		
						@foreach ($dones as $done)							
							<p style="padding-right: 6px;" >
								<strong style="color: #5cb85c;">
									<br>
									Done {{  $done->created_at->diffForHumans()  }} :
								</strong>
							</p>		
							<li class="ui-state-default">				
								{{ $done->body }} <br><br>
							</li>   
						@endforeach
					@endif
					</ul>
					<div class="todo-footer">
						<strong><span class="count-todos"></span></strong>&nbsp&nbsp
						<a href="/removeall"><button class="btn btn-danger" id="checkAll">Remove all</button></a>						
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>