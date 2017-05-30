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
			<div class="col-md-3">
			</div>		
			<div class="col-md-6">
				<div class="todolist">
					<h1>Already Done</h1>
					<form method="post" action="/edit/{{ $todo->id }}" style="padding-bottom: 100px;">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea id="body" name="body" class="form-control" required=""> {{ $todo->body }} </textarea>
						</div>
						<input type="submit" class="btn btn-success" value="update">		
					</form><br>
				</div>
			</div>
			<div class="col-md-3">
				
			</div>
		</div>
	</div>
</body>
</html>