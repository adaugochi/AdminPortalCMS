<!--Add Modal -->
  <div class="modal fade" id="modal-announcement" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addAnnouncement') }}" enctype="multipart/form-data" id="addAnnouncement">
      
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title" class="small">Title</label>
                    <input type="text" name="title" class="form-control form-control-sm" id="title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="code" class="small">Member Code</label>
                    <input type="text" name="code" class="form-control form-control-sm" id="code">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="small">Spoken By</label>
                    <input type="text" name="spoken" class="form-control form-control-sm" id="spoken">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date" class="small">Date & Time</label>
                    <input type="datetime-local" name="date" class="form-control form-control-sm" id="date">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="des" class="small">Description</label>
                <textarea name="des" class="form-control form-control-sm" id="des"></textarea>
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Announcement
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
  <div class="modal fade" id="modal-editannounce" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('announcement') }}" enctype="multipart/form-data" id="updateAnnouncement">
      
              {{ csrf_field() }}
              <input type="hidden" id="id" value="" name="id">
          		<div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="title" class="small">Title</label>
                    <input type="text" name="title" class="form-control form-control-sm" id="title">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="code" class="small">Member Code</label>
                    <input type="text" name="code" class="form-control form-control-sm" id="code">
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="" class="small">Spoken By</label>
                    <input type="text" name="spoken" class="form-control form-control-sm" id="spoken">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date" class="small">Date & Time</label>
                    <input type="datetime-local" name="date" class="form-control form-control-sm" id="date">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label for="des" class="small">Description</label>
                <textarea name="des" class="form-control form-control-sm" id="des"></textarea>
              </div>

          		<button type="submit" class="btn btn-info"> 
          			Update Announcement
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
            <form method="POST" action="{{ url('del-announce') }}" enctype="multipart/form-data" id="delAnnouncement">
      
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