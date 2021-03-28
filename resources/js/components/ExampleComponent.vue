<template>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card-columns">
                <div class="card max">
                    <div class="card-body text-center">
                        <img src="/images/default.png" alt="" class="profile-pic">
                        <div class="dropdown">
                            <h3 class="card-title profile-name mt-3">
                                Federico Teixeira
                                <img src="/images/three-dots-vertical.svg" id="dropdownProfileButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </h3>
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis ipsam asperiores iste officia quam accusantium consequatur quae nemo aliquam praesentium.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
