const app = new Vue({
  el: '#app',
  data:{
    songs: [],
    genres: [],
    genreSelected: 'All',
    apiUrl: 'http://localhost/php-ajax-dischi/server.php',
  },
  methods:{
    getApi(){
      axios.get(this.apiUrl, {
        params:{
          genre: this.genreSelected
        }
      })
        .then( response =>{
          this.songs = response.data;

          this.songs.forEach(song => {
            if(!this.genres.includes(song.genre)){
              this.genres.push(song.genre);
              
            }
          });
          console.log(this.genres);
          console.log(this.songs);

        })
        .catch((error) =>{
          console.log(error);
        })
    },
  },
  mounted(){
    this.getApi();
    

  },
  computed:{
  }
})