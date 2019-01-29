<!--Add Modal -->
  <div class="modal fade" id="modal-wkact" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addWkAct') }}" enctype="multipart/form-data" id="addWkAct">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="wkact" class="small">Name</label>
                <input type="text" name="wkact" class="form-control form-control-sm" id="name">

                <label for="day" class="small">Day</label>
                <input type="text" name="day" class="form-control form-control-sm" id="day">

                <label for="time" class="small">Time</label>
                <input type="text" name="time" class="form-control form-control-sm" id="time">
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Week Activity
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
  <div class="modal fade" id="modal-editwkact" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('weekly-act') }}" enctype="multipart/form-data" id="updateWkAct">
      
              {{ csrf_field() }}
          		<div class="form-group">
                <input type="hidden" id="id" value="" name="id">

                <div class="form-group">
                <label for="wkact" class="small">Name</label>
                <input type="text" name="wkact" class="form-control form-control-sm" id="name">

                <label for="day" class="small">Day</label>
                <input type="text" name="day" class="form-control form-control-sm" id="day">

                <label for="time" class="small">Time</label>
                <input type="text" name="time" class="form-control form-control-sm" id="time">
              </div>
          		</div>

          		<button type="submit" class="btn btn-info"> 
          			Update Weekly Activity
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
            <form method="POST" action="{{ url('del-weeklyact') }}" enctype="multipart/form-data" id="delWkAct">
      
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