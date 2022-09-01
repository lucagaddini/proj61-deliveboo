<template>
  <div>
    <!-- Immagine di testa (ristorante) -->
    <section>
        <div v-if="current_restaurant.image_path == null">
            <div
                class="jumbo d-flex align-items-end"
                style="background-image: url('/images/restaurant_placeholder.jpg')">
                <div class="jumbo-info container p-2">
                    <h1>{{current_restaurant.name}}</h1>
                    <h5><span></span> <span>{{ current_restaurant.address }}</span></h5>
                </div>
            </div>
        </div>
        <div v-else>
            <div
                class="jumbo d-flex align-items-end"
                :style="`background-image: url('/images/${current_restaurant.image_path}')`">
                <div class="jumbo-info container p-2">
                    <h1>{{current_restaurant.name}}</h1>
                    <h5><span></span> <span>{{ current_restaurant.address }}</span></h5>
                </div>
            </div>
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
        </nav>
        <!-- /Navbar per navigare fra le portate -->





        <!----------------------------- Carrello e piatti ---------------------------------->

        <section class="container">
        <!----------------------------- Card dei piatti ---------------------------------->



            <div id="my-cards">
                <div class="container-fluid bootdey">


<!-- big section big section big section big section big section big section big section big section big section-->
                    <div class="col-md-8">

                        <div class="portata-title text-center">
                            <h3>Starters</h3>
                        </div>

                        <div class="row product-list">

                            <!-- single-card -->

                            <div v-for="i in 3" :key="i" class="col-lg-4 col-sm-6 col-12 my-card">
                                <section class="panel my-3">
                                    <div class="pro-img-box d-flex justify-content-center">
                                        <img src="images/pizza-0.jpg" />
                                        <i class="fa-solid fa-leaf icon-vegetarian"></i>
                                        <a href="#" class="addtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title px-1">
                                                Leopard Shirt Dress pizza keba pizze e kebab super riga
                                            </a>
                                        </h4>
                                        <span class="price text-center">
                                            <span>$300.00</span>
                                        </span>
                                    </div>
                                </section>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-card">
                                <section class="panel my-3">
                                    <div class="pro-img-box d-flex justify-content-center">
                                        <img src="images/pizza-3.jpg" />
                                        <a href="#" class="addtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title px-1">
                                                pizza margerita
                                            </a>
                                        </h4>
                                        <span class="price text-center">
                                            <span>$300.00</span>
                                        </span>
                                    </div>
                                </section>
                            </div>

                            <!-- //single-card -->
                        </div>
                    </div>
<!-- big section big section big section big section big section big section big section big section big section-->
<!-- big section big section big section big section big section big section big section big section big section-->
                    <div class="col-md-8">

                        <div class="portata-title text-center">
                            <h3>Secondi</h3>
                        </div>

                        <div class="row product-list">

                            <!-- single-card -->

                            <div v-for="i in 3" :key="i" class="col-lg-4 col-sm-6 col-12 my-card">
                                <section class="panel my-3">
                                    <div class="pro-img-box d-flex justify-content-center">
                                        <img src="images/burghers-0.jpg" />
                                        <i class="fa-solid fa-leaf icon-vegetarian"></i>
                                        <a href="#" class="addtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title px-1">
                                                Leopard Shirt Dress pizza keba pizze e kebab super riga
                                            </a>
                                        </h4>
                                        <span class="price text-center">
                                            <span>$300.00</span>
                                        </span>
                                    </div>
                                </section>
                            </div>



                            <!-- //single-card -->
                        </div>
                    </div>
<!-- /////big section big section big section big section big section big section big section big section big section-->
<!-- big section big section big section big section big section big section big section big section big section-->
                    <div class="col-md-8">

                        <div class="portata-title text-center">
                            <h3>Contorni</h3>
                        </div>

                        <div class="row product-list">

                            <!-- single-card -->

                            <div v-for="i in 3" :key="i" class="col-lg-4 col-sm-6 col-12 my-card">
                                <section class="panel my-3">
                                    <div class="pro-img-box d-flex justify-content-center">
                                        <img src="images/sushi-0.jpg" />
                                        <i class="fa-solid fa-leaf icon-vegetarian"></i>
                                        <a href="#" class="addtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title px-1">
                                                Leopard Shirt Dress pizza keba pizze e kebab super riga
                                            </a>
                                        </h4>
                                        <span class="price text-center">
                                            <span>$300.00</span>
                                        </span>
                                    </div>
                                </section>
                            </div>


                            <div class="col-lg-4 col-sm-6 col-12 my-card">
                                <section class="panel my-3">
                                    <div class="pro-img-box d-flex justify-content-center">
                                        <img src="images/sushi-5.jpg" />
                                        <a href="#" class="addtocart">
                                            <i class="fa fa-shopping-cart"></i>
                                        </a>
                                    </div>

                                    <div class="panel-body text-center">
                                        <h4>
                                            <a href="#" class="pro-title px-1">
                                                pizza margerita
                                            </a>
                                        </h4>
                                        <span class="price text-center">
                                            <span>$300.00</span>
                                        </span>
                                    </div>
                                </section>
                            </div>

                            <!-- //single-card -->
                        </div>
                    </div>
