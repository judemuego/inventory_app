@extends('home')
@section('middle_content')
<div class="container-fluid">
        <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Employee List</h4>
                    <p class="category"></p>
                    <div class="card-options">
                        <a href="" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="material-icons">add_circle_outline</i></a>
                    </div>
                            
                </div>
                <div class="card-body">
                        <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Employee No.</th>
                                        <th>First Name</th>
                                        <th>Middle Name</th>
                                        <th>Last Name</th>
                                        <th>Address</th>
                                        <th>Home No.</th>
                                        <th>Contact No.</th>
                                        <th>Email</th>
                                        <th>Marital Status</th>
                                        
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>EMP00001</td>
                                        <td>Juan</td>
                                        <td>Perez</td>
                                        <td>Dela Cruz</td>
                                        <td>123 West Park, Bonifacio Global City, Taguig City Philippines, 9999</td>
                                        <td>423 22 11</td>
                                        <td>639 774 5589</td>
                                        <td>juan.perez.dc@yahoo.com</td>
                                        <td>Married</td>
                                        
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>EMP00001</td>
                                        <td>Juan</td>
                                        <td>Perez</td>
                                        <td>Dela Cruz</td>
                                        <td>123 West Park, Bonifacio Global City, Taguig City Philippines, 9999</td>
                                        <td>423 22 11</td>
                                        <td>639 774 5589</td>
                                        <td>juan.perez.dc@yahoo.com</td>
                                        <td>Married</td>
                                        
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>EMP00001</td>
                                        <td>Juan</td>
                                        <td>Perez</td>
                                        <td>Dela Cruz</td>
                                        <td>123 West Park, Bonifacio Global City, Taguig City Philippines, 9999</td>
                                        <td>423 22 11</td>
                                        <td>639 774 5589</td>
                                        <td>juan.perez.dc@yahoo.com</td>
                                        <td>Married</td>
                                        
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-success">
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger">
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                </div>
            </div>
</div>


<!-- Large modal -->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add Employee Information</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <form>
            <div class="form-row">
            <div class="form-group col-md-4">
                <input type="text" class="form-control" id="inputAddress" placeholder="First Name">
            </div>
            <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Middle Name">
            </div>
            <div class="form-group col-md-4">
                    <input type="text" class="form-control" id="inputAddress" placeholder="Last Name">
            </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-3">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2 ml-auto">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputHomePhone" placeholder="Home Phone">
                </div>
                <div class="form-group col-md-6">
                        <input type="text" class="form-control" id="inputMobileNo" placeholder="Mobile No.">
                </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
                    <input type="text" class="form-control" id="inputMarital Status" placeholder="Marital Status">
            </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
</div>

@endsection