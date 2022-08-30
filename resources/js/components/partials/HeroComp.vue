<template>

<div class="home">

    <!-- Jumbotron -->
    <section class="herobanner">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

                <div class="col-10 col-sm-8 col-lg-6">
                </div>

                <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Il cibo che ami a Domicilio</h1>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate distinctio repudiandae perferendis quibusdam voluptas. Veritatis, enim rerum. Hic consectetur incidunt impedit, alias ratione tenetur ex praesentium nisi culpa vero aliquid?</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Inserisci il tipo di piatto" aria-label="Search">
                    <button class="btn btn_custom_secondary" type="submit">Trova</button>
                    </form>

                </div>
                </div>

            </div>
        </div>
    </section>
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

export default {
    name: 'HeroComp',
    components: {
        VueSlickCarousel
    },

    data() {
      return {
        settings: {
            "arrows": true,
            "infinite": true,
            "slidesToShow": 5,
            "slidesToScroll": 1,
            "autoplay": true,
            "speed": 6000,
            "autoplaySpeed": 3500,
            "cssEase": "linear",
            "centerPadding": '-200px',
            "centerMode": true,
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

<style lang="scss" scoped>

@import 'resources/sass/front/_variables.scss';

hr{
    border: 0.8px solid #FF9D22;
    border-radius: 4px;
    width: 90%;
}

/* Jumbotron */
.herobanner{
  background-image: url('/assets/img/banner.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

h1{
  color: $fifth-color;
}

.lead{
  color: white;
}

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

