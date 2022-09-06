<template>
    <section class="d-flex container">

        <div class="form-space m-5">

            <!-- FORM DATI UTENTE -->
            <div class="user-detail-container bg-light">

                <h4 class=" title-card bg-dark text-white mb-2 p-2 container">Dettagli Ordine</h4>

                <form class="mx-3">

                    <div class="form-group">
                        <label for="inputName">Nome e Cognome</label>
                        <input type="text" class="form-control" id="inputName" placeholder="Nome e Cognome">
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Telefono</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="Telefono">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Indirizzo Completo</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Indirizzo Completo">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">Città</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="Città">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputZip">CAP</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="CAP">
                        </div>
                    </div>
                </form>

            </div>

            <!-- //FORM DATI UTENTE -->

            <!-- FORM DATI CARTA -->
            <div class="card-detail-container bg-light mt-5 pb-4">

                <h4 class=" title-card bg-dark text-white m-1 container p-2">Dettagli Pagamento</h4>

                <Payment
                    v-if="showDropIn"
                    authorization="sandbox_zjqhxx8m_r75zzzxtvzc8dddc"
                    :three-d-secure="false"
                    locale="it_IT"
                    :three-d-secure-parameters="{
                        amount: 100, 
                        email: 'francois@witify.io', 
                        billingAddress: {
                        givenName: 'John',
                        surname: 'Doe',
                        phoneNumber: '515 515 1234',
                        streetAddress: '485 boul. dagenais E',
                        extendedAddress: '1',
                        locality: 'Laval',
                        region: 'QC',
                        postalCode: 'h7m5z5',
                        countryCodeAlpha2: 'CA'
                        }
                    }"
                    @load="onLoad"
                    @loadFail="onLoadFail"
                    @success="onSuccess"
                    @error="onError"
                    >

                    <template v-slot:button="slotProps"
                    v-if="(!cardVerified)">
                        <input type="submit" @click="slotProps.submit" class="btn buy-now mb-3" value="Aggiungi Carta" />
                    </template>
                    
                    

                    </Payment>

                    <!-- <button @click="deleteInstance" class="btn btn-danger">
                        Delete instance
                    </button> -->

            </div>
            <!-- //FORM DATI CARTA -->

        </div>

        <div class="recap-spece">
            <SummaryComp/>
        </div>

    </section>
</template>

<script>

import SummaryComp from "../partials/SummaryComp.vue";
import Payment from "../partials/Payment.vue";

export default {
    components: { SummaryComp,Payment },
    data () {
        return {
            instance: null,
            showDropIn: true,
            cardVerified: false
        }
  },
  methods: {

    onLoad (instance) {
      this.instance = instance;
    },

    onLoadFail (instance) {
      console.error('Load fail', instance);
    },

    onSuccess (payload) {
      console.log("Success!", payload.nonce);
      this.cardVerified = true;
    },

    onError (error) {
      console.error("Error:", error);
    },

    clearPaymentSelection () {
      if (this.instance != null) {
        this.instance.clearSelectedPaymentMethod();
      }
    },

    deleteInstance() {
      this.showDropIn = false;
      this.cardVerified = false;

      setInterval(() => {
        this.showDropIn = true;
      }, 1000);
    }
  }
}
</script>

<style lang="scss" scoped>
@import 'resources/sass/front/_variables.scss';

.user-detail-container,
.card-detail-container{
    border-radius: 10px;

    .title-card{
        border-radius: 10px 10px 0 0;
    }
}

.buy-now {
    width: 100%;
    text-decoration: none;
    display: block;
    color: white;
    background-color: $fifth-color;
    border: 1px solid $fifth-color;
    border-radius: 5px;

    &:hover{
        color: $fifth-color;
        background-color: white;
        border: 1px solid $fifth-color;
    }
}

[data-braintree-id="toggle"] {
  display: none;
}

</style>
