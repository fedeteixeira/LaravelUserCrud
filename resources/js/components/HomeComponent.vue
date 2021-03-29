<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card-columns">
                <div class="card mt-2 mr-2 ml-2 mb-2"  v-for="usuario in usuarios.data" :key="usuario.id">
                    <div class="card-body text-center shadow p-3">
                        <img :src="'/images/profile_photos/'+ usuario.image" alt="" class="ratio img-responsive img-circle rounded-circle">
                        
                        <h3>
                            <a class="card-title mt-3 profile-name text-success" 
                            :href="'user/'+usuario.id">{{usuario.name}}</a>
                        </h3>

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

            loggear(data){
                console.log(data);
            }
        }
    }
</script>
