<template>
    <div> 
    <button class="btn btn-primary" @click="followUser" v-text="buttonText">Follow</button>
    </div>
</template>

<script>
    export default {
        props: ['userId', 'follows'],

        mounted() {
            console.log('Component mounted.')
        },

        data: function () {
            return {
                status: this.follows,
            }
        },

        methods: {
            followUser() {
                axios.post('/follow/' + this.userId)
                .then(response => {
                    console.log(response.data);
                }) ;
            }
        },

        // computed: {
        //     buttonText() {
        //         return (this.status) ? 'Unfollow' : 'Follow';
        //     }
        // }
    }
</script>
