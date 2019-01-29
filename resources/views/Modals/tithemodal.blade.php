<!--Add Modal -->
  <div class="modal fade" id="modal-tithe" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ url('addTithe') }}" enctype="multipart/form-data" id="addTithe">
      
              {{ csrf_field() }}
              <div class="form-group">
                <label for="amount" class="small">Amount</label>
                <input type="text" name="amount" class="form-control form-control-sm" id="amount">

                <label for="tcode" class="small">Transaction Code</label>
                <input type="text" name="tcode" class="form-control form-control-sm" id="tcode">

                <label for="pdate" class="small">Payment Date</label>
                <input type="date" name="pdate" class="form-control form-control-sm" id="pdate">

                <label for="mcode" class="small">Member Code</label>
                <input type="text" name="mcode" class="form-control form-control-sm" id="mcode">
              </div>

              <button type="submit" class="btn btn-info"> 
                Add Tithe
              </button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
o
<!--Edit Modal -->
  <div class="modal fade" id="modal-edittithe" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button> 
        </div>
        <div class="modal-body">
          	<form method="POST" action="{{ url('tithe') }}" enctype="multipart/form-data" id="updateTithe">
      
              {{ csrf_field() }}
              <input type="hidden" id="id" value="" name="id">
          		<div class="form-group">
                <label for="amount" class="small">Amount</label>
                <input type="text" name="amount" class="form-control form-control-sm" id="amount">

                <label for="tcode" class="small">Transaction Code</label>
                <input type="text" name="tcode" class="form-control form-control-sm" id="tcode">

                <label for="pdate" class="small">Payment Date</label>
                <input type="date" name="pdate" class="form-control form-control-sm" id="pdate">

                <label for="mcode" class="small">Member Code</label>
                <input type="text" name="mcode" class="form-control form-control-sm" id="mcode">
              </div>

          		<button type="submit" class="btn btn-info"> 
          			Update Tithe
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
            <form method="POST" action="{{ url('del-tithe') }}" enctype="multipart/form-data" id="deltithe">
      
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