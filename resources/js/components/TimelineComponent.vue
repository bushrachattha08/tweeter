// TimelineComponent.vue

<template>
    <div class="col-md-8 posts">
        <p v-if="!posts.length">No posts</p>
        <div class="media" v-for="post in posts" :key="post.id">
            <img class="mr-3" />
            <div class="media-body">
                <div class="mt-3">
                    <a href="#">{{ post.user.name }}</a>
                </div>
                <p>{{ post.body }}</p>
            </div>
        </div>
    </div>
</template>
<script>
import Event from '../event.js';

export default {
    data() {
        return {
            posts: [],
            post: {}
        }
    },
    mounted() {
        Event.$on('added_tweet', (post) => {
            this.posts.unshift(post);
        });
    }
}
</script>
