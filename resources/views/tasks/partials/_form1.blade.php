<form action="javascript:;" class="form-horizontal">
    <!-- TASK HEAD -->
    <div class="form">
        <!-- END TASK HEAD -->
        <!-- TASK TITLE -->
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="title" class="form-control todo-taskbody-tasktitle" placeholder="Task Title...">
            </div>
        </div>
        <!-- TASK DESC -->
        <div class="form-group">
            <div class="col-md-12">
                <textarea class="form-control todo-taskbody-taskdesc" rows="8" name="description" placeholder="Task Description..."></textarea>
            </div>
        </div>
        <!-- END TASK DESC -->
        <!-- TASK DUE DATE -->
        <div class="form-group">
            <div class="col-md-12">
                <div class="input-icon">
                    <i class="fa fa-calendar"></i>
                    <input type="text" class="form-control todo-taskbody-due" name="start_date" placeholder="start Date...">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <div class="input-icon">
                    <i class="fa fa-calendar"></i>
                    <input type="text" class="form-control todo-taskbody-due" name="end_date" placeholder="end Date...">
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="created_by" class="form-control todo-taskbody-created_by" placeholder="created by...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="modified_by" class="form-control todo-taskbody-modified_by" placeholder="modified by...">
            </div>
        </div>
        <!-- TASK TAGS -->
        <div class="form-group">
            <div class="col-md-12">
                <input type="text" name="status" class="form-control todo-taskbody-status" placeholder="status...">
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <input type="checkbox" name="completed" class="form-control todo-taskbody-completed" placeholder="completed...">
            </div>
        </div>
        <!-- TASK TAGS -->
        <div class="form-actions right todo-form-actions">
            {!! Form::submit($submit_text) !!}
        </div>
    </div>
</form>
