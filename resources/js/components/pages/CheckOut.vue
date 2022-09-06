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

                <form class="mx-3">

                    <div class="form-group">
                        <label for="inputName">Name on Card</label>
                        <input type="text" class="form-control" id="inputName" placeholder="First and Last Name">
                    </div>


                    <div class="form-group">
                        <label for="inputCNumber">Card Number</label>
                        <input type="text" class="form-control" id="inputCNumber" placeholder="Card Number">
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputMM">Month</label>
                            <input type="text" class="form-control" id="inputMM" placeholder="MM">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="inputYYYY">Year</label>
                            <input type="text" class="form-control" id="inputYYYY" placeholder="YYYY">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputCVC">Security Code</label>
                            <input type="text" class="form-control" id="inputCVC" placeholder="CVC">
                        </div>
                        <div>
                            IMMAGINE CARTA
                        </div>
                    </div>
                </form>

            </div>



        </div>









        <div class="recap-spece">
            <SummaryComp/>
        </div>

    </section>
</template>

<script>


import SummaryComp from "../partials/SummaryComp.vue";

export default {
    components: { SummaryComp }
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
