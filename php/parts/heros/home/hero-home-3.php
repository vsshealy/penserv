<?php 
    /**
     * php/parts/heros/home/hero-home-3.php
     * @package PenServ
     * @author Scott Shealy
     * @version 1.1.0
     * Created | 8/7/2019
     * Updated | 
     * Notes | 
    **/
?>

<section id="hero-home-3" class="hero-home">
    <div class="wrapper-inner">
    
        <!-- OVERLAY -->
        <div class="hero-home-overlay">
            <div class="wrapper-inner">
                <div class="hero-home-overlay-1"></div>
                <div class="hero-home-overlay-2"></div>
                <div class="hero-home-overlay-3"></div>
                <div class="hero-home-overlay-4"></div>
                <div class="hero-home-overlay-5"></div>
            </div>
        </div>

        <!-- BACKGROUND -->
        <div class="hero-home-background">
            <div class="wrapper-inner">

                <div class="hero-home-background-image"></div>

                <div class="hero-home-background-video">
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/advisor01.mp4" type="video/mp4" />
                    </video>
                </div>
            </div>
        </div>

        <!-- TEXT -->
        <div class="hero-home-text">
            <div class="wrapper-content">
                <div class="wrapper-inner row align-items-center">
                    <div class="col-md-6">

                        <h1>We partner with financial advisors to provide seamless plan administration and recordkeeping services.</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veniam sed modi nisi porro sit officia accusantium consectetur neque doloribus qui possimus dolorem ea dolore aliquid dolorum amet, saepe id.</p>

                        <a href="/proposal" class="button-solid"><i class="fas fa-chevron-circle-right"></i> Request a Proposal</a>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>