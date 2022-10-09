<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabelT"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="startdate">Start date</label>
                        <div class="input-group date" id="startPicker" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" id="startdate" name="startdate" data-target="#startPicker" required />
                            <div class="input-group-append" data-target="#startPicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="enddate">End date</label>
                        <div class="input-group date" id="endPicker" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" id="enddate" name="enddate" data-target="#endPicker" required />
                            <div class="input-group-append" data-target="#endPicker" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="action" id="action">
                <input type="hidden" name="codeFilter" id="codeFilter">
                <button type="button" class="btn btn-secondary" id="close" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="showData">Show Data</button>
            </div>

            </form>
        </div>
    </div>
</div>