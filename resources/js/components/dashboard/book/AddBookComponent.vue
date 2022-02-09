<template>
    <div>
        <br>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Book Information</h3>
                    </div>
                    <form>
                        <div class="card-body">
                           <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Book Title</label>
                                    <input type="text" :class="[errors.title ? 'is-invalid' : '', 'form-control']" v-model="book.title" id="exampleInputEmail1" placeholder="Enter Book Title">
                                    <span v-if="errors.title">{{ errors.title[0]}}</span>

                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Author</label>
                                    <input type="text" :class="[errors.author ? 'is-invalid' : '', 'form-control']" v-model="book.author" id="exampleInputPassword1" placeholder="Enter Book Author">
                                     <span v-if="errors.author">{{ errors.author[0]}}</span>
                                </div>
                           </div>
                            <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">ISBN</label>
                                    <input type="text" :class="[errors.isbn ? 'is-invalid' : '', 'form-control']" v-model="book.isbn" id="exampleInputEmail1" placeholder="Enter ISBN">
                                     <span v-if="errors.isbn">{{ errors.isbn[0]}}</span>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Volume</label>
                                    <input type="text" :class="[errors.volume ? 'is-invalid' : '', 'form-control']" v-model="book.volume" id="exampleInputPassword1" placeholder="Enter Volume">
                                     <span v-if="errors.volume">{{ errors.volume[0]}}</span>
                                </div>
                           </div>

                           <div class="row">

                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Library</label>
                                    <v-select :options="libraries" multiple v-model="book.libraries" :class="[errors.title ? 'is-invalid' : '']"></v-select>
                                     <span v-if="errors.libraries">{{ errors.libraries[0]}}</span>
                                </div>
                           </div>

                        </div>

                        <div class="card-footer">
                           <div class="row">
                               <div class="col-md-10"></div>
                               <div class="col-md-2">
                                    <div class="button-group pull-right">
                                        <button type="button" class="btn btn-success" @click="addBook">Submit</button>
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
                book : {
                    title : '',
                    author : '',
                    isbn : '',
                    volume :null,
                    genre :  '',
                    libraries : []
                },

                libraries : [],
                errors : [],
            }
        },

        created(){
            this.getLibraries()
        },

        methods : {
            getLibraries(){
                axios.get('/api/get-libraries')
                .then(response=>{
                    this.libraries = response.data
                })
            },

            addBook(){
                axios.post('/api/create-book',this.book)
                .then(response=>{
                    Swal.fire({
                        title : 'Success!',
                        text : 'User created successfully!',
                        icon : 'success',
                        button : 'Okay!'
                    })

                    this.$router.push('/book-list')
                }).catch(err=>{

                    this.errors = err.response.data.errors
                })
            }
        }

    }

</script>
