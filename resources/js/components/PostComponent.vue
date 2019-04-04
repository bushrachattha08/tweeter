<!-- <template>
    <div class="post">
        <div class="media-body">
            {{ post.post}}
            this is tweet
        </div>
        by {{ post.user_id }} @ {{ post.created_at }}
</br>
<button class="glyphicon glyphicon-star"  @click = "likePost(post.id)"
>like</button>&nbsp;&nbsp;

<button class="glyphicon glyphicon-star" @click = "unlikePost(post.id)"
style="background-color: #1da1f2; color:white;">unlike</button>

</div>
</template>

<script>
    export default {
        mounted() {
            console.log('Post Component mounted.')
        },
        methods:{
            likePost(postId){
                 axios.post( '/api/like-post' ,{
                     post_id: postId,
                     like: '1',
                     user_id: currentLoggedInUserUserId
                 })
             .then(function(response){
                 console.log(response);
             })
             .catch(function(error){
                 console.log(error);
             });
         },
         likePost(postId){
              axios.post( '/api/like-post' ,{
                  post_id: postId,
                  like: '0',
                  user_id: currentLoggedInUserUserId
              })
          .then(function(response){
              console.log(response);
          })
          .catch(function(error){
              console.log(error);
          });
      },

        },

        props:['post']
    }
</script> -->

<template>
    <div class="post">
        <div class="post-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">

            {{ post.post }}

        </div>
        <br />

        by - {{ post.user_id}} @ {{ post.created_at }}
        <br/>
        <button :class="{'displaying': likeActive}" class="btn btn-sm likeUnlikeBtn"
        @click="likePost(post.id)" style="background-color: white; "><i class="fa fa-heart-o"></i></button> &nbsp;&nbsp;
        <button :class="{'displaying': unlikeActive}" class="btn btn-sm likeUnlikeBtn"
        @click="unlikePost(post.id)" style="background-color: white; color:red;"><i class="fal fa-heart" style=" color:white;"></i></button>

    <comments-component :postId ="post.id" ></comments-component>

        <div>
        <li><a href="#"><span class="glyphicon glyphicon-comment"></span>

            <form method="post" action="/comment">

                <textarea class="form-control comment-box" name="comment" placeholder="comment here"></textarea>
                <br/>
                <input type="hidden" name="user_id"  value="" />
                <input type="hidden" name="post_id"  value="" />

                <button  @click="likePost(post.id)" class="btn btn-success  btn-sm">comment</button>
            </form>
        </a></li>
        </div>
    </div>


</template>

<script>
export default {
    mounted() {
        console.log('Post Component mounted.')
        if(this.post.liked_by_user == "1"){
            this.unlikeActive = true;
            this.likeActive = false;
        }
    },
    data() {
        return{
            posts: [],
            likeActive: true,
            unlikeActive: false,
            newComment:""
        }
    },
    methods:{
        makeComment(){

                axios.post( '/api/new-comment',{
                    post_id: this.post.id,
                    user_id: currentLoggedInUserUserId,
                    comment: this.newComment
                })

                .then(function (response) {
                    console.log(response);
                })
                .then(function (error) {
                    console.log(error);
                });


        },
        likePost(postId){
            this.likeActive = false;
            this.unlikeActive = true;
            axios.post('/api/like-post',{

                post_id: postId,
                like: "1",
                user_id:currentLoggedInUserUserId
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        },
        unlikePost(postId){
            this.likeActive = true;
            this.unlikeActive = false;
            axios.post('/api/like-post',{
                post_id: postId,
                like: "0",
                user_id:currentLoggedInUserUserId
            })
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error){
                console.log(error);
            });
        }
    },
    props:['post']
}


</script>
