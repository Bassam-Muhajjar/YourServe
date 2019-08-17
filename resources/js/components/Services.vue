<template>
    <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Services Table</h3>

                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <button type="button" class="btn btn-block btn-info text-white bold" data-toggle="modal" data-target="#AddNew">
                                Add New <i class="fas fa-plus"></i></button>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>183</td>
                            <td>John Doe</td>
                            <td>Fix my Electrical</td>
                            <td>11-7-2014</td>
                            <td><span class="tag tag-success">Approved</span></td>
                            <td>
                                <a href="#" title="Edit"><i class="fas fa-edit text-green"></i></a>
                                <span class="d-lg-inline-flex"></span>
                                <a href="#" title="Delete"><i class="fas fa-trash-alt text-red"></i></a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>

                <!-- Modal -->
                <div class="modal fade" id="AddNew" tabindex="-1" role="dialog" aria-labelledby="AddNewLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddNewLabel">Add New Service</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                                                    <!-- form start -->
                            <form role="form">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="Title">Title</label>
                                    <input type="text" class="form-control" id="Title" placeholder="Enter Title">
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label>
                                    <textarea class="form-control" id="Description" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="Date">Date</label>
                                    <input type="Date" class="form-control" id="Date" placeholder="Enter Date">
                                </div>
                                <div class="form-group">
                                    <label for="Time">Time</label>
                                    <input type="time" class="form-control" id="Time" placeholder="Enter Time">
                                </div>
                                <div class="form-group">
                                    <label for="Type">Type Of Service</label>
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option>Type</option>
                                        <option>Electrical</option>
                                        <option>Mechanical</option>
                                        <option>Piping</option>
                                    </select>
                                </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                    </div>
                    </div>
                </div>
                </div>
    </div>
</template>

<script>
    export default {
        name: 'main-app'
    }
</script>
