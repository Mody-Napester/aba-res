<div class="modal fade" id="confirm_delete_modal" tabindex="-1" role="dialog" aria-labelledby="confirm_delete_modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="" id="confirm-delete-form" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <div class="modal-header">
                    <h4 class="modal-title">{{ trans('confirm_delete.Delete_item') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{ trans('confirm_delete.Are_you_sure_you_want_to_delete_this_for_ever') }}</label>
                    </div>
                </div>
                <div class="modal-footer text-right">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('confirm_delete.Cancel') }}</button>
                    <button type="submit" class="btn btn-primary">{{ trans('confirm_delete.Delete') }}</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
