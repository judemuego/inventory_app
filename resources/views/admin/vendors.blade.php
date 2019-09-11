@extends('home')
@section('middle_content')
<div class="container-fluid">
        <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Vendors List</h4>
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
                                        <th>Vendor No.</th>
                                        <th>Vendor Name</th>
                                        <th>Address</th>
                                        <th>Mobile No.</th>
                                        <th>Notes</th>

                                        
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>VEN0001</td>
                                        <td>Ronnie Malabanan</td>
                                        <td>Quezon City, Philippines</td>
                                        <td>0911 554 8787</td>
                                        <td>Vendor Notes/Description Sample</td>
                                        
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
                                        <td class="text-center">2</td>
                                        <td>VEN0002</td>
                                        <td>Lester Soledad</td>
                                        <td>Navotas City, Philippines</td>
                                        <td>0933 215 2214</td>
                                        <td>Vendor Notes/Description Sample</td>
                                        
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
                                        <td class="text-center">3</td>
                                        <td>VEN0003</td>
                                        <td>Mark Sierra</td>
                                        <td>Bulacan City, Philippines</td>
                                        <td>0961 232 2299</td>
                                        <td>Vendor Notes/Description Sample</td>
                                        
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add Vendor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <form>
            <div class="form-group">
              <input type="text" class="form-control" id="inputVendorNo" placeholder="Vendor No.">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputVendorName" placeholder="Vendor Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputAddress" placeholder="Address">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" id="inputMobileNo" placeholder="Mobile No.">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
  </div>
</div>

@endsection