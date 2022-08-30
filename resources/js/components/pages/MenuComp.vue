<template>
  <div>
    <!-- Immagine di testa (ristorante) -->
    <div class="jumbo">
        sono un jumbotron
    </div>
    <!-- /Immagine di testa (ristorante) -->

    <!-- Navbar per navigare fra le portate -->
    <nav class="container">
        sono una navbar
    </nav>
    <!-- /Navbar per navigare fra le portate -->

    <!-- Main con piatti e riepilogo -->
    <main class="container d-flex justify-content-between flex-column">
        <div class="row">
            <!-- Lista prodotto -->
            <section class="sx col-7">Lista prodotti</section>
            <!-- /Lista prodotto -->

            <!-- Riepilogo acquisti -->
            <section class="dx col-5">Recap pagamento</section>
            <!-- /Riepilogo acquisti -->
        </div>
    </main>
    <!-- /Main con piatti e riepilogo -->

  </div>
</template>

<script>
export default {
    name: 'MenuComp'
}
</script>

<style>

</style>
