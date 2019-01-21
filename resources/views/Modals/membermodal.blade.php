<!--Add Modal -->
  <div class="modal fade" id="modal-member" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addMember') }}" enctype="multipart/form-data" id="addMember">
      
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
                    <label for="group" class="small">Group Name</label>
                    <select name="group" class="form-control" id="groups" required>
                      <option disabled selected>select group</option>
                      
                        @foreach($groups as $group)
                          <option value="{{ $group->id }}">
                            {{ $group->name }} 
                          </option>
                        @endforeach
                     
                    </select>
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
                    <label for="dept" class="small">Department Name</label>
                    <select name="department" class="form-control" id="departments" required>
                      <option disabled selected>select department</option>
                      
                        @foreach($departments as $department)
                          <option value="{{ $department->id }}">
                            {{ $department->name }} 
                          </option>
                        @endforeach
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="" class="small">Age</label>
                    <select class="form-control form-control-sm" name="age" id="age">
                      <option>--choose age group--</option>
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
              </div>

              <div class="form-group">
                <label for="address" class="small">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" id="address"/>
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Member
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
  <div class="modal fade" id="modal-editmember" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('member') }}" enctype="multipart/form-data" id="updateVisitor">
      
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
                    <label for="group" class="small">Group Name</label>
                    <select name="group" class="form-control" id="groups" required>
                      <option disabled selected>select group</option>
                      
                        @foreach($groups as $group)
                          <option value="{{ $group->id }}">
                            {{ $group->name }} 
                          </option>
                        @endforeach
                     
                    </select>
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
                    <label for="dept" class="small">Department Name</label>
                    <select name="department" class="form-control" id="departments" required>
                      <option disabled selected>select department</option>
                      
                        @foreach($departments as $department)
                          <option value="{{ $department->id }}">
                            {{ $department->name }} 
                          </option>
                        @endforeach
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="" class="small">Age</label>
                    <select class="form-control form-control-sm" name="age" id="age">
                      <option>--choose age group--</option>
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
              </div>

              <div class="form-group">
                <label for="address" class="small">Address</label>
                <input type="text" name="address" class="form-control form-control-sm" id="address"/>
              </div>

          		<button type="submit" class="btn btn-info"> 
          			Update Member
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
            <form method="POST" action="{{ url('del-member') }}" enctype="multipart/form-data" id="delMember">
      
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