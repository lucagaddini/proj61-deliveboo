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
                        <ul class="d-flex list-unstyled flex-wrap">
                            <li class="my-2" v-for="course in coursesArray" :key="course.id" @click="beActive(course)"
                                :class="course.boolean == true ? 'active' : ''">
                                {{  course.name  }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /Navbar per navigare fra le portate -->






        <!-- Main con piatti e riepilogo -->

        <section class="container">


            <div id="my-cards">
                <div class="container-fluid bootdey">

                    <div class="col-md-8">

                        <div class="portata-title text-center">
                            <h3>Starters</h3>
                        </div>

                        <div class="row product-list">

                            <!-- single-card -->

                                <div v-for="i in 8" :key="i"
                                    class="col-md-4 col-6 my-card"
                                >
                                    <section class="panel my-3">
                                        <div class="pro-img-box d-flex justify-content-center">
                                            <img src="images/burghers-0.jpg" />
                                            <a href="#" class="adtocart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>

                                        <div class="panel-body text-center">
                                            <h4>
                                                <a href="#" class="pro-title px-1">
                                                    Leopard Shirt Dress pizza e tante parole per vedere se si rompe
                                                </a>
                                            </h4>
                                            <p class="price">$300.00</p>
                                        </div>
                                    </section>
                                </div>


                                <div class="col-md-4 col-6 my-card"
                                >
                                    <section class="panel my-3">
                                        <div class="pro-img-box d-flex justify-content-center">
                                            <img src="images/burghers-0.jpg" />
                                            <a href="#" class="adtocart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>

                                        <div class="panel-body text-center">
                                            <h4>
                                                <a href="#" class="pro-title px-1">
                                                    pizza margerita
                                                </a>
                                            </h4>
                                            <p class="price">$300.00</p>
                                        </div>
                                    </section>
                                </div>

                                <div class="col-md-4 col-6 my-card"
                                >
                                    <section class="panel my-3">
                                        <div class="pro-img-box d-flex justify-content-center">
                                            <img src="images/pizza-1.jpg" />
                                            <a href="#" class="adtocart">
                                                <i class="fa fa-shopping-cart"></i>
                                            </a>
                                        </div>

                                        <div class="panel-body text-center">
                                            <h4>
                                                <a href="#" class="pro-title px-1">
                                                    pizza margerita
                                                </a>
                                            </h4>
                                            <p class="price">$300.00</p>
                                        </div>
                                    </section>
                                </div>


                            <!-- //single-card -->



                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- /Main con piatti e riepilogo -->

    </div>
</template>

<script>
//

export default {
    name: 'MenuComp',

    components: {
        props: Number,
    },

    data() {
        return {
            itemApiUrl: "http://127.0.0.1:8000/api/categories",
            // Il props va inserito qui al posto del current user!
            current_user: 1,
            current_menu: [],
            coursesArray: [],

        }
    },

    methods: {
        // Chiamata api da filtrare per id ristorante
        getApi(url) {
            axios.get(url)
                .then(res => {
                    // console.log(res.data.menu);
                    res.data.menu.forEach(el => {
                        if (el.user_id == this.current_user) {
                            this.current_menu.push(el);
                            // console.log(this.current_menu);
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

    background-image: url('/images/restaurant-1.jpg');
    background-position: center;
    background-size: auto;
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

//---------------------------------------------//
//portate cards

.portata-title{
    margin-top: 50px;
    margin-bottom: 25px;
}


/*panel*/

.panel {
    border: none;
    box-shadow: none;
    border: 1px solid $fifth-color;
    border-radius: 10px;
}

.panel-heading {
    border-color: #eff2f7;
    font-size: 16px;
    font-weight: 300;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
    font-weight: 400;
    margin-bottom: 0;
    margin-top: 0;
    font-family: 'Open Sans', sans-serif;
}


/*product list*/

.prod-cat li a {
    border-bottom: 1px dashed #d9d9d9;
}

.prod-cat li a {
    color: #3b3b3b;
}

.prod-cat li ul {
    margin-left: 30px;
}

.prod-cat li ul li a {
    border-bottom: none;
}

.prod-cat li ul li a:hover,
.prod-cat li ul li a:focus,
.prod-cat li ul li.active a,
.prod-cat li a:hover,
.prod-cat li a:focus,
.prod-cat li a.active {
    background: none;
    color: #ff7261;
}

.pro-lab {
    margin-right: 20px;
    font-weight: normal;
}

.pro-sort {
    padding-right: 20px;
    float: left;
}

.pro-page-list {
    margin: 5px 0 0 0;
}

.product-list img {
    width: 100%;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
}

.product-list .pro-img-box {
    position: relative;
}

.adtocart {
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

.adtocart i {
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

.product-list .price {
    color: $tertiary-color;
    font-size: 15px;
    font-weight: bold;
}

.pro-img-details {
    margin-left: -15px;
}

.pro-img-details img {
    width: 100%;
}

.pro-d-title {
    font-size: 16px;
    margin-top: 0;
}

.product_meta {
    border-top: 1px solid #eee;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
    margin: 15px 0;
}

.product_meta span {
    display: block;
    margin-bottom: 10px;
}

.product_meta a,
.pro-price {
    color: #fc5959;
}

.pro-price,
.amount-old {
    font-size: 18px;
    padding: 0 10px;
}

.amount-old {
    text-decoration: line-through;
}

.quantity {
    width: 120px;
}

.pro-img-list {
    margin: 10px 0 0 -15px;
    width: 100%;
    display: inline-block;
}

.pro-img-list a {
    float: left;
    margin-right: 10px;
    margin-bottom: 10px;
}

.pro-d-head {
    font-size: 18px;
    font-weight: 300;
}
//our class
</style>
