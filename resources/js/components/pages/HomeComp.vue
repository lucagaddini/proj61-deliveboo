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
                    <h1>Categorie</h1>
                    <p>Lorem ipsum dolor sit amet, adipisicing!</p>
                </div>
                <!-- /Cat. Title -->

                <VueSlickCarousel v-bind='settings' v-if='categoriesLoading'>

                    <!-- Prev Arrow -->
                    <template #prevArrow="arrowOption">
                        <div class="custom-arrow">
                            {{ arrowOption.currentSlide }}/{{ arrowOption.slideCount }}
                        </div>
                    </template>
                    <!-- /Prev Arrow -->

                    <!-- Cat. Cards -->
                    <div class="cat-cards" v-for="category in categoriesArray" :key="'category-' + category.id"
                        @click="searchRestaurant(category)">

                        <img :class="category.clicked === true ? 'active' : ''" :src="'images/' + category.image_path">

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


            <!-- SEARCHED RESTAURANTS -->
            <div class="restaurants container" v-if="searchedRestaurant.length > 0">

                <hr>
                <!-- Res. Title -->
                <div class="res-title text-center">
                    <h2>Ristoranti Selezionati</h2>
                    <p>The list of restaurant you required</p>
                </div>
                <!-- /Res. Title -->

                <!-- Res. Cards -->
                <div class="res-cards row row-cols-1 row-cols-lg-2">

                    <!-- Res. Singol Card -->
                    <div class="res-card col" v-for="rest in searchedRestaurant"
                        :key="'searched-user' + rest.infoUser.id">
                        <div class="card-container bg-debug col-12 d-flex">

                            <div class="d-flex card-style">

                                <!-- Res. Img -->
                                <div class="res-img">
                                    <img src="images/restaurant_placeholder_home.jpg"
                                        v-if="rest.infoUser.image_path == null">
                                    <img :src="'images/' + rest.infoUser.image_path" v-else>
                                </div>
                                <!-- /Res. Img -->

                                <!-- Res.Text -->
                                <div class="res-text">
                                    <router-link class="nav-link" :to="{
                                        name: 'menu',
                                        params: {
                                            slug: rest.infoUser.slug,
                                            id: rest.infoUser.id,
                                            categories: rest.categoriesUser
                                        }
                                    }">
                                        <h4 class="res-name">{{ rest.infoUser.name }}</h4>
                                        <span class="res-adress">{{ rest.infoUser.address }}</span> <br>
                                        <span class="res-cat">
                                            <span class="mr-2" v-for="restCat in rest.categoriesUser"
                                                :key="'restCat' + restCat.id">
                                                {{ restCat.name }}
                                            </span>
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
            <!-- /SEARCHED RESTAURANTS -->


            <hr>


            <!-- TOP RATED RESTAURANTS -->
            <div class="restaurants container">
                <!-- Res. Title -->
                <div class="res-title text-center">
                    <h2>I più votati</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corrupti?</p>
                </div>
                <!-- /Res. Title -->

                <!-- Res. Cards -->
                <div class="res-cards row row-cols-1 row-cols-lg-2">

                    <!-- Res. Singol Card -->
                    <div class="res-card col" :key="'user-' + userObj.infoUser.id" v-for="userObj in usersArray">
                        <div class="card-container bg-debug col-12 d-flex">

                            <div class="d-flex card-style">

                                <!-- Res. Img -->
                                <div class="res-img">
                                    <img src="images/restaurant_placeholder_home.jpg"
                                        v-if="userObj.infoUser.image_path == null">
                                    <img :src="'images/' + userObj.infoUser.image_path" v-else>
                                </div>
                                <!-- /Res. Img -->

                                <!-- Res.Text -->
                                <div class="res-text">
                                    <router-link class="nav-link" :to="{
                                        name: 'menu',
                                        params: {
                                            slug: userObj.infoUser.slug,
                                            id: userObj.infoUser.id,
                                            categories: userObj.categoriesUser

                                        }
                                    }">
                                        <h4 class="res-name">{{ userObj.infoUser.name }}</h4>
                                        <span class="res-adress">{{ userObj.infoUser.address }}</span> <br>
                                        <span class="res-cat">
                                            <span class="mr-2" v-for="userCat in userObj.categoriesUser"
                                                :key="'userCat' + userCat.id">
                                                {{ userCat.name }}
                                            </span>
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
            <!-- /TOP RATED RESTAURANTS -->

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
    components: {
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

            apiUrl: "http://127.0.0.1:8000/api/homepage",
            urlHome: "http://127.0.0.1:8000/api/homepage",
            urlCat: "http://127.0.0.1:8000/api/categoryUser/",
            categoriesUserUrl: "http://127.0.0.1:8000/api/categoryUser/",
            prova: "http://127.0.0.1:8000/api/advHomeSearch/",
            categoriesArray: [],
            usersArray: [],
            categoriesLoading: false,

            searchedRestaurant: [],
            searchedCategories: [],

        }
    },

    methods: {

        fillArrays(urlHome, urlCat) {
            let temporaryUserArray = [];
            let temporaryCatArray = [];

            axios.get(urlHome)
                .then(res => {

                    res.data.categories.forEach(el => {
                        // this.categoriesArray.push(el);

                        // Aggiunto un attributo clicked alla categoria di ristorante
                        var booleanAttibute = {
                            clicked: false,
                        };

                        // Merge dei due oggetti
                        let merged = {
                            ...el, ...booleanAttibute
                        };

                        this.categoriesArray.push(merged);

                        if (this.categoriesArray.length >= 1) {
                            this.categoriesLoading = true;
                        }
                        // console.log(this.categoriesArray);
                    });

                    res.data.users.forEach(user => {
                        // console.log('urlCat', res.data);
                        temporaryUserArray.push(user);
                        // console.log('TempApi', temporaryUserArray);
                    });

                    // console.log('Temp:', temporaryUserArray);
                    temporaryUserArray.forEach(user => {
                        // console.log('URLCAT:',urlCat,user.id);
                        var obj = user;

                        axios.get(this.categoriesUserUrl + user.slug, obj)
                            .then(res => {
                                let tempCatArrayUser = [];
                                // console.log('urlCat-obj', obj);
                                res.data.categories.forEach(cat => {
                                    // console.log('RES CATURL:', cat);
                                    tempCatArrayUser.push(cat);
                                });

                                let catIdArray = []
                                tempCatArrayUser.forEach(id => {
                                    catIdArray.push(id.id);
                                });
                                // console.log(tempCatArrayUser);

                                var merge = { 'infoUser': obj, 'categoriesUser': tempCatArrayUser, 'comparisonId': catIdArray }
                                this.usersArray.push(merge);

                            });
                    });

                });

        },

        searchRestaurant(cat){

            console.log(cat);

            if (!this.searchedCategories.includes(cat.id)) {
                this.searchedCategories.push(cat.id);
                cat.clicked = true;
            } else {
                const index = this.searchedCategories.indexOf(cat.id);
                if (index > -1) {
                    this.searchedCategories.splice(index, 1);
                    console.log(this.searchedCategories);
                }
                cat.clicked = false;
            };

            console.log(this.searchedCategories);

            this.searchedRestaurant = [];
            this.usersArray.forEach(el => {
                if(this.searchedCategories.length > 0 && this.searchedCategories.every(id => el.comparisonId.includes(id))) {
                    this.searchedRestaurant.push(el);
                };
            });
        },

    },

    mounted() {
        this.fillArrays(this.urlHome, this.urlCat);
    },
}


