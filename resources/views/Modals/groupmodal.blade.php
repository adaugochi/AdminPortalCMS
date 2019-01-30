<!--Add Modal -->
  <div class="modal fade" id="modal-group" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('addGroup') }}" enctype="multipart/form-data" id="addGroup">
              {{ csrf_field() }}
          		<div class="form-group">
          			<label for="group" class="small">Group Name</label>
          			<input type="text" name="group" class="form-control form-control-sm" required>
          		</div>

          		<button class="btn btn-info" type="submit" id="group"> 
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
  <div class="modal fade" id="modal-editgroup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('group') }}" enctype="multipart/form-data" id="updateGroup">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="group" class="small">Group Name</label>
                <input type="hidden" id="id" value="" name="id">
                <input type="text" name="group" class="form-control form-control-sm" id="group">
              </div>

              <button type="submit" class="btn btn-info"> 
                Update Group
              </button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>