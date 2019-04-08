var searchBar = Vue.component('search-bar', {
    data(){
        return {
            criteria: null,
            apiKey: '2ZYObCqX35tqtzwthqNmR1x288S8ZUgm',
            limit: 10,
            gifs: [],
            dropdownOpen: false,
            selectedGif: ''
        }
    },
    template: `
        <div class="search-bar">
            <div class="input-group">
                <input type="text"
                    @keyup.enter="doSearch"
                    @focus="doFocus"
                    v-model="criteria"
                    class="form-control"
                    placeholder="Search for GIFs" />

                <div class="input-group-append">
                    <button @click="doSearch" class="btn btn-primary">Search</button>
                </div>
            </div>
            <div class="dropdown" :class="{ 'show' : dropdownOpen }">
                <div class="dropdown-menu">
                    <a
                        href="#"
                        v-for="gif in gifs"
                        class="dropdown-item"
                        @click="selectGif(gif.images)">

                        <img :src="gif.images.fixed_width.url" />
                    </a>
                </div>
            </div>
            <div v-show="selectedGif" class="card selectedGifPreview">

                <div class="card-body">
                    <img :src="selectedGif" />
                    <br />
                    <a href="#" class="btn btn-sm btn-danger" @click="selectedGif=''"''''>x</a>

                </div>
            </div>
        </div>
    `,
    methods: {
        doSearch() {

            if(!this.criteria){
                 return false;
            }

            this.gifs = [];
            this.dropdownOpen = false;


            axios.get('http://api.giphy.com/v1/gifs/search?q=' + this.criteria + '&api_key=' + this.apiKey + '&limit=' + this.limit)
                .then((response) => {

                    console.log(response);


                    this.loadGifs(response.data.data);
                });
        },

        loadGifs(data) {

            this.gifs = data;

            this.dropdownOpen = true;
        },

        selectGif(gif) {

            console.log(gif);
            this.selectedGif = gif.fixed_height.url;

            this.dropdownOpen = false;
        },
        doFocus(){
            if(this.criteria) this.dropdownOpen = true;
        }
    }
});

var vue = new Vue({
    el: '#app'
});


// axios.get(" https://api.giphy.com/v1/gifs/search?api_key=EweW9ZdCRE3J5EFfM13nmwu5CdHSsroK&q=funny&limit=5&offset=0&rating=G&lang=en  ")
// .then((response) => {
//     axios
//   console.log(response.data);
// });
