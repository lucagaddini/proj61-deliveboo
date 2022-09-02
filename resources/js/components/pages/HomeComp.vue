<template>
  <div>

    <!-- Jumbotron -->
    <HeroComp />
    <!-- /Jumbotron -->

    <!-- Categories and Restaurants -->
    <section class="cat-res">

        <!-- Categories -->
        <div class="categories container">

            <!-- Cat. Title -->
            <div class="cat-title text-center">
                <h1>Popular Categories</h1>
                <p>Lorem ipsum dolor sit amet, adipisicing!</p>
            </div>
            <!-- /Cat. Title -->

            <VueSlickCarousel v-bind='settings' v-if= 'categoriesLoading'>

                <!-- Prev Arrow -->
                <template #prevArrow="arrowOption">
                    <div class="custom-arrow">
                        {{ arrowOption.currentSlide }}/{{ arrowOption.slideCount }}
                    </div>
                </template>
                <!-- /Prev Arrow -->

                <!-- Cat. Cards -->
                <div class="cat-cards"
                    v-for="category in categoriesArray"
                    :key="'category-'+category.id">
                    <img :src="'images/' + category.image_path">
                    <p>{{ category.name }}</p>
                </div>
                <!-- /Cat. Cards -->

                <!-- Next Arrow -->
                <template #nextArrow="arrowOption">
                    <div class="custom-arrow">
                        {{ arrowOption.currentSlide }}/{{ arrowOption.slideCount }}
                    </div>
                </template>
                <!-- /Next Arrow -->

            </VueSlickCarousel>

        </div>
        <!-- /Categories -->

        <hr>

        <!-- Restaurants -->
        <div class="restaurants container">

            <!-- Res. Title -->
            <div class="res-title text-center">
                <h2>Top Rated Restaurants</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti?</p>
            </div>
            <!-- /Res. Title -->

            <!-- Res. Cards -->
            <div class="res-cards row row-cols-1 row-cols-lg-2">

                <!-- Res. Singol Card -->
                <div class="res-card col"
                    :key="'user-'+user.id"
                    v-for="user in usersArray">
                    <div class="card-container bg-debug col-12 d-flex">

                        <div class="d-flex card-style">

                            <!-- Res. Img -->
                            <div class="res-img">
                                <img src="images/restaurant_placeholder_home.jpg"
                                    v-if="user.image_path == null">
                                <img :src="'images/'+user.image_path"
                                    v-else>
                            </div>
                            <!-- /Res. Img -->

                            <!-- Res.Text -->
                            <div class="res-text">
                                <router-link class="nav-link" :to="{name: 'menu', params:{id:user.id}}">
                                    <h4 class="res-name">{{ user.name }}</h4>
                                    <span class="res-adress">{{ user.address }}</span> <br>
                                    <span class="res-cat">
                                        <span>Cat.1</span>
                                        <span>Cat.1</span>
                                    </span>
                                </router-link>
                            </div>
                            <!-- /Res.Text -->

                        </div>

                    </div>
                </div>
                <!-- /Res. Singol Card -->

            </div>

            <!-- /Res. Cards -->

        </div>
        <!-- /Restaurants -->

    </section>
    <!-- /Categories and Restaurants -->

  </div>

</template>

<script>

import VueSlickCarousel from 'vue-slick-carousel';
import 'vue-slick-carousel/dist/vue-slick-carousel.css';
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css';
import HeroComp from "../partials/HeroComp.vue";

export default {
    name: 'HomeComp',
    components:{
        HeroComp,
        VueSlickCarousel
    },

    data() {
      return {
        // SLIDER
        settings: {
            "dots": true,
            "arrows": true,
            "infinite": true,
            "initialSlide": 0,
            "speed": 1500,
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "swipeToSlide": true,
            "centerMode": true,
            "centerPadding": "-50px",
            "touchMove": false,
            "autoplay": true,
            "autoplaySpeed": 3000,
            /* "lazyLoad": 'progressive', */

            "responsive": [
                {
                    "breakpoint": 991,
                    "settings": {
                        "slidesToShow": 3,
                        "centerPadding": '-50px',
                    }
                },
                {
                    "breakpoint": 767,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-25px',
                        "touchMove": true,
                        "arrows": true,
                        "speed": 500
                    }
                },
                {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-25px',
                        "speed": 500,
                        "touchMove": true,
                        "arrows": false
                    }
                },
                {
                    "breakpoint": 520,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-100px',
                        "speed": 500,
                        "touchMove": true,
                        "arrows": false
                    }
                }
            ]

        },
        // /SLIDER

        apiUrl: "http://127.0.0.1:8000/api",
        categoriesArray: [],
        usersArray: [],
        categoriesLoading: false

      }
    },

    methods:{
        fillArrays(url){
            axios.get(url)
            .then(res=>{
                res.data.categories.forEach(el => {
                    this.categoriesArray.push(el);
                    if (this.categoriesArray.length >= 1){
                        this.categoriesLoading = true;
                    }
                    // console.log(this.categoriesArray);
                });
                res.data.users.forEach(el => {
                    this.usersArray.push(el);
                    // console.log(this.usersArray);
                });
            })
        },
    },

    mounted(){
        this.fillArrays(this.apiUrl);
    },
}


</script>

<style lang='scss' scoped>

@import 'resources/sass/front/_variables.scss';

/* Categories and Restaurants */

.cat-res{
    background-color: #F9FAFC;
    display: flex;
    flex-direction: column;
}

hr{
    border: 0.8px solid $tertiary-color;
    border-radius: 4px;
    width: 90%;
}

/* Categories */
.categories{
    margin-top: 75px;
    margin-bottom: 75px;
}

.cat-title h1{
    color: black;
}

.cat-title p{
    font-size: 1.125rem;
    color: black;
}

.cat-cards{
    height: 300px;
    position: relative;
    cursor: pointer;

    img{
        height: 100%;
        width: 250px;
        border-radius: 20px;
        background-attachment: fixed;
    }

    p{
        position: absolute;
        bottom: 10px;
        color: white;
        left: 25px;
        font-weight: bold;
        font-size: 1.2rem;
    }
}

.slick-prev:before,
.slick-next:before {
  color: $tertiary-color !important;
}

/* Restaurants */
.restaurants{
    margin-top: 75px;
    margin-bottom: 75px;
}

.res-title h2{
    color: black;
}

.res-title p{
    font-size: 1.125rem;
    color: black;
}

.res-card{
    padding: 20px;
}

.card-style{
    background-color: white;
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid $tertiary-color;
}

.card-container{
    padding-right: 0px;
    padding-left: 0px;
}

/* Res. Img */

.res-img{
    width: 50%;
    height: 150px;
}

.res-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Res. Text */
.res-text{
    color: black;
    margin: 0px 0px 0px 10px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 5px;
    width: 50%;
}

.res-name{
    font-size: 1.1rem;
}

.res-cat span{
    background-color: $tertiary-color;
    border-radius: 6px;
    padding: 2px 10px;
    color: white;
    font-size: .7rem;
}

</style>
