<template>
    <div class="col-lg-4 cart">
        <div class="container">
            <div class="cart-container">
                <h3 class="p-1">Order Summary</h3>

                <div class="list-selected-item container">

                    <!-- Singol Item -->
                    <div class="d-flex justify-content-between singol-item">

                        <div>
                            <p class="mx-2">Item</p>
                        </div>

                        <div>
                            <p>??&euro;</p>
                        </div>

                    </div>
                    <!-- /Singol Item -->

                </div>

                <!-- Order e SubTotale -->
                <div class="ordernow-sub-button-container container">
                    <div class="subtotal d-flex justify-content-between">
                        <p class="mt-2">Subtotal</p>
                        <p class="mt-2">??&euro;</p>
                    </div>

                    <div class="try">
                        <p class="p-1">ORDER NOW!</p>
                    </div>
                </div>
                <!-- /Order e SubTotale -->
            </div>
        </div>
    </div>
</template>

<script>
export default {};
</script>

<style lang="scss" scoped>
@import "resources/sass/front/_variables.scss";

.cart {
    margin-top: 50px;
    margin-bottom: 50px;
}

.cart-container {
    height: 300px;
    border: 1px solid $fifth-color;
    border-radius: 10px;
    overflow: hidden;
    background-color: #f2f3f4;
}

h3 {
    text-align: center;
    color: white;
    background-color: $primary-color;
    height: 40px;
}

/* Singol Item */

.singol-item{
    border-bottom: 1px solid rgba($color: black, $alpha: .1);
    margin-bottom: 12px;
}

.list-selected-item {
    height: 165px;
    overflow-y: auto;
}

/* Order e SubTotale */
.ordernow-sub-button-container {
    text-align: center;
    border-top: 1px solid $fifth-color;
}

.try {
    color: white;
    background-color: $fifth-color;
    border-radius: 5px;
}
</style>
