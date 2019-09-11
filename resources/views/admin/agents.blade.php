@extends('home')
@section('middle_content')
<div class="container-fluid">
        <div class="card">
                <div class="card-header card-header-info">
                    <h4 class="card-title">Agent List</h4>
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
                                        <th>Agent No.</th>
                                        <th>Email</th>
                                        <th>Username</th>
                                        <th>Password</th>

                                        
                                        <th class="text-right">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>AGT0001</td>
                                        <td>juan.perez.delacruz@yahoo.com</td>
                                        <td>juan.pdc</td>
                                        <td></td>
                                        
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
                                        <td>AGT0002</td>
                                        <td>maria.santos@yahoo.com</td>
                                        <td>maria.santpos</td>
                                        <td></td>
                                        
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
                                        <td>AGT0003</td>
                                        <td>pedro.reyes@yahoo.com</td>
                                        <td>pedro.reyes</td>
                                        <td></td>
                                        
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
            <h5 class="modal-title" id="exampleModalLongTitle">Add Agent</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <form>
            <div class="form-group">
              <input type="text" class="form-control" id="inputUserNo" placeholder="Agent No.">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="inputDescription" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
  </div>
</div>

@endsection