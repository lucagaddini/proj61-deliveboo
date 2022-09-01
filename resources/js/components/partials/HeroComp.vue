<template>

  <div class="home">

    <!-- Jumbotron -->
    <section class="herobanner">
        <div class="container col-xxl-8 pr-5 px-sm-4 ">
            <div class="row align-items-center g-5">

                <div class="col-12 col-md-6 p-4">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Il cibo che ami a Domicilio</h1>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate distinctio repudiandae perferendis quibusdam voluptas. Veritatis, enim rerum. Hic consectetur incidunt impedit, alias ratione tenetur ex praesentium nisi culpa vero aliquid?</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">

                        <!-- <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Inserisci il tipo di piatto" aria-label="Search">
                        <button class="btn btn_custom_secondary" type="submit">Trova</button>
                        </form> -->

                    </div>
                </div>

                <div class="logo-hero col-12 col-md-6 d-none d-md-block">
                    <img src="/assets/img/logo-hero.png">
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

  background-color: $fourth-color;

  .logo-hero{
    
    img{
    width: 100%;
    }
  }
}

h1{
  color: $fifth-color;
}

.lead{
  color: white;
}

</style>

