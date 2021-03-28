<template>
    <div>
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center text-center">
            <img :src="'/images/profile_photos/'+ usuario.image" alt="" class="ratio img-responsive img-circle rounded-circle">
            <h1 class="text-success font-weight-bold ml-3 mt-5">{{usuario.name}}</h1>
            <h5 class="w-75 text-muted">{{usuario.description}}</h5>

            <div class="mt-4">
                <a v-on:click="deleteUser()" class="btn btn-danger" href="/home">
                    Delete
                </a>
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    Edit
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Edit User</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" v-model="usuario.name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>
                                    <div class="col-md-6">
                                        <textarea maxlength="200" type="text" class="form-control" name="description" v-model="usuario.description"></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button v-on:click="updateUser()" type="button" class="btn btn-primary" data-dismiss="modal">Save changes</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>

    export default {
        props: ['user_no_json'],

        data(){
            return{
                usuario : {},
            }
        },

        mounted() {
            this.usuario = JSON.parse(this.user_no_json);
        },

        methods: {

            deleteUser(){
                axios.delete('/user/'+this.usuario.id);
            },

            updateUser(){
                console.log(this.usuario);
                axios.put('/user/'+this.usuario.id,this.usuario);
            },

            loggear(objeto){
                console.log(objeto);
            },
        }
    }

</script>
