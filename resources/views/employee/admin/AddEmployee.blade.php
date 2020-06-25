@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Admin</li>

        <li>
            <a href="/admin/manageaccount" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Account  </span>
            </a>
        </li>

    </ul>
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <form>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="employeeid">Employee ID</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <label for="employeename">Employee Name</label>
                    <input type="text" class="form-control" >
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ URL::asset('/admin/manageaccount') }}"><button type="button" class="btn btn-danger">Cancel</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection