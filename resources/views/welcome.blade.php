<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <title>Document</title>
</head>
<body>
<div class="super_container">
	
	<!-- Header -->
	<div class="card">
    
              <div class="card-body table-responsive p-0">
              <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    
                    
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                      <td>{{ $users->firstItem()+$loop->index }}</td>
                   
                        <td>{{ $user->name }}</td>
                         <td>{{ $user->email }}</td>
                        <td>{{ $user->status }}</td>
                        
                   
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>
         </div>
         {{ $users->links() }}
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
		

	</div>

</div>
</body>
</html>