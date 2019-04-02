@extends('home')
@section('content')

<div class="card shadow mb-8 col-sm-8">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add Clients Car Info</h6>
    </div>
    <div class="card-body">

            <form>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Car Name</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" name="car_name"  placeholder="Enter Car Name">
                    </div>


                    <div class="form-group">
                      <label for="exampleInputPassword1"> Car Lcience NO </label>
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Car Lcience">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1"> Drivers Phn NO </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Drivers Phn NO">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1"> Car Weight </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Car Weight">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Example file input</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>


    </div>
  </div>


@endsection
