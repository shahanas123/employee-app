@extends("theme")

@section("content")

<div class="container">
    <div class="row">
    <div class="col col-12 col-sm-4 col-mg-4 col-lg-4 col-xl-4 col-xxl-4"></div>
    <div class="col col-12 col-sm-4 col-mg-4 col-lg-4 col-xl-4 col-xxl-4">
    <centre><h3>Search Employee</h3></centre>
    <table class="table">
    <tr>
        <td>Employee Code</td>
        <td><input type="text" class="form-control"></td>
    </tr>
    <tr>
        <td></td>
        <td><button class="btn btn-outline-primary">search</button></td>
    </tr>
    </table></div>
    </div>
</div>

@endsection