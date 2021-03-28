<template>
    <div class="d-flex flex-column align-content-center justify-content-center" >
        <img class="profileBackPic" src='https://www.theagilityeffect.com/app/uploads/2019/09/00_VINCI-ICONOGRAPHIE_GettyImages-1065377816-1280x680.jpg'>
        <div class="d-flex flex-column justify-content-center align-items-center text-center">
            <img :src="'/images/profile_photos/'+ usuario.image" alt="" class="ratio img-responsive img-circle rounded-circle">
            <div class="datos-user">
                <h1 class="text-success font-weight-bold mt-5">{{usuario.name}}</h1>
                <h5 class="text-muted">{{usuario.description}}</h5>

            <div class="mt-4">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteConfirm">
                    Delete
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="deleteConfirm">
                    <div class="modal-dialog modal-dialog-centered modal-sm">
                        <div class="modal-content">

                            <div class="modal-header bg-danger text-light">
                                <h4 class="modal-title">Delete Confirmation</h4>
                            </div>

                            <div class="modal-body">
                                Are you sure you want to delete <span class="text-primary font-weight-bold">{{usuario.name}}</span> ?
                                <div class="text-danger">
                                    This action is not reversible
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                    No, go back
                                </button>

                                <a v-on:click="deleteUser()" class="btn btn-danger" href="/home">
                                    Yes, delete
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-outline-primary ml-2" data-toggle="modal" data-target="#myModal">
                    Edit
                </button>

                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header bg-primary text-light">
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
                                        <textarea maxlength="200" rows="5" type="text" class="form-control" name="description" v-model="usuario.description"></textarea>
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
