<template>
    <div class="my-4">
        <div class="row profile main p-4 ">
            <div class="icon">
                <img v-bind:src="'/'+photographer.profile_picture" class="w-100 rounded-circle">
            </div>
            <div class="col w-50">
                <h1 class="font-weight-bold">{{photographer.name}}</h1>
                <div>
                    <div class="font-weight-bold text-secondary">Bio</div>
                    <div class="text-muted">{{photographer.bio}}</div>
                </div>
            </div>
            <div class="col w-25">
                <div>
                    <div class="font-weight-bold text-secondary">Phone</div>
                    <div style="color:#e661a6;">
                        {{photographer.phone}}
                    </div>
                </div>
                <div>
                    <div class="font-weight-bold text-secondary">Email</div>
                    <div style="color:#e661a6;">
                        {{photographer.email}}
                    </div>
                </div>
            </div>
        </div>
        <div class="row main m-2 no-gutters">
            <gallery-card v-for="info in photographer['album'] "
                          :key="info.id"
                          v-bind:info="info"></gallery-card>
        </div>

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
    .main{
        justify-content: center;
    }

    .profile.main{
        place-items:center;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 0.25rem;
    }
    .profile .icon {
         width: 20%;
    }

</style>
