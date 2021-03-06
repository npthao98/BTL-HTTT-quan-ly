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

        <li>
            <a href="/seniormanager/managestock" class="waves-effect">
                <i class="ion-md-speedometer"></i>
                <span>  Manage Stock  </span>
            </a>
        </li>
    </ul>
@endsection
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body table-responsive">
                            <h4 class="m-t-0 header-title mb-4"><b>Products</b></h4>

                            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Pricenew</th>
                                    <th>Quantity</th>
                                    <th>Category</th>
                                    <th>Detail</th>
                                </tr>
                                </thead>

                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>${{ $product->price }}</td>
                                        <td>${{ $product->pricenew }}</td>
                                        <td>{{ $product->quantity }}</td>
                                        <td>
                                            @foreach($categories as $c)
                                                @if( $c->id == $product->categoriesid )
                                                    {{ $c->name }}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td style="width: 1%"><a href="/seniormanager/manageproduct/detail/{{ $product->id }}" class="btn btn-primary">Detail</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <a href="/seniormanager/manageproduct/addproduct" class="btn btn-info">Add Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->

    </div>
@endsection
