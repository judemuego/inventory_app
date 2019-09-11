@extends('home')
@section('middle_content')
<div class="container-fluid">
        <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Inventory</h4>
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
                                        <th>Item No.</th>
                                        <th>Description</th>
                                        <th>Alternate No.</th>
                                        <th>Manufacturer</th>
                                        <th>Model</th>
                                        <th>Category</th>
                                        
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>ITM0002</td>
                                        <td>Item Description 2</td>
                                        <td>Alternate No. 000002</td>
                                        <td>Manufacturer Two</td>
                                        <td>Model - 2202 Sample</td>
                                        <td>Category 2</td>
                                        
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
                                        <td>ITM0003</td>
                                        <td>Item Description 3</td>
                                        <td>Alternate No. 000003</td>
                                        <td>Manufacturer One</td>
                                        <td>Model - 2203 Sample</td>
                                        <td>Category 3</td>
                                        
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add Vehicles</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <form>
            <div class="form-group">
              <input type="text" class="form-control" id="inputUserNo" placeholder="Vehicle No.">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="inputEmail" placeholder="Plate No.">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputDescription" placeholder="Description">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="inputPassword" placeholder="Vehicle Type">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
</div>

@endsection