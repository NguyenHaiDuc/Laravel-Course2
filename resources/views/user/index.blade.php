<!DOCTYPE html>
<html>
<head>
	<title>user</title>
</head>
<body>
	<div>
		<a href="{{url('users/create')}}">Add new</a>
	</div>
	<table>
		<thead>
			<tr>
				<th>STT</th>
				<th>Name</th>
				<th>email</th>
			</tr>
		</thead>
		<?php $i = 0; ?>
	@foreach($userList as $user)
		<tbody>
			<tr>
				<td><?php echo ++$i; ?></td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td><a href="{{ url("users/$user->id/edit") }}">Edit</a></td>
				<td>
					<form action="{{url("users/$user->id")}}" method="POST">
						{{csrf_field()}}
						{{method_field('DELETE')}}

						<button type="submit">Delete</button>
					</form>
				</td>
			</tr>
		</tbody>
	@endforeach
	</table>
</body>
</html>