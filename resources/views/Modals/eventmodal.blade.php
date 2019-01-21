<!--Add Modal -->
  <div class="modal fade" id="modal-event" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addEvent') }}" enctype="multipart/form-data" id="addEvent">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="event" class="small">Event Name</label>
                <input type="text" name="event" class="form-control form-control-sm" id="name">

                <label for="date" class="small">Event Date</label>
                <input type="text" name="date" class="form-control form-control-sm" id="date">
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Event
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
  <div class="modal fade" id="modal-editevent" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('event') }}" enctype="multipart/form-data" id="updateEvent">
      
              {{ csrf_field() }}
          		<div class="form-group">
                <input type="hidden" id="id" value="" name="id">

                <label for="event" class="small">Event Name</label>
          			<input type="text" name="event" class="form-control form-control-sm" id="name">

                <label for="date" class="small">Event Date</label>
                <input type="text" name="date" class="form-control form-control-sm" id="date">
          		</div>

          		<button type="submit" class="btn btn-info"> 
          			Update Event
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
            <form method="POST" action="{{ url('del-event') }}" enctype="multipart/form-data" id="delEvent">
      
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