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

<!--
<template>
<div class="post">
<div class="post-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
{{ post.post }}
</div>
<br />

by - {{ post.user_id}} @ {{ post.created_at }}
<br/>
<button :class="{'displaying': likeActive}" class="btn btn-md likeUnlikeBtn"
@click="likePost(post.id)" style="background-color:white; color:white; font-size:30px;"><i class="fa fa-heart" style="color:#2DB2F4;"></i></button> &nbsp;&nbsp;
<button :class="{'displaying': unlikeActive}" class="btn btn-md likeUnlikeBtn"
@click="unlikePost(post.id)" style="background-color: white; color:white;"><i class="fa fa-heart" style="color:red; font-size:30px;"></i></button>
<comments-component :postId= "post.id"></comments-component>

<div class="row" style="text-align:right;">


<form name="comment-form" method="post" action="comments" style="text-align:right;">

<textarea name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
<br />
<input type="hidden" name="post_id" value=" " />
<div class="align-right" style="text-align:right">
<button class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white;">Comment</button>
</div>
</form>
</div>
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


</script> -->

<template>
<div class="post">

<div class="tweet-content" style="font-size: 20px; color:#3B3B54; font-weight:bold; font-style: italic;">
{{ post.post }}

</div>
<br />

by - {{ post.user_id}} @ {{ post.created_at }}
<br/>
<button :class="{'displaying': likeActive}" class="btn btn-sm likeUnlikeBtn" @click="likePost(post.id)" style="background-color:white; color:white; font-size:30px;"><i class="fa fa-heart" style="color:#2DB2F4;"></i></button> &nbsp;&nbsp;
<button :class="{'displaying': unlikeActive}" class="btn btn-sm likeUnlikeBtn" @click="unlikePost(post.id)" style="background-color: white; color:white;"><i class="fa fa-heart" style="color:red; font-size:30px;"></i></button>
<comments-component :postId= "post.id"></comments-component>

<div class="row">

<form name="comment-form" method="post" action="comments">

<textarea name="comment" class="form-control" placeholder="comment here" style="text-align:right"></textarea>
<br />
<input type="hidden" name="post_id" value=" " />
<div class="align-right" style="text-align:right">
<button class="btn btn-twitter btn-sm align-right" style="background-color: #1da1f2; color:white;">Comment</button>
</div>
</form>
</div>
</div>
</div>
</template>

<script>
export default {
mounted() {
console.log('Post Component mounted.')
},
data() {
return{
likeActive: true,
unlikeActive: false,
newComment: ""
}
},
methods:{
makeComment(){
// alert(this.tweet.id);
console.log(this.post);
axios.post('/api/new-comment',{
post_id: this.post.id,
user_id: currentLoggedInUserUserId,
comment:this.newComment
})
.then(function (response) {


console.log(response);
})
.catch(function (error){
console.log(error);
});


location.reload();
},

likePost(postId){
this.likeActive = false;
this.unlikeActive = true;
axios.post('/api/post-likes',{

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
axios.post('/api/post-likes',{
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
