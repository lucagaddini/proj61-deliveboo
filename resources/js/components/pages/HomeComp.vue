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
                    :key="'user-'+userObj.infoUser.id"
                    v-for="userObj in usersArray">
                    <div class="card-container bg-debug col-12 d-flex">

                        <div class="d-flex card-style">

                            <!-- Res. Img -->
                            <div class="res-img">
                                <img src="images/restaurant_placeholder_home.jpg"
                                    v-if="userObj.infoUser.image_path == null">
                                <img :src="'images/'+userObj.infoUser.image_path"
                                    v-else>
                            </div>
                            <!-- /Res. Img -->

                            <!-- Res.Text -->
                            <div class="res-text">
                                <router-link class="nav-link"
                                :to="{
                                    name: 'menu',
                                    params:{
                                        slug:userObj.infoUser.slug,
                                        id:userObj.infoUser.id,
                                        categories:userObj.categoriesUser

                                    }
                                }">
                                    <h4 class="res-name">{{ userObj.infoUser.name }}</h4>
                                    <span class="res-adress">{{ userObj.infoUser.address }}</span> <br>
                                    <div class="res-cat-container">
                                        <span class="res-cat d-flex flex-wrap">
                                            <span class="mr-2 mt-2"
                                                v-for="userCat in userObj.categoriesUser"
                                                :key="'userCat'+userCat.id" >
                                                {{userCat.name}}
                                            </span>
                                        </span>
                                    </div>
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
            "slidesToShow": 5,
            "slidesToScroll": 1,
            "swipeToSlide": true,
            "centerMode": true,
            "centerPadding": "-75px",
            "touchMove": false,

            "responsive": [
                {
                    "breakpoint": 1200,
                    "settings": {
                        "slidesToShow": 4,
                        "centerPadding": '-40px',
                    }
                },
                {
                    "breakpoint": 991,
                    "settings": {
                        "slidesToShow": 3,
                        "centerPadding": '-35px',
                    }
                },
                {
                    "breakpoint": 767,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-1px',
                        "touchMove": true,
                        "arrows": true,
                        "speed": 500
                    }
                },
                {
                    "breakpoint": 600,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-5px',
                        "speed": 500,
                        "touchMove": true,
                        "arrows": false
                    }
                },
                {
                    "breakpoint": 520,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-50px',
                        "speed": 500,
                        "touchMove": true,
                        "arrows": false
                    }
                },
                {
                    "breakpoint": 440,
                    "settings": {
                        "slidesToShow": 2,
                        "centerPadding": '-85px',
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
        categoriesArray: [],
        usersArray: [],
        categoriesLoading: false

      }
    },

    methods:{
        // fillArrays(url){
        //     axios.get(url)
        //     .then(res=>{
        //         res.data.categories.forEach(el => {
        //             this.categoriesArray.push(el);
        //             if (this.categoriesArray.length >= 1){
        //                 this.categoriesLoading = true;
        //             }
        //             // console.log(this.categoriesArray);
        //         });
        //         res.data.users.forEach(el => {
        //             this.usersArray.push(el);
        //             // console.log(this.usersArray);
        //         });
        //     })
        // },

        fillArrays(urlHome,urlCat){
            let temporaryUserArray = [];
            let temporaryCatArray = [];

            axios.get(urlHome)
            .then(res=>{

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

                    if (this.categoriesArray.length >= 1){
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
                temporaryUserArray.forEach( user =>{
                // console.log('URLCAT:',urlCat,user.id);
                var obj = user;

                axios.get(this.categoriesUserUrl+user.slug,obj)
                .then(res=>{
                    let tempCatArrayUser = [];
                    // console.log('urlCat-obj', obj);
                    res.data.categories.forEach(cat => {
                    // console.log('RES CATURL:', cat);
                        tempCatArrayUser.push(cat);
                    });

                    var merge = {'infoUser':obj,'categoriesUser':tempCatArrayUser}
                    this.usersArray.push(merge);

                });
            });

            });

        },

        searchRestaurant(category_id){

            this.categoriesArray.forEach(el =>{
                if(el.id === category_id){
                    el.clicked = true;
                }
            })

            this.usersArray.forEach((userEl, i) => {

                userEl.categoriesUser.forEach(catUser => {

                    if(catUser.id === category_id){

                        if(!this.searchedRestaurant.includes(userEl)){

                            this.searchedRestaurant.push(userEl);

                        }else{

                            // console.log('CATEGORIA GIà SELEZIONATA');
                            // Se la categoria è già stata selezionata in passato
                            this.categoriesArray.forEach(catArrayEl =>{
                                if(catArrayEl.id === category_id){
                                    catArrayEl.clicked = false;
                                }
                            });

                            //
                            const index = this.searchedRestaurant.indexOf(userEl);
                            if (index > -1) {
                                this.searchedRestaurant.splice(index, 1);
                            }

                        }

                    };
                });

            });
        }
    },

    mounted(){
        // this.fillArrays(this.apiUrl);
        this.fillArrays(this.urlHome,this.urlCat);
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

@media screen and (max-width: 474px) {

    /* Restaurants */
    .res-card{
        padding: 20px 5px;
    }

    /* Res. Text */

    .res-text{
    margin: 0px 0px 0px 0px;
    padding: 1px;
    width: 50%;
    }

    .res-name{
        font-size: 1rem;
    }

    .res-adress{
        font-size: .8rem;
    }

    .res-cat span{
        font-size: .65rem;
    }

}

.res-cat-container{
    height: 60px;
    overflow-y: auto;
}

</style>
