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
  <link rel="stylesheet" type="text/css" href="/assets/fonts/HarmonyOS/stylesheet.css">


  <link rel="stylesheet" crossorigin="" href="/assets/css/index-D04vYMJd.css">
  <link rel="manifest" href="/manifest.webmanifest">
  <link rel="stylesheet" crossorigin="" href="/assets/css/index-CcM7Y7xD.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/index-CxjVi7H7.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/scrollbar-OSsuDtBi.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/toastify.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/indiana.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/main.css">
  <link rel="stylesheet" crossorigin="" href="/assets/css/tooltip.css">

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
    <div class="MuiDrawer-root MuiDrawer-anchorLeft MuiDrawer-docked css-1j49g8p">
      <div class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation0 MuiDrawer-paper MuiDrawer-paperAnchorLeft MuiDrawer-paperAnchorDockedLeft css-8iqf4a" style="--Paper-shadow: none;">
        <nav class="MuiList-root MuiList-padding MuiList-subheader css-12xfrhl">
          <li></li>
          <li class="MuiListSubheader-root MuiListSubheader-gutters MuiListSubheader-sticky css-1nd0s1k">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-fogay6">
              <div name="kinesis/logo" class="css-14q9gk1"><svg viewBox="0 0 203 199" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32px" width="32px" scale="0.1">
                  <title></title>
                  <desc>Created with Sketch.</desc>
                  <defs>
                    <polygon id="path-1__nHVvpoiu" points="0.1445 0.5061 139.144 0.5061 139.144 134.9991 0.1445 134.9991"></polygon>
                  </defs>
                  <g id="Logos__nHVvpoiu" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-558.000000, -234.000000)" id="Kinesis-K-Coral-RGB__nHVvpoiu">
                      <g transform="translate(558.000000, 233.000000)">
                        <polygon id="Fill-1__nHVvpoiu" fill="#EA5160" points="0 0.9993 0 168.5253 55.841 112.6833 55.841 0.9993"></polygon>
                        <polygon id="Fill-2__nHVvpoiu" fill="#EA5160" points="111.6828 0.9993 111.6828 56.8413 167.5248 0.9993"></polygon>
                        <g id="Group-5__nHVvpoiu" transform="translate(64.000000, 64.380000)">
                          <mask id="mask-2__nHVvpoiu" fill="white">
                            <use xlink:href="#path-1__nHVvpoiu"></use>
                          </mask>
                          <g id="Clip-4__nHVvpoiu"></g>
                          <path d="M114.1735,108.5621 L39.6385,0.5061 L0.1445,40.0001 L54.3285,119.0631 C62.1445,130.4701 73.4205,134.9991 85.5495,134.9991 L139.1445,134.9991 C129.8945,127.7771 120.2555,117.3811 114.1735,108.5621" id="Fill-3__nHVvpoiu" fill="#EA5160" mask="url(#mask-2__nHVvpoiu)"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg></div>
            </div>
          </li><a id="home" aria-label="Home" aria-current="page" class="MuiListItem-root MuiListItem-gutters css-1sjdrue active" href="/home" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/home.svg"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/home.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Home</span></div>
            </div>
          </a><a id="assets" aria-label="Assets" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/assets" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/assets.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/assets.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Assets</span></div>
            </div>
          </a><a id="exchange" aria-label="Exchange" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/pro" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/exchange.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/exchange.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Exchange</span></div>
            </div>
          </a><a id="virtualcard" aria-label="Virtual Card" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/kinesis-card" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/virtualcard.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/virtualcard.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Virtual Card</span></div>
            </div>
          </a><a id="earn" aria-label="Earn" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/earn" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/earn.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/earn.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Earn</span></div>
            </div>
          </a><a id="refer" aria-label="Refer" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/refer" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/refer.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/refer.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Refer</span></div>
            </div>
          </a><a id="yields" aria-label="Yields" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/yields" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/yields.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/yields.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Yields</span></div>
            </div>
          </a><a id="metalback" aria-label="Metalback" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/metalback" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Metalback/nav-metalback-on.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Metalback/nav-metalback-off.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Metalback</span></div>
            </div>
          </a><a id="payments" aria-label="Payments" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/payments" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/payments.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/payments.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Payments</span></div>
            </div>
          </a><a id="merchant" aria-label="Merchant" class="MuiListItem-root MuiListItem-gutters css-1sjdrue" href="/merchant" data-discover="true">
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l"><img class="css-1asbz9q" src="https://assets-kms.kinesis.money/Menu/Sidebar/selected/merchant.svg"><img class="css-m68tct" src="https://assets-kms.kinesis.money/Menu/Sidebar/default/merchant.svg">
              <div class="MuiListItemText-root css-1c1ma0l"><span class="MuiTypography-root MuiTypography-body1 MuiListItemText-primary css-ojyfgf">Merchant</span></div>
            </div>
          </a>
        </nav>
      </div>
    </div>
    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-o3cu8g">
      <header class="MuiPaper-root MuiPaper-elevation MuiPaper-elevation4 MuiAppBar-root MuiAppBar-colorPrimary MuiAppBar-positionFixed mui-fixed css-1o8h8o4" style="--Paper-shadow: 0px 2px 4px -1px rgba(0,0,0,0.2),0px 4px 5px 0px rgba(0,0,0,0.14),0px 1px 10px 0px rgba(0,0,0,0.12);">
        <div class="MuiToolbar-root MuiToolbar-gutters MuiToolbar-regular css-p8ddbe">
          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1lo7alb"><button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-1as7e4j" tabindex="0" type="button">Overview</button><button class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textSecondary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-ip102j" tabindex="0" type="button">Transactions</button></div>
          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-g804f4"><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation css-62xf9g" tabindex="0" type="button">Verify ID</button><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-106q6yo" tabindex="0" type="button"><span class="MuiButton-icon MuiButton-startIcon MuiButton-iconSizeMedium css-cveorv">
                <div name="Menu/MobileTopNav/Waffle" class="css-1ocx6oh"><svg width="16px" height="16px" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                    <title></title>
                    <g id="â† Icon__fiQwtikj">
                      <g id="Vector__fiQwtikj">
                        <path d="M2.87 2.31C2.87 2.61928 2.61928 2.87 2.31 2.87C2.00072 2.87 1.75 2.61928 1.75 2.31C1.75 2.00072 2.00072 1.75 2.31 1.75C2.61928 1.75 2.87 2.00072 2.87 2.31Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M12.2499 2.31C12.2499 2.61928 11.9992 2.87 11.6899 2.87C11.3807 2.87 11.1299 2.61928 11.1299 2.31C11.1299 2.00072 11.3807 1.75 11.6899 1.75C11.9992 1.75 12.2499 2.00072 12.2499 2.31Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M7.55997 2.31C7.55997 2.61928 7.30925 2.87 6.99997 2.87C6.69069 2.87 6.43997 2.61928 6.43997 2.31C6.43997 2.00072 6.69069 1.75 6.99997 1.75C7.30925 1.75 7.55997 2.00072 7.55997 2.31Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M2.87 6.99997C2.87 7.30925 2.61928 7.55997 2.31 7.55997C2.00072 7.55997 1.75 7.30925 1.75 6.99997C1.75 6.69069 2.00072 6.43997 2.31 6.43997C2.61928 6.43997 2.87 6.69069 2.87 6.99997Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M12.2499 6.99997C12.2499 7.30925 11.9992 7.55997 11.6899 7.55997C11.3807 7.55997 11.1299 7.30925 11.1299 6.99997C11.1299 6.69069 11.3807 6.43997 11.6899 6.43997C11.9992 6.43997 12.2499 6.69069 12.2499 6.99997Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M7.55997 6.99997C7.55997 7.30925 7.30925 7.55997 6.99997 7.55997C6.69069 7.55997 6.43997 7.30925 6.43997 6.99997C6.43997 6.69069 6.69069 6.43997 6.99997 6.43997C7.30925 6.43997 7.55997 6.69069 7.55997 6.99997Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M2.87 11.69C2.87 11.9993 2.61928 12.25 2.31 12.25C2.00072 12.25 1.75 11.9993 1.75 11.69C1.75 11.3807 2.00072 11.13 2.31 11.13C2.61928 11.13 2.87 11.3807 2.87 11.69Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M12.2499 11.69C12.2499 11.9993 11.9992 12.25 11.6899 12.25C11.3807 12.25 11.1299 11.9993 11.1299 11.69C11.1299 11.3807 11.3807 11.13 11.6899 11.13C11.9992 11.13 12.2499 11.3807 12.2499 11.69Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                        <path d="M7.55997 11.69C7.55997 11.9993 7.30925 12.25 6.99997 12.25C6.69069 12.25 6.43997 11.9993 6.43997 11.69C6.43997 11.3807 6.69069 11.13 6.99997 11.13C7.30925 11.13 7.55997 11.3807 7.55997 11.69Z" stroke="#0D1D2C" stroke-width="1.6"></path>
                      </g>
                    </g>
                  </svg></div>
              </span>Menu</button>
            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1hkxj6l" data-cy="menu-account-icon">
              <div class="css-1kamfhy"><span class="css-1mg14yq">NS</span></div>
            </div>
          </div>
        </div>
      </header>
      <main class="css-ng7pgk">
        <div class="MuiToolbar-root MuiToolbar-gutters MuiToolbar-regular css-p8ddbe"></div>
        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column page-content-container css-1ik2wyl">
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
                        <div class="MuiGrid2-root MuiGrid2-direction-xs-row css-1g0ehjn"><span class="css-aiz2l4">Good evening, Namdy 👋</span>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-ajtgh7">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1l679rn"><img class="css-yw4zh2" src="https://assets-kms.kinesis.money/Home/Stepper/Step1-Done.png"><span class="css-6pybsd">Create an account</span><img class="css-1tyajgx" src="https://assets-kms.kinesis.money/Home/Stepper/Done.svg"></div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1l679rn"><img class="css-yw4zh2" src="https://assets-kms.kinesis.money/Home/Stepper/Step2-ToDo.png"><span class="css-6pybsd">Unlock all features</span><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeLarge MuiButton-containedSizeLarge MuiButton-colorPrimary MuiButton-disableElevation css-1xgob71" tabindex="0" type="button">Verify ID</button></div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1l679rn"><img class="css-yw4zh2" src="https://assets-kms.kinesis.money/Home/Stepper/Step3-ToDo.png"><span class="css-6pybsd">Build your portfolio</span><img class="css-1tyajgx" src="https://assets-kms.kinesis.money/Home/Stepper/Locked.svg"></div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1j58bhl">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-16zlhwq">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-11al6d7"><span class="css-1llh5d6">Available balance</span>
                                <div class="eye-icon css-h39xwi" name="Home/Balance/EyeOpen"><svg width="20px" height="20px" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                    <title></title>
                                    <path d="M1.40002 6L0.657242 5.70289C0.580952 5.89362 0.580952 6.10638 0.657242 6.29711L1.40002 6ZM12.6 6L13.3428 6.29711C13.4191 6.10638 13.4191 5.89362 13.3428 5.70289L12.6 6ZM7.00001 9.2C5.29759 9.2 4.09781 8.35723 3.29465 7.46483C2.89252 7.01801 2.60001 6.56847 2.40854 6.23059C2.31326 6.06245 2.24425 5.92417 2.20021 5.83074C2.17822 5.78409 2.16254 5.74883 2.15301 5.72684C2.14825 5.71585 2.14504 5.7082 2.14334 5.70412C2.14249 5.70209 2.14203 5.70094 2.14194 5.70073C2.14189 5.70062 2.14194 5.70074 2.14209 5.7011C2.14216 5.70128 2.14226 5.70152 2.14238 5.70182C2.14244 5.70197 2.14254 5.70223 2.14257 5.70231C2.14269 5.70259 2.14281 5.70289 1.40002 6C0.657242 6.29711 0.657374 6.29744 0.657511 6.29778C0.657566 6.29792 0.65771 6.29828 0.657818 6.29855C0.658036 6.29909 0.658279 6.29969 0.658547 6.30035C0.659083 6.30168 0.659721 6.30326 0.660462 6.30507C0.661942 6.3087 0.663831 6.3133 0.666133 6.31883C0.670736 6.32989 0.67699 6.3447 0.684924 6.36301C0.700787 6.39961 0.723394 6.45028 0.752965 6.51301C0.812047 6.63834 0.899286 6.81255 1.0165 7.01941C1.25004 7.43153 1.60752 7.98199 2.10538 8.53517C3.10222 9.64277 4.70243 10.8 7.00001 10.8V9.2ZM1.40002 6C2.14281 6.29711 2.14269 6.29741 2.14257 6.29769C2.14254 6.29777 2.14244 6.29803 2.14238 6.29818C2.14226 6.29848 2.14216 6.29872 2.14209 6.2989C2.14194 6.29926 2.14189 6.29938 2.14194 6.29927C2.14203 6.29906 2.14249 6.29791 2.14334 6.29588C2.14504 6.2918 2.14825 6.28415 2.15301 6.27316C2.16254 6.25117 2.17822 6.21591 2.20021 6.16926C2.24425 6.07584 2.31326 5.93755 2.40854 5.76941C2.60001 5.43153 2.89252 4.98199 3.29465 4.53517C4.09781 3.64277 5.29759 2.8 7.00001 2.8V1.2C4.70243 1.2 3.10222 2.35723 2.10538 3.46483C1.60752 4.01801 1.25004 4.56847 1.0165 4.98059C0.899286 5.18745 0.812047 5.36167 0.752965 5.48699C0.723394 5.54972 0.700787 5.60039 0.684924 5.63699C0.67699 5.6553 0.670736 5.67011 0.666133 5.68117C0.663831 5.6867 0.661942 5.6913 0.660462 5.69493C0.659721 5.69674 0.659083 5.69832 0.658547 5.69965C0.658279 5.70031 0.658036 5.70091 0.657818 5.70145C0.65771 5.70172 0.657566 5.70208 0.657511 5.70222C0.657374 5.70256 0.657242 5.70289 1.40002 6ZM7.00001 2.8C8.70243 2.8 9.90222 3.64277 10.7054 4.53517C11.1075 4.982 11.4 5.43153 11.5915 5.76941C11.6868 5.93756 11.7558 6.07584 11.7998 6.16926C11.8218 6.21591 11.8375 6.25118 11.847 6.27317C11.8518 6.28415 11.855 6.29181 11.8567 6.29588C11.8576 6.29792 11.858 6.29906 11.8581 6.29928C11.8582 6.29938 11.8581 6.29926 11.858 6.2989C11.8579 6.29872 11.8578 6.29848 11.8577 6.29819C11.8576 6.29804 11.8575 6.29777 11.8575 6.2977C11.8574 6.29741 11.8572 6.29711 12.6 6C13.3428 5.70289 13.3427 5.70256 13.3425 5.70221C13.3425 5.70208 13.3423 5.70172 13.3422 5.70145C13.342 5.70091 13.3418 5.7003 13.3415 5.69964C13.341 5.69831 13.3403 5.69674 13.3396 5.69493C13.3381 5.6913 13.3362 5.6867 13.3339 5.68117C13.3293 5.67011 13.3231 5.6553 13.3151 5.63699C13.2993 5.60038 13.2767 5.54971 13.2471 5.48699C13.188 5.36166 13.1008 5.18744 12.9835 4.98059C12.75 4.56847 12.3925 4.018 11.8947 3.46483C10.8978 2.35723 9.29759 1.2 7.00001 1.2V2.8ZM12.6 6C11.8572 5.70289 11.8574 5.70259 11.8575 5.70231C11.8575 5.70223 11.8576 5.70196 11.8577 5.70181C11.8578 5.70152 11.8579 5.70128 11.858 5.7011C11.8581 5.70074 11.8582 5.70062 11.8581 5.70072C11.858 5.70094 11.8576 5.70208 11.8567 5.70412C11.855 5.70819 11.8518 5.71585 11.847 5.72683C11.8375 5.74882 11.8218 5.78409 11.7998 5.83074C11.7558 5.92416 11.6868 6.06244 11.5915 6.23059C11.4 6.56847 11.1075 7.018 10.7054 7.46483C9.90222 8.35723 8.70243 9.2 7.00001 9.2V10.8C9.29759 10.8 10.8978 9.64277 11.8947 8.53517C12.3925 7.982 12.75 7.43153 12.9835 7.01941C13.1008 6.81256 13.188 6.63834 13.2471 6.51301C13.2767 6.45029 13.2993 6.39962 13.3151 6.36301C13.3231 6.3447 13.3293 6.32989 13.3339 6.31883C13.3362 6.3133 13.3381 6.3087 13.3396 6.30507C13.3403 6.30326 13.341 6.30169 13.3415 6.30036C13.3418 6.2997 13.342 6.29909 13.3422 6.29855C13.3423 6.29828 13.3425 6.29792 13.3425 6.29779C13.3427 6.29744 13.3428 6.29711 12.6 6ZM7.00002 6.8C6.5582 6.8 6.20002 6.44183 6.20002 6H4.60002C4.60002 7.32548 5.67454 8.4 7.00002 8.4V6.8ZM7.80002 6C7.80002 6.44183 7.44185 6.8 7.00002 6.8V8.4C8.32551 8.4 9.40002 7.32548 9.40002 6H7.80002ZM7.00002 5.2C7.44185 5.2 7.80002 5.55817 7.80002 6H9.40002C9.40002 4.67452 8.32551 3.6 7.00002 3.6V5.2ZM7.00002 3.6C5.67454 3.6 4.60002 4.67452 4.60002 6H6.20002C6.20002 5.55817 6.5582 5.2 7.00002 5.2V3.6Z" fill="#0D1D2C"></path>
                                  </svg></div>
                              </div>
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1halgdy"><span class="css-2257sg">$0.00</span></div>
                            </div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-vvbn8d">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-189bnfx">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1ug7pgv">
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-16ygy31"><img class="css-vxzvyj" width="24px" height="24px" alt="KAU symbol" src="https://assets-kms.kinesis.money/NewFlags/KAU.svg">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-smogo2">Gold (KAU)</span>
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-7915c"><span class="css-1n4lzb6">0</span><span class="css-1qmvoj7">.00000</span><span class="css-p4w9nt">g</span></div><span class="css-130fyhp">0</span>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-poio1d"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__9aCjkRDb">
                                        <path id="Vector__9aCjkRDb" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div><img class="css-1sbrk74" src="https://assets-kms.kinesis.money/Home/Balance/GoldBar-d.png">
                              </div>
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1ug7pgv">
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-16ygy31"><img class="css-vxzvyj" width="24px" height="24px" alt="KAG symbol" src="https://assets-kms.kinesis.money/NewFlags/KAG.svg">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-smogo2">Silver (KAG)</span>
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-7915c"><span class="css-1n4lzb6">0</span><span class="css-1qmvoj7">.00000</span><span class="css-p4w9nt">oz</span></div><span class="css-130fyhp">0</span>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-poio1d"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__SzOUaRBI">
                                        <path id="Vector__SzOUaRBI" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div><img class="css-1sbrk74" src="https://assets-kms.kinesis.money/Home/Balance/SilverBar-d.png">
                              </div>
                            </div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18fh4ea">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-14vggbe">
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-158p6aq">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1a83rqp"><img class="css-hbfeng" width="32px" height="32px" alt="KVT symbol" src="https://assets-kms.kinesis.money/NewFlags/KVT.svg">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-1g1t1lg">Velocity Token</span><span class="css-smogo2">KVT</span></div>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-1kwzyqm"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__TP80rYFB">
                                        <path id="Vector__TP80rYFB" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div>
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-158p6aq">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1a83rqp"><img class="css-hbfeng" width="32px" height="32px" alt="BTC symbol" src="https://assets-kms.kinesis.money/NewFlags/BTC.svg">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-1g1t1lg">Bitcoin</span><span class="css-smogo2">BTC</span></div>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-1kwzyqm"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__6ERdVebS">
                                        <path id="Vector__6ERdVebS" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div>
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-158p6aq">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1a83rqp"><img class="css-hbfeng" width="32px" height="32px" alt="ETH symbol" src="https://assets-kms.kinesis.money/NewFlags/ETH.svg">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-1g1t1lg">Ethereum</span><span class="css-smogo2">ETH</span></div>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-1kwzyqm"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__esetZdeH">
                                        <path id="Vector__esetZdeH" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div>
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-158p6aq">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1a83rqp"><img class="css-hbfeng" width="32px" height="32px" alt="USDT symbol" src="https://assets-kms.kinesis.money/NewFlags/USDT.svg">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10x6pq"><span class="css-1g1t1lg">Tether</span><span class="css-smogo2">USDT</span></div>
                                  </div>
                                  <div name="Home/Balance/Plus" class="plus-button css-1kwzyqm"><svg width="32px" height="32px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <g id="plus-add__5GsZdmOG">
                                        <path id="Vector__5GsZdmOG" d="M8 1.06665V14.9333M1.06667 7.99998H14.9333" stroke="#253441" stroke-width="1.6"></path>
                                      </g>
                                    </svg></div>
                                </div>
                              </div><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-1x0r85p" tabindex="0" type="button">See all</button>
                            </div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-3hifnq">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1iax7xp"><span class="css-1mg14yq">Markets</span>
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-10pqwrw"><a class="MuiButtonBase-root MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorPrimary MuiButton-disableElevation MuiButton-root MuiButton-text MuiButton-textPrimary MuiButton-sizeMedium MuiButton-textSizeMedium MuiButton-colorPrimary MuiButton-disableElevation css-1jegnjz" tabindex="0" role="button">View all</a></div>
                            </div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column module-body css-c039zj">
                              <div class="css-p8i7lt">
                                <div class="swiper swiper-initialized swiper-horizontal swiper-free-mode">
                                  <div class="swiper-wrapper" style="cursor: grab;">
                                    <div class="swiper-slide swiper-slide-active" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="KAU symbol" src="https://assets-kms.kinesis.money/NewFlags/KAU.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Kinesis Gold</span><span class="css-smogo2">KAU</span></div><span class="css-1mijdjk">-0.04%</span><span class="css-smogo2">$100.69</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt1:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="KAG symbol" src="https://assets-kms.kinesis.money/NewFlags/KAG.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Kinesis Silver</span><span class="css-smogo2">KAG</span></div><span class="css-1mijdjk">-2.58%</span><span class="css-smogo2">$33.25</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt2:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="BTC symbol" src="https://assets-kms.kinesis.money/NewFlags/BTC.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Bitcoin</span><span class="css-smogo2">BTC</span></div><span class="css-1mijdjk">-1.26%</span><span class="css-smogo2">$83,596.95</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt3:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="ETH symbol" src="https://assets-kms.kinesis.money/NewFlags/ETH.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Ethereum</span><span class="css-smogo2">ETH</span></div><span class="css-1mijdjk">-2.56%</span><span class="css-smogo2">$1,822.81</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt4:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="USDT symbol" src="https://assets-kms.kinesis.money/NewFlags/USDT.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Tether</span><span class="css-smogo2">USDT</span></div><span class="css-1mijdjk">-0.01%</span><span class="css-smogo2">$1.00</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt5:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="BCH symbol" src="https://assets-kms.kinesis.money/NewFlags/BCH.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Bitcoin Cash</span><span class="css-smogo2">BCH</span></div><span class="css-oc2xf5">+0.77%</span><span class="css-smogo2">$307.10</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt6:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="LTC symbol" src="https://assets-kms.kinesis.money/NewFlags/LTC.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Litecoin</span><span class="css-smogo2">LTC</span></div><span class="css-oc2xf5">+1.80%</span><span class="css-smogo2">$83.57</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt7:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="DASH symbol" src="https://assets-kms.kinesis.money/NewFlags/DASH.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Dash</span><span class="css-smogo2">DASH</span></div><span class="css-1mijdjk">-2.08%</span><span class="css-smogo2">$21.63</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt8:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="XRP symbol" src="https://assets-kms.kinesis.money/NewFlags/XRP.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">XRP</span><span class="css-smogo2">XRP</span></div><span class="css-1mijdjk">-3.07%</span><span class="css-smogo2">$2.04</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rt9:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="XLM symbol" src="https://assets-kms.kinesis.money/NewFlags/XLM.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">Stellar</span><span class="css-smogo2">XLM</span></div><span class="css-1mijdjk">-2.39%</span><span class="css-smogo2">$0.26</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rta:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="XDC symbol" src="https://assets-kms.kinesis.money/NewFlags/XDC.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">XinFin</span><span class="css-smogo2">XDC</span></div><span class="css-1mijdjk">-0.52%</span><span class="css-smogo2">$0.06</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rtb:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="USDC symbol" src="https://assets-kms.kinesis.money/NewFlags/USDC.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">USD Coin</span><span class="css-smogo2">USDC</span></div><span class="css-1mijdjk">-0.41%</span><span class="css-smogo2">$1.00</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rtc:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                    <div class="swiper-slide" style="width: 158px; margin-right: 12px;">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-18u7qfl">
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1n1aa9p"><img class="css-hbfeng" width="32px" height="32px" alt="USD1 symbol" src="https://assets-kms.kinesis.money/NewFlags/USD1.svg">
                                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-mws7uv">
                                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-rrvkny"><span class="css-p2gd2a">USD One</span><span class="css-smogo2">USD1</span></div><span class="css-1mijdjk">-0.00%</span><span class="css-smogo2">$1.00</span>
                                          </div>
                                        </div><canvas role="img" height="64" width="316" id=":rtd:" class="css-nm6epz" style="display: block; box-sizing: border-box; height: 32px; width: 158px;"></canvas>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet swiper-pagination-bullet-active"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span><span class="swiper-pagination-bullet"></span></div>
                                </div>
                                <div class="slide-prev css-173yon3 swiper-button-disabled" name="Global/DragRightArrow"><svg width="38px" height="38px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                    <title></title>
                                    <path d="M13.6 7.99994L9.86668 4.2666M13.6 7.99994L9.86668 11.7333M13.6 7.99994H1.93335" stroke="#0D1D2C" stroke-width="1.6"></path>
                                  </svg></div>
                                <div class="slide-next css-1sgkoou" name="Global/DragRightArrow"><svg width="38px" height="38px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                    <title></title>
                                    <path d="M13.6 7.99994L9.86668 4.2666M13.6 7.99994L9.86668 11.7333M13.6 7.99994H1.93335" stroke="#0D1D2C" stroke-width="1.6"></path>
                                  </svg></div>
                              </div>
                            </div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-10b3wow"><img class="css-12vnoln" src="https://assets-kms.kinesis.money/Home/VirtualCard/VirtualCard_Prereg_D.png">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-jnnwll">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-ieya97"><span class="css-aiz2l4">New Kinesis Virtual Card</span><span class="css-d0sdde">Pre-register for the new Kinesis Virtual Card and access our cashback plan for 6 months free from launch.</span></div><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-656rln" tabindex="0" type="button">Find out more</button>
                            </div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-p5t85s"><img class="css-hut97n" src="https://assets-kms.kinesis.money/Home/Stepper/Yields_D.png">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-15jup37">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1hbhi3b"><span class="css-aiz2l4">Watch your gold grow</span><span class="css-dph6x4">Start earning gold every month with Kinesis yields</span></div><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-656rln" tabindex="0" type="button">How it works<span class="MuiButton-icon MuiButton-endIcon MuiButton-iconSizeMedium css-1g78ho2">
                                  <div name="Global/Play" class="css-b1qabf"><svg width="16px" height="16px" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                      <title></title>
                                      <path d="M5.2998 13.3334V2.66675L12.7665 8.00008L5.2998 13.3334Z" stroke="#0D1D2C" stroke-width="1.6" stroke-linejoin="round"></path>
                                    </svg></div>
                                </span></button>
                            </div>
                          </div>
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-3hifnq">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1iax7xp"><span class="css-1mg14yq">Media centre</span></div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column module-body css-1fb9d50"><a class="MuiGrid2-root MuiGrid2-container MuiGrid2-direction-xs-row css-1rpx5k7" href="https://kinesis.money/market-analysis/silver-news/silver-falls-us-tariff-uncertainties/" target="_blank"><img class="css-110ayyx" src="https://kinesis.money/wp-content/uploads/2025/04/silver-news-feature-silver-falls-as-markets-brace-for-us-tariffs.jpg">
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1mgxfc1">
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1cwswxb"><span class="css-4ju7uk">9h ago</span>
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1xtdx5c">
                                      <div name="Home/Media/MediaNews" class="css-mc304d"><svg width="12px" height="12px" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                          <title></title>
                                          <g id="Icon__my5BDHiN" clip-path="url(#clip0_8288_16745__my5BDHiN)">
                                            <path id="Vector__my5BDHiN" d="M0.899994 4.30039V9.96706C0.899994 10.593 1.4074 11.1004 2.03331 11.1004M2.03331 11.1004H9.96651C10.5924 11.1004 11.0998 10.593 11.0998 9.96706V1.46706C11.0998 1.1541 10.8461 0.900391 10.5332 0.900391H3.73328C3.42032 0.900391 3.16662 1.1541 3.16662 1.46706V9.96706C3.16662 10.593 2.65922 11.1004 2.03331 11.1004ZM4.97992 8.55039H9.35071M5.71115 3.45039V6.20264H8.54986V3.45039H5.71115Z" stroke="#646F78" stroke-width="1.6"></path>
                                          </g>
                                          <defs>
                                            <clipPath id="clip0_8288_16745__my5BDHiN">
                                              <rect width="12" height="12" fill="white"></rect>
                                            </clipPath>
                                          </defs>
                                        </svg></div><span class="css-4ju7uk">News</span>
                                    </div>
                                  </div><span class="css-aiz2l4">Silver Price News: Silver Falls As Markets Brace For US Tariffs</span><span class="css-1kib1g5">Silver prices fell on Tuesday, taking a lead from gold prices, which pulled back from fresh all-time highs. Silver initially rose slightly to an intraday high of $34.47 an ounce along with early strength in gold. However, prices pulled back to a low of $33.52 an ounce by Tuesday evening. Eyes on US tariffs announcement […]</span>
                                </div>
                              </a>
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1l28ax0">
                                <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-o3cu8g"><a class="MuiGrid2-root MuiGrid2-container MuiGrid2-direction-xs-row css-v1wf3s" href="https://kinesis.money/market-analysis/gold-news/gold-pulls-back-fresh-high/" target="_blank">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-u3ge3g">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1cwswxb"><span class="css-4ju7uk">9h ago</span>
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1xtdx5c">
                                          <div name="Home/Media/MediaNews" class="css-mc304d"><svg width="12px" height="12px" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                              <title></title>
                                              <g id="Icon__Rgjc2VDo" clip-path="url(#clip0_8288_16745__Rgjc2VDo)">
                                                <path id="Vector__Rgjc2VDo" d="M0.899994 4.30039V9.96706C0.899994 10.593 1.4074 11.1004 2.03331 11.1004M2.03331 11.1004H9.96651C10.5924 11.1004 11.0998 10.593 11.0998 9.96706V1.46706C11.0998 1.1541 10.8461 0.900391 10.5332 0.900391H3.73328C3.42032 0.900391 3.16662 1.1541 3.16662 1.46706V9.96706C3.16662 10.593 2.65922 11.1004 2.03331 11.1004ZM4.97992 8.55039H9.35071M5.71115 3.45039V6.20264H8.54986V3.45039H5.71115Z" stroke="#646F78" stroke-width="1.6"></path>
                                              </g>
                                              <defs>
                                                <clipPath id="clip0_8288_16745__Rgjc2VDo">
                                                  <rect width="12" height="12" fill="white"></rect>
                                                </clipPath>
                                              </defs>
                                            </svg></div><span class="css-4ju7uk">News</span>
                                        </div>
                                      </div><span class="css-1kb0gx5">Gold Price News: Gold Pulls Back From Fresh All-Time High</span>
                                    </div><img class="css-1ootet9" src="https://kinesis.money/wp-content/uploads/2025/04/gold-square-sunshine1-wed.jpg">
                                  </a><a class="MuiGrid2-root MuiGrid2-container MuiGrid2-direction-xs-row css-v1wf3s" href="https://kinesis.money/market-analysis/silver-news/silver-price-pulls-back/" target="_blank">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-u3ge3g">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1cwswxb"><span class="css-4ju7uk">2d ago</span>
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1xtdx5c">
                                          <div name="Home/Media/MediaNews" class="css-mc304d"><svg width="12px" height="12px" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                              <title></title>
                                              <g id="Icon__Imv1UqEF" clip-path="url(#clip0_8288_16745__Imv1UqEF)">
                                                <path id="Vector__Imv1UqEF" d="M0.899994 4.30039V9.96706C0.899994 10.593 1.4074 11.1004 2.03331 11.1004M2.03331 11.1004H9.96651C10.5924 11.1004 11.0998 10.593 11.0998 9.96706V1.46706C11.0998 1.1541 10.8461 0.900391 10.5332 0.900391H3.73328C3.42032 0.900391 3.16662 1.1541 3.16662 1.46706V9.96706C3.16662 10.593 2.65922 11.1004 2.03331 11.1004ZM4.97992 8.55039H9.35071M5.71115 3.45039V6.20264H8.54986V3.45039H5.71115Z" stroke="#646F78" stroke-width="1.6"></path>
                                              </g>
                                              <defs>
                                                <clipPath id="clip0_8288_16745__Imv1UqEF">
                                                  <rect width="12" height="12" fill="white"></rect>
                                                </clipPath>
                                              </defs>
                                            </svg></div><span class="css-4ju7uk">News</span>
                                        </div>
                                      </div><span class="css-1kb0gx5">Silver Price News: Silver Pulls Back to Just Above $34</span>
                                    </div><img class="css-1ootet9" src="https://kinesis.money/wp-content/uploads/2025/03/silver-square-silver2-mon-3.jpg">
                                  </a><a class="MuiGrid2-root MuiGrid2-container MuiGrid2-direction-xs-row css-v1wf3s" href="https://kinesis.money/market-analysis/gold-news/gold-hits-highs-us-trade-war/" target="_blank">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-u3ge3g">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1cwswxb"><span class="css-4ju7uk">2d ago</span>
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1xtdx5c">
                                          <div name="Home/Media/MediaNews" class="css-mc304d"><svg width="12px" height="12px" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                              <title></title>
                                              <g id="Icon__vF1EDyCs" clip-path="url(#clip0_8288_16745__vF1EDyCs)">
                                                <path id="Vector__vF1EDyCs" d="M0.899994 4.30039V9.96706C0.899994 10.593 1.4074 11.1004 2.03331 11.1004M2.03331 11.1004H9.96651C10.5924 11.1004 11.0998 10.593 11.0998 9.96706V1.46706C11.0998 1.1541 10.8461 0.900391 10.5332 0.900391H3.73328C3.42032 0.900391 3.16662 1.1541 3.16662 1.46706V9.96706C3.16662 10.593 2.65922 11.1004 2.03331 11.1004ZM4.97992 8.55039H9.35071M5.71115 3.45039V6.20264H8.54986V3.45039H5.71115Z" stroke="#646F78" stroke-width="1.6"></path>
                                              </g>
                                              <defs>
                                                <clipPath id="clip0_8288_16745__vF1EDyCs">
                                                  <rect width="12" height="12" fill="white"></rect>
                                                </clipPath>
                                              </defs>
                                            </svg></div><span class="css-4ju7uk">News</span>
                                        </div>
                                      </div><span class="css-1kb0gx5">Gold Price News: Gold Hits Another All-Time High on Trade War Worries</span>
                                    </div><img class="css-1ootet9" src="https://kinesis.money/wp-content/uploads/2025/03/gold-square-gold2-mon-3.jpg">
                                  </a></div><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation MuiButton-root MuiButton-contained MuiButton-containedSecondary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorSecondary MuiButton-disableElevation css-1x0r85p" tabindex="0" type="button">See more</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="MuiGrid2-root MuiGrid2-direction-xs-row css-bquvim">
                          <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-3hifnq">
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-c45yep">
                              <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1ppb8si">
                                <div class="MuiTabs-root css-1nr1552">
                                  <div class="MuiTabs-scroller MuiTabs-fixed css-2xu61f" style="overflow: hidden; margin-bottom: 0px;">
                                    <div role="tablist" class="MuiTabs-list MuiTabs-flexContainer css-m7uqgc"><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit Mui-selected css-1qiwpex" tabindex="0" type="button" role="tab" aria-selected="true" id="buy">Buy</button><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit css-1qiwpex" tabindex="-1" type="button" role="tab" aria-selected="false" id="sell">Sell</button></div><span class="MuiTabs-indicator css-zqrhqr" style="left: 0px; width: 51.8906px;"></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column module-body css-1ash90c">
                              <div class="MuiBox-root css-15u6tk7">
                                <form autocomplete="off" class="css-zqbwzy"><span class="css-aiz2l4">Buy Gold</span>
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1jeisf5">
                                    <div data-cy="percentage-tabs" class="MuiTabs-root css-17a7gvw">
                                      <div class="MuiTabs-scroller MuiTabs-fixed css-2xu61f" style="overflow: hidden; margin-bottom: 0px;">
                                        <div role="tablist" class="MuiTabs-list MuiTabs-flexContainer css-m7uqgc"><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit css-1yt2rpt" tabindex="0" type="button" role="tab" aria-selected="false">25%</button><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit css-1yt2rpt" tabindex="-1" type="button" role="tab" aria-selected="false">50%</button><button class="MuiButtonBase-root MuiTab-root MuiTab-textColorInherit css-1yt2rpt" tabindex="-1" type="button" role="tab" aria-selected="false">Max</button></div><span class="MuiTabs-indicator css-zqrhqr" style="left: 0px; width: 0px;"></span>
                                      </div>
                                    </div>
                                    <div class="MuiButtonBase-root MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-clickable MuiChip-clickableColorDefault MuiChip-filledDefault css-1scarf5" tabindex="0" role="button">
                                      <div name="Menu/DownSmall" class="MuiChip-avatar MuiChip-avatarMedium MuiChip-avatarColorDefault css-b1qabf"><svg width="16px" height="16px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                          <title></title>
                                          <path d="M4.80078 6.936L8.00078 10.136L11.2008 6.936" stroke="#0D1D2C" stroke-width="1.6" stroke-linecap="square"></path>
                                        </svg></div><span class="MuiChip-label MuiChip-labelMedium css-14vsv3w">Instant buy</span>
                                    </div>
                                  </div>
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1v1ey4t">
                                    <div name="icons/stroke/swap" class="css-1l7ud21"><svg width="36px" height="36px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                        <title></title>
                                        <path d="M12.2832 15.6772L16.243 19.637L20.2028 15.6772M16.243 3.79785V19.5M3.79785 8.3233L7.75765 4.3635L11.7174 8.3233M7.75765 20.2027L7.75765 4.5" stroke="#0D1D2C" stroke-width="1.6"></path>
                                      </svg></div>
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-fz3x6r">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-rshs0"><span class="css-1qehvrj">Pay</span>
                                        <div class="MuiFormControl-root MuiTextField-root css-q66lrg" data-lpignore="true" data-cy="numeric-trade-sell" inputmode="numeric">
                                          <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl MuiInputBase-adornedStart css-z4ie65">$<input aria-invalid="false" autocomplete="off" id=":ru4:" placeholder="0" class="MuiInputBase-input MuiInput-input MuiInputBase-inputAdornedStart css-1url3zx" type="text" value=""></div>
                                        </div>
                                      </div>
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1mexvzw">
                                        <div class="MuiButtonBase-root MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-clickable MuiChip-clickableColorDefault MuiChip-deletable MuiChip-deletableColorDefault MuiChip-filledDefault css-mhabo0" tabindex="0" role="button" data-cy="currency-trade-sell"><img class="MuiChip-avatar MuiChip-avatarMedium MuiChip-avatarColorDefault css-1h2kiv7" width="26px" height="26px" alt="USD symbol" src="https://assets-kms.kinesis.money/NewFlags/USD.svg"><span class="MuiChip-label MuiChip-labelMedium css-14vsv3w">USD</span>
                                          <div name="Menu/DownSmall" class="MuiChip-deleteIcon MuiChip-deleteIconMedium MuiChip-deleteIconColorDefault MuiChip-deleteIconFilledColorDefault css-kmn079"><svg width="16px" height="16px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                              <title></title>
                                              <path d="M4.80078 6.936L8.00078 10.136L11.2008 6.936" stroke="#0D1D2C" stroke-width="1.6" stroke-linecap="square"></path>
                                            </svg></div>
                                        </div>
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-x8s45e" data-cy="balance-trade-sell"><span class="css-12ctog4">Balance $0</span></div>
                                      </div>
                                    </div>
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-fz3x6r">
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-rshs0"><span class="css-1qehvrj">Receive</span>
                                        <div class="MuiFormControl-root MuiTextField-root css-q66lrg" data-lpignore="true" data-cy="numeric-trade-receive" inputmode="numeric">
                                          <div class="MuiInputBase-root MuiInput-root MuiInput-underline MuiInputBase-colorPrimary MuiInputBase-formControl css-z4ie65"><input aria-invalid="false" autocomplete="off" id=":ru5:" placeholder="0" class="MuiInputBase-input MuiInput-input css-1url3zx" type="text" value=""></div>
                                        </div>
                                      </div>
                                      <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1mexvzw">
                                        <div class="MuiButtonBase-root MuiChip-root MuiChip-filled MuiChip-sizeMedium MuiChip-colorDefault MuiChip-clickable MuiChip-clickableColorDefault MuiChip-deletable MuiChip-deletableColorDefault MuiChip-filledDefault css-mhabo0" tabindex="0" role="button" data-cy="currency-trade-receive"><img class="MuiChip-avatar MuiChip-avatarMedium MuiChip-avatarColorDefault css-1h2kiv7" width="26px" height="26px" alt="KAU symbol" src="https://assets-kms.kinesis.money/NewFlags/KAU.svg"><span class="MuiChip-label MuiChip-labelMedium css-14vsv3w">KAU</span>
                                          <div name="Menu/DownSmall" class="MuiChip-deleteIcon MuiChip-deleteIconMedium MuiChip-deleteIconColorDefault MuiChip-deleteIconFilledColorDefault css-kmn079"><svg width="16px" height="16px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" scale="0.1">
                                              <title></title>
                                              <path d="M4.80078 6.936L8.00078 10.136L11.2008 6.936" stroke="#0D1D2C" stroke-width="1.6" stroke-linecap="square"></path>
                                            </svg></div>
                                        </div>
                                        <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-x8s45e" data-cy="balance-trade-receive"><span class="css-12ctog4">Balance 0</span></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-1ydnut7" data-cy="fee-inclusive">
                                    <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-row css-11al6d7"><span class="css-1u2s9pq">Fees incl.</span><span class="css-1fp3n5e">$0.00</span></div><span class="css-1u2s9pq">1 KAU = $100.75</span>
                                  </div>
                                  <div class="MuiGrid2-root MuiGrid2-container MuiGrid2-wrap-xs-nowrap MuiGrid2-direction-xs-column css-1lii8rh">
                                    <div class="MuiCollapse-root MuiCollapse-vertical MuiCollapse-hidden css-abqyn" style="min-height: 0px;">
                                      <div class="MuiCollapse-wrapper MuiCollapse-vertical css-15830to">
                                        <div class="MuiCollapse-wrapperInner MuiCollapse-vertical css-9vd5ud">
                                          <div class="MuiPaper-root MuiPaper-elevation MuiPaper-rounded MuiPaper-elevation0 MuiAlert-root MuiAlert-colorError MuiAlert-standardError MuiAlert-standard css-pzx8xp" role="alert" style="--Paper-shadow: none;">
                                            <div class="MuiAlert-message css-127h8j3"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div><button class="MuiButtonBase-root MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation Mui-disabled MuiButton-root MuiButton-contained MuiButton-containedPrimary MuiButton-sizeMedium MuiButton-containedSizeMedium MuiButton-colorPrimary MuiButton-disableElevation css-1xwr10r" tabindex="-1" type="submit" disabled="" data-cy="place-buy-order-btn">Buy Gold</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
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