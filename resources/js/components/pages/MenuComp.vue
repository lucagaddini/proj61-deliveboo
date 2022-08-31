<template>
  <div>
    <!-- Immagine di testa (ristorante) -->
    <section class="jumbo d-flex align-items-end">
        <div class="jumbo-info container p-2">
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
    <!-- <main class="container d-flex justify-content-between flex-column">
        <div class="debug row"> -->
            <!-- Lista prodotto -->
            <!-- <section class="debug sx col-7">
                <div class="container">
                    <h3>Starters</h3>
                    <div class="row"> -->
                        <!-- Singola card -->
                        <!-- <div class="ggc_card">
                            <div class="img" style=" background-image: url('/images/pizza-0.jpg');">
                                <span></span>
                            </div>
                            <div class="ggc_card-body">
                                <div class="add-to-cart p-1">
                                    <span>add to cart</span>
                                </div>
                                <div class="info-card-container d-flex align-items-center">
                                    <div class="item-name">ahjsfjahfjahfajhflahflhs</div>
                                    <div class="item-price">12.00&euro;</div>
                                </div>
                            </div>
                        </div> -->
                        <!-- /Singola card -->
                    <!-- </div>
                </div>
            </section> -->
            <!-- /Lista prodotto -->

            <!-- Riepilogo acquisti -->
            <!-- <section class="dx col-5">Recap pagamento</section> -->
            <!-- /Riepilogo acquisti -->
        <!-- </div>
    </main> -->
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
        // Chiamata api da filtrare per id ristorante
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

        // Assegno valori true e false alle portate
        getCourses(url){
            axios.get(url)
            .then(res=>{
                res.data.courses.forEach(el => {
                    var courseObj = {
                        boolean : false,
                    };
                    let merged = {
                        ...el,...courseObj
                    };
                    this.coursesArray.push(merged);
                });
            })
        },
        beActive(el){
            if(el.boolean == true) el.boolean = false;
            else el.boolean = true;
        },
        // /Assegno valori true e false alle portate

    },

    mounted(){
        this.getApi(this.itemApiUrl, this.user_id);
        this.getCourses(this.itemApiUrl);
    },
}
</script>

<style scoped lang="scss">
@import 'resources/sass/front/_variables.scss';

.debug{
    background-color: rgba($color: green, $alpha: 0.2);
    border: 1px solid black;
}

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

// main{
//     min-height: 80vh;
//     .sx{
//         margin-top: 5%;
//         font-weight: 900;
//         color: black;
//         .ggc_card{
//             // width: 10vw;
//             width: 150px;
//             // height: 12vw;
//             height: 175px;
//             border-radius: 10px;
//             margin: 0 3% 5%;
//             .img{
//                 // width: 10vw;
//                 // height: 8vw;
//                 width: 100%;
//                 height: 80%;
//                 background-position: center;
//                 background-size: cover;
//             }
//             .ggc_card-body{
//                 text-align: center;
//                 flex-shrink: 0;
//                 flex-grow: 0;
//                 .add-to-cart{
//                     text-transform: uppercase;
//                     background-color: $tertiary-color;
//                 }
//                 .info-card-container{
//                     background-color: #f2f3f5;
//                     .item-name{
//                         width: 65%;
//                         padding: 2% 0 0 3%;
//                         text-align: left;
//                     }
//                     .item-price{
//                         width: 35%;
//                         padding: 2%;
//                         background-color: $primary-color;
//                     }
//                 }
//             }
//         }
//     }
// }
</style>
