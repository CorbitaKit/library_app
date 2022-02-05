<template>
    <div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">User Information</h3>
                    </div>
                    <form>
                        <div class="card-body">
                           <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Address">
                                </div>
                           </div>
                            <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password">
                                </div>
                           </div>

                           <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Gender</label>

                                    <select class="form-control">
                                        <option value="Male"> Male </option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Role</label>
                                    <select class="form-control" v-model="user.role">
                                        <option value="Admin"> Admin </option>
                                        <option value="Librarian">Librarian</option>
                                        <option value="User">User</option>
                                    </select>
                                </div>
                           </div>
                           <div class="row" v-if="user.role == 'Librarian'">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Library Name</label>

                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Library Name">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Library Address</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Library Address">
                                </div>
                           </div>
                        </div>

                        <div class="card-footer">
                           <div class="row">
                               <div class="col-md-10"></div>
                               <div class="col-md-2">
                                    <div class="button-group pull-right">
                                        <button type="button" class="btn btn-success">Submit</button>
                                        <button type="button" class="btn btn-danger" @click="$router.back(-1)">Cancel</button>
                                    </div>
                               </div>
                           </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</template>


<script>

    export default{
        data(){
            return{
                user  : {

                    name : '',
                    address : '',
                    gender : '',
                    email : '',
                    password : '',
                    role : '',
                    affiliated_library : '',
                    library_address : ''
                }
            }
        }
    }

</script>
