<template>
   <div class="modal fade" id="modal-default" style="display: none;">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">New Product</h4>
              </div>
              <div class="modal-body">
              <form role="form">
             
                <div class="form-group">
                  <label for="name">Email address</label>
                  <input class="form-control" id="name" placeholder="Enter name" type="text">
                </div>
                <div class="form-group">
                  <label for="details">Details</label>
                  <textarea class="form-control" rows="3" placeholder="Enter details" id="details"></textarea>
                </div>
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
 </div>       

  <script >
  	export default {
       mounted() {
            console.log('Component mounted.')
        }
        
       },
    }
  </script>                  
</template>