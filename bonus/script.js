function init() {
  axios
   .get('data.php')
   .then(res => {

     var data = res['data'];

     data.forEach(ad => {

       console.log(ad);

     });

   });
}
init();
