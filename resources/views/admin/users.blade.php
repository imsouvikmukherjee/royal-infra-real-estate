@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
                <!-- <a href="add-property.html" class="btn btn-primary">Add Property</a> -->
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">
                            <!-- <h5 class="card-title">Datatables</h5>
                            <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you
                                wish to conver to a datatable. Check for <a href="https://fiduswriter.github.io/simple-datatables/demos/" target="_blank">more examples</a>.</p> -->


                                @if (session('success'))
                                <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
                                    <ul>
                                        <li class="text-center">{{ session('success') }}</li>
                                    </ul>

                                </div>
                            @endif

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>Contact No.</th>
                                        <th>Usertype</th>
                                        <th>Wallet Balance</th>
                                        <th>Login Status</th>
                                        <th>Join Date</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($users as $key => $item)

                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->contact}}</td>
                                        <td>
                                            @if($item->usertype == '1')
                                            <span class="text-warning">INVESTOR</span>
                                            @elseif($item->usertype == '2')
                                            <span class="text-success">CHANNEL PARTNER</span>
                                            @elseif($item->usertype == '3')
                                            <span class="text-primary">MASTER CHANNEL PARTNER</span>
                                            @elseif($item->usertype == '4')
                                            <span class="text-danger">FRANCHISE PARTNER</span>
                                            @endif
                                        </td>
                                        <td>₹{{$item->balance}}</td>
                                        <td>
                                            @if($item->status == '0')
                                            <span class="bg-warning py-1 px-2" style="border-radius: 10px;">Pending</span>
                                            @else
                                            <span class="bg-success text-white py-1 px-2" style="border-radius: 10px;">Approved</span>
                                            @endif
                                        </td>
                                        <td>{{$item->created_at}}</td>
                                        <td>

                                            <a href="javascript:void(0)" onclick="confirmDelete('{{url('/admin/user-delete')}}/{{encrypt($item->id)}}')" class="btn btn-danger btn-sm my-1">Delete</a>
                                            <a href="{{url('/admin/add-profit')}}/{{encrypt($item->id)}}" class="btn btn-primary btn-sm my-1">Add Profit</a>
                                            <a href="{{url('/admin/login-status')}}/{{encrypt($item->id)}}" class="btn btn-success btn-sm my-1">Status</a>
                                        </td>
                                    </tr>

                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                            {{-- <div>
                                {{$users->links('pagination::bootstrap-5')}}
                              </div> --}}

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    <script>
        function confirmDelete(url){
          if(confirm('Are you sure?')){
            window.location.href = url;
          }
        }
      </script>
   @endsection
