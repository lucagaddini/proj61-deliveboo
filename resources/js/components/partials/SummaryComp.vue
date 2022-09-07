<template>
    <div class="col-lg-4 cart">
        <div class="container">
            <div class="cart-container bg-light m-5">
                <div class="cart-title bg-dark p-1">
                    <h4>Riepilogo Ordine</h4>
                    <span>{{this.$route.params.name}}</span>
                </div>


                <div class="container list-selected-item d-flex flex-column">
                    <!-- Singol Item -->
                    <div v-for="item in cartArray" :key="'itemId-' + item.id"
                        class="d-flex justify-content-between singol-item">

                        <div class="d-flex justify-content-start">
                            <!-- ICONA PER ELIMINARE L\'ELEMENTO -->
                            <div>
                                <a class="mx-2" @click="removeFromCart(item)"><i class="fa-solid fa-trash"></i></a>
                            </div>

                            <!-- NOME PRODOTTO-->
                            <div>
                                <h6 class="mx-2">{{ item.id }} - {{ item.name }} </h6>
                            </div>

                            <div>
                                <a class="mx-2" v-if="item.quantity > 1" @click="decreaseQuantity(item)"><i
                                        class="fa-solid fa-circle-minus btn-delete-custom"></i>
                                </a>

                                <span>{{ item.quantity }}</span>

                                <a class="addtocart" @click="increaseQuantity(item)">
                                    <i class="fa-solid fa-circle-plus"></i>
                                </a>
                            </div>

                        </div>

                        <!-- PREZZO PRODOTTO-->
                        <div>
                            <h6>{{ item.price * item.quantity }} &euro;</h6>
                        </div>

                    </div>
                    <!-- /Singol Item -->


                </div>

                <!-- Order e SubTotale -->
                <div class="ordernow-sub-button-container container">
                    <div class="subtotal d-flex justify-content-between">
                        <h6 class="mt-2">Costi Spedizione: </h6>
                        <h6 class="mt-2"> {{ shippingFee }} &euro;</h6>
                    </div>
                    <div class="subtotal d-flex justify-content-between">
                        <h6 class="mt-2">Subtotale: </h6>
                        <h6 class="mt-2"> {{ subtotalCart }} &euro;</h6>
                    </div>

                    <div v-if="cardVerified && orderCustomerInfo.name != null" class="buy-now">
                        <a @click="saveOrderApi()" class="p-1 mt-2 font-weight-bold" >Completa e Paga</a>
                    </div>
                </div>
                <!-- /Order e SubTotale -->
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            cartArray: [],
            shippingFee: 5,
            restaurantInfoParams: this.$route.params,
            orderUrl: "http://127.0.0.1:8000/api/saveOrder/",
        }
    },
    props:{
        orderCustomerInfo: Object,
        cardVerified: Boolean,
    },
    methods: {

        setCart() {
            this.cartArray = JSON.parse(localStorage.getItem("cart"));
        },

        decreaseQuantity(item) {

            var existingCart = JSON.parse(localStorage.getItem("cart"));

            let itemToFind = existingCart.find(oldItem => oldItem['id'] === item.id);

            if (itemToFind && itemToFind.quantity > 1) {

                console.log('Prodotto gia presente');
                console.log('GIA PRESENTE', itemToFind);

                itemToFind.quantity--;

                console.log('DOPO --', itemToFind);

                // existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));
            }
        },

        increaseQuantity(item) {

            var existingCart = JSON.parse(localStorage.getItem("cart"));

            let itemToFind = existingCart.find(oldItem => oldItem['id'] === item.id);

            if (itemToFind) {

                console.log('Prodotto gia presente');
                console.log('GIA PRESENTE', itemToFind);

                itemToFind.quantity++;

                console.log('DOPO ++', itemToFind);

                // existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));
            }
        },

        removeFromCart(item) {

            var existingCart = JSON.parse(localStorage.getItem("cart"));
            // if(existingCart == null) existingCart = [];

            let itemToFind = existingCart.find(oldItem => oldItem['id'] === item.id);

            if (itemToFind) {

                console.log('Prodotto gia presente');
                console.log('GIA PRESENTE', itemToFind);

                var index = existingCart.indexOf(itemToFind);

                existingCart.splice(index, 1);

                console.log('CART:', existingCart);

                // existingCart.push(newItem);
                localStorage.setItem("cart", JSON.stringify(existingCart));
            }
        },

        saveOrderApi(){
            axios.post(this.orderUrl, {
                
                    customerInfo: this.orderCustomerInfo,
                    cartInfo: this.cartArray,
            

            })
                .then(function (response){
                    console.log(response);
                });
        }


    },
    computed: {

        subtotalCart() {
            var subtotal = 0;

            if (!this.cartArray) { return subtotal; }

            if (this.cartArray.length > 0) {

                this.cartArray.forEach(item => {
                    subtotal += item.price * item.quantity;
                });

                subtotal+= this.shippingFee;

            }

            return subtotal;
        }
    },
    mounted() {
        setInterval(this.setCart, 500);
    }
};
</script>

<style lang="scss" scoped>
@import "resources/sass/front/_variables.scss";

.cart {
    margin-top: 50px;
    margin-bottom: 50px;
}

.cart-container {
    width: 400px;
    height: auto;
    border-radius: 10px;
    overflow: hidden;
}

.cart-title {
    text-align: center;
    line-height: 35px;
    color: white;
    height: fit-content;
}

/* Singol Item */

.singol-item {
    border-bottom: 1px solid rgba($color: black, $alpha: .1);
    margin-bottom: 12px;
}

.list-selected-item {
    min-height: 30px;
    overflow-y: auto;
}

.btn-delete-custom {
    color: $primary-color;

    &:hover {
        color: red;
    }
}

/* Order e SubTotale */
.ordernow-sub-button-container {
    height: 120px;
    text-align: center;
    border-top: 1px solid $fifth-color;
}

.buy-now {
    width: 100%;

    a {
        text-decoration: none;
        display: block;
        color: white;
        background-color: $fifth-color;
        border: 1px solid $fifth-color;
        border-radius: 5px;

        &:hover {
            color: $fifth-color;
            background-color: white;
            border: 1px solid $fifth-color;
        }
    }
}
</style>
