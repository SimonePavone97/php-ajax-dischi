var app = new Vue ({
    el: '#app',
    data:{
        albums: []
    },
    created(){
        axios.get('http://localhost/php-ajax-dischi/milestone2/partials/integer.php')
        .then((res) => {
            console.log(res.data);
            this.albums = res.data;
          })
        
    }
})