<?php
/**
 * Hooks
 * @since 2.8
 */

if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! class_exists( 'HT_CTC_Animations' ) ) :

class HT_CTC_Animations {


    // public function __construct() {
        // $this->base();
    // }

    function animations( $a, $d, $i ) {
        ?>
        <style id="ht-ctc-animations">.ht_ctc_animation{animation-duration:1s;animation-fill-mode:both;animation-delay:<?= $d ?>;animation-iteration-count:<?= $i ?>;}</style>
        <?php $this->$a(); ?>
        <?php
    }

    function bounce() {
        ?>
        <style id="ht-ctc-an-bounce">@keyframes bounce{from,20%,53%,to{animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);transform:translate3d(0,0,0)}40%,43%{animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);transform:translate3d(0,-30px,0) scaleY(1.1)}70%{animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);transform:translate3d(0,-15px,0) scaleY(1.05)}80%{transition-timing-function:cubic-bezier(0.215,0.61,0.355,1);transform:translate3d(0,0,0) scaleY(0.95)}90%{transform:translate3d(0,-4px,0) scaleY(1.02)}}.ht_ctc_an_bounce{animation-name:bounce;transform-origin:center bottom}</style>
        <?php
    }

    function flash() {
        ?>
        <style id="ht-ctc-an-flash">@keyframes flash{from,50%,to{opacity:1}25%,75%{opacity:0}}.ht_ctc_an_flash{animation-name:flash}</style>
        <?php
    }

    function pulse() {
        ?>
        <style id="ht-ctc-an-pulse">@keyframes pulse{from{transform:scale3d(1,1,1)}50%{transform:scale3d(1.05,1.05,1.05)}to{transform:scale3d(1,1,1)}}.ht_ctc_an_pulse{animation-name:pulse;animation-timing-function:ease-in-out}</style>
        <?php
    }

    function heartbeat() {
        ?>
        <style id="ht-ctc-an-heartBeat">@keyframes heartBeat{0%{transform:scale(1)}14%{transform:scale(1.3)}28%{transform:scale(1)}42%{transform:scale(1.3)}70%{transform:scale(1)}}.ht_ctc_an_heartBeat{animation-name:heartBeat;animation-duration:calc(1s * 1.3);animation-duration:calc(var(1) * 1.3);animation-timing-function:ease-in-out}</style>
        <?php
    }

    function flip() {
        ?>
        <style id="ht-ctc-an-flip">@keyframes flip{from{transform:perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,-360deg);animation-timing-function:ease-out}40%{transform:perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-190deg);animation-timing-function:ease-out}50%{transform:perspective(400px) scale3d(1,1,1) translate3d(0,0,150px) rotate3d(0,1,0,-170deg);animation-timing-function:ease-in}80%{transform:perspective(400px) scale3d(.95,.95,.95) translate3d(0,0,0) rotate3d(0,1,0,0deg);animation-timing-function:ease-in}to{transform:perspective(400px) scale3d(1,1,1) translate3d(0,0,0) rotate3d(0,1,0,0deg);animation-timing-function:ease-in}}.ht_ctc_an_flip{backface-visibility:visible;animation-name:flip}</style>
        <?php
    }



}

// new HT_CTC_Animations();

endif; // END class_exists check