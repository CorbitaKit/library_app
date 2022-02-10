<template>

     <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Book Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Book Title</th>
                                <th>Author</th>
                                <th>Volume</th>


                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ book.isbn}}</td>
                                <td>{{ book.title }}</td>
                                <td> {{ book.author }} </td>
                                <td>{{ book.volume }}</td>


                                <td class="text-center">
                                    <div class="btn-group">

                                        <button type="button" class="btn btn-primary btn-sm">
                                             Borrow
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
        props : ['library_id'],

        data(){
            return {
                book : []
            }
        },

        created(){
            this.getBook()
        },

        methods : {
            getBook(){
                axios.get('/api/get-library-book/'+this.library_id)
                .then(response=>{
                    this.book = response.data
                })
            }
        }


    }
</script>
