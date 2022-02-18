new Vue({
    el:'#app',
    data:{
        discs:[]
    },
    mounted(){
        axios.get("/php-ajax-dischi/php/api/api.php").then((result) => {
            this.discs = result.data;
            console.log(this.discs)
        })
    }
})