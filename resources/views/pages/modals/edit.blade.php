<!-- Modal -->
<form action="{{ route('post.post-update') }}" method="POST">
@csrf
<div class="modal fade" id="postModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-uppercase" id="modal_title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <input type="hidden" id="post_id" name="post_id">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Slug</label>
                    <input type="text" id="slug" name="slug" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Content</label>
                    <input type="text" id="content" name="content" class="form-control">
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Priority</label>
                    <select name="priority" id="priority" class="form-control">
                        <option value="">Select Priority Type</option>
                        <option value="normal">Normal</option>
                        <option value="important">Important</option>
                    </select>
                    
                </div>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-dark px-5">Save</button>
        </div>
      </div>
    </div>
</div>
</form>
