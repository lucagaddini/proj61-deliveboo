<template>

  <div class="home">

    <!-- Jumbotron -->
    <section class="herobanner">
        <div class="container col-xxl-8 pr-5 px-sm-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">

                <div class="col-10 col-sm-8 col-lg-6">
                </div>

                <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Il cibo che ami a Domicilio</h1>
                <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate distinctio repudiandae perferendis quibusdam voluptas. Veritatis, enim rerum. Hic consectetur incidunt impedit, alias ratione tenetur ex praesentium nisi culpa vero aliquid?</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                    <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Inserisci il tipo di piatto" aria-label="Search">
                    <button class="btn btn_custom_secondary" type="submit">Trova</button>
                    </form>

                </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /Jumbotron -->

  </div>

</template>

<script>

export default {
    name: 'HeroComp'
}

</script>

<style lang="scss" scoped>

@import 'resources/sass/front/_variables.scss';

/* Jumbotron */
.herobanner{
  background-image: url('/assets/img/banner.jpg');
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}

h1{
  color: $fifth-color;
}

.lead{
  color: white;
}

</style>

