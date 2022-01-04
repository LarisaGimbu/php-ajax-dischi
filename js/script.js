const app = new Vue({
  el: '#app',
  data:{
    songs: [],
  },
  methods:{
    getApi(){
      axios.get('./db/database.php')
        .then( r =>{
          this.songs = r.data.response;
          console.log(r);
          

        })
        .catch((error) =>{
          console.log(error);
        })
    },
  },
  mounted(){
    this.getApi();
    console.log(this.songs);

  },
  computed:{
  }
})