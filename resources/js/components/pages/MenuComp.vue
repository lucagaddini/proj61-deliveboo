<template>
  <div>
    <!-- Immagine di testa (ristorante) -->
    <div class="jumbo debug">
        sono un jumbotron
    </div>
    <!-- /Immagine di testa (ristorante) -->

    <!-- Navbar per navigare fra le portate -->
    <nav class="container">
        sono una navbar
    </nav>
    <!-- /Navbar per navigare fra le portate -->

    <!-- Main con piatti e riepilogo -->
    <main class="container d-flex justify-content-between flex-column">
        <div class="row">
            <!-- Lista prodotto -->
            <section class="sx col-7">Lista prodotti</section>
            <!-- /Lista prodotto -->

            <!-- Riepilogo acquisti -->
            <section class="dx col-5">Recap pagamento</section>
            <!-- /Riepilogo acquisti -->
        </div>
    </main>
    <!-- /Main con piatti e riepilogo -->

  </div>
</template>

<script>
//

export default {
    name: 'MenuComp',

    components:{
        props: Number,
    },

    data(){
        return{
            itemApiUrl: "http://127.0.0.1:8000/api/categories",
            // Il props va inserito qui al posto del current user!
            current_user: 1,
            current_menu: [],
        }
    },

    methods:{
        getApi(url){
            axios.get(url)
            .then(res=>{
                // console.log(res.data.menu);
                res.data.menu.forEach(el => {
                    if(el.user_id == this.current_user){
                        this.current_menu.push(el);
                        // console.log(this.current_menu);
                    }
                });
            })
        },
    },

    mounted(){
        this.getApi(this.itemApiUrl, this.user_id);
    },
}
</script>

<style scoped lang="scss">
.debug{
    background-color: rgba($color: green, $alpha: 0.2);
    border: 1px solid black;
}

// .jumbo{
//     // background-image:;
// }
</style>
