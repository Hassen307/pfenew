<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ItemToPdf</title>
    <style>
        table{
            border-collapse: collapse;
        }
        td,th{
            border:1px solid;
        }
	</style>
</head>
<body>

<table class="table table-bordered">
		<tr>
			
			<th>Title</th>
			<th>Description</th>
			
		</tr>
	@foreach ($items as $key => $item)
	<tr>
		
		<td>{{ $item->title }}</td>
		<td>{{ $item->description }}</td>
		
	</tr>
	@endforeach
	</table>
	

</body>
</html>