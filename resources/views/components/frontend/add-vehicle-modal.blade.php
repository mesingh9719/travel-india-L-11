<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Vehicle</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="{{ route("vehicle.store") }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>RC Number</label>
                                    <input type="text" class="form-control" id="rc_number"
                                           name="rc_number" value=""
                                           placeholder="RC Number" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>RC Image</label>
                                    <input type="file" class="form-control" id="rc_image"
                                           name="rc_image"
                                           placeholder="RC Number" required>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="document">Upload Vehicle Inside Pictures</label>
                                    <div class="needsclick dropzone" id="document-dropzone">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="document">Upload Vehicle Outside Pictures</label>
                                    <div class="needsclick dropzone" id="document-dropzone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-warning">Save changes</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

    </div>
</div>
