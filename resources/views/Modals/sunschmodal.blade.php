<!--Add Modal -->
  <div class="modal fade" id="modal-sunsch" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addSundaySchool') }}" enctype="multipart/form-data" id="addSundaySchool">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="" class="small">Minister Name</label>
                <input type="text" name="minister" class="form-control form-control-sm" id="name">

                <label for="" class="small">Topic</label>
                <input type="text" name="topic" class="form-control form-control-sm" id="topic">

                <label for="" class="small">Content</label>
                <textarea name="content" class="form-control form-control-sm" id="content"></textarea>

                <label for="" class="small">Total Attendees</label>
                <input type="number" name="total" class="form-control form-control-sm" id="total">

                <label for="date" class="small">Date & Time</label>
                <input type="datetime-local" name="datetime" class="form-control form-control-sm" id="datetime">
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Sunday School
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
  <div class="modal fade" id="modal-editsunsch" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('sunsch') }}" enctype="multipart/form-data" id="updateSunSch">
      
              {{ csrf_field() }}
          		<div class="form-group">
                <input type="hidden" id="id" value="" name="id">

                <label for="" class="small">Minister Name</label>
                <input type="text" name="minister" class="form-control form-control-sm" id="name">

                <label for="" class="small">Topic</label>
                <input type="text" name="topic" class="form-control form-control-sm" id="topic">

                <label for="" class="small">Content</label>
                <textarea name="content" class="form-control form-control-sm" id="content"></textarea>

                <label for="" class="small">Total Attendees</label>
                <input type="number" name="total" class="form-control form-control-sm" id="total">

                <label for="date" class="small">Date & Time</label>
                <input type="datetime-local" name="datetime" class="form-control form-control-sm" id="datetime">
          		</div>

          		<button type="submit" class="btn btn-info"> 
          			Update Sunday School
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
            <form method="POST" action="{{ url('del-sunsch') }}" enctype="multipart/form-data" id="delSunSch">
      
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