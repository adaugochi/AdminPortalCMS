<!--Add Modal -->
  <div class="modal fade" id="modal-giving" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addGiving') }}" enctype="multipart/form-data" id="addGiving">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="item" class="small">Item</label>
                <input type="text" name="item" class="form-control form-control-sm" id="item">

                <label for="amount" class="small">Amount</label>
                <input type="text" name="amount" class="form-control form-control-sm" id="amount">

                <label for="tcode" class="small">Transaction Code</label>
                <input type="text" name="tcode" class="form-control form-control-sm" id="tcode">

                <label for="pdate" class="small">Date of Giving</label>
                <input type="date" name="pdate" class="form-control form-control-sm" id="pdate">

                <label for="mcode" class="small">Member Code</label>
                <input type="text" name="mcode" class="form-control form-control-sm" id="mcode">
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Giving
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
  <div class="modal fade" id="modal-editgiving" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('giving') }}" enctype="multipart/form-data" id="updategiving">
      
              {{ csrf_field() }}
              <input type="hidden" id="id" value="" name="id">
          		<div class="form-group">
                <label for="item" class="small">Item</label>
                <input type="text" name="item" class="form-control form-control-sm" id="item">

                <label for="amount" class="small">Amount</label>
                <input type="text" name="amount" class="form-control form-control-sm" id="amount">

                <label for="tcode" class="small">Transaction Code</label>
                <input type="text" name="tcode" class="form-control form-control-sm" id="tcode">

                <label for="pdate" class="small">Date of Giving</label>
                <input type="date" name="pdate" class="form-control form-control-sm" id="pdate">

                <label for="mcode" class="small">Member Code</label>
                <input type="text" name="mcode" class="form-control form-control-sm" id="mcode">
              </div>

          		<button type="submit" class="btn btn-info"> 
          			Update Giving
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
            <form method="POST" action="{{ url('del-giving') }}" enctype="multipart/form-data" id="delgiving">
      
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