</script>

<style lang='scss' scoped>
  @import 'resources/sass/front/_variables.scss';

  /* Categories and Restaurants */
  .cat-res {
      background-color: #F9FAFC;
      display: flex;
      flex-direction: column;
  }

  hr {
      border: 0.8px solid $tertiary-color;
      border-radius: 4px;
      width: 90%;
  }

  /* Categories */
  .categories {
      margin-top: 75px;
      margin-bottom: 75px;
  }

  .cat-title h1 {
      color: black;
  }

  .cat-title p {
      font-size: 1.125rem;
      color: black;
  }

  .cat-cards {
      height: 300px;
      position: relative;
      cursor: pointer;

      img {
          height: 100%;
          width: 250px;
          border-radius: 20px;
          background-attachment: fixed;
          border: 5px solid #f9fafc;

          &.active {
              border: 5px solid $tertiary-color;
          }
      }

      p {
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
      color: $tertiary-color  !important;
  }

  /* Restaurants */
  .restaurants {
      margin-top: 75px;
      margin-bottom: 75px;
  }

  .res-title h2 {
      color: black;
  }

  .res-title p {
      font-size: 1.125rem;
      color: black;
  }

  .res-card {
      padding: 20px;
  }

  .card-style {
      background-color: white;
      width: 100%;
      border-radius: 10px;
      overflow: hidden;
      border: 1px solid $tertiary-color;
  }

  .card-container {
      padding-right: 0px;
      padding-left: 0px;
  }

  /* Res. Img */

  .res-img {
      width: 50%;
      height: 150px;
  }

  .res-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
  }

  /* Res. Text */
  .res-text {
      color: black;
      margin: 0px 0px 0px 10px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 5px;
      width: 50%;
  }

  .res-name {
      font-size: 1.1rem;
  }

  .res-cat span {
      background-color: $tertiary-color;
      border-radius: 6px;
      padding: 2px 10px;
      color: white;
      font-size: .7rem;
  }
  </style>
