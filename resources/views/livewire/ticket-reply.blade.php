<div>
               
<button wire:click='ShowComment' class="btn btn-primary btn-lg mb-4"> Reply on Ticket <i class="fa fa-telegram"></i></button>
              


@if($ShowComment)
<div class="row justify-content-center">
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-body">
                    <div class="btn-group">
                      <button class="btn btn-light form-floating"> <!-- Add the "btn-group" class to the div -->
                        <select class="form-select" id="floatingSelectGrid">
                          <option selected="">Move Ticket</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </button>
                    </div>
                    <div class="btn-group">
                      <button class="btn btn-light form-floating"> <!-- Add the "btn-group" class to the div -->
                        <select class="form-select" id="floatingSelectGrid">
                          <option selected="">Select Action</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                      </button>
                    </div>

                    <div class="btn-group">
                      <button class="btn btn-light form-floating"> <!-- Add the "btn-group" class to the div -->
                        <select class="form-select" id="floatingSelectGrid">
                          <option selected="">Ticket Status</option>
                          <option value="1">Done</option>
                          <option value="2">Pending</option>
                          <option value="3">in Progress</option>
                          <option value="3">Resolved</option>
                        </select>
                      </button>
                    </div>

                  </div>
                  <div class="col-sm-12">
                    <textarea class="form-control" rows="3" placeholder="Type your reply in here..."></textarea>
                  </div>
                  <div class="card-footer text-end">
                    <div class="col-sm-9 offset-sm-3">
                      <button class="btn btn-primary me-3" type="submit">Submit</button>
                      <input class="btn btn-light" type="reset" value="Cancel">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endif
</div>

