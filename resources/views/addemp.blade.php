@extends("theme")

@section("content")

<div class="container">
    <div class="row">
        <div class="col col-12 col-sm-4 col-mg-4 col-lg-4 col-xl-4 col-xxl-4"></div>
        <div class="col col-12 col-sm-4 col-mg-4 col-lg-4 col-xl-4 col-xxl-4">
        <centre><h3>Add Employee</h3></centre>
        <table class="table">
        <tr>
            <td>Name</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Employee Code</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Designation</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Salary</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>D.O.B</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Place</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Pincode</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td>Phone no</td>
            <td><input type="text" class="form-control"></td>
        </tr>
        <tr>
            <td></td>
            <td><button class="btn btn-outline-primary">submit</button></td>
        </tr></table>
        </div>
    </div>
</div>

@endsection