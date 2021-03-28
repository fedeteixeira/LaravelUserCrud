<template>
    <div>
        <div class="mt-5 d-flex flex-column justify-content-center align-items-center">
            <img :src="'/images/profile_photos/'+ usuario.image" alt="" class="ratio img-responsive img-circle rounded-circle">
            <h1 class="text-success font-weight-bold ml-3 mt-5">{{usuario.name}}</h1>
            <h5 class="w-75 text-center text-muted">{{usuario.description}}</h5>

            <div class="mt-4">
                <button class="btn btn-danger">Delete</button>
                <button class="btn btn-success">Update</button>
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
            loggear(objeto){
                console.log(objeto);
            },
        }
    }

</script>
