<template>

     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Book Master List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Volume</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(book, i) in books" :key="i">
                                <td>{{ book.isbn}}</td>
                                <td>{{ book.title }}</td>
                                <td> {{ book.author }} </td>
                                <td>{{ book.volume }}</td>


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
        name : 'book-list',

        data(){
            return{
                books : []
            }
        },

        created(){
            this.getBooks()
        },

        methods : {
            getBooks(){
                axios.get('/api/get-books')
                .then(response=>{
                    this.books = response.data
                })
            },


        }
    }

</script>
