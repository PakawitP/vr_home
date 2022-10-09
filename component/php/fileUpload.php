<div class="modal fade" id="Modaluploadfile" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalUploadfile">Upload File</h5>
                <button type="button" class="close colseT" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmUploadFile" name="frmUploadFile" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="input-28">Update File</label>
                            <div class="file-loading">
                                <input 
                                id="input-28" 
                                name="input-28"  
                                type="file" 
                                class="file" 
                                initialPreviewAsData: true,
                                data-allowed-file-extensions='["csv"]'    
                                accept=".csv" 
                                >
                            </div>
                        </div>
                    </div>
            </div>
             <div class="modal-footer">
                 <input type="hidden" name="action" id="actionUploadfile">
                 <button type="button" class="btn btn-secondary colseT" data-dismiss="modal" id="colseUploadfile">Close</button>
                 <button type="submit" class="btn btn-primary save" id="saveUpload">Save</button>
                 <button class="btn btn-primary d-none loading" disabled> 
                    <span class="spinner-border spinner-border-sm " ></span>
                    Loading..
                </button>
            </div>
            </form>
        </div>
    </div>
</div>
