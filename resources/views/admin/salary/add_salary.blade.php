@extends('layouts.admin')
  @section('admin')
        <!-- Topbar -->
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Salary Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="admin">Dashboard</a></li>
              <li class="breadcrumb-item">System</li>
              <li class="breadcrumb-item active" aria-current="page">Salary</li>
            </ol>
          </div>

          <div class="row">
            <div class="col-lg-12 mb-4">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addSalary"
                    id="#addSalaryAmount">Add Salary</button>
                </div>

                

                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Salary</th>
                        <th>Created On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Nasi Padang</td>
                        <td>Nasi Padang</td>
                        <td>Nasi Padang</td>
                        <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#updateSalary"
                    id="#updateSalaryAmount">Update</button>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteSalary"
                    id="#deleteSalaryAmount">Delete</button>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->
        </div>
        <!---Container Fluid-->

      </div>
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
                            

<!--Add Salary Modal Center -->
<div class="modal fade" id="addSalary" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="addSalaryAmount">Add Salary</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                   <input class="form-control  mb-3" type="text" placeholder="Add Salary">
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success">Save</button>
                </div>
              </div>
            </div>
          </div>

<!--Update Salary Modal Center -->
<div class="modal fade" id="updateSalary" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="updateSalaryName">Update Salary</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>
          <div class="modal-body">
              <label class="font-weight-bold">Salary Name</label>
              <input class="form-control  mb-3" type="text" placeholder="Update Name">
        </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-warning">Update</button>
    </div>
  </div>
  </div>
</div>

@endsection