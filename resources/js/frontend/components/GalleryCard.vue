<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" v-bind:src="info.img">
        <p class="title">{{info.title}}</p>
        <div class="card-body">

            <p class="card-text">{{info.description}}</p>
            <p class="card-text font-weight-light align-rignht">{{info.date}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'GalleryCard',
        props:{
            info: Object
        },
    }
</script>

<style scoped>

</style>
