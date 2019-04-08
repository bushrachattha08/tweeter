<!--
<template>
    <div>
    <div >
    {{this.comments}}
    </div>
</div>

</template>

<script>
export default {
    mounted() {
        this.initialComments();
        console.log('comment Component mounted.')
    },
    data() {
        return{
            comments: [],

        }
    },
    methods:{
        initialComments(){
            // alert();
            axios.get("/api/Post-comments/ + this.postId")

            .then( (response) =>{
                // console.log(response);
                this.comments=response.data.data;
                // this.lastPostId = response.data.data[((response.data.data).length -1)]["id"];

            });
        }

    },
    props:['post_id']
}


</script> -->
<template>

<div class="comment">
<div class="comment-component">
{{ this.comments }}
<!-- <comment-component  v-for = "comment in comments" :comment = "comment" ></comment-component> -->
</div>
</div>
</template>

<script>
export default {
mounted() {

this.initialComments();
console.log('comment Component mounted.')
},
data() {
return{
comments: [],
}
},
methods:{
initialComments(){

axios.get("/api/post-comments/" + this.postId)
.then((response) => {
this.comments = response.data.data;

});

}
},
props:['postId']
}
</script>
