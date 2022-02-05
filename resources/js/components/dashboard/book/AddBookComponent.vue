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
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Book Title">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Author</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Book Author">
                                </div>
                           </div>
                            <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">ISBN</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter ISBN">
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Volume</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Volume">
                                </div>
                           </div>

                           <div class="row">
                                <div class="form-group col-6" >
                                    <label for="exampleInputEmail1">Genre</label>

                                    <select class="form-control">
                                        <option value="Romance"> Romance </option>
                                        <option value="Sci-fi">Sci-fi</option>
                                    </select>
                                </div>
                                <div class="form-group col-6">
                                    <label for="exampleInputPassword1">Library</label>
                                    <v-select :options="['Canada', 'United States']" multiple></v-select>
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

            }
        }
    }

</script>
