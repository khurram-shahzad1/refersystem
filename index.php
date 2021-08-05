<?php 
     if(!isset($_COOKIE['user_id'])){
         }else{
        header("Location: login.php");
         }
    
?>
<?php include('core/header.php');
?>
        <!--*********************************************************************************************************-->
        <!--************ CONTENT ************************************************************************************-->
        <!--*********************************************************************************************************-->
        <main id="ts-content">

            <!--HOW IT WORKS ****************************************************************************************-->
            <section id="how-it-works" class="ts-block ts-xs-text-center pb-5">
                <div class="container">
                    <div class="ts-title">
                        <h2>How to Earn</h2>
                    </div>
                    <!--end ts-title-->
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="ts-item" data-animate="ts-fadeInUp">
                                <div class="ts-item-content">
                                    <div class="ts-item-header">
                                        <figure class="icon">
                                            <span class="step" data-animate="ts-zoomIn">1</span>
                                            <div class="ts-circle__md" data-bg-color="#ebf1fe">
                                                <img style="width:50px;" src="assets/img/click.png" alt="">
                                            </div>
                                        </figure>
                                        <!--end icon-->
                                    </div>
                                    <!--end ts-item-header-->
                                    <div class="ts-item-body">
                                        <h4>Create Account</h4>
                                        <p>
                                            Crere your free account
                                        </p>
                                    </div>
                                    <!--end ts-item-body-->
                                </div>
                                <!--end ts-item-content-->
                            </div>
                            <!--end ts-item-->
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 col-md-4 col-xl-4">
                            <div class="ts-item" data-animate="ts-fadeInUp" data-delay="0.1s">
                                <div class="ts-item-content">
                                    <div class="ts-item-header">
                                        <figure class="icon">
                                            <span class="step" data-animate="ts-zoomIn">2</span>
                                            <div class="ts-circle__md" data-bg-color="#ebf1fe">
                                                <img style="width:50px;" src="assets/img/share.png" alt="">
                                            </div>
                                        </figure>
                                        <!--end icon-->
                                    </div>
                                    <!--end ts-item-header-->
                                    <div class="ts-item-body">
                                        <h4>Refer</h4>
                                        <p>
                                           Share your refer link and code to friends
                                        </p>
                                    </div>
                                    <!--end ts-item-body-->
                                </div>
                                <!--end ts-item-content-->
                            </div>
                            <!--end ts-item-->
                        </div>
                        <!--end col-xl-4-->
                        <div class="col-sm-6 offset-sm-4 col-md-4 offset-md-0 col-xl-4">
                            <div class="ts-item" data-animate="ts-fadeInUp" data-delay="0.2s">
                                <div class="ts-item-content">
                                    <div class="ts-item-header">
                                        <figure class="icon">
                                            <span class="step" data-animate="ts-zoomIn">3</span>
                                            <div class="ts-circle__md" data-bg-color="#ebf1fe">
                                                 <img style="width:50px;" src="assets/img/money.png" alt="">
                                            </div>
                                        </figure>
                                        <!--end icon-->
                                    </div>
                                    <!--end ts-item-header-->
                                    <div class="ts-item-body">
                                        <h4>Earn</h4>
                                        <p>
                                           Make money from per account registrations
                                        </p>
                                    </div>
                                    <!--end ts-item-body-->
                                </div>
                                <!--end ts-item-content-->
                            </div>
                            <!--end ts-item-->
                        </div>
                        <!--end col-xl-4-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </section>
            <!--END HOW IT WORKS ************************************************************************************-->
            <!--BUY NOW *********************************************************************************************-->
            <section id="buy-now" class="ts-block text-center py-5" data-bg-color="#fafafa">
                <div class="container">
                    <div class="ts-title mb-3">
                        <h2 class="mb-0">Buy The Script Now!</h2>
                    </div>
                    <!--end ts-title-->
                    <a href="https://codester.com/rohit8" class="btn btn-primary">Buy Now!</a>
                </div>
            </section>
            <!--END BUY NOW *****************************************************************************************-->

        </main>
        <!--end #content-->

     <?php include('core/footer.php');
     ?>
