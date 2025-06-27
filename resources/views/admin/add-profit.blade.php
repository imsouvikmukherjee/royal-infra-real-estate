@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Profit</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                     <li class="breadcrumb-item"><a href="{{route('admin_users')}}">Users</a></li>
                    <li class="breadcrumb-item active">Add Profit</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Profit Form</h5>


                            @if ($errors->any())
                            <div class="alert alert-danger my-3 alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                {{-- <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> --}}
                            </div>
                        @endif


                        @if (session('success'))
                        <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
                            <ul>
                                <li class="text-center">{{ session('success') }}</li>
                            </ul>

                        </div>
                    @endif

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{url('/admin/add-profit-store')}}/{{encrypt($id)}}" method="POST">
                                @csrf

                                <div class="col-md-12">
                                    <label for="inputState" class="form-label">Property List</label>
                                    <select id="inputState" class="form-select" name="property">
                                        <option selected disabled>Choose...</option>
                                        @foreach($property as $item)
                                        <option value="{{$item->property_name}}">{{$item->property_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="inputName5" class="form-label">Property Amount</label>
                                    <input type="number" class="form-control" id="inputName5" name="amount" placeholder="Enter Property Amount" value="">
                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Add Profit</button>

                                </div>
                            </form>


                            <!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>
                <div class="col-lg3"></div>
            </div>
        </section>

    </main>
    <!-- End #main -->

   @endsection
