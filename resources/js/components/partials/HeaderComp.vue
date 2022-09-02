<template>
  <header>

    <nav class="navbar navbar_custom navbar-expand-md navbar-dark shadow-sm">
        <div class="container-fluid">

            <!-- Left Side -->
            <router-link class="navbar-brand" :to="{name: 'search'}">
                <img src="/assets/img/logo.png" width="40px" class="d-inline-block align-center" alt="DeliveBoo Logo">
                <strong>DeliveBoo</strong>
            </router-link>
            <!-- /Left Side -->

            <!-- Hamburger -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- /Hamburger -->

            <!-- Right Side -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                </ul>

                <ul class="navbar-nav ml-auto">

                    <!-- Login and Cart -->
                        <li class="nav-item">
                            <a class="nav-link" href="/login">  <strong>Accedi</strong> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/register">  <strong>Registrati</strong> </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    <!-- /Login and Cart -->

                </ul>

            </div>
            <!-- /Right Side -->

        </div>
    </nav>

  </header>
</template>

<script>
export default {
    name: 'HeaderComp'
}
</script>

<style lang='scss' scoped>

@import 'resources/sass/front/_variables.scss';

nav{
    background-color: $primary-color;
}

a{
    color: white !important;
}

</style>

