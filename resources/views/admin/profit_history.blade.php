@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Users Profit History</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Users Profit History</li>
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


                            @if (session('usertype') === '0')
                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>
                                            User Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>User Type</th>
                                        <th>Property Name</th>
                                        <th>Total Amount</th>
                                        <th>User's Current Balance</th>
                                        <th>Profit Amount</th>
                                        <th>Monthly Profit</th>
                                        {{-- <th>Status</th> --}}
                                        {{-- <th>Join Date</th> --}}

                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   @foreach($histories as $key => $item)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->email}}</td>
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
                                            <td>{{$item->property_name}}</td>
                                            <td>₹{{$item->total_turnover}}</td>
                                            <td>₹{{$item->current_balance}}</td>
                                            <td>₹{{$item->profit_amount}}</td>
                                            <td>₹{{$item->monthly_amount}}</td>
                                            <td>{{$item->created_at}}</td>

                                        </tr>
                                   @endforeach
                                </tbody>
                            </table>
                            @endif


                            @if (session('usertype') != '0')

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>Property Name</th>
                                        <th>Total Amount</th>
                                        <th>Profit Amount</th>
                                        <th>Monthly Profit</th>
                                        <th>Date</th>

                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user_history as $key => $item)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$item->username}}</td>
                                        <td>{{$item->email}}</td>

                                        <td>{{$item->property_name}}</td>
                                        <td>{{$item->total_turnover}}</td>
                                        <td>{{$item->profit_amount}}</td>
                                        <td>{{$item->monthly_amount}}</td>

                                        <td>{{$item->created_at}}</td>
                                    </tr>
                                    @endforeach





                                </tbody>
                            </table>
                            @endif
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
