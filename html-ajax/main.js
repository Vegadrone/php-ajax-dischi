constapp = new Vue({
    el: '#app',
    data: {
       disks:[]
    },
    methods:{
        getDisks() {
            axios.get('http://localhost/PHP/php-ajax-dischi/html-ajax/controller.php')
            .then(result => {
                this.disks = result.data;
                console.log(this.disks);
            })
            .catch((error)=>{
                console.error(error);
            })
        },
    },

    created: function(){
        this.getDisks();
    }
})
