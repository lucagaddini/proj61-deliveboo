<template>
    <div class="col-lg-8">

        <div class="portata-title ">
            <h3>Starters</h3>
        </div>

        <div class="row product-list">

            <!-- single-card -->

            <div class="col-lg-4 col-sm-6 col-12 my-card">
                <section class="panel my-3">
                    <div class="pro-img-box d-flex justify-content-center">
                        <img src="images/pizza-0.jpg" />
                        <i class="fa-solid fa-leaf icon-vegetarian"></i>
                        <a href="#" class="addtocart">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </div>

                    <div class="panel-body text-center">
                        <h4>
                            <a href="#" class="pro-title px-1">
                                Leopard Shirt Dress pizza keba pizze e kebab super riga
                            </a>
                        </h4>
                        <span class="price text-center">
                            <span>$300.00</span>
                        </span>
                    </div>
                </section>
            </div>

            <!-- //single-card -->
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
    @import 'resources/sass/front/_variables.scss';

//portate cards
.portata-title {
    margin-top: 50px;
    margin-bottom: 25px;
}


/*panel*/
.panel {
    border: none;
    box-shadow: none;
    border: 1px solid $fifth-color;
    border-radius: 10px;
    height: 250px
}


.panel-title {
    color: #2A3542;
    font-size: 14px;
}

.panel-body {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 55%;
    background-color: #F2F3F4;
    border-radius: 0px 0px 8px 8px;
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
    bottom: -25px;
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
