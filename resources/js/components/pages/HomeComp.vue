<template>
  <div>

    <!-- Jumbotron -->
    <HeroComp />
    <!-- /Jumbotron -->

    <!-- Categories and Restaurants -->
    <section>

        <!-- Categories -->
        <div class="categories container">

            <!-- Cat. Title -->
            <div class="cat-title text-center">
                <h1>Popular Categories</h1>
                <p>Lorem ipsum dolor sit amet, adipisicing!</p>
            </div>
            <!-- /Cat. Title -->

            <VueSlickCarousel v-bind='settings'>

            <!-- Cat. Cards -->
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
            <div class="res-title">
                <h2>Top Rated Restaurants</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti?</p>
            </div>
            <!-- /Res. Title -->

            <!-- Res. Cards -->
            <div class="res-cards">

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
            "infinite": true,
            "initialSlide": 0,
            "speed": 500,
            "slidesToShow": 4,
            "slidesToScroll": 1,
            "swipeToSlide": true,
            "centerMode": true,
            "centerPadding": "-50px",
            "touchMove": true,

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
                    }
                }
            ]

        },
      }
    },
}


</script>

<style lang='scss' scoped>

/* Categories and Restaurants */

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

    img{
        height: 100%;
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


</style>
