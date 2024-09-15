<div class="offcanvas offcanvas-end" tabindex="-1" id="create" aria-labelledby="offcanvasEndLabel">
    <div class="offcanvas-header">
        <h2 class="offcanvas-title" id="offcanvasEndLabel">Create Role</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <form  id="createForm" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 col-xl-12">


                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control"  name="title"
                            placeholder="Please enter your title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Description</label>
                        <textarea id="tinymce-mytextarea" type="text" class="form-control"  name="description"
                            placeholder="Please enter your description"></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Thumbnail</label>
                        <input type="file" class="form-control"  name="thumbnail"
                            placeholder="Please enter your thumbnail">
                    </div>


                    <x-admin.select
                                label="status"
                                name="status"
                                :options="['pending','published']"
                            />



                    <p>Load users here</p>
                    <p>Load categories here</p>











                    <div class="mb-3">
                        <button class="btn btn-primary" type="button" id="submitForm">
                            create
                        </button>
                    </div>
                </div>
            </div>

        </form>














        <div class="mt-3">
            <button class="btn btn-primary" type="button" data-bs-dismiss="offcanvas">
                Close
            </button>
        </div>
    </div>
</div>
