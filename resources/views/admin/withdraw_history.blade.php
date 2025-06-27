@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Withdraw History</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Withdraw History</li>
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
                                        <th>Bank Details</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>

                                        {{-- <th>Action</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($withdraws as $key => $item)
                                    <tr>

                                        <td>{{$key+1}}</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>
                                            <b>Bank:</b> {{$item->bank_name}} <br>
                                            <b>Branch:</b> {{$item->branch}}<br>
                                            <b>Account Number:</b> {{$item->account_number}}<br>
                                            <b>IFSC Code:</b> {{$item->ifsc_code}}<br>
                                            <b>Account's Holder Name:</b> {{$item->accounts_holder_name}}
                                        </td>
                                        <td>{{$item->amount}}</td>
                                        <td>
                                            @if($item->status == '0')
                                            <span class="bg-warning py-1 px-2" style="border-radius: 10px;">Pending</span>
                                            @elseif($item->status == '1')
                                            <span class="bg-success py-1 px-2 text-white" style="border-radius: 10px;">Approved</span>
                                            @elseif($item->status == '2')
                                            <span class="bg-danger py-1 px-2 text-white" style="border-radius: 10px;">Rejected</span>
                                            @endif
                                        </td>
                                        <td>{{$item->created_at}}</td>
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
