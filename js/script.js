new Vue({
    el:'#app',
    data:{
        discs:[]
    },
    mounted(){
        axios.get("http://localhost:8888/php-ajax-dischi/php/database/db.php").then((result) => {
            this.discs = result.data;
            console.log(this.discs)
        })
    }
})