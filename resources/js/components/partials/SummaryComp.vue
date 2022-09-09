<template>
  <div class="m-4">
    <div class="">
      <div class="cart-container bg-light">
        <div class="cart-title bg-dark p-1">
          <h4>Riepilogo Ordine</h4>
          <span>{{ this.$route.params.name }}</span>
        </div>
        <div class="container list-selected-item d-flex flex-column">
          <!-- Singol Item -->
          <div
            v-for="item in cartArray"
            :key="'itemId-' + item.id"
            class="my-1 single-item"
          >
            <div class="d-flex justify-content-between">
              <div class="d-flex">
                <!-- ICONA PER ELIMINARE L\'ELEMENTO -->
                <div>
                  <a class="mx-2"
                  v-if="cardVerified === false"
                  @click="removeFromCart(item)"
                    ><i class="fa-solid fa-trash"></i
                  ></a>
                </div>

                <!-- NOME PRODOTTO-->
                <div>
                  <h6 class="mx-2">{{ item.name }}</h6>
                </div>
              </div>

              <!-- PREZZO PRODOTTO-->
              <div>
                <h6>{{ (item.quantity * item.price).toFixed(2) }} &euro;</h6>
              </div>
            </div>

            <div class="text-center">
              <span>Quantità: </span>

              <a id="decrease-item"
                class="mx-2"
                v-if="item.quantity > 1 && cardVerified === false"
                @click="decreaseQuantity(item)"
                ><i class="fa-solid fa-circle-minus btn-delete-custom"></i>
              </a>

              <span>{{ item.quantity }}</span>

              <a id="increase-item"
              class="mx-2 addtocart"
              v-if="cardVerified === false"
              @click="increaseQuantity(item)">
                <i class="fa-solid fa-circle-plus"></i>
              </a>

            </div>
          </div>
          <!-- /Singol Item -->
        </div>

        <!-- Order e SubTotale -->
        <div class="ordernow-sub-button-container container">
          <div class="subtotal d-flex justify-content-between">
            <h6 class="mt-2">Costi Spedizione:</h6>
            <h6 class="mt-2">{{ shippingFee }} &euro;</h6>
          </div>
          <div class="subtotal d-flex justify-content-between">
            <h6 class="mt-2">Subtotale:</h6>
            <h6 class="mt-2">{{ subtotalCart }} &euro;</h6>
          </div>

          <div
            v-if="cardVerified && orderCustomerInfo.name != null"
            class="buy-now"
          >
            <a @click="saveOrderApi()" class="p-1 mt-2 font-weight-bold"
            data-toggle="modal" data-target="#ModalSucces"
              >Completa e Paga</a
            >
          </div>
        </div>
        <!-- /Order e SubTotale -->
      </div>
    </div>

    <!-- Modal -->
    <div
      class="modal fade"
      id="ModalSucces"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <h5 v-if="(paymentStatusCheck === true)" class="modal-title" id="exampleModalLongTitle">Pagamento avvenuto con successo!</h5>
            <h5 v-else class="modal-title" id="exampleModalLongTitle">Errore nel Pagamento</h5>

            <!-- <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button> -->
          </div>

          <div v-if="(paymentStatusCheck === true)" class="modal-body">Il pagamento di {{ subtotalCart }} &euro; è avvenuto con successo</div>
          <div v-else class="modal-body">L'ordine non è stato salvato, verifica i dati ordine ed la carta inserita.</div>

          <div class="modal-footer">

              <button
                  v-if="(paymentStatusCheck === true)"
                  data-dismiss="modal"
                  class="btn btn-success"
                  @click="goToHome()">
                  Vai alla home
              </button>

            <button
              v-else
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
              @click="activeField()"
            >
              Riprova
            </button>

          </div>
        </div>
      </div>
    </div>

  </div>
</template>

<script>

import router from '../../routes';

