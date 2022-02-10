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
                                <th>Status</th>
                                <th>Return Date</th>
                                <th>Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(book, i) in books" :key="i">
                                <td>{{ book.isbn}}</td>
                                <td>{{ book.title }}</td>
                                <td> {{ book.author }} </td>
                                <td>{{ book.volume }}</td>
                                <td v-if="book.library_books.is_borrowed">
                                    OUT
                                </td>
                                <td v-else>IN</td>
                                <td v-if="book.library_books.is_borrowed">{{ book.library_books.return_date}}</td>
                                <td v-else>{{ book.library_books.return_date}}</td>
                                <td>
                                    <button v-if="! book.library_books.is_borrowed" type="button" class="btn btn-primary btn-md" data-toggle="modal" data-target="#modal-default" @click="book_id = book.id">Borrow</button>
                                    <button v-else type="button" class="btn btn-success btn-md" @click="returnBook(book.id)">Return</button>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Please Enter return date</h4>
                    </div>
                    <div class="modal-body">
                        <input type="date" class="form-control" v-model="return_date">
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal" ref="closeButton">Close</button>
                        <button type="button" class="btn btn-primary" @click="borrowBook()">Save changes</button>
                    </div>
                </div>
            <!-- /.modal-content -->
            </div>
        <!-- /.modal-dialog -->
        </div>
    </div>

</template>

<script>

    import Swal from 'sweetalert2';
    export default{
        data(){
            return{
                books : [],
                return_date : '',
                book_id : 0
            }


        },

        props : ['library_id'],

        created(){
            this.getBooks()
        },

        methods : {
            getBooks(){
                axios.get('/api/get-library-books/'+this.library_id)
                .then(response=>{
                    this.books = response.data[0].books
                })
            },

            borrowBook(){

                if(! this.return_date){
                    Swal.fire({
                        title : 'error',
                        text : 'Please select return date',
                        icon : 'error',
                        button : 'Okay'
                    })

                    return
                }

                var data = {
                    'book_id' : this.book_id,
                    'return_date' : this.return_date,
                    'library_id' : this.library_id
                }

                axios.put('/api/borrow-book',data)
                .then(response=>{
                    Swal.fire({
                        title : 'success',
                        text : 'Book borrowed successfully!',
                        icon : 'success',
                        button : 'Okay'
                    })

                    this.getBooks()
                    const elem = this.$refs.closeButton
                    elem.click()


                })
            },

            returnBook(book_id){
                var data = {
                    'book_id' : book_id,
                    'library_id' : this.library_id
                }

                axios.put('/api/return-book',data)
                .then(response=>{
                    Swal.fire({
                        title : 'success',
                        text : 'Book returned successfully!',
                        icon : 'success',
                        button : 'Okay'
                    })

                    this.getBooks()
                })
            }

        }
    }
</script>
