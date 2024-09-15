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
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Please enter your name">
                        <span class="invalid-feedback"></span>

                    </div>

                    <div class="mb-3">
                        <label class="form-label">Permissions</label>
                        <div>

                            @if ($permissions->count())

                            @foreach ($permissions as $permission)
                            <x-admin.checkbox :label="$permission->name" name="permissions[]"
                                :value="$permission->name" :checked="false" />
                            <br />
                            @endforeach

                            @endif

                        </div>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary" type="button" id="submitForm">
                            Create
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
