<!--Add Modal -->
  <div class="modal fade" id="modal-department" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{url('addDepartment') }}" enctype="multipart/form-data" id="addDepartment">
              {{ csrf_field() }}
          		<div class="form-group">
          			<label for="department" class="small">Department Name</label>
          			<input type="text" name="department" class="form-control form-control-sm">
          		</div>

          		<button class="btn btn-info" type="submit" id="department"> 
          			Add New
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
  <div class="modal fade" id="modal-editdept" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('department') }}" enctype="multipart/form-data" id="updateDepartment">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="department" class="small">Department Name</label>
                <input type="hidden" id="id" value="" name="id">
                <input type="text" name="department" class="form-control form-control-sm" id="dept">
              </div>

              <button type="submit" class="btn btn-info"> 
                Update Department
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
    <div class="modal-dialog modal-sm">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-info">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('del-department') }}" enctype="multipart/form-data" id="delDepartment">
      
              {{ csrf_field() }}
              <div class="form-group">
                <input type="hidden" id="id" value="" name="id">    
              </div>
              <i class="fas fa-question-circle" style="font-size: 40px;"></i>
              <p class="text-center">Are you sure you want to delete this?</p>
              <button type="submit" class="btn btn-info"> 
                 Yes, Delete
              </button>
            </form>
        </div>
      </div>
      
    </div>
  </div>