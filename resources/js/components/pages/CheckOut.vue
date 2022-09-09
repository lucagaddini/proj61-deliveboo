<template>
    <section class="d-flex container flex-wrap">

        <div class="form-space m-4">

            <!-- FORM DATI UTENTE -->
            <div class="user-detail-container bg-light">
                <div class="title-card bg-dark text-white mb-2 p-2 container text-center">
                    <h4>Dettagli Ordine</h4>
                </div>

                <ValidationObserver v-slot="{ handleSubmit }">
                    <form @submit.prevent="handleSubmit(onSubmit)" class="p-3" id="checkout-form">

                        <!-- NOME E COGNOME -->
                        <div class="form-row">
                            <validationProvider name="Name" rules="required|alpha" v-slot="{ errors }" class="form-group col-md-6">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" id="order-info-name" placeholder="Nome"
                                    v-model="orderCustomerInfo.name">
                                <small>{{ errors[0] }}</small>
                            </validationProvider>

                            <validationProvider name="Surname" rules="required|alpha" v-slot="{ errors }" class="form-group col-md-6">
                                <label for="inputSurname">Cognome</label>
                                <input type="text" class="form-control" id="order-info-surname" placeholder="Cognome"
                                    v-model="orderCustomerInfo.surname">
                                <small>{{ errors[0] }}</small>
                            </validationProvider>
                        </div>

                        <!-- EMAIL E TELEFONO -->
                        <div class="form-row">
                            <validationProvider name="email" rules="required|email" v-slot="{ errors }" class="form-group col-md-6">
                                <label for="inputEmail4">Email</label>
                                <input type="text" class="form-control" id="order-info-email" placeholder="Email"
                                    v-model="orderCustomerInfo.email">
                                <small>{{ errors[0] }}</small>
                            </validationProvider>

                            <validationProvider name="numero" rules="required|numeric" v-slot="{ errors }"  class="form-group col-md-6">
                                <label for="inputEmail4">Telefono</label>
                                <input type="text" class="form-control" id="order-info-phone" placeholder="Telefono"
                                    v-model="orderCustomerInfo.telephone_number">
                                <small class="danger">{{ errors[0] }}</small>
                            </validationProvider>
                        </div>

                        <validationProvider name="indirizzo" rules="required|alpha_dash|min:5" v-slot="{ errors }" class="form-group">
                            <label for="inputAddress">Indirizzo Completo</label>
                            <input type="text" class="form-control" id="order-info-address"
                                placeholder="Via e numero Civico" v-model="orderCustomerInfo.address">
                            <small class="danger">{{ errors[0] }}</small>
                        </validationProvider>

                        <input type="submit" @click="onSubmit()" id="save-data-button" class="btn buy-now my-3"
                            value="Salva dati" />
                        <!-- <button class="buy-now" @click="saveData()">Salva dati</button> -->
                    </form>
                </ValidationObserver>

            </div>

            <!-- //FORM DATI UTENTE -->

            <!-- FORM DATI CARTA -->
            <div class="card-detail-container bg-light mt-5">
                <div class="title-card bg-dark text-white mb-2 p-2 container text-center">
                    <h4>Dettagli Pagamento</h4>
                </div>

                <Payment v-if="showDropIn" authorization="sandbox_zjqhxx8m_r75zzzxtvzc8dddc" :three-d-secure="false"
                    locale="it_IT" :three-d-secure-parameters="{
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
                    }" @load="onLoad" @loadFail="onLoadFail" @success="onSuccess" @error="onError">

                    <template v-slot:button="slotProps" v-if="(!cardVerified)">
                        <input type="submit" @click="slotProps.submit" class="btn buy-now mb-3"
                            value="Aggiungi Carta" />
                    </template>

                </Payment>

                <!-- <button @click="deleteInstance" class="btn btn-danger">
                        Delete instance
                    </button> -->

            </div>
            <!-- //FORM DATI CARTA -->

        </div>

        <div class="recap-space">
            <SummaryComp :orderCustomerInfo="this.orderCustomerInfo" :cardVerified="this.cardVerified" />
        </div>

    </section>
</template>


<script>
import SummaryComp from "../partials/SummaryComp.vue";
import Payment from "../partials/Payment.vue";

export default {
    components: { SummaryComp,Payment,  },
    data () {
        return {
            instance: null,
            showDropIn: true,
            cardVerified: false,
            orderCustomerInfo: {
                name: "",
                surname: "",
                telephone_number: "",
                email: "",
                address: "",
                total: 0
            },
        }
  },
  methods: {
    onSubmit(){

        let patternDomain = /[a-zA-Z]/g;
        let patternNumber = /^[0-9]+$/;
        let domain = this.orderCustomerInfo.email.slice(this.orderCustomerInfo.email.lastIndexOf(".")+1);


        if( patternNumber.test(this.orderCustomerInfo.telephone_number) === true && this.orderCustomerInfo.address !="" && this.orderCustomerInfo.name !="" && this.orderCustomerInfo.surname !="" && ( this.orderCustomerInfo.email.includes('@') && this.orderCustomerInfo.email.includes('.', this.orderCustomerInfo.email.indexOf('@')) &&
          (patternDomain.test(domain) === true && domain.length > 1)
        )


        ){

        document.getElementById('order-info-name').setAttribute("disabled","disabled");
        document.getElementById('order-info-surname').setAttribute("disabled","disabled");
        document.getElementById('order-info-address').setAttribute("disabled","disabled");
        document.getElementById('order-info-phone').setAttribute("disabled","disabled");
        document.getElementById('order-info-email').setAttribute("disabled","disabled");

        document.getElementById('save-data-button').setAttribute("disabled","disabled");
        document.getElementById('save-data-button').classList.add('d-none');

        console.log(this.orderCustomerInfo);

        }

    },

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
.card-detail-container {
    border-radius: 10px;
    // padding: 20px;
    background-color: lightgray !important;

    .title-card {
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

    &:hover {
        color: $fifth-color;
        background-color: white;
        border: 1px solid $fifth-color;
    }
}
</style>
