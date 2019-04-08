
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
// Vue.component('form-component', require('./components/FormComponent.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('post-component', require('./components/PostComponent.vue').default);
Vue.component('comments-component', require('./components/CommentsComponent.vue').default);
Vue.component('timeline-component', require('./components/TimelineComponent.vue'));
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// const app = new Vue({
//     el: '#app'
// });


const test = new Vue({
    el: '#postsWrapper',
    data(){
        return{
            posts: [],
            lastPostId: 0,
            lastCallTime:0
        }
    },
    methods:{
        initialPosts(){
            axios.get("/api/PostsByNumber/5")

            .then( (response) =>{
                // console.log(response);
                this.posts=response.data.data;
                this.lastPostId = response.data.data[((response.data.data).length -1)]["id"];

            });

        },
        scroll(){
            // alert();
       window.onscroll = () =>{
           if((window.innerHeight + window.scrollY) >= (document.body.offsetHeight -0.5)){
              if((new Date).getTime() > (this.lastCallTime + 5000)){

               axios.get("/api/postsbynumberfromstartpoint/5/" + this.lastPostId)

               .then( (response) =>{
                  var data = response.data.data;
                  for (var i = 0; i < data.length; i++) {
                      this.posts.push(data[i]);
                      this.lastPostId =data[i]["id"];
                  }

                   // console.log(this.posts);
                   //  console.log(response.data.data);
                   // this.posts=response.data.data;

               });
          this.lastCallTime = (new Date).getTime();
       }
   }
   };
   }
    },

    mounted(){
        this.initialPosts();
        this.scroll();
    }

});
// window.onscroll = function(ev) {
//     if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
//        console.log("bottom");
//        alert("bottom");
//     }
// };
