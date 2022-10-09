<!-- model change password  -->

<div class="modal fade nonPrint" id="ModalPassword" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="frmpass" name="frmpass" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="UserName">UserName</label>
                            <input type="text" class="form-control" id="UserNamePass" name="UserNamePass" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="New_Password">New Password</label>
                            <input type="password" class="form-control" id="newPasswordPass" name="newPassword" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Confirm_Password">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                        </div>
                    </div>

                    <div class="form-row" id="passwordChange">
                        <div class="form-group col-md-6">
                            <label for="Old_Password">Old Password</label>
                            <input type="password" class="form-control" id="oldPassword" name="oldPassword">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <input type="hidden" name="aID" id="aID">
                <input type="hidden" name="oldpass" id="oldpass">
                <input type="hidden" name="action" id="actionpass">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" id="saveDataPassword">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
