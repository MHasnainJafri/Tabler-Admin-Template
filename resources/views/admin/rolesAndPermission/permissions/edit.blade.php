  {{-- =====================================================CANVAS --}}
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEndLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasEndLabel">Edit Role</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">



        <form  id="editForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-xl-12">

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" data-attr="name" name="name"
                            placeholder="Please enter your name">
                    </div>

                  
                    <div class="mb-3">
                        <button class="btn btn-primary" type="button" id="EditForm">
                            Update
                        </button>
                    </div>
                </div>
            </div>

        </form>














        <div class="mt-3">
            <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close offcanvas
            </button>
        </div>
    </div>
</div>
