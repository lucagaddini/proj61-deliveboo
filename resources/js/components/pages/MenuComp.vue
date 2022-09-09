<template>
    <div>
        <!-- Immagine di testa (ristorante) -->
        <section>
            <div v-if="current_restaurant.image_path == null">
                <div class="jumbo d-flex align-items-end"
                    style="background-image: url('/images/restaurant_placeholder.jpg')">
                    <div class="background-info container-fluid">
                        <div class="jumbo-info container p-2">
                            <h2>{{ current_restaurant.name }}</h2>
                            <h5>
                                <span>{{  current_restaurant.address  }}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div v-else>
                <div class="jumbo d-flex align-items-end"
                    :style="`background-image: url('/images/${current_restaurant.image_path}')`">
                    <div class="background-info container-fluid">

                        <div class="jumbo-info container p-2">
                            <h2>{{ current_restaurant.name }}</h2>
                            <h5>
                                <span>{{  current_restaurant.address  }}</span>
                            </h5>
                        </div>

                    </div>

                </div>
            </div>
        </section>

        <!-- /Immagine di testa (ristorante) -->

        <!-- Navbar per navigare fra le portate -->
        <nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul class="d-flex list-unstyled">
                            <li class="all_btn"
                                @click="allActive(coursesArray)">
                                Tutti
                            </li>
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

        <section class="container-fluid d-flex flex-wrap">
            <!----------------------------- Card dei piatti ---------------------------------->


            <div id="my-cards" class="container col-8">
                    <!-- componente card singola delle portate -->
                    <PiattoMenuComp
                        v-for="course in coursesArray"
                        :key="'course-'+course.id"
                        :course="course"
                        :userId="current_restaurant.id"
                        :userSlug="current_user_slug"
                        :class="course.active === true ? 'd-block' : 'd-none'"
                    />
                    <!-- /componente card singola delle portate -->
            </div>

            <!----------------------------- Card dei piatti ---------------------------------->

            <!-- componente carrello -->
            <CarrelloMenuComp
            :restaurantInfo="current_restaurant"/>
            <!-- /componente carrello -->

        </section>

        <!----------------------------- Carrello e piatti ---------------------------------->

    </div>
</template>

<script>
import PiattoMenuComp from '../partials/PiattoMenuComp.vue';
import CarrelloMenuComp from '../partials/CarrelloMenuComp.vue';


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
            current_user_id: this.$route.params.id,
            current_user_slug: this.$route.params.slug,
            current_user_categories: this.$route.params.categories,

            // Lista delle portate del ristorante attivo
            coursesArray: [],

            // filteredCoursesArray: [],

        }
    },

    methods: {
        // Chiamata API che restituisce le portate del ristorante scelto tramite ID
        getUserCourses(url,slug) {
            axios.get(url+slug)
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
        getUserInfo(url,slug) {
            axios.get(url+slug)
                .then(res => {
                    res.data.user.forEach(user => {
                        this.current_restaurant = user;
                    });
                })
        },

        beActive(el) {
            if (el.active == true){
                el.active = false;
            } else el.active = true;
        },

        allActive(arr) {
            arr.forEach(el=>{
                el.active = true;
            })
        },
        // /Assegno valori true e false alle portate
    },

    mounted() {
        this.getUserInfo(this.userInfoUrl,this.current_user_slug);
        this.getUserCourses(this.coursesUrl,this.current_user_slug);

    },
}
</script>

<style scoped lang="scss">
@import 'resources/sass/front/_variables.scss';

.jumbo {
    min-height: 40vh;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;

    .background-info{
        background-color: white;
        opacity: 0.7;
        height: 100px;
    }

    .jumbo-info {
        margin: 1% auto;
        color: black;
        opacity: 1;

        .restaurant-name {
            font-weight: 900;
        }

        .restaurant-cat-address{
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
    border: 2px solid $tertiary-color;
    color: white;

    &:hover {
        background-color: white;
        border: 2px solid $tertiary-color;
        color: black;
        cursor: pointer;
    }

}

.all_btn{
    background-color: $primary-color;
    border: 2px solid $primary-color;
    color: white;

    &:hover {
        background-color: white;
        border: 2px solid $primary-color;
        color: black;
        cursor: pointer;
    }
}

</style>
