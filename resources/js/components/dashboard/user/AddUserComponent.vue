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
                                    <input type="text" :class="[errors.name ?  'is-invalid' : '', 'form-control']" v-model="user.name" placeholder="Enter Name">
                                    <span v-if="errors.name">{{ errors.name[0]}}</span>
                                </div>

                                 <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" :class="[errors.email ?  'is-invalid' : '', 'form-control']" v-model="user.email" placeholder="Enter email">
                                    <span v-if="errors.email">{{ errors.email[0]}}</span>
                                </div>

                           </div>
                            <div class="row">

                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" :class="[errors.password ?  'is-invalid' : '', 'form-control']" v-model="user.password" placeholder="Enter Password">
                                    <span v-if="errors.password">{{ errors.password[0]}}</span>
                                </div>
                                 <div class="form-group col-6">
                                    <label>Role</label>
                                    <select :class="[errors.role ?  'is-invalid' : '', 'form-control']" v-model="user.role">
                                        <option v-for="role in roles" :key="role.id" :value="role.id"> {{ role.name  }} </option>

                                    </select>
                                    <span v-if="errors.role">{{ errors.role[0]}}</span>
                                </div>
                           </div>


                           <div class="row" v-if="user.role == '3'">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Library Name</label>

                                    <input type="text" class="form-control" placeholder="Enter Library Name" v-model="user.affiliated_library">
                                </div>
                                <div class="form-group col-6">
                                    <label>Library Address</label>
                                    <input type="text" class="form-control" placeholder="Enter Library Address" v-model="user.library_address">
                                </div>
                           </div>
                        </div>

                        <div class="card-footer">
                           <div class="row">
                               <div class="col-md-10"></div>
                               <div class="col-md-2">
                                    <div class="button-group pull-right">
                                        <button type="button" class="btn btn-success" v-if="! user_id" @click="createNewUser">Submit</button>
                                        <button type="button" class="btn btn-success" v-else  @click="updateUser">Update</button>
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
    import Swal from 'sweetalert2'
    export default{
        data(){
            return{
                user  : {

                    name : '',

                    email : '',
                    password : '',
                    role : '',
                    affiliated_library : '',
                    library_address : ''
                },

                roles : [],
                errors : [],
            }
        },

        props : ['user_id'],

        created(){
            this.getRoles()

            if(this.user_id){
                this.getUser()
            }
        },

        methods : {
            getRoles(){
                axios.get('/api/get-roles')
                .then(response=>{
                    this.roles = response.data
                })
            },

            createNewUser(){
                axios.post('/api/create-new-user',this.user)
                .then(response=>{
                    Swal.fire({
                        title : 'Success!',
                        text : 'User created successfully!',
                        icon : 'success',
                        button : 'Okay!'
                    })

                    this.$router.push('/user-list')
                })
                .catch(err=>{
                    this.errors = err.response.data.errors

                    Swal.fire({
                        title: 'Error!',
                        text: 'Please check all the fields',
                        icon: 'error',
                        confirmButtonText: 'Okay!'
                    })



                })
            },

            getUser(){
                axios.get('/api/get-user/'+this.user_id)
                .then(response=>{
                    this.user = response.data
                })
            },

            updateUser(){
                axios.put('/api/update-user/'+this.user_id,this.user)
                .then(response=>{
                    Swal.fire({
                        title : 'Success!',
                        text : 'User created successfully!',
                        icon : 'success',
                        button : 'Okay!'
                    })

                    this.$router.push('/user-list')
                })
            }
        }
    }

</script>
