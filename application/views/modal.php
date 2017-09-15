    <div id="createTaskModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="transition:0.2s;">
                    <form id="taskCreateForm">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" style="resize:none;" required></textarea>
                        </div>
                        <div class="form-group" style="overflow-x:none;">
                            <label>Deadline:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="due_date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="time" class="form-control" name="due_time" value="<?php echo date('h:i'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tags:</label>
                            <input type="text" id="taskCreateTag" class="form-control"/>
                            <div id="taskCreateTagList" class="list-group" style="color:#000000;">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color">Color: </label>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#FFFFFF;" data-color="#FFFFFF" data-accent="#000000"><i style="color:#000000;" class="glyphicon glyphicon-ok"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#2196f3;" data-color="#2196f3" data-accent="#FFFFFF"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#f44336;" data-color="#f44336" data-accent="#FFFFFF"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#4caf50;" data-color="#4caf50" data-accent="#FFFFFF"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#ffeb3b;" data-color="#ffeb3b" data-accent="#000000"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#ff9800;" data-color="#ff9800" data-accent="#000000"><i style="color:#000000;"></i></button>
                            <input type="hidden" name="color" value="#ffffff" />
                            <button type="button" id="taskCreate" class="btn btn-default pull-right" data-dismiss="modal">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="updateTaskModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="transition:0.2s;">
                    <form id="taskUpdateForm">
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea class="form-control" rows="5" name="description" style="resize:none;" required></textarea>
                        </div>
                        <div class="form-group" style="overflow-x:none;">
                            <label>Deadline:</label>
                            <div class="row">
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="due_date" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                                <div class="col-md-4">
                                    <input type="time" class="form-control" name="due_time" value="<?php echo date('h:i'); ?>">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tags:</label>
                            <input type="text" id="taskUpdateTag" class="form-control"/>
                            <div id="taskUpdateTagList" class="list-group" style="color:#000000;">

                            </div>
                        </div>
                        <div class="form-group">
                            <label for="color">Color: </label>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#ffffff;" data-color="#ffffff"><i style="color:#000000;" class="glyphicon glyphicon-ok"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#2196f3;" data-color="#2196f3"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#f44336;" data-color="#f44336"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#4caf50;" data-color="#4caf50"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#ffeb3b;" data-color="#ffeb3b"><i style="color:#000000;"></i></button>
                            <button type="button" class="btn btn-default btn-circle btn-color" style="background-color:#ff9800;" data-color="#ff9800"><i style="color:#000000;"></i></button>
                            <input type="hidden" name="color" value="#ffffff" />
                            <button type="button" id="taskUpdate" class="btn btn-default pull-right" data-dismiss="modal">Update Task</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="viewTaskModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body" style="transition:0.2s;">
                    <form id="taskViewForm">
                        <div class="dropdown">
                            <a class="dropdown-toggle pull-right" data-toggle="dropdown"><span class="glyphicon glyphicon-option-vertical"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="#updateTaskModal" data-toggle="modal" data-dismiss="modal">Edit Task</a></li>
                                <li><a href="#" class="task-mark-done">Mark as Done</a></li>
                            </ul>
                        </div>
                        <h1 id="title" class="task-title"><b></b></h1>
                        <p id="description" class="task-description pre-scrollable" style="overflow-x:auto; overflow-y:auto;"><b></b></p>
                        <div class="container" style="overflow-x:none;">
                            <div class="row">
                                <!-- <div class="col-md-6"><h2>Deadline:</h2></div> -->
                                <div class="col-md-8"><h4 id="date"></h4></div>
                                <div class="col-md-4"><h4 id="time"></h4></div>
                            </div>
                        </div>
                        <h4 id="tags"></h4>
                        <div class="form-group">
                            <label>Notes:</label>
                            <input type="text" id="taskCreateNote" class="form-control"/>
                            <div id="taskCreateNoteList" class="list-group" style="color:#000000;">

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="searchTaskModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="text" id="taskSearch" />
                    <div id="taskSearchQuery" class="list-group">

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->