<template>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Users Master List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(user,i) in users" :key="i">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name}}</td>
                                <td> {{ user.email }}</td>
                                <td>{{ user.role.name }}</td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm" @click="$router.push('/add-user/'+user.id)">
                                            <i class="fas fa-edit nav-icon"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm" @click="removeUser(user.id)">
                                             <i class="fas fa-trash nav-icon"></i>
                                        </button>

                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
     </div>

</template>




<script>
    import Swal from 'sweetalert2';
    export default{
        data(){
            return {
                users : [],
            }
        },

        mounted(){
            this.getUsers()
        },
        methods : {
            getUsers(){

                axios.get('/api/get-users')
                .then(response=>{
                    this.users = response.data
                })
            },

            removeUser(user_id){
                Swal.fire({
                    title: 'Are you sure',
                    text: "You want to delete this user?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {

                        axios.delete('/api/delete-user/'+user_id)
                        .then(response=>{
                            Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                            )
                        })
                        this.getUsers()
                    }
                })
            },



        }
    }
</script>
