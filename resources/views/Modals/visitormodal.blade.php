<!--Add Modal -->
  <div class="modal fade" id="modal-visitor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addVisitor') }}" enctype="multipart/form-data" id="addVisitor">
      
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fname" class="small">First Name</label>
                    <input type="text" name="fname" class="form-control form-control-sm" id="fname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lname" class="small">Last Name</label>
                    <input type="text" name="lname" class="form-control form-control-sm" id="lname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="gender" class="small">Gender</label>
                    <input type="text" name="gender" class="form-control form-control-sm" id="gender">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="by" class="small">Invited By</label>
                    <input type="text" name="by" class="form-control form-control-sm" id="by">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="pnum" class="small">Phone Number</label>
                    <input type="text" name="pnum" class="form-control form-control-sm" id="pnum">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email" class="small">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="" class="small">Age</label>
                    <select class="form-control form-control-sm" name="age" id="age">
                      <option>Elder</option>
                      <option>Youth</option>
                      <option>Teenager</option>
                      <option>Kid</option>
                      <option>Infant</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bdate" class="small">Birth Date</label>
                    <input type="date" name="bdate" class="form-control form-control-sm" id="bdate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="code" class="small">Member Code</label>
                    <input type="text" name="code" class="form-control form-control-sm" id="code">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="address" class="small">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" id="address"/>
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Visitor
              </button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>

<!--Edit Modal -->
  <div class="modal fade" id="modal-editvisitor" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('visitor') }}" enctype="multipart/form-data" id="updatevisitor">
      
              {{ csrf_field() }}
              <input type="hidden" id="id" value="" name="id">
          		<div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="fname" class="small">First Name</label>
                    <input type="text" name="fname" class="form-control form-control-sm" id="fname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lname" class="small">Last Name</label>
                    <input type="text" name="lname" class="form-control form-control-sm" id="lname">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="gender" class="small">Gender</label>
                    <input type="text" name="gender" class="form-control form-control-sm" id="gender">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="by" class="small">Invited By</label>
                    <input type="text" name="by" class="form-control form-control-sm" id="by">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="pnum" class="small">Phone Number</label>
                    <input type="text" name="pnum" class="form-control form-control-sm" id="pnum">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email" class="small">Email</label>
                    <input type="email" name="email" class="form-control form-control-sm" id="email">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="" class="small">Age</label>
                    <select class="form-control form-control-sm" name="age" id="age">
                      <option>Elder</option>
                      <option>Youth</option>
                      <option>Teenager</option>
                      <option>Kid</option>
                      <option>Infant</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="bdate" class="small">Birth Date</label>
                    <input type="date" name="bdate" class="form-control form-control-sm" id="bdate">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="code" class="small">Member Code</label>
                    <input type="text" name="code" class="form-control form-control-sm" id="code">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="address" class="small">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" id="address"/>
              </div>

          		<button type="submit" class="btn btn-info"> 
          			Update Visitor
				      </button>
          	</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  <!--Delete Modal -->
  <div class="modal fade" id="modal-del" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('del-visitor') }}" enctype="multipart/form-data" id="delVisitor">
      
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" id="id" value="" name="id">    
              </div>
              <p class="text-center">Are you sure you want to delete this?</p>
              <button type="submit" class="btn btn-warning"> 
                 Yes, Delete
              </button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>