
// apro istanza vue
var app = new Vue({
  el: '#root',
  data: {
    hotels: []
  },

  mounted: function () {

    axios.get('data.php')
      .then(res => {
        this.hotels = res.data;
    });
  }
  //eseguo chiamata axios e copio nell'array hotels
})
