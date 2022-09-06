<template>
    <section class="d-flex container-fluid">

        <div class="form-space m-5">

            <div class="user-detail-container bg-light">

                <h3 class="bg-dark text-white mb-4 p-2 container">Personal Details</h3>

                <form class="mx-3">

                    <div class="form-group">
                        <label for="inputName">First and Last Name</label>
                        <input type="text" class="form-control" id="inputName" placeholder="First and Last Name">
                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPhone">Phone</label>
                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Full Address</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCity">City</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="City">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputZip">Cap</label>
                            <input type="text" class="form-control" id="inputZip" placeholder="Cap">
                        </div>
                    </div>
                </form>

            </div>


            <div class="card-detail-container bg-light  mt-5">

                <h3 class="bg-dark text-white mb-4 container p-2">Card Details</h3>

                <Payment
                    v-if="showDropIn"
                    authorization="sandbox_zjqhxx8m_r75zzzxtvzc8dddc"
                    :three-d-secure="false"
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
                    <template v-slot:button="slotProps">
                        <input type="submit" @click="slotProps.submit" class="btn btn-warning" value="Completa ordine" />
                    </template>
                    </Payment>


            </div>
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

      setInterval(() => {
        this.showDropIn = true;
      }, 1000);
    }
  }
}
</script>

<style lang="scss" scoped>
@import 'resources/sass/front/_variables.scss';

.user-detail-container{
    border-radius: 10px;
    h3{
        border-radius:10px 10px 0 0;
    }
}
</style>
