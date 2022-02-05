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
                                <th>Genre</th>
                                <th>Volume</th>

                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Update software</td>
                                <td>
                                    <div class="progress progress-xs">
                                    <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger">55%</span></td>
                                <td><span class="badge bg-danger">55%</span></td>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-success btn-sm">
                                            <i class="fas fa-edit nav-icon"></i>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm">
                                             <i class="fas fa-trash nav-icon"></i>
                                        </button>
                                        <button type="button" class="btn btn-primary btn-sm">
                                             <i class="fas fa-eye nav-icon"></i>
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
        name : 'book-list'
    }

</script>
