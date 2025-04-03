<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Options -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="robots" content="noindex">
  <meta name="msapplication-TileColor" content="#ffc40d">
  <meta name="apple-itunes-app" content="app-id=1490483608">

  <!-- PWA Options -->
  <title>Kinesis Money Demo Clone</title>
  <meta name="description" content="Kinesis introduces a revolutionary monetary system backed by fully allocated physical gold and silver so everyone can experience the benefits of precious metals investment.">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/mist/legacy/png/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/mist/legacy/png/favicon-32x32-coral.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/mist/legacy/png/favicon-16x16-coral.png">
  <link rel="mask-icon" href="/assets/mist/legacy/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="theme-color" content="#EA5160">


  <!-- CSS -->
  <link rel="stylesheet" href="/assets/css/fontawesome/releases/v5.8.1/css/all.css" as="style" crossorigin="anonymous" integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="/assets/css/fontawesome/releases/v5.8.1/css/all.css" crossorigin="anonymous"
      integrity="sha384-Bx4pytHkyTDy3aJKjGkGoHPt3tvv6zlwwjc3iqN7ktaiEMLDPqLSZYts2OjKcBx1">
  </noscript>
  <link rel="stylesheet" type="text/css" href="/assets/css/fonts/HarmonyOS/stylesheet.css">


  <link rel="stylesheet" crossorigin="" href="/assets/css/index-D04vYMJd.css">
  <link rel="manifest" href="/manifest.webmanifest">
  <link rel="stylesheet" crossorigin="" href="/assets/css/index-CcM7Y7xD.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/index-CxjVi7H7.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/scrollbar-OSsuDtBi.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/toastify.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/indiana.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/main.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/tooltip.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/tailwind.css">

  <style data-emotion="css-global" data-s="">
    @-webkit-keyframes mui-auto-fill {
      0% {
        display: block;
      }
    }

    @keyframes mui-auto-fill {
      0% {
        display: block;
      }
    }

    @-webkit-keyframes mui-auto-fill-cancel {
      0% {
        display: block;
      }
    }

    @keyframes mui-auto-fill-cancel {
      0% {
        display: block;
      }
    }
  </style>

  <link rel="stylesheet" crossorigin="" href="/assets/css/index-CVcrpNYJ.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/bootstrap-CkweRzzS.css">
  <style type="text/css">
    .float-tooltip-kap {
      position: absolute;
      width: max-content;
      /* prevent shrinking near right edge */
      max-width: max(50%, 150px);
      padding: 3px 5px;
      border-radius: 3px;
      font: 12px sans-serif;
      color: #eee;
      background: rgba(0, 0, 0, 0.6);
      pointer-events: none;
    }
  </style>
  <style type="text/css">
    .scene-nav-info {
      position: absolute;
      bottom: 5px;
      width: 100%;
      text-align: center;
      color: slategrey;
      opacity: 0.7;
      font-size: 10px;
      font-family: sans-serif;
      pointer-events: none;
      user-select: none;
    }

    .scene-container canvas:focus {
      outline: none;
    }
  </style>
  <style type="text/css">
    .graph-info-msg {
      top: 50%;
      width: 100%;
      text-align: center;
      color: lavender;
      opacity: 0.7;
      font-size: 22px;
      position: absolute;
      font-family: Sans-serif;
    }

    .scene-container .clickable {
      cursor: pointer;
    }

    .scene-container .grabbable {
      cursor: move;
      cursor: grab;
      cursor: -moz-grab;
      cursor: -webkit-grab;
    }

    .scene-container .grabbable:active {
      cursor: grabbing;
      cursor: -moz-grabbing;
      cursor: -webkit-grabbing;
    }
  </style>
</head>

<body style="">
  <div id="root">
    <section class="Toastify" aria-live="polite" aria-atomic="false" aria-relevant="additions text" aria-label="Notifications Alt+T"></section>
    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-o3cu8g">

      <main class="css-ng7pgk flex flex-row">
        <?php require(__DIR__ . "/sidebar.php") ?>

        <!-- <div class="MuiToolbar-root MuiToolbar-gutters MuiToolbar-regular css-p8ddbe"></div> -->
        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column page-content-container css-1ik2wyl w-full">
          <?php require(__DIR__ . "/header.php") ?>

          <div data-simplebar="init" class="css-1ejue6l simplebar-scrollable-y">
            <div class="simplebar-wrapper" style="margin: 0px;">
              <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
              </div>
              <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                  <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                    <div class="simplebar-content" style="padding: 0px;">
                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-direction-xs-row css-bxo018">
                        <?php require($page_path) ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="simplebar-placeholder" style="width: 1256px; height: 2262px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
              <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
              <div class="simplebar-scrollbar" style="height: 213px; transform: translate3d(0px, 482px, 0px); display: block;"></div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>

</html>