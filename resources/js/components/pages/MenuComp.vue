<template>
    <div>
        <!-- Immagine di testa (ristorante) -->
        <section>
            <div v-if="current_restaurant.image_path == null">
                <div class="jumbo d-flex align-items-end"
                    style="background-image: url('/images/restaurant_placeholder.jpg')">
                    <div class="jumbo-info container p-2">
                        <h1>{{ current_restaurant.name }}</h1>
                        <h5><span></span> <span>{{  current_restaurant.address  }}</span></h5>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="jumbo d-flex align-items-end"
                    :style="`background-image: url('/images/${current_restaurant.image_path}')`">
                    <div class="jumbo-info container p-2">
                        <h1>{{ current_restaurant.name }}</h1>
                        <h5><span></span> <span>{{  current_restaurant.address  }}</span></h5>
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
                            <li v-for="course in coursesArray" 
                                :key="course.id"     
                                @click="beActive(course)"
                                :class="course.active == true ? 'active' : ''">
                                {{ course.name }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!-- /Navbar per navigare fra le portate -->


        <!----------------------------- Carrello e piatti ---------------------------------->

        <section class="container d-flex">
            <!----------------------------- Card dei piatti ---------------------------------->

            <div id="my-cards" class="container">
                
                    <!-- componente card singola delle portate -->
                    <PiattoMenuComp
                        v-for="course in coursesArray"
                        :key="'course-'+course.id"
                        :course="course"
                        :userId="current_restaurant.id"
                        :class="course.active === true ? 'd-block' : 'd-none'"
                    />
                    <!-- /componente card singola delle portate -->
            </div>

            <!----------------------------- Card dei piatti ---------------------------------->

            <!-- componente carrello -->
            <CarrelloMenuComp />
            <!-- /componente carrello -->


        </section>

        <!----------------------------- Carrello e piatti ---------------------------------->

    </div>
</template>

<script>
import PiattoMenuComp from '../partials/PiattoMenuComp.vue';
import CarrelloMenuComp from '../partials/CarrelloMenuComp.vue';

// return this.$route.params.id

export default {
    name: 'MenuComp',

    components: {
        PiattoMenuComp,
        CarrelloMenuComp,
    },

    data() {
        return {
            coursesUrl: "http://127.0.0.1:8000/api/coursesUser/",
            userInfoUrl: "http://127.0.0.1:8000/api/userInfo/",

            // L'oggetto User
            current_restaurant: {},

            // Id del ristorante che mi viene da HomeComp
            current_user: this.$route.params.id,

            // Lista delle portate del ristorante attivo
            coursesArray: [],

            // filteredCoursesArray: [],

        }
    },

    methods: {
        // Chiamata API che restituisce le portate del ristorante scelto tramite ID
        getUserCourses(url,id) {
            axios.get(url+id)
                .then(res => {
                    res.data.courses.forEach(course => {

                        // Aggiunto un attributo Active alla portata
                        var booleanAttibute = {
                            active: true,
                        };

                        // Merge dei due oggetti
                        let merged = {
                            ...course, ...booleanAttibute
                        };
                        
                        this.coursesArray.push(merged);
                    });
                })
        },

        // Chiamata API che restituisce le INFO del ristorante scelto tramite ID
        getUserInfo(url,id) {
            axios.get(url+id)
                .then(res => {
                    res.data.user.forEach(user => {
                        this.current_restaurant = user;
                    });
                })
        },




        
        

        // // Assegno valori true e false alle portate
        // getCourses(url) {
        //     axios.get(url)
        //         .then(res => {
        //             res.data.courses.forEach(el => {
        //                 var courseObj = {
        //                     isShown: false,
        //                 };
        //                 let merged = {
        //                     ...el, ...courseObj
        //                 };
        //                 this.coursesArray.push(merged);
        //                 // console.log(this.coursesArray);
        //             });
        //         })
        // },

        beActive(el) {
            if (el.active == true){
                el.active = false;
            } else el.active = true;
        },
        // /Assegno valori true e false alle portate
    },

    mounted() {
        this.getUserInfo(this.userInfoUrl,this.current_user);
        this.getUserCourses(this.coursesUrl,this.current_user);
        
        // this.getCourses(this.itemApiUrl);
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
</style>
