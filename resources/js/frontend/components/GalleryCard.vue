<template>
    <div class="p-2 col-4 gallery" style="width: 24rem;">
        <div class="card">
            <img class="card-img-top" v-bind:src="info.img">
            <div class="title text-white font-weight-bold h5">{{info.title}}</div>
            <div class="card-body">
                <div class="card-text text-muted">{{info.description}}</div>
                <div class="date font-weight-light align-right text-muted"><span class="heart"  v-if="info.featured"></span><span style="float: right;">{{info.date}}</span></div>
            </div>
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
    .title{
        position: absolute;
        top: 140px;
        left: 11px;
    }

    .card-text {
        height: 80px;
        font-size: 15px;
    }
    .heart {
        background-color: #f75a48;
        display: inline-block;
        height: 16px;
        margin: 0 10px;
        position: relative;
        top: 0;
        transform: rotate(-45deg);
        width: 16px;
    }

    .heart:before,
    .heart:after {
        content: "";
        background-color: #f75a48;
        border-radius: 50%;
        height: 16px;
        position: absolute;
        width: 16px;
    }

    .heart:before {
        top: -8px;
        left: 0;
    }

    .heart:after {
        left: 8px;
        top: 0;
    }

    .date{
        height:20px;
    }
</style>