export default {
  data() {
    return {
      cartArray: [],
      shippingFee: 5,
      paymentStatusCheck: {},
      restaurantInfoParams: this.$route.params,
      orderUrl: "http://127.0.0.1:8000/api/saveOrder/",
    };
  },
  props: {
    orderCustomerInfo: Object,
    cardVerified: Boolean,
  },
  methods: {
    setCart() {
      this.cartArray = JSON.parse(localStorage.getItem("cart"));
    },

    decreaseQuantity(item) {
      var existingCart = JSON.parse(localStorage.getItem("cart"));

      let itemToFind = existingCart.find(
        (oldItem) => oldItem["id"] === item.id
      );

      if (itemToFind && itemToFind.quantity > 1) {
        console.log("Prodotto gia presente");
        console.log("GIA PRESENTE", itemToFind);

        itemToFind.quantity--;

        console.log("DOPO --", itemToFind);

        // existingCart.push(newItem);
        localStorage.setItem("cart", JSON.stringify(existingCart));
      }
    },

    increaseQuantity(item) {
      var existingCart = JSON.parse(localStorage.getItem("cart"));

      let itemToFind = existingCart.find(
        (oldItem) => oldItem["id"] === item.id
      );

      if (itemToFind) {
        console.log("Prodotto gia presente");
        console.log("GIA PRESENTE", itemToFind);

        itemToFind.quantity++;

        console.log("DOPO ++", itemToFind);

        // existingCart.push(newItem);
        localStorage.setItem("cart", JSON.stringify(existingCart));
      }
    },

    removeFromCart(item) {
      var existingCart = JSON.parse(localStorage.getItem("cart"));
      // if(existingCart == null) existingCart = [];

      let itemToFind = existingCart.find(
        (oldItem) => oldItem["id"] === item.id
      );

      if (itemToFind) {
        console.log("Prodotto gia presente");
        console.log("GIA PRESENTE", itemToFind);

        var index = existingCart.indexOf(itemToFind);

        existingCart.splice(index, 1);

        console.log("CART:", existingCart);

        // existingCart.push(newItem);
        localStorage.setItem("cart", JSON.stringify(existingCart));

        if(existingCart.length == 0){
          this.goToHome()
        }

      }
    },

    saveOrderApi() {

      this.orderCustomerInfo.total = this.subtotalCart;

      const promise = new Promise((resolve, reject) => {
        axios.post(this.orderUrl, {
          customerInfo: this.orderCustomerInfo,
          cartInfo: this.cartArray,
        }).then(function (response) {
          if(response.statusText === "OK"){
            console.log("--->IF" , response.statusText);
            resolve(true);
          } else reject (false);
        })

      });

      promise.then(res => {
          console.log("response PROMISE", res)
          this.paymentStatusCheck = true;
        }).catch(err => {
          console.log("response PROMISE", err)
          this.paymentStatusCheck = false;
        })

    },

    activeField(){

        document.getElementById('order-info-name').removeAttribute("disabled","disabled");
        document.getElementById('order-info-surname').removeAttribute("disabled","disabled");
        document.getElementById('order-info-address').removeAttribute("disabled","disabled");
        document.getElementById('order-info-phone').removeAttribute("disabled","disabled");
        document.getElementById('order-info-email').removeAttribute("disabled","disabled");

        document.getElementById('save-data-button').removeAttribute("disabled","disabled");
        document.getElementById('save-data-button').classList.remove('d-none');

    },

    goToHome(){
      console.log("CLEAR CART FUNZIONE")
      localStorage.clear("cart");

      router.push({ name: 'search'});

    }

  },
  computed: {
    subtotalCart() {
      var subtotal = 0;

      if (!this.cartArray) {
        return subtotal;
      }

      if (this.cartArray.length > 0) {
        this.cartArray.forEach((item) => {
          subtotal += item.price * item.quantity;
        });

        subtotal += this.shippingFee;
      }

      return subtotal.toFixed(2);
    },
  },
  mounted() {
    setInterval(this.setCart, 500);
  },
};
</script>

<style lang="scss" scoped>
@import "resources/sass/front/_variables.scss";

.list-selected-item,
.ordernow-sub-button-container {
  background-color: lightgray !important;
}

.cart-container {
  width: 445px;
  height: auto;
  border-radius: 10px;
  overflow: hidden;
}

@media screen and (max-width: 524px) {

    .cart-container {
        width: 300px;
    }
}

.cart-title {
  text-align: center;
  line-height: 35px;
  color: white;
  height: fit-content;
}

/* Singol Item */

.single-item {
  border-top: 1px solid rgba($color: black, $alpha: 0.1);
  margin: 10px 0;
  padding: 5px;
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
  cursor: pointer;

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
