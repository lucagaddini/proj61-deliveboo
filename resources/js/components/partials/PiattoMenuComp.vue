<template>
    <section>

        <div class="portata-title text-uppercase">
            <h3>{{course.name}}</h3>
        </div>

        <div class="row product-list">
            <!-- single-card -->
            <div class="col-lg-4 col-sm-6 col-12 my-card"
                v-for="item in filteredMenu"
                :key="'item'+item.id+item.name">
                <section class="panel my-3">
                    <div class="pro-img-box d-flex justify-content-center">
                        <img :src="'/images/'+item.image_path" />
                        <i v-if="item.vegetarian == true" class="fa-solid fa-leaf icon-vegetarian"></i>


                        <div v-if="(!exCart == [] && exCart[0].restaurant_id != item.user_id)">
                            <a class="addtocart" data-toggle="modal" :data-target="`#ModalDelete-item`+item.id">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <div v-else>
                            <a class="addtocart"
                                @click="addToCart(item)">
                                <i class="fa fa-shopping-cart"></i>
                            </a>
                        </div>

                        <span class="price text-center">
                            <span>{{ item.price }}&euro;</span>
                        </span>

                    </div>

                    <div class="panel-body text-center">
                        <h4 class="pro-title px-1">
                            {{ item.name }}
                        </h4>

                        <p>
                            {{shortContent(item.description)}}
                        </p>
                    </div>
                </section>

                <!-- MODAL PER SVUOTAMENTO CARRELLO A SEGUITO DEL CAMBIO RISTORANTE -->
                <div class="modal fade" :id="`ModalDelete-item`+item.id" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">ATTENZIONE!</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                            <div class="modal-body">
                                <p> Non puoi aggiungere al carrello Prodotti di Ristoranti diversi.</p>
                                <p> Per aggiungere il prodotto {{item.name}} al carrello devi quindi svuotarlo</p>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn gray  btn-outline-secondary" data-dismiss="modal">Annulla</button>
                                <button type="submit" class="btn btn-outline-danger" data-dismiss="modal" @click="emptyCart()">Svuota</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- //single-card -->
        </div>

    </section>
</template>

<script>
export default {
    props:{
        course: Object,
        userId: Number,
        userSlug: String,
    },
    data(){
        return{
            filteredMenu: [],
            courseName: '',
            itemsUrl: "http://127.0.0.1:8000/api/itemsUser/",
            exCart: JSON.parse(localStorage.getItem("cart")),

        }
    },
    methods:{

        // Chiamata API che restituisce i piatti del ristorante scelto tramite ID ed della portata selezionata tramite ID
        getUserItems(url,slug,courseId) {
            axios.get(url+slug+'/'+courseId)
                .then(res => {
                    res.data.items.forEach(item => {
                        this.filteredMenu.push(item)
                    })
                });
        },

        shortContent(text){
            return text.substr (0,30) + "..."
        },

        addToCart(item) {

            var existingCart = JSON.parse(localStorage.getItem("cart"));

            if(existingCart == null) {
                existingCart = [];

                let newItem = {
                    id: item.id,
                    name: item.name,
                    price: item.price,
                    quantity: 1,
                    restaurant_id: item.user_id,
                    status: true
                }

                existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));

            }
            else if(existingCart[0].restaurant_id == this.userId) {
                console.log('RISTORANTE CORRETTO')

                let itemToFind = existingCart.find( oldItem => oldItem['id'] === item.id );

            if(itemToFind){

                console.log('Prodotto gia presente');
                console.log('GIA PRESENTE',itemToFind);

                itemToFind.quantity++;

                console.log('DOPO ++',itemToFind);

                // existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));


            } else{

                let newItem = {
                    id: item.id,
                    name: item.name,
                    price: item.price,
                    quantity: 1,
                    restaurant_id: item.user_id,
                    status: true
                }

                existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));
            }

            } else {

                console.log('RISTORANTE ERRATO')

            }

        },

        emptyCart(item) {

            localStorage.clear("cart");
            console.log('CARRELO CANCELLATO');
            location.reload();

        }
    },

    mounted(){
        this.getUserItems(this.itemsUrl,this.userSlug,this.course.id);

    },
    computed:{

  }

}
</script>

<style lang="scss" scoped>
    @import 'resources/sass/front/_variables.scss';

//portate cards
.portata-title {
    color: black;
    margin-top: 50px;
    margin-bottom: 25px;
}

/*panel*/
.panel {
    border: none;
    box-shadow: none;
    border: 1px solid $fifth-color;
    border-radius: 10px;
    height: 250px;
    width: 100%;
}

.panel-title {
    color: #2A3542;
    font-size: 14px;
}

.panel-body {
    display: flex;
    flex-direction: column;
    height: 55%;
    background-color: #F2F3F4;
    border-radius: 0px 0px 8px 8px;
    overflow-y: auto;
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
    left: 0;
    right: 0;
    bottom: -25px;
    margin: auto;
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
    position: absolute;
    top: 15px;
    right: 10px;

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

    .my-card {
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
</style>
