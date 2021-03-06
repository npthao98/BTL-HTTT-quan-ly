@extends('employee.layout.main')
@section('head')
    <script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

    <script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>
@endsection
@section('menu')
    <ul class="metismenu" id="side-menu">

        <li class="menu-title">Senior Manager</li>

        <li>
            <a href="/seniormanager/manageproduct" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Product  </span>
            </a>
        </li>

        <li>
            <a href="/seniormanager/managestore" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span> Manage Store </span>
            </a>
        </li>

        <li>
            <a href="/seniormanager/managereport" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Report  </span>
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
                    <label for="id">ID</label>
                    <input type="text" class="form-control" value="{{ $branch->id }}" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" value="{{ $branch->name }}" readonly>
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" value="{{ $branch->address }}" readonly>
                </div>
                <div class="form-group">
                    <label for="address">Phone</label>
                    <input type="text" class="form-control" value="{{ $branch->phone }}" readonly>
                </div>
                <div class="form-group">
                    <a href="{{ URL::asset('seniormanager/managestore/update/'.$branch->id) }}"><button type="button" class="btn btn-primary">Update</button></a>
                </div>
            </form>
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