<!-- /////big section big section big section big section big section big section big section big section big section-->

                </div>
            </div>

            <!----------------------------- Card dei piatti ---------------------------------->
        </section>


        <!----------------------------- Carrello e piatti ---------------------------------->







    </div>
</template>

<script>
// return this.$route.params.id

export default {
    name: 'MenuComp',

    components: {
        props: Number,
    },
    
    data(){
        return{
            itemApiUrl: "http://127.0.0.1:8000/api",

            // Il props va inserito qui al posto del current user!
            // current_user: {
            //         user_id: this.$route.params.id,
            //         image_path: null,
            // },

            current_restaurant: {},
            current_user: this.$route.params.id,
            current_menu: [],
            coursesArray: [],

        }
    },

    methods: {
        // Chiamata api da filtrare per id ristorante
        getApi(url) {
            axios.get(url)
            .then(res=>{
                // console.log(res.data.menu);
                res.data.menu.forEach(el => {
                    if(el.user_id == this.current_user){
                        this.current_menu.push(el);
                        this.current_restaurant = el.user;
                        console.log(this.current_menu);
                    }
                });
            })
        },

        // Assegno valori true e false alle portate
        getCourses(url) {
            axios.get(url)
                .then(res => {
                    res.data.courses.forEach(el => {
                        var courseObj = {
                            boolean: false,
                        };
                        let merged = {
                            ...el, ...courseObj
                        };
                        this.coursesArray.push(merged);
                    });
                })
        },
        beActive(el) {
            if (el.boolean == true) el.boolean = false;
            else el.boolean = true;
        },
        // /Assegno valori true e false alle portate
    },

    mounted() {
        this.getApi(this.itemApiUrl, this.user_id);
        this.getCourses(this.itemApiUrl);
    },
}
</script>

<style scoped lang="scss">
@import 'resources/sass/front/_variables.scss';

.debug {
    background-color: rgba($color: green, $alpha: 0.2);
    border: 1px solid black;
}

.jumbo {
    min-height: 50vh;

    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

    color: white;

    .jumbo-info {
        margin: 2% auto;

        h1 {
            font-weight: 900;
        }

        h5 {
            font-weight: 700;
        }
    }
}

nav {
    -webkit-box-shadow: 0px 4px 4px 0px rgba(100, 100, 100, 0.1);
    box-shadow: 0px 4px 4px 0px rgba(100, 100, 100, 0.1);

    font-weight: 500;

    ul {
        margin: 0;

        li {
            padding: 0.5% 2%;
            margin: 1%;

            background-color: rgb(241, 241, 241);
            border-radius: 20px;

            &:hover {
                background-color: $tertiary-color;
                color: white;
                cursor: pointer;
            }
        }
    }
}

.active {
    background-color: $tertiary-color;
    color: white;
}

//------------------------Card dei piatti ---------------------------------->
//portate cards

.portata-title {
    margin-top: 50px;
    margin-bottom: 25px;
}


/*panel*/
.panel {
    border: none;
    box-shadow: none;
    border: 1px solid $fifth-color;
    border-radius: 10px;
    height: 250px
}


.panel-title {
    color: #2A3542;
    font-size: 14px;
}

.panel-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 55%;
    background-color: #F2F3F4;
    border-radius: 0px 0px 8px 8px;
}


/*product list*/
.product-list img {
    width: 100%;
    border-radius: 8px 8px 0 0;
    object-fit: cover;
}

.product-list .pro-img-box {
    position: relative;
    height: 45%;
}

.pro-img-box .icon-vegetarian {
    padding: 10px;
    border-radius: 50%;
    background-color: $secondary-color;
    color: white;
    position: absolute;
    top: 10px;
    left: 15px;
    border: 1px solid black;
}

.addtocart {
    background: $fifth-color;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    color: #fff;
    display: inline-block;
    text-align: center;
    border: 3px solid #fff;
    bottom: -25px;
    position: absolute;
}

.addtocart i {
    color: #fff;
    font-size: 25px;
    line-height: 42px;
}

.pro-title {
    color: #5A5A5A;
    display: inline-block;
    margin-top: 32.5px;
    font-size: 16px;
}

.price {
    margin-bottom: 15px;

    span {
        background-color: $primary-color;
        border-radius: 6px;
        font-size: 15px;
        font-weight: bold;
        color: white;
        padding: 4px 6px;
    }
}


@media screen and (max-width: 575px) {
    .panel {
        width: 50%;
    }

    .my-card{
        display: flex;
        justify-content: center;
    }

}
@media screen and (max-width: 550px) {
    .panel {
        width: 60%;
    }
}
@media screen and (max-width: 400px) {
    .panel {
        width: 85%;
    }
}
//------------------------Card dei piatti ---------------------------------->

</style>
