const app = new Vue({
  el: '#app',
  data:{
    songs: [],
  },
  methods:{
    getApi(){
      axios.get('http://localhost/php-ajax-dischi/server.php')
        .then( response =>{
          this.songs = response.data;
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