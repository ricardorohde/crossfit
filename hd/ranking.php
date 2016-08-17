<?php
include("header-logado.php");
?>

<!--
==================================================
Global Page Section Start
================================================== -->
<section class="global-page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <h2>Ranking</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.php">
                                <i class="ion-ios-home"></i>
                                Home
                            </a>
                        </li>
                        <li>Login</li>
                        <li class="active">Ranking</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    </section><!--/#Page header-->

    <div class="container" style="margin-top: 60px; margin-bottom: 60px">
        <div class="row">
          <div class="col-xs-12 text-center">
            <h4 style="color: #fcfcfc; padding-bottom: 15px; text-transform: uppercase; font-family: 'Roboto', sans-serif;">
              Selecione a categoria do benchmark que deseja ranquear:
            </h4>
          </div>
          <div class="col-md-offset-4 col-md-4 col-xs-12 text-center">
            <select style="border-radius: 0; width: 80%; height: 100%;">
              <option value=""></option>
              <option value="challenge">CHALLENGE</option>
              <option value="girl">GIRL</option>
              <option value="hero">HERO</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-offset-3 col-md-6 col-xs-12">
            combo2
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12">
            ranking
          </div>
        </div>
    </div>



<?php
include ("footer-logado.php");
?>