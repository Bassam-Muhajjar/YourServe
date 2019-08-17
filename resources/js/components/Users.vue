<template>
    <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users Table</h3>

                        <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <button type="button" class="btn btn-block btn-info text-white bold" data-toggle="modal" data-target="#AddNew">
                                Add New <i class="fas fa-user-plus"></i></button>
                        </div>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover">
                        <thead>
                            <tr>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Type</th>
                            <th>Registered At</th>
                            <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="user in users" :key="user.id">
                            <td><img  class="profile-user-img img-fluid img-circle" style="max-width:40px; border:none" src="http://127.0.0.1:8000/img/profile.png"></td>
                            <td>{{user.name}}</td>
                            <td>{{user.email}}</td>
                            <td>{{user.phone}}</td>
                            <td>{{user.type | upText}}</td>
                            <td>{{user.created_at | dateFormat}}</td>
                            <td>
                                <a href="#" title="Edit"><i class="fas fa-edit text-green"></i></a>
                                <span class="d-lg-inline-flex"></span>
                                <a href="#" title="Delete"><i class="fas fa-trash-alt text-red"></i></a>
                                <span class="d-lg-inline-flex"></span>
                                <a href="#" title="Ban"><i class="fas fa-user-slash"></i></a>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div><!-- end row -->


               <!-- Modal -->
                <div class="modal fade" id="AddNew" tabindex="-1" role="dialog" aria-labelledby="AddNewLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="AddNewLabel">
                            Add New User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                     
                            <!-- form start -->
                            <form @submit.prevent="CreateUser" role="form">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input type="text" v-model="form.name" class="form-control" id="Name" placeholder="Enter Name" 
                                    :class="{ 'is-invalid': form.errors.has('name') }">
                                    <has-error :form="form" field="name"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input type="email" v-model="form.email" class="form-control" id="email" placeholder="Enter Email"
                                    :class="{ 'is-invalid': form.errors.has('email') }">
                                    <has-error :form="form" field="email"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password</label>
                                    <input type="password" v-model="form.password" class="form-control" id="Password" placeholder="Password"
                                    :class="{ 'is-invalid': form.errors.has('password') }">
                                    <has-error :form="form" field="password"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="Phone">Phone</label>
                                    <input type="text" v-model="form.phone" class="form-control" id="Phone" placeholder="Enter Phone"
                                    :class="{ 'is-invalid': form.errors.has('phone') }">
                                    <has-error :form="form" field="phone"></has-error>
                                </div>
                                <div class="form-group">
                                    <label for="Type">Type Of Account</label>
                                    <select v-model="form.type" class="form-control" id="type"
                                    :class="{ 'is-invalid': form.errors.has('type') }">
                                    <has-error :form="form" field="type"></has-error>
                                        <option value="">Type</option>
                                        <option value="admin">Admin</option>
                                        <option value="customer">Customer</option>
                                        <option value="agent">Agent</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Upload Photo</label>
                                    <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="exampleInputFile">
                                        <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                    </div>
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
const axios = require('axios');

    export default {
        data(){
            return{
                users:{},

                form: new Form({
                id:'',
                name:'',
                email:'',
                password:'',
                phone:'',
                avatar:'',
                type:'',
                created_at:''
                })
            }
        },

        methods:{
            getUsers(){
                axios.get('api/users').then((data) => ( this.users = data.data));
            },
            CreateUser(){
                this.$Progress.start();
                this.form.post('api/users');

                // custom event to reload list
                Fire.$emit('ReLoad');

                // close modal
                $('#AddNew').modal('hide');

                // sweetalert toast
                Toast.fire({
                    type: 'success',
                    title: 'User created successfully'
                });

                this.$Progress.finish();
            }
        },

        created(){
            this.getUsers();
            // listeners for ('ReLoad') event to reload table after create user
            Fire.$on('ReLoad',()=>{
                 this.getUsers();
            })
        }
    }
</script>
