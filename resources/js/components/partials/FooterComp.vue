<template>

  <footer>

    <!-- Footer Links -->
    <div class="container">
      <div class="row">

        <!-- Links -->
        <div class="col-lg-12 col-xl-12 links">

          <div class="row">

            <div class="col-12 col-lg-4 col-xl-4">
              <nav class="link">
                <ul>
                  <h4>Quick Links</h4>
                  <li><a href="#">About us</a></li>
                  <li><a href="#">Help</a></li>
                  <li><a href="#">Contacts</a></li>
                </ul>
              </nav>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
              <nav class="link">
                <ul>
                  <h4>Contacts</h4>
                  <li><a href="#">DeliveBoo Inc</a></li>
                  <li><a href="#">333 567 893</a></li>
                  <li><a href="#">DeliveBoo S.R.L. Via Garibaldi 110, 37100</a></li>
                  <li><a href="#">deliveboo@gmail.com</a></li>
                </ul>
              </nav>
            </div>

            <div class="col-12 col-lg-4 col-xl-4">
              <nav class="social">
                <ul>
                  <h4>Follow Us</h4>
                  <div class="social-logo">
                    <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                  </div>
                </ul>
              </nav>
            </div>

          </div>

        </div>
        <!-- /Linkss -->

      </div>
    </div>
    <!-- /Footer Links -->

    <!-- Footer Payments and Other Links -->
    <div class="payments-other col-lg-12 col-xl-12">
        <hr>
        <div class="row">

            <!-- Payments -->
            <div class="col-12 col-lg-6">
                <nav class="payments d-flex justify-content-lg-start justify-content-center">
                    <ul>
                        <i class="fa-brands fa-cc-visa"></i>
                        <i class="fa-brands fa-cc-mastercard"></i>
                        <i class="fa-brands fa-cc-paypal"></i>
                        <i class="fa-brands fa-cc-amex"></i>
                    </ul>
                </nav>
            </div>
            <!-- /Payments -->

            <!-- Other Links -->
            <div class="col-12 col-lg-6">
                <nav class="other-links d-flex justify-content-lg-end justify-content-center">
                    <ul class="d-sm-flex">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">DeliveBoo Inc</a></li>
                    </ul>
              </nav>
            </div>
            <!-- /Other Links -->

        </div>
    </div>
    <!-- /Footer Payments and Other Links -->

  </footer>

</template>

<script>
export default {
    name: 'FooterComp'
}
</script>

<style lang="scss" scoped>

footer{
    background-color: #00D7C7;
    color: black;
}

/* Links */
.links{
    margin-top: 70px;
    margin-bottom: 50px;
}

h4{
    text-transform: uppercase;
    font-weight: bold;
    font-size: 1.2rem;
    margin-bottom: 20px;
}

.links nav{
    margin-bottom: 50px;
}

.links li{
    margin-bottom: 10px;
}

.link a{
    color: black;
    text-decoration: none;

    &:hover{
        text-decoration: underline;
    }
}

ul{
    list-style: none;
}

/* Links Contacts */
.social div li a{
    display: flex;
}

.social i{
    font-size: 1.8rem;
    margin-right: 20px;
}

.social-logo{
    color: white;
    display: flex;
}

.social a{

    color: black;
    text-decoration: none;

    &:hover{
        opacity: 50%;
    }
}

/* Payments-Other */
.payments-other{
    width: 90%;
    margin: 0 auto;
}

hr{
    border: 0.8px solid #FF9D22;
    border-radius: 4px;
}

.prova{
    display: flex;
    justify-content: space-between;
}

/* Payments */
.payments i{
    font-size: 2.2rem;
    margin: 0px 20px 6px 0px;
}

.payments i{
    color: black;
    text-decoration: none;
}

/* Other Links */
.other-links a{
    margin-right: 25px;
    color: black;
    text-decoration: none;

    &:hover{
        text-decoration: underline;
    }
}

.other-links li{
    margin-top: 5px;
}

</style>

