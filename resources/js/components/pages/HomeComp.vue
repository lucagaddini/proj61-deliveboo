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

            <VueSlickCarousel v-bind='settings'>

            <!-- Cat. Cards --> <!-------------- SISTEMARE EFFETTO SCROOL QUANDO CLICCO NELL'IMG MI TRASPORTA L'IMMAGINE E NON SCROLLA ----------------->
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p> Pizza</p>
            </div>
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p>Pizza</p>
            </div>
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p>Pizza</p>
            </div>
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p>Pizza</p>
            </div>
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p>Pizza</p>
            </div>
            <div class="cat-cards">
                <img src="images/burghers-0.jpg">
                <p>Pizza</p>
            </div>
            <!-- /Cat. Cards -->

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
                <div class="res-card col">
                    <div class="card-container bg-debug col-11 offset-1 d-flex">

                        <div class="d-flex card-style">

                        <!-- Res. Img -->
                        <div class="res-img">
                            <img src="images/vegetariano-7.jpg">
                        </div>
                        <!-- /Res. Img -->

                        <!-- Res.Text -->
                        <div class="res-text">
                            <h4 class="res-name">Pizzeria Dal Napoli Di Marmetto di Francesco</h4>
                            <span class="res-adress">Via Garibaldi, 120</span> <br>
                            <span class="res-cat">
                                <span>Cat.1</span>
                                <span>Cat.1</span>
                            </span>
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
        settings: {
            "dots": true,
            "arrows": false,
            "infinite": true,
            "initialSlide": 0,
            "speed": 1500,
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "swipeToSlide": true,
            "centerMode": true,
            "centerPadding": "-50px",
            "touchMove": true,
            "autoplay": true,
            "autoplaySpeed": 3000,

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
                    }
                },
                {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-25px',
                    }
                },
                {
                    "breakpoint": 520,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-100px',
                        "speed": 500,
                    }
                }
            ]

        },
      }
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
    margin-bottom: 50px;
}

.card-style{
    background-color: white;
    width: 100%;
    border-radius: 10px;
    overflow: hidden;
    border: 1px solid $tertiary-color;
}

/* Res. Img */

.res-img{
    height: 100px;
}

.res-img img{
    height: 100%;
}

/* Res. Text */
.res-text{
    color: black;
    margin: 10px 0px 10px 20px;
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
