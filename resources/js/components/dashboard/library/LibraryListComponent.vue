<template>

     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Library Master List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>

                                <th>Library Name</th>
                                <th>Address</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(library,i) in libraries" :key="i">
                                <td>{{ library.id }}</td>

                                <td>{{ library.name}}</td>
                                <td>{{ library.address}}</td>

                                <td class="text-center">
                                    <div class="btn-group">

                                        <button type="button" class="btn btn-primary btn-sm" @click="$router.push('/library-books/'+library.id)">
                                             View Books
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

    export default{
        name : 'library-list',

        data(){
            return {
                libraries :[],
            }
        },

        created(){
            this.getLibraries()
        },

        methods : {
            getLibraries(){
                axios.get('/api/get-library-list')
                .then(response=>{
                    this.libraries = response.data

                    console.log(response.data)
                })
            }
        }
    }

</script>
