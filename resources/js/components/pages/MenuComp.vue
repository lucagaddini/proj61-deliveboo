<template>
  <div>
    <!-- Immagine di testa (ristorante) -->
    <section class="debug jumbo d-flex align-items-end">
        <div class="debug jumbo-info container p-2">
            <h1>Pizzeria di Vercingetorige della turingia inferiore</h1>
            <h5>Categoria e indirizzo</h5>
        </div>
    </section>
    <!-- /Immagine di testa (ristorante) -->

    <!-- Navbar per navigare fra le portate -->
    <nav>
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="d-flex list-unstyled">
                        <li
                            v-for="course in coursesArray"
                            :key="course.id"
                            @click="beActive(course)"
                            :class="course.boolean == true ? 'active' : '' ">
                                {{course.name}}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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
            coursesArray: [],

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
        getCourses(url){
            axios.get(url)
            .then(res=>{
                // console.log(res.data);
                res.data.courses.forEach(el => {
                    // console.log(el);
                    var courseObj = {
                        boolean : false,
                    };
                    let merged = {
                        ...el,...courseObj
                    };
                    this.coursesArray.push(merged);
                    // console.log(this.coursesArray);
                });
            })
        },
        beActive(el){
            if(el.boolean == true) el.boolean = false;
            else el.boolean = true;
            // console.log(el.boolean);
            // console.log(el.id);
        }
    },

    mounted(){
        this.getApi(this.itemApiUrl, this.user_id);
        this.getCourses(this.itemApiUrl);
    },
}
</script>

<style scoped lang="scss">
@import 'resources/sass/front/_variables.scss';

// .debug{
//     background-color: rgba($color: green, $alpha: 0.2);
//     border: 1px solid black;
// }

.jumbo{
    min-height: 50vh;

    background-image: url('/images/restaurant-1.jpg');
    background-position: center;
    background-size: auto;
    background-repeat: no-repeat;

    color: white;
    .jumbo-info{
        margin: 2% auto;
        h1{
            font-weight: 900;
        }
        h5{
            font-weight: 700;
        }
    }
}

nav{
    -webkit-box-shadow: 0px 4px 4px 0px rgba(100,100,100,0.1);
    box-shadow: 0px 4px 4px 0px rgba(100,100,100,0.1);

    font-weight: 500;

    ul{
        margin: 0;
        li{
            padding: 0.5% 2%;
            margin: 1%;

            background-color: rgb(241, 241, 241);
            border-radius: 20px;

            &:hover{
                background-color: $tertiary-color;
                color: white;
                cursor: pointer;
            }
        }
    }
}

.active{
    background-color: $tertiary-color;
    color: white;
}

main{
    min-height: 80vh;
}
</style>
