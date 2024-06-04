<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company Crud | Dashboard </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('css/fontawesome-free/css/all.min.css')}}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('css/adminlte.css')}}">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
   
     
      <span class="brand-text font-weight-light">Company CRUD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
       
        <div class="info">
          <a href="{{('admin.dashboard')}}" class="d-block">Admin Dashboard</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item">
            <a href="{{route('admin.company.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Company Details
                
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.company.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Employee Details
                
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="{{route('admin.logout')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                logOut
                
              </p>
            </a>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
       
          
          
            <!-- /.card -->

            <div class="card">
              <div class="card-header border-0">
                <h3 > <a href="{{route('admin.employee.create')}}"  class="btn btn-primary">Create New Employee</a></h3>
                <div class="card-tools">
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-download"></i>
                  </a>
                  <a href="#" class="btn btn-tool btn-sm">
                    <i class="fas fa-bars"></i>
                  </a>
                </div>
              </div>
              <div class="card-body table-responsive p-0">
              <table class="table table-bordered">
            <thead>
                <tr>
                    <th>S.No</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Company</th>
                    <th> Email</th>
                     <th>Phone</th>
                     <th width="280px">Action</th>
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                      <td>{{ $employees->firstItem()+$loop->index }}</td>
                   
                        <td>{{ $employee->first_name }}</td>
                        <td>{{ $employee->last_name }}</td>
                        <td>{{ $employee->companydata->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->phone }}</td>
                        <td>
                            
                            <a class="btn btn-primary" href="{{ route('admin.employee.edit',$employee->id) }}">Edit</a>
                            <a class="btn btn-danger" href="{{ route('admin.employee.delete',$employee->id) }}">Delete</a>
                           
                            
                       
                    </td>
                   
                        
                    </tr>
                    @endforeach
            </tbody>
        </table>
         </div>
         {{ $employees->links() }}
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>

<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<!-- AdminLTE -->
<script src="{{asset('js/adminlte.js')}}"></script>



</body>
</html>
