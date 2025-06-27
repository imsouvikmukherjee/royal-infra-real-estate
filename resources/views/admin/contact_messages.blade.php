@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Contact Messages</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('contact_messages')}}">Home</a></li>
                    <li class="breadcrumb-item active">Contact Messages</li>
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
                                        <th>Property Type</th>
                                        <th>Contact No.</th>
                                        <th>Message</th>
                                        <th>Date</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($messages as $key => $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->email}}</td>
                                        <td>{{$item->property_type}}</td>
                                        <td>{{$item->contact}}</td>
                                        <td>{{$item->message}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>

                                            <a href="javascript:void(0)" onclick="confirmDelete('{{url('/admin/contact-message-delete')}}/{{encrypt($item->id)}}')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

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
