<?php @include 'header.php'?>
<section class="parallax about_bg">
    <div class="container">
        <div class="headings blogs">
            <h1 class="main_title white">Styling Harvey Nichols</h1>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel">
                    <div class="item">
                        <div class="img_container">
                            <div class="background">
                                <div class="bg_images blog_detail_1" title="Our Work"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_container">
                            <div class="background">
                                <div class="bg_images blog_detail_2" title="Our Work"></div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_container">
                            <div class="background">
                                <div class="bg_images blog_detail_3" title="Our Work"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-lg-3">
                <h3 class="title">About me</h3>
                <div class="text-center p-3">
                    <div class="img_circle">
                        <figure>
                            <img src="img/profile_img.jpg" alt="Danny" title="Danny">
                        </figure>
                    </div>
                </div>
                <div class="text-center">
                    <p>Fusce id mauris auctor, sollicitudin sit amet, hendrerit risus. Aenean auctor erat. Cras dapibus dolor commodo.</p>
                </div>
            </div>
            <div class="col-md-8 col-lg-9">
                <p>Integer eros libero, condimentum a libero semper, porttitor sodales tellus. Integer consequat, lorem rmentum pellenesque, arcu sem porta orci, eu posuere diam arcu nec quam. Fusce lobortis eros nec leo hendrerit, nec varius leo interdum. Vivamus accums rhoncus est, sagittis iaculis massa aliquet et. Aenean diam quam, elementum id enim at arra vestibulum libero. Aliquam dapibus vel augue quis pharetra. Suspendisse accumsan mattis elit in tempor. Curabitur ut ligula leo. Cras feugiat sem sed ante aliquet.</p>
                <p>nteger eros libero, condimentum a libero semper, porttitor sodales tellus. Integer consequat, lorem asr fermentum pentesque arcu sem porta orci, eu posuere diam arcu nec quam. Fusce lobortis eros necleo hendrerit, nec varius leo interdum. Vivamus ase accumsan rhoncus est, sagittis iaculis massa aliquet et. Aenean diam quam, elementum id enim at, viverra vestibulum libero.</p>
                <p>Pellentesque on vitae eleifend ante, at pharetra nunc. Nam nisl dui, dapibus in feugiat laoreet, suscipit sed dui. Pellentesque erat libero, porttitor at metus nec, congue finibus justo. Integer vel orci sem. Vivamus laoreet lectus condimentum sem luctus vitae.</p>
                <p>nteger eros libero, condimentum a libero semper, porttitor sodales tellus. Integer consequat, lorem asr fermentum pentesque arcu sem porta orci, eu posuere diam arcu nec quam. Fusce lobortis eros necleo hendrerit, nec varius leo interdum. Vivamus ase accumsan rhoncus est, sagittis iaculis massa aliquet et. Aenean diam quam, elementum id enim at, viverra vestibulum libero.</p>
            </div>
        </div>
    </div>
</section>
<?php @include 'footer.php' ?>

<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        center: false,
        left: true,
        //stagePadding: 20,
        margin: 10,
        nav: true,
        dots: true,
        slideBy: 2,
        //autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            100: {
                items: 1,
                stagePadding: 15
            },
            576: {
                items: 1
            },
            767: {
                items: 1
            },
            990: {
                items: 1
                //margin: 15
            }
        }
    });
</script>
