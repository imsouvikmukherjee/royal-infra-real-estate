@extends('admin.layout.main')

@Section('main-container')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Add Property</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('admin_dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin_properties')}}">Properties</a></li>
                    <li class="breadcrumb-item active">Add Property</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-10">

                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Add Property Form</h5>


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

                            <!-- Multi Columns Form -->
                            <form class="row g-3" action="{{route('add_property_store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label">Property Category</label>
                                    <select id="inputState" class="form-select" name="property_category">
                                        <option selected disabled>Choose...</option>
                                        <option value="1" {{old('property_category') == '1' ? 'selected' : ''}}>Residential Properties</option>
                                        <option value="2" {{old('property_category') == '2' ? 'selected' : ''}}>Commercial Properties</option>
                                        <option value="3" {{old('property_category') == '3' ? 'selected' : ''}}>Mixed-use Properties</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="inputName5" class="form-label">Property Name</label>
                                    <input type="text" class="form-control" name="property_name" value="{{old('property_name')}}" id="inputName5" placeholder="Enter Property Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail5" class="form-label">Property Address</label>
                                    <input type="text" class="form-control" name="property_address" value="{{old('property_address')}}" id="inputEmail5" placeholder="Enter Property Address">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputAddress5" class="form-label">Property Contact Details</label>
                                    <input type="text" class="form-control" name="property_contact" value="{{old('property_contact')}}" id="inputAddres5s" placeholder="Enter Property Contact">
                                </div>

                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Property Map</label>
                                    <input type="url" class="form-control" id="inputCity" name="property_map" value="{{old('property_map')}}"  placeholder="Paste Google Map URL Here (Only Iframe src link)">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Upload Property Image</label>
                                    <input type="file" class="form-control" id="inputCity" name="property_image" placeholder="Paste Google Map URL Here">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Property Price</label>
                                    <input type="number" class="form-control" id="inputCity" name="price" value="{{old('price')}}" placeholder="Enter Property Price">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label">Upload Property Video</label>
                                    <input type="file" class="form-control" id="inputCity" name="property_video" placeholder="Paste Google Map URL Here">
                                </div>

                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Property Description</label>
                                    <textarea class="form-control" id="editor" rows="5" name="property_description" placeholder="Enter description " cols="7">{{old('property_description')}}</textarea>

                                </div>

                                <div class="text-center mt-5">
                                    <button type="submit" class="btn btn-primary">Add Property</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                </div>
                            </form>
                            <!-- End Multi Columns Form -->

                        </div>
                    </div>

                </div>
                <div class="col-lg-1"></div>
            </div>
        </section>

    </main>
    <!-- End #main -->

    @endsection
