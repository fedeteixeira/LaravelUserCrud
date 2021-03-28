<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card-columns">
                <div class="card"  v-for="usuario in usuarios.data" :key="usuario.id">
                    <div class="card-body text-center">
                        <img :src="'/images/profile_photos/'+ usuario.image" alt="" class="ratio img-responsive img-circle rounded-circle">
                        <div class="dropdown">
                            <h3 class="card-title profile-name mt-3">
                                <a v-on:click="showProfile(usuario.id)" href="#">{{usuario.name}}</a>
                                <img src="/images/three-dots-vertical.svg" id="dropdownProfileButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#" v-on:click="deleteUser(usuario.id)">Delete</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </h3>
                        </div>
                        <div class="description">
                            {{usuario.description}}                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</template>

<script>
    export default {
        data(){
            return {
                usuarios: [],
            }
        },
        mounted() {
            this.retrieveUsers();
        },

        methods: {
            retrieveUsers(){
                axios.get('/user')
                .then(response => {
                    this.usuarios  = response.data
                });
            },

            deleteUser(user_id){
                axios.delete('/user/'+user_id)
                .then(this.retrieveUsers());
            },

            showProfile(user_id){
                axios.get('/user/'+user_id);
            },

            loggear(data){
                console.log(data);
            }
        }
    }
</script>
