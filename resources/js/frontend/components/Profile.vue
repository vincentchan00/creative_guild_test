<template>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div>
                    <img v-bind:src="'/'+photographer.profile_picture">
                </div>
                <div>{{photographer.name}}</div>
                <div><div class="card-title">phone</div>{{photographer.phone}}</div>
                <div><div class="card-title">bio</div>{{photographer.bio}}</div>
                <div><div class="card-title">email</div>{{photographer.email}}</div>
            </div>
        </div>
        <gallery-card v-for="info in photographer['album'] "
                      :key="info.id"
                      v-bind:info="info"></gallery-card>
    </div>

</template>

<script>
    import GalleryCard from './GalleryCard';
    export default {
        name:'profile',
        components: {
            GalleryCard,
        },
        data() {
            return {
                photographer: null
            }
        },
        async created() {
            let res = await axios.get('/api/landscapes/get');
            this.photographer = res.data.data;
        }
    }
</script>

<style scoped>

</style>
