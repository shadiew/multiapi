<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Checkout | Front - Admin &amp; Dashboard Template</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../themes/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">

  <link rel="stylesheet" href="../../themes/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">
  <link rel="stylesheet" href="../../themes/assets/vendor/quill/dist/quill.snow.css">

  <!-- CSS Front Template -->

  <link rel="preload" href="../../themes/assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="../../themes/assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

  <script src="../../themes/assets/js/hs.theme-appearance.js"></script>

  <script src="../../themes/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js"></script>

  <!-- ========== HEADER ========== -->

  <header id="header" class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
    <div class="navbar-nav-wrap">
      <!-- Logo -->
      <a class="navbar-brand" href="./index.html" aria-label="Front">
        <img class="navbar-brand-logo" src="../../themes/assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo" src="../../themes/assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
        <img class="navbar-brand-logo-mini" src="../../themes/assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
        <img class="navbar-brand-logo-mini" src="../../themes/assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
      </a>
      <!-- End Logo -->

      <div class="navbar-nav-wrap-content-start">
        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Search Form -->
        <div class="dropdown ms-2">
          <!-- Input Group -->
          <div class="d-none d-lg-block">
            <div class="input-group input-group-merge input-group-borderless input-group-hover-light navbar-input-group">
              <div class="input-group-prepend input-group-text">
                <i class="bi-search"></i>
              </div>

              <input type="search" class="js-form-search form-control" placeholder="Search in front" aria-label="Search in front" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
              <a class="input-group-append input-group-text" href="javascript:;">
                <i id="clearSearchResultsIcon" class="bi-x-lg" style="display: none;"></i>
              </a>
            </div>
          </div>

          <button class="js-form-search js-form-search-mobile-toggle btn btn-ghost-secondary btn-icon rounded-circle d-lg-none" type="button" data-hs-form-search-options='{
                       "clearIcon": "#clearSearchResultsIcon",
                       "dropMenuElement": "#searchDropdownMenu",
                       "dropMenuOffset": 20,
                       "toggleIconOnFocus": true,
                       "activeClass": "focus"
                     }'>
            <i class="bi-search"></i>
          </button>
          <!-- End Input Group -->

          <!-- Card Search Content -->
          <div id="searchDropdownMenu" class="hs-form-search-menu-content dropdown-menu dropdown-menu-form-search navbar-dropdown-menu-borderless">
            <div class="card">
              <!-- Body -->
              <div class="card-body-height">
                <div class="d-lg-none">
                  <div class="input-group input-group-merge navbar-input-group mb-5">
                    <div class="input-group-prepend input-group-text">
                      <i class="bi-search"></i>
                    </div>

                    <input type="search" class="form-control" placeholder="Search in front" aria-label="Search in front">
                    <a class="input-group-append input-group-text" href="javascript:;">
                      <i class="bi-x-lg"></i>
                    </a>
                  </div>
                </div>

                <span class="dropdown-header">Recent searches</span>

                <div class="dropdown-item bg-transparent text-wrap">
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                    Gulp <i class="bi-search ms-1"></i>
                  </a>
                  <a class="btn btn-soft-dark btn-xs rounded-pill" href="./index.html">
                    Notification panel <i class="bi-search ms-1"></i>
                  </a>
                </div>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Tutorials</span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-sliders"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to set up Gulp?</span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <span class="icon icon-soft-dark icon-xs icon-circle">
                        <i class="bi-paint-bucket"></i>
                      </span>
                    </div>

                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>How to change theme color?</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <span class="dropdown-header">Members</span>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="../../themes/assets/img/160x160/img10.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Amanda Harvey <i class="tio-verified text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="avatar avatar-xs avatar-circle" src="../../themes/assets/img/160x160/img3.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>David Harrison</span>
                    </div>
                  </div>
                </a>

                <a class="dropdown-item" href="./index.html">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-xs avatar-soft-info avatar-circle">
                        <span class="avatar-initials">A</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Anne Richard</span>
                    </div>
                  </div>
                </a>
              </div>
              <!-- End Body -->

              <!-- Footer -->
              <a class="card-footer text-center" href="./index.html">
                See all results <i class="bi-chevron-right small"></i>
              </a>
              <!-- End Footer -->
            </div>
          </div>
          <!-- End Card Search Content -->

        </div>

        <!-- End Search Form -->
      </div>

      <div class="navbar-nav-wrap-content-end">
        <!-- Navbar -->
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <!-- Notification -->
            <div class="dropdown">
              <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="navbarNotificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <i class="bi-bell"></i>
                <span class="btn-status btn-sm-status btn-status-danger"></span>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header card-header-content-between">
                    <h4 class="card-title mb-0">Notifications</h4>

                    <!-- Unfold -->
                    <div class="dropdown">
                      <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary rounded-circle" id="navbarNotificationsDropdownSettings" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi-three-dots-vertical"></i>
                      </button>

                      <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarNotificationsDropdownSettings">
                        <span class="dropdown-header">Settings</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-archive dropdown-item-icon"></i> Archive all
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-check2-all dropdown-item-icon"></i> Mark all as read
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-toggle-off dropdown-item-icon"></i> Disable notifications
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="bi-gift dropdown-item-icon"></i> What's new?
                        </a>
                        <div class="dropdown-divider"></div>
                        <span class="dropdown-header">Feedback</span>
                        <a class="dropdown-item" href="#">
                          <i class="bi-chat-left-dots dropdown-item-icon"></i> Report
                        </a>
                      </div>
                    </div>
                    <!-- End Unfold -->
                  </div>
                  <!-- End Header -->

                  <!-- Nav -->
                  <ul class="nav nav-tabs nav-justified" id="notificationTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#notificationNavOne" id="notificationNavOne-tab" data-bs-toggle="tab" data-bs-target="#notificationNavOne" role="tab" aria-controls="notificationNavOne" aria-selected="true">Messages (3)</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#notificationNavTwo" id="notificationNavTwo-tab" data-bs-toggle="tab" data-bs-target="#notificationNavTwo" role="tab" aria-controls="notificationNavTwo" aria-selected="false">Archived</a>
                    </li>
                  </ul>
                  <!-- End Nav -->

                  <!-- Body -->
                  <div class="card-body-height">
                    <!-- Tab Content -->
                    <div class="tab-content" id="notificationTabContent">
                      <div class="tab-pane fade show active" id="notificationNavOne" role="tabpanel" aria-labelledby="notificationNavOne-tab">
                        <!-- List Group -->
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck1" checked>
                                    <label class="form-check-label" for="notificationCheck1"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <img class="avatar avatar-sm avatar-circle" src="../../themes/assets/img/160x160/img3.jpg" alt="Image Description">
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Brian Warner</h5>
                                <p class="text-body fs-5">changed an issue from "In Progress" to <span class="badge bg-success">Review</span></p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2hr</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck2" checked>
                                    <label class="form-check-label" for="notificationCheck2"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">K</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Klara Hampton</h5>
                                <p class="text-body fs-5">mentioned you in a comment</p>
                                <blockquote class="blockquote blockquote-sm">
                                  Nice work, love! You really nailed it. Keep it up!
                                </blockquote>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">10hr</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck3" checked>
                                    <label class="form-check-label" for="notificationCheck3"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="../../themes/assets/img/160x160/img10.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Ruby Walter</h5>
                                <p class="text-body fs-5">joined the Slack group HS Team</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">3dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck4">
                                    <label class="form-check-label" for="notificationCheck4"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="../../themes/assets/svg/brands/google-icon.svg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">from Google</h5>
                                <p class="text-body fs-5">Start using forms to capture the information of prospects visiting your Google website</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">17dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck5">
                                    <label class="form-check-label" for="notificationCheck5"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="../../themes/assets/img/160x160/img7.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Sara Villar</h5>
                                <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-7 task</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2mn</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                        <!-- End List Group -->
                      </div>

                      <div class="tab-pane fade" id="notificationNavTwo" role="tabpanel" aria-labelledby="notificationNavTwo-tab">
                        <!-- List Group -->
                        <ul class="list-group list-group-flush navbar-card-list-group">
                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck6">
                                    <label class="form-check-label" for="notificationCheck6"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">A</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Anne Richard</h5>
                                <p class="text-body fs-5">accepted your invitation to join Notion</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">1dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck7">
                                    <label class="form-check-label" for="notificationCheck7"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="../../themes/assets/img/160x160/img5.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Finch Hoot</h5>
                                <p class="text-body fs-5">left Slack group HS projects</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">1dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck8">
                                    <label class="form-check-label" for="notificationCheck8"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-dark avatar-circle">
                                    <span class="avatar-initials">HS</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Htmlstream</h5>
                                <p class="text-body fs-5">you earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">6dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck9">
                                    <label class="form-check-label" for="notificationCheck9"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="../../themes/assets/img/160x160/img8.jpg" alt="Image Description">
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Linda Bates</h5>
                                <p class="text-body fs-5">Accepted your connection</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">17dy</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->

                          <!-- Item -->
                          <li class="list-group-item form-check-select">
                            <div class="row">
                              <div class="col-auto">
                                <div class="d-flex align-items-center">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="notificationCheck10">
                                    <label class="form-check-label" for="notificationCheck10"></label>
                                    <span class="form-check-stretched-bg"></span>
                                  </div>
                                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                                    <span class="avatar-initials">L</span>
                                  </div>
                                </div>
                              </div>
                              <!-- End Col -->

                              <div class="col ms-n2">
                                <h5 class="mb-1">Lewis Clarke</h5>
                                <p class="text-body fs-5">completed <i class="bi-journal-bookmark-fill text-primary"></i> FD-134 task</p>
                              </div>
                              <!-- End Col -->

                              <small class="col-auto text-muted text-cap">2mts</small>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->

                            <a class="stretched-link" href="#"></a>
                          </li>
                          <!-- End Item -->
                        </ul>
                        <!-- End List Group -->
                      </div>
                    </div>
                    <!-- End Tab Content -->
                  </div>
                  <!-- End Body -->

                  <!-- Card Footer -->
                  <a class="card-footer text-center" href="#">
                    View all notifications <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Card Footer -->
                </div>
              </div>
            </div>
            <!-- End Notification -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Apps -->
            <div class="dropdown">
              <button type="button" class="btn btn-icon btn-ghost-secondary rounded-circle" id="navbarAppsDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                <i class="bi-app-indicator"></i>
              </button>

              <div class="dropdown-menu dropdown-menu-end dropdown-card navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="navbarAppsDropdown" style="width: 25rem;">
                <div class="card">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-title">Web apps &amp; services</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body card-body-height">
                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="../../themes/assets/svg/brands/atlassian-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Atlassian</h5>
                          <p class="card-text text-body">Security and control across Cloud</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="../../themes/assets/svg/brands/slack-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Slack <span class="badge bg-primary rounded-pill text-uppercase ms-1">Try</span></h5>
                          <p class="card-text text-body">Email collaboration software</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="../../themes/assets/svg/brands/google-webdev-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Google webdev</h5>
                          <p class="card-text text-body">Work involved in developing a website</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="../../themes/assets/svg/brands/frontapp-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">Frontapp</h5>
                          <p class="card-text text-body">The inbox for teams</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs avatar-4x3" src="../../themes/assets/svg/illustrations/review-rating-shield.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">HS Support</h5>
                          <p class="card-text text-body">Customer service and support</p>
                        </div>
                      </div>
                    </a>

                    <a class="dropdown-item" href="#">
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0">
                          <div class="avatar avatar-sm avatar-soft-dark">
                            <span class="avatar-initials"><i class="bi-grid"></i></span>
                          </div>
                        </div>
                        <div class="flex-grow-1 text-truncate ms-3">
                          <h5 class="mb-0">More Front products</h5>
                          <p class="card-text text-body">Check out more HS products</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <!-- End Body -->

                  <!-- Footer -->
                  <a class="card-footer text-center" href="#">
                    View all apps <i class="bi-chevron-right"></i>
                  </a>
                  <!-- End Footer -->
                </div>
              </div>
            </div>
            <!-- End Apps -->
          </li>

          <li class="nav-item d-none d-sm-inline-block">
            <!-- Activity -->
            <button class="btn btn-ghost-secondary btn-icon rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasActivityStream" aria-controls="offcanvasActivityStream">
              <i class="bi-x-diamond"></i>
            </button>
            <!-- Activity -->
          </li>

          <li class="nav-item">
            <!-- Account -->
            <div class="dropdown">
              <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <div class="avatar avatar-sm avatar-circle">
                  <img class="avatar-img" src="../../themes/assets/img/160x160/img6.jpg" alt="Image Description">
                  <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account" aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                <div class="dropdown-item-text">
                  <div class="d-flex align-items-center">
                    <div class="avatar avatar-sm avatar-circle">
                      <img class="avatar-img" src="../../themes/assets/img/160x160/img6.jpg" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h5 class="mb-0">Mark Williams</h5>
                      <p class="card-text text-body">mark@site.com</p>
                    </div>
                  </div>
                </div>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown1" data-bs-toggle="dropdown" aria-expanded="false">Set status</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown1">
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-success me-1"></span> Available
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-danger me-1"></span> Busy
                    </a>
                    <a class="dropdown-item" href="#">
                      <span class="legend-indicator bg-warning me-1"></span> Away
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"> Reset status
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Profile &amp; account</a>
                <a class="dropdown-item" href="#">Settings</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-sm avatar-dark avatar-circle">
                        <span class="avatar-initials">HS</span>
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h5 class="mb-0">Htmlstream <span class="badge bg-primary rounded-pill text-uppercase ms-1">PRO</span></h5>
                      <span class="card-text">hs.example.com</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="navbar-dropdown-submenu-item dropdown-item dropdown-toggle" href="javascript:;" id="navSubmenuPagesAccountDropdown2" data-bs-toggle="dropdown" aria-expanded="false">Customization</a>

                  <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu" aria-labelledby="navSubmenuPagesAccountDropdown2">
                    <a class="dropdown-item" href="#">
                      Invite people
                    </a>
                    <a class="dropdown-item" href="#">
                      Analytics
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                    <a class="dropdown-item" href="#">
                      Customize Front
                      <i class="bi-box-arrow-in-up-right"></i>
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->

                <a class="dropdown-item" href="#">Manage team</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#">Sign out</a>
              </div>
            </div>
            <!-- End Account -->
          </li>
        </ul>
        <!-- End Navbar -->
      </div>
    </div>
  </header>

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        <a class="navbar-brand" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="../../themes/assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="../../themes/assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="../../themes/assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="../../themes/assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a>

        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="false" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>

              <div id="navbarVerticalMenuDashboards" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                <a class="nav-link " href="./index.html">Default</a>
                <a class="nav-link " href="./dashboard-alternative.html">Alternative</a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Pages</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUsersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUsersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUsersMenu">
                  <i class="bi-people nav-icon"></i>
                  <span class="nav-link-title">Users</span>
                </a>

                <div id="navbarVerticalMenuPagesUsersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./users.html">Overview</a>
                  <a class="nav-link " href="./users-leaderboard.html">Leaderboard</a>
                  <a class="nav-link " href="./users-add-user.html">Add User <span class="badge bg-info rounded-pill ms-1">Hot</span></a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesUserProfileMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesUserProfileMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesUserProfileMenu">
                  <i class="bi-person nav-icon"></i>
                  <span class="nav-link-title">User Profile <span class="badge bg-primary rounded-pill ms-1">5</span></span>
                </a>

                <div id="navbarVerticalMenuPagesUserProfileMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./user-profile.html">Profile</a>
                  <a class="nav-link " href="./user-profile-teams.html">Teams</a>
                  <a class="nav-link " href="./user-profile-projects.html">Projects</a>
                  <a class="nav-link " href="./user-profile-connections.html">Connections</a>
                  <a class="nav-link " href="./user-profile-my-profile.html">My Profile</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesAccountMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesAccountMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesAccountMenu">
                  <i class="bi-person-badge nav-icon"></i>
                  <span class="nav-link-title">Account</span>
                </a>

                <div id="navbarVerticalMenuPagesAccountMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./account-settings.html">Settings</a>
                  <a class="nav-link " href="./account-billing.html">Billing</a>
                  <a class="nav-link " href="./account-invoice.html">Invoice</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle active" href="#navbarVerticalMenuPagesEcommerceMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="true" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                  <i class="bi-basket nav-icon"></i>
                  <span class="nav-link-title">E-commerce</span>
                </a>

                <div id="navbarVerticalMenuPagesEcommerceMenu" class="nav-collapse collapse show" data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./ecommerce.html">Overview</a>

                  <div id="navbarVerticalMenuPagesMenuEcommerce">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceProductsMenu">
                        Products
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="./ecommerce-products.html">Products</a>
                        <a class="nav-link " href="./ecommerce-product-details.html">Product Details</a>
                        <a class="nav-link " href="./ecommerce-add-product.html">Add Product</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                        Orders
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="./ecommerce-orders.html">Orders</a>
                        <a class="nav-link " href="./ecommerce-order-details.html">Order Details</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                        Customers
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="./ecommerce-customers.html">Customers</a>
                        <a class="nav-link " href="./ecommerce-customer-details.html">Customer Details</a>
                        <a class="nav-link " href="./ecommerce-add-customers.html">Add Customers</a>
                      </div>
                    </div>
                    <!-- End Collapse -->
                  </div>

                  <a class="nav-link " href="./ecommerce-referrals.html">Referrals</a>
                  <a class="nav-link " href="./ecommerce-manage-reviews.html">Manage Reviews</a>
                  <a class="nav-link active" href="./ecommerce-checkout.html">Checkout</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectsMenu">
                  <i class="bi-stickies nav-icon"></i>
                  <span class="nav-link-title">Projects</span>
                </a>

                <div id="navbarVerticalMenuPagesProjectsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./projects.html">Overview</a>
                  <a class="nav-link " href="./projects-timeline.html">Timeline</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesProjectMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesProjectMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesProjectMenu">
                  <i class="bi-briefcase nav-icon"></i>
                  <span class="nav-link-title">Project</span>
                </a>

                <div id="navbarVerticalMenuPagesProjectMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenu">
                  <a class="nav-link " href="./project.html">Overview</a>
                  <a class="nav-link " href="./project-files.html">Files</a>
                  <a class="nav-link " href="./project-activity.html">Activity</a>
                  <a class="nav-link " href="./project-teams.html">Teams</a>
                  <a class="nav-link " href="./project-settings.html">Settings</a>
                </div>
              </div>
              <!-- End Collapse -->

              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link dropdown-toggle  collapsed" href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication">
                  <i class="bi-shield-lock nav-icon"></i>
                  <span class="nav-link-title">Authentication</span>
                </a>

                <div id="navbarVerticalMenuAuthentication" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenu">
                  <div id="navbarVerticalMenuAuthenticationMenu">
                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationLoginMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationLoginMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationLoginMenu">
                        Log In
                      </a>

                      <div id="navbarVerticalMenuAuthenticationLoginMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="./authentication-login-basic.html">Basic</a>
                        <a class="nav-link " href="./authentication-login-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationSignupMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationSignupMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationSignupMenu">
                        Sign Up
                      </a>

                      <div id="navbarVerticalMenuAuthenticationSignupMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="./authentication-signup-basic.html">Basic</a>
                        <a class="nav-link " href="./authentication-signup-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationResetPasswordMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationResetPasswordMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationResetPasswordMenu">
                        Reset Password
                      </a>

                      <div id="navbarVerticalMenuAuthenticationResetPasswordMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="./authentication-reset-password-basic.html">Basic</a>
                        <a class="nav-link " href="./authentication-reset-password-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthenticationEmailVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthenticationEmailVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthenticationEmailVerificationMenu">
                        Email Verification
                      </a>

                      <div id="navbarVerticalMenuAuthenticationEmailVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="./authentication-email-verification-basic.html">Basic</a>
                        <a class="nav-link " href="./authentication-email-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuAuthentication2StepVerificationMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuAuthentication2StepVerificationMenu" aria-expanded="false" aria-controls="navbarVerticalMenuAuthentication2StepVerificationMenu">
                        2-step Verification
                      </a>

                      <div id="navbarVerticalMenuAuthentication2StepVerificationMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuAuthenticationMenu">
                        <a class="nav-link " href="./authentication-2-step-verification-basic.html">Basic</a>
                        <a class="nav-link " href="./authentication-2-step-verification-cover.html">Cover</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <a class="nav-link" href="javascript:;" data-bs-toggle="modal" data-bs-target="#welcomeMessageModal">Welcome Message</a>
                    <a class="nav-link " href="./error-404.html">Error 404</a>
                    <a class="nav-link " href="./error-500.html">Error 500</a>
                  </div>
                </div>
              </div>
              <!-- End Collapse -->

              <div class="nav-item">
                <a class="nav-link " href="./api-keys.html" data-placement="left">
                  <i class="bi-key nav-icon"></i>
                  <span class="nav-link-title">API Keys</span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="./welcome-page.html" data-placement="left">
                  <i class="bi-eye nav-icon"></i>
                  <span class="nav-link-title">Welcome Page</span>
                </a>
              </div>

              <div class="nav-item">
                <a class="nav-link " href="./landing.html" data-placement="left">
                  <i class="bi-box-seam nav-icon"></i>
                  <span class="nav-link-title">Landing Page <span class="badge bg-info rounded-pill ms-1">New</span></span>
                </a>
              </div>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="./apps-kanban.html" data-placement="left">
                <i class="bi-kanban nav-icon"></i>
                <span class="nav-link-title">Kanban</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-calendar.html" data-placement="left">
                <i class="bi-calendar-week nav-icon"></i>
                <span class="nav-link-title">Calendar</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-invoice-generator.html" data-placement="left">
                <i class="bi-receipt nav-icon"></i>
                <span class="nav-link-title">Invoice Generator</span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./apps-file-manager.html" data-placement="left">
                <i class="bi-folder2-open nav-icon"></i>
                <span class="nav-link-title">File Manager</span>
              </a>
            </div>

            <span class="dropdown-header mt-4">Layouts</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="./layouts/index.html" data-placement="left">
                <i class="bi-grid-1x2 nav-icon"></i>
                <span class="nav-link-title">Layouts</span>
              </a>
            </div>

            <span class="dropdown-header mt-4">Documentation</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <div class="nav-item">
              <a class="nav-link " href="./documentation/index.html" data-placement="left">
                <i class="bi-book nav-icon"></i>
                <span class="nav-link-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v2.1.1</span></span>
              </a>
            </div>

            <div class="nav-item">
              <a class="nav-link " href="./documentation/typography.html" data-placement="left">
                <i class="bi-layers nav-icon"></i>
                <span class="nav-link-title">Components</span>
              </a>
            </div>
          </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Other Links -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <i class="bi-info-circle"></i>
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="otherLinksDropdown">
                  <span class="dropdown-header">Help</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-journals dropdown-item-icon"></i>
                    <span class="text-truncate" title="Resources &amp; tutorials">Resources &amp; tutorials</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-command dropdown-item-icon"></i>
                    <span class="text-truncate" title="Keyboard shortcuts">Keyboard shortcuts</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-alt dropdown-item-icon"></i>
                    <span class="text-truncate" title="Connect other apps">Connect other apps</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="bi-gift dropdown-item-icon"></i>
                    <span class="text-truncate" title="What's new?">What's new?</span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <span class="dropdown-header">Contacts</span>
                  <a class="dropdown-item" href="#">
                    <i class="bi-chat-left-dots dropdown-item-icon"></i>
                    <span class="text-truncate" title="Contact support">Contact support</span>
                  </a>
                </div>
              </div>
              <!-- End Other Links -->
            </li>

            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                  <img class="avatar avatar-xss avatar-circle" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States Flag">
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                  <span class="dropdown-header">Select language</span>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (US)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Flag">
                    <span class="text-truncate" title="English">English (UK)</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Flag">
                    <span class="text-truncate" title="Deutsch">Deutsch</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Flag">
                    <span class="text-truncate" title="Dansk">Dansk</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Flag">
                    <span class="text-truncate" title="Italiano">Italiano</span>
                  </a>
                  <a class="dropdown-item" href="#">
                    <img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="Flag">
                    <span class="text-truncate" title="中文 (繁體)">中文 (繁體)</span>
                  </a>
                </div>
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Step Form -->
      <form class="js-step-form" data-hs-step-form-options='{
              "progressSelector": "#checkoutStepFormProgress",
              "stepsSelector": "#checkoutStepFormContent",
              "endSelector": "#checkoutFinishBtn",
              "isValidate": false
            }'>
        <div class="w-md-75 mx-md-auto">
          <!-- Step -->
          <ul id="checkoutStepFormProgress" class="js-step-progress step step-sm step-icon-sm step-inline step-item-between mb-3 mb-sm-7">
            <li class="step-item">
              <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                  "targetSelector": "#checkoutStepDelivery"
                }'>
                <span class="step-icon step-icon-soft-dark">1</span>
                <div class="step-content">
                  <span class="step-title">Delivery details</span>
                </div>
              </a>
            </li>

            <li class="step-item">
              <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                   "targetSelector": "#checkoutStepPayment"
                 }'>
                <span class="step-icon step-icon-soft-dark">2</span>
                <div class="step-content">
                  <span class="step-title">Payment method</span>
                </div>
              </a>
            </li>

            <li class="step-item">
              <a class="step-content-wrapper" href="javascript:;" data-hs-step-form-next-options='{
                   "targetSelector": "#checkoutStepSummary"
                 }'>
                <span class="step-icon step-icon-soft-dark">3</span>
                <div class="step-content">
                  <span class="step-title">Order summary</span>
                </div>
              </a>
            </li>
          </ul>
          <!-- End Step -->
        </div>

        <!-- Content Step Form -->
        <div class="row">
          <div class="col-lg-4 order-lg-2 mb-5 mb-lg-0">
            <div id="checkoutStepOrderSummary">
              <!-- Card -->
              <div class="card mb-3">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                  <h4 class="card-header-title">2 item</h4>
                  <a href="#">Edit</a>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <!-- Media -->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-lg">
                        <img class="avatar-img" src="../../themes/assets/img/400x400/img26.jpg" alt="Image Description">
                        <span class="avatar-status avatar-lg-status avatar-status-primary">1</span>
                      </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <h4 class="mb-0">$21</h4>
                      <span>Topman shoe</span>

                      <div class="text-body fs-6">
                        <span>Color:</span>
                        <span class="text-dark fw-semibold">Green</span>
                      </div>
                      <div class="text-body fs-6">
                        <span>Size:</span>
                        <span class="text-dark fw-semibold">UK 7</span>
                      </div>
                    </div>
                  </div>
                  <!-- End Media -->

                  <hr class="my-4">

                  <!-- Media -->
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <div class="avatar avatar-lg">
                        <img class="avatar-img" src="../../themes/assets/img/400x400/img3.jpg" alt="Image Description">
                        <span class="avatar-status avatar-lg-status avatar-status-primary">2</span>
                      </div>
                    </div>

                    <div class="flex-grow-1 ms-3">
                      <h4 class="mb-0">$89</h4>
                      <span>Calvin Klein t-shirts</span>

                      <div class="text-body fs-6">
                        <span>Color:</span>
                        <span class="text-dark fw-semibold">Green</span>
                      </div>
                      <div class="text-body fs-6">
                        <span>Size:</span>
                        <span class="text-dark fw-semibold">M</span>
                      </div>
                    </div>
                  </div>
                  <!-- End Media -->

                  <hr class="my-4">

                  <input type="text" class="form-control" name="name" placeholder="Promo code" aria-label="Promo code">

                  <small class="form-text">Terms and conditions applied.</small>

                  <hr class="my-4">

                  <div class="row align-items-center mb-3">
                    <span class="col-6">Subtotal:</span>
                    <h4 class="col-6 text-end text-dark mb-0">$199.00</h4>
                  </div>
                  <!-- End Row -->

                  <div class="row align-items-center">
                    <span class="col-6">Delivery:</span>
                    <h4 class="col-6 text-end text-dark mb-0">Free</h4>
                  </div>
                  <!-- End Row -->

                  <hr class="my-4">

                  <div class="row align-items-center">
                    <span class="col-6">VAT included:</span>
                    <h4 class="col-6 text-end text-dark mb-0">$20.00</h4>
                  </div>
                  <!-- End Row -->

                  <hr class="my-4">

                  <div class="row align-items-center">
                    <span class="col-6 text-dark fw-semibold">Total to pay:</span>
                    <h3 class="col-6 text-end text-dark mb-0">$219.00</h3>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- Body -->
              </div>
              <!-- End Card -->

              <!-- Help Link -->
              <div class="d-flex justify-content-center">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <i class="bi-headset"></i>
                  </div>

                  <div class="flex-grow-1 ms-2">
                    <span class="fw-semibold me-1">Need Help?</span>
                    <a class="link" href="#">Contact us</a>
                  </div>
                </div>
              </div>
              <!-- End Help Link -->
            </div>
          </div>
          <!-- End Col -->

          <div class="col-lg-8">
            <div id="checkoutStepFormContent">
              <!-- Card -->
              <div id="checkoutStepDelivery" class="active">
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Delivery details</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="firstNameDeliveryAddressLabel" class="form-label">First name</label>
                          <input type="text" class="form-control" name="firstNameDeliveryAddress" id="firstNameDeliveryAddressLabel" placeholder="Clarice" aria-label="Clarice">
                        </div>
                        <!-- End Form -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="lastNameDeliveryAddressLabel" class="form-label">Last name</label>
                          <input type="text" class="form-control" name="lastNameDeliveryAddress" id="lastNameDeliveryAddressLabel" placeholder="Boone" aria-label="Boone">
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="emailDeliveryAddressLabel" class="form-label">Email</label>
                          <input type="text" class="form-control" name="emailDeliveryAddress" id="emailDeliveryAddressLabel" placeholder="clarice@gmail.com" aria-label="clarice@gmail.com">
                        </div>
                        <!-- End Form -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="phoneDeliveryLabel" class="form-label">Phone</label>
                          <input type="text" class="js-input-mask form-control" name="phoneDeliveryName" id="phoneDeliveryLabel" placeholder="+x(xxx)xxx-xx-xx" aria-label="+x(xxx)xxx-xx-xx" data-hs-mask-options='{
                                   "mask": "+0(000)000-00-00"
                                 }'>
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <div class="row">
                      <div class="col-sm-8">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="deliveryStreetAddressLabel" class="form-label">Street address</label>
                          <input type="text" class="form-control" name="deliveryStreetAddress" id="deliveryStreetAddressLabel" placeholder="470, Lucy Forks Street" aria-label="470, Lucy Forks Street">
                        </div>
                        <!-- End Form -->
                      </div>

                      <div class="col-sm-4">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="deliveryUnitLabel" class="form-label">Unit</label>
                          <input type="text" class="form-control" name="deliveryUnit" id="deliveryUnitLabel" placeholder="10" aria-label="10">
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label for="deliveryCityLabel" class="form-label">City</label>
                      <input type="text" class="form-control" name="deliveryCity" id="deliveryCityLabel" placeholder="London" aria-label="London">
                    </div>
                    <!-- End Form -->

                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Select -->
                        <div class="mb-4">
                          <label for="billingCountryLabel" class="form-label">Country</label>

                          <!-- Select -->
                          <div class="tom-select-custom">
                            <select class="js-select form-select" id="billingCountryLabel">
                              <option value="AF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/af.svg" alt="Afghanistan Flag" /><span class="text-truncate">Afghanistan</span></span>'>Afghanistan</option>
                              <option value="AX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ax.svg" alt="Aland Islands Flag" /><span class="text-truncate">Aland Islands</span></span>'>Aland Islands</option>
                              <option value="AL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/al.svg" alt="Albania Flag" /><span class="text-truncate">Albania</span></span>'>Albania</option>
                              <option value="DZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/dz.svg" alt="Algeria Flag" /><span class="text-truncate">Algeria</span></span>'>Algeria</option>
                              <option value="AS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/as.svg" alt="American Samoa Flag" /><span class="text-truncate">American Samoa</span></span>'>American Samoa</option>
                              <option value="AD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ad.svg" alt="Andorra Flag" /><span class="text-truncate">Andorra</span></span>'>Andorra</option>
                              <option value="AO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ao.svg" alt="Angola Flag" /><span class="text-truncate">Angola</span></span>'>Angola</option>
                              <option value="AI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ai.svg" alt="Anguilla Flag" /><span class="text-truncate">Anguilla</span></span>'>Anguilla</option>
                              <option value="AG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ag.svg" alt="Antigua and Barbuda Flag" /><span class="text-truncate">Antigua and Barbuda</span></span>'>Antigua and Barbuda</option>
                              <option value="AR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ar.svg" alt="Argentina Flag" /><span class="text-truncate">Argentina</span></span>'>Argentina</option>
                              <option value="AM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/am.svg" alt="Armenia Flag" /><span class="text-truncate">Armenia</span></span>'>Armenia</option>
                              <option value="AW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/aw.svg" alt="Aruba Flag" /><span class="text-truncate">Aruba</span></span>'>Aruba</option>
                              <option value="AU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/au.svg" alt="Australia Flag" /><span class="text-truncate">Australia</span></span>'>Australia</option>
                              <option value="AT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/at.svg" alt="Austria Flag" /><span class="text-truncate">Austria</span></span>'>Austria</option>
                              <option value="AZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/az.svg" alt="Azerbaijan Flag" /><span class="text-truncate">Azerbaijan</span></span>'>Azerbaijan</option>
                              <option value="BS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bs.svg" alt="Bahamas Flag" /><span class="text-truncate">Bahamas</span></span>'>Bahamas</option>
                              <option value="BH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bh.svg" alt="Bahrain Flag" /><span class="text-truncate">Bahrain</span></span>'>Bahrain</option>
                              <option value="BD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bd.svg" alt="Bangladesh Flag" /><span class="text-truncate">Bangladesh</span></span>'>Bangladesh</option>
                              <option value="BB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bb.svg" alt="Barbados Flag" /><span class="text-truncate">Barbados</span></span>'>Barbados</option>
                              <option value="BY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/by.svg" alt="Belarus Flag" /><span class="text-truncate">Belarus</span></span>'>Belarus</option>
                              <option value="BE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/be.svg" alt="Belgium Flag" /><span class="text-truncate">Belgium</span></span>'>Belgium</option>
                              <option value="BZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bz.svg" alt="Belize Flag" /><span class="text-truncate">Belize</span></span>'>Belize</option>
                              <option value="BJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bj.svg" alt="Benin Flag" /><span class="text-truncate">Benin</span></span>'>Benin</option>
                              <option value="BM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bm.svg" alt="Bermuda Flag" /><span class="text-truncate">Bermuda</span></span>'>Bermuda</option>
                              <option value="BT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bt.svg" alt="Bhutan Flag" /><span class="text-truncate">Bhutan</span></span>'>Bhutan</option>
                              <option value="BO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bo.svg" alt="Bolivia (Plurinational State of) Flag" /><span class="text-truncate">Bolivia (Plurinational State of)</span></span>'>Bolivia (Plurinational State of)</option>
                              <option value="BQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bq.svg" alt="Bonaire, Sint Eustatius and Saba Flag" /><span class="text-truncate">Bonaire, Sint Eustatius and Saba</span></span>'>Bonaire, Sint Eustatius and Saba</option>
                              <option value="BA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ba.svg" alt="Bosnia and Herzegovina Flag" /><span class="text-truncate">Bosnia and Herzegovina</span></span>'>Bosnia and Herzegovina</option>
                              <option value="BW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bw.svg" alt="Botswana Flag" /><span class="text-truncate">Botswana</span></span>'>Botswana</option>
                              <option value="BR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/br.svg" alt="Brazil Flag" /><span class="text-truncate">Brazil</span></span>'>Brazil</option>
                              <option value="IO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/io.svg" alt="British Indian Ocean Territory Flag" /><span class="text-truncate">British Indian Ocean Territory</span></span>'>British Indian Ocean Territory</option>
                              <option value="BN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bn.svg" alt="Brunei Darussalam Flag" /><span class="text-truncate">Brunei Darussalam</span></span>'>Brunei Darussalam</option>
                              <option value="BG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bg.svg" alt="Bulgaria Flag" /><span class="text-truncate">Bulgaria</span></span>'>Bulgaria</option>
                              <option value="BF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bf.svg" alt="Burkina Faso Flag" /><span class="text-truncate">Burkina Faso</span></span>'>Burkina Faso</option>
                              <option value="BI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bi.svg" alt="Burundi Flag" /><span class="text-truncate">Burundi</span></span>'>Burundi</option>
                              <option value="CV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cv.svg" alt="Cabo Verde Flag" /><span class="text-truncate">Cabo Verde</span></span>'>Cabo Verde</option>
                              <option value="KH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kh.svg" alt="Cambodia Flag" /><span class="text-truncate">Cambodia</span></span>'>Cambodia</option>
                              <option value="CM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cm.svg" alt="Cameroon Flag" /><span class="text-truncate">Cameroon</span></span>'>Cameroon</option>
                              <option value="CA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Canada Flag" /><span class="text-truncate">Canada</span></span>'>Canada</option>
                              <option value="KY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ky.svg" alt="Cayman Islands Flag" /><span class="text-truncate">Cayman Islands</span></span>'>Cayman Islands</option>
                              <option value="CF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cf.svg" alt="Central African Republic Flag" /><span class="text-truncate">Central African Republic</span></span>'>Central African Republic</option>
                              <option value="TD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/td.svg" alt="Chad Flag" /><span class="text-truncate">Chad</span></span>'>Chad</option>
                              <option value="CL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cl.svg" alt="Chile Flag" /><span class="text-truncate">Chile</span></span>'>Chile</option>
                              <option value="CN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cn.svg" alt="China Flag" /><span class="text-truncate">China</span></span>'>China</option>
                              <option value="CX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cx.svg" alt="Christmas Island Flag" /><span class="text-truncate">Christmas Island</span></span>'>Christmas Island</option>
                              <option value="CC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cc.svg" alt="Cocos (Keeling) Islands Flag" /><span class="text-truncate">Cocos (Keeling) Islands</span></span>'>Cocos (Keeling) Islands</option>
                              <option value="CO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/co.svg" alt="Colombia Flag" /><span class="text-truncate">Colombia</span></span>'>Colombia</option>
                              <option value="KM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/km.svg" alt="Comoros Flag" /><span class="text-truncate">Comoros</span></span>'>Comoros</option>
                              <option value="CK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ck.svg" alt="Cook Islands Flag" /><span class="text-truncate">Cook Islands</span></span>'>Cook Islands</option>
                              <option value="CR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cr.svg" alt="Costa Rica Flag" /><span class="text-truncate">Costa Rica</span></span>'>Costa Rica</option>
                              <option value="HR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/hr.svg" alt="Croatia Flag" /><span class="text-truncate">Croatia</span></span>'>Croatia</option>
                              <option value="CU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cu.svg" alt="Cuba Flag" /><span class="text-truncate">Cuba</span></span>'>Cuba</option>
                              <option value="CW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cw.svg" alt="Curaçao Flag" /><span class="text-truncate">Curaçao</span></span>'>Curaçao</option>
                              <option value="CY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cy.svg" alt="Cyprus Flag" /><span class="text-truncate">Cyprus</span></span>'>Cyprus</option>
                              <option value="CZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cz.svg" alt="Czech Republic Flag" /><span class="text-truncate">Czech Republic</span></span>'>Czech Republic</option>
                              <option value="CI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ci.svg" alt=Côte d&apos;Ivoire Flag" /><span class="text-truncate">Côte d&apos;Ivoire</span></span>'>Côte d'Ivoire</option>
                              <option value="CD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cd.svg" alt="Democratic Republic of the Congo Flag" /><span class="text-truncate">Democratic Republic of the Congo</span></span>'>Democratic Republic of the Congo</option>
                              <option value="DK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/dk.svg" alt="Denmark Flag" /><span class="text-truncate">Denmark</span></span>'>Denmark</option>
                              <option value="DJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/dj.svg" alt="Djibouti Flag" /><span class="text-truncate">Djibouti</span></span>'>Djibouti</option>
                              <option value="DM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/dm.svg" alt="Dominica Flag" /><span class="text-truncate">Dominica</span></span>'>Dominica</option>
                              <option value="DO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/do.svg" alt="Dominican Republic Flag" /><span class="text-truncate">Dominican Republic</span></span>'>Dominican Republic</option>
                              <option value="EC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ec.svg" alt="Ecuador Flag" /><span class="text-truncate">Ecuador</span></span>'>Ecuador</option>
                              <option value="EG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/eg.svg" alt="Egypt Flag" /><span class="text-truncate">Egypt</span></span>'>Egypt</option>
                              <option value="SV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sv.svg" alt="El Salvador Flag" /><span class="text-truncate">El Salvador</span></span>'>El Salvador</option>
                              <option value="GB-ENG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb-eng.svg" alt="England Flag" /><span class="text-truncate">England</span></span>'>England</option>
                              <option value="GQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gq.svg" alt="Equatorial Guinea Flag" /><span class="text-truncate">Equatorial Guinea</span></span>'>Equatorial Guinea</option>
                              <option value="ER" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/er.svg" alt="Eritrea Flag" /><span class="text-truncate">Eritrea</span></span>'>Eritrea</option>
                              <option value="EE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ee.svg" alt="Estonia Flag" /><span class="text-truncate">Estonia</span></span>'>Estonia</option>
                              <option value="ET" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/et.svg" alt="Ethiopia Flag" /><span class="text-truncate">Ethiopia</span></span>'>Ethiopia</option>
                              <option value="FK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fk.svg" alt="Falkland Islands Flag" /><span class="text-truncate">Falkland Islands</span></span>'>Falkland Islands</option>
                              <option value="FO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fo.svg" alt="Faroe Islands Flag" /><span class="text-truncate">Faroe Islands</span></span>'>Faroe Islands</option>
                              <option value="FM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fm.svg" alt="Federated States of Micronesia Flag" /><span class="text-truncate">Federated States of Micronesia</span></span>'>Federated States of Micronesia</option>
                              <option value="FJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fj.svg" alt="Fiji Flag" /><span class="text-truncate">Fiji</span></span>'>Fiji</option>
                              <option value="FI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fi.svg" alt="Finland Flag" /><span class="text-truncate">Finland</span></span>'>Finland</option>
                              <option value="FR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/fr.svg" alt="France Flag" /><span class="text-truncate">France</span></span>'>France</option>
                              <option value="GF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gf.svg" alt="French Guiana Flag" /><span class="text-truncate">French Guiana</span></span>'>French Guiana</option>
                              <option value="PF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pf.svg" alt="French Polynesia Flag" /><span class="text-truncate">French Polynesia</span></span>'>French Polynesia</option>
                              <option value="TF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tf.svg" alt="French Southern Territories Flag" /><span class="text-truncate">French Southern Territories</span></span>'>French Southern Territories</option>
                              <option value="GA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ga.svg" alt="Gabon Flag" /><span class="text-truncate">Gabon</span></span>'>Gabon</option>
                              <option value="GM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gm.svg" alt="Gambia Flag" /><span class="text-truncate">Gambia</span></span>'>Gambia</option>
                              <option value="GE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ge.svg" alt="Georgia Flag" /><span class="text-truncate">Georgia</span></span>'>Georgia</option>
                              <option value="DE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Germany Flag" /><span class="text-truncate">Germany</span></span>'>Germany</option>
                              <option value="GH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gh.svg" alt="Ghana Flag" /><span class="text-truncate">Ghana</span></span>'>Ghana</option>
                              <option value="GI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gi.svg" alt="Gibraltar Flag" /><span class="text-truncate">Gibraltar</span></span>'>Gibraltar</option>
                              <option value="GR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gr.svg" alt="Greece Flag" /><span class="text-truncate">Greece</span></span>'>Greece</option>
                              <option value="GL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gl.svg" alt="Greenland Flag" /><span class="text-truncate">Greenland</span></span>'>Greenland</option>
                              <option value="GD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gd.svg" alt="Grenada Flag" /><span class="text-truncate">Grenada</span></span>'>Grenada</option>
                              <option value="GP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gp.svg" alt="Guadeloupe Flag" /><span class="text-truncate">Guadeloupe</span></span>'>Guadeloupe</option>
                              <option value="GU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gu.svg" alt="Guam Flag" /><span class="text-truncate">Guam</span></span>'>Guam</option>
                              <option value="GT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gt.svg" alt="Guatemala Flag" /><span class="text-truncate">Guatemala</span></span>'>Guatemala</option>
                              <option value="GG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gg.svg" alt="Guernsey Flag" /><span class="text-truncate">Guernsey</span></span>'>Guernsey</option>
                              <option value="GN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gn.svg" alt="Guinea Flag" /><span class="text-truncate">Guinea</span></span>'>Guinea</option>
                              <option value="GW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gw.svg" alt="Guinea-Bissau Flag" /><span class="text-truncate">Guinea-Bissau</span></span>'>Guinea-Bissau</option>
                              <option value="GY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gy.svg" alt="Guyana Flag" /><span class="text-truncate">Guyana</span></span>'>Guyana</option>
                              <option value="HT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ht.svg" alt="Haiti Flag" /><span class="text-truncate">Haiti</span></span>'>Haiti</option>
                              <option value="VA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/va.svg" alt="Holy See Flag" /><span class="text-truncate">Holy See</span></span>'>Holy See</option>
                              <option value="HN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/hn.svg" alt="Honduras Flag" /><span class="text-truncate">Honduras</span></span>'>Honduras</option>
                              <option value="HK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/hk.svg" alt="Hong Kong Flag" /><span class="text-truncate">Hong Kong</span></span>'>Hong Kong</option>
                              <option value="HU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/hu.svg" alt="Hungary Flag" /><span class="text-truncate">Hungary</span></span>'>Hungary</option>
                              <option value="IS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/is.svg" alt="Iceland Flag" /><span class="text-truncate">Iceland</span></span>'>Iceland</option>
                              <option value="IN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="India Flag" /><span class="text-truncate">India</span></span>'>India</option>
                              <option value="ID" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/id.svg" alt="Indonesia Flag" /><span class="text-truncate">Indonesia</span></span>'>Indonesia</option>
                              <option value="IR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ir.svg" alt="Iran (Islamic Republic of) Flag" /><span class="text-truncate">Iran (Islamic Republic of)</span></span>'>Iran (Islamic Republic of)</option>
                              <option value="IQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/iq.svg" alt="Iraq Flag" /><span class="text-truncate">Iraq</span></span>'>Iraq</option>
                              <option value="IE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ie.svg" alt="Ireland Flag" /><span class="text-truncate">Ireland</span></span>'>Ireland</option>
                              <option value="IM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/im.svg" alt="Isle of Man Flag" /><span class="text-truncate">Isle of Man</span></span>'>Isle of Man</option>
                              <option value="IL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/il.svg" alt="Israel Flag" /><span class="text-truncate">Israel</span></span>'>Israel</option>
                              <option value="IT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/it.svg" alt="Italy Flag" /><span class="text-truncate">Italy</span></span>'>Italy</option>
                              <option value="JM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/jm.svg" alt="Jamaica Flag" /><span class="text-truncate">Jamaica</span></span>'>Jamaica</option>
                              <option value="JP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/jp.svg" alt="Japan Flag" /><span class="text-truncate">Japan</span></span>'>Japan</option>
                              <option value="JE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/je.svg" alt="Jersey Flag" /><span class="text-truncate">Jersey</span></span>'>Jersey</option>
                              <option value="JO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/jo.svg" alt="Jordan Flag" /><span class="text-truncate">Jordan</span></span>'>Jordan</option>
                              <option value="KZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kz.svg" alt="Kazakhstan Flag" /><span class="text-truncate">Kazakhstan</span></span>'>Kazakhstan</option>
                              <option value="KE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ke.svg" alt="Kenya Flag" /><span class="text-truncate">Kenya</span></span>'>Kenya</option>
                              <option value="KI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ki.svg" alt="Kiribati Flag" /><span class="text-truncate">Kiribati</span></span>'>Kiribati</option>
                              <option value="KW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kw.svg" alt="Kuwait Flag" /><span class="text-truncate">Kuwait</span></span>'>Kuwait</option>
                              <option value="KG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kg.svg" alt="Kyrgyzstan Flag" /><span class="text-truncate">Kyrgyzstan</span></span>'>Kyrgyzstan</option>
                              <option value="LA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/la.svg" alt="Laos Flag" /><span class="text-truncate">Laos</span></span>'>Laos</option>
                              <option value="LV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lv.svg" alt="Latvia Flag" /><span class="text-truncate">Latvia</span></span>'>Latvia</option>
                              <option value="LB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lb.svg" alt="Lebanon Flag" /><span class="text-truncate">Lebanon</span></span>'>Lebanon</option>
                              <option value="LS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ls.svg" alt="Lesotho Flag" /><span class="text-truncate">Lesotho</span></span>'>Lesotho</option>
                              <option value="LR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lr.svg" alt="Liberia Flag" /><span class="text-truncate">Liberia</span></span>'>Liberia</option>
                              <option value="LY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ly.svg" alt="Libya Flag" /><span class="text-truncate">Libya</span></span>'>Libya</option>
                              <option value="LI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/li.svg" alt="Liechtenstein Flag" /><span class="text-truncate">Liechtenstein</span></span>'>Liechtenstein</option>
                              <option value="LT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lt.svg" alt="Lithuania Flag" /><span class="text-truncate">Lithuania</span></span>'>Lithuania</option>
                              <option value="LU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lu.svg" alt="Luxembourg Flag" /><span class="text-truncate">Luxembourg</span></span>'>Luxembourg</option>
                              <option value="MO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mo.svg" alt="Macau Flag" /><span class="text-truncate">Macau</span></span>'>Macau</option>
                              <option value="MG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mg.svg" alt="Madagascar Flag" /><span class="text-truncate">Madagascar</span></span>'>Madagascar</option>
                              <option value="MW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mw.svg" alt="Malawi Flag" /><span class="text-truncate">Malawi</span></span>'>Malawi</option>
                              <option value="MY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/my.svg" alt="Malaysia Flag" /><span class="text-truncate">Malaysia</span></span>'>Malaysia</option>
                              <option value="MV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mv.svg" alt="Maldives Flag" /><span class="text-truncate">Maldives</span></span>'>Maldives</option>
                              <option value="ML" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ml.svg" alt="Mali Flag" /><span class="text-truncate">Mali</span></span>'>Mali</option>
                              <option value="MT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mt.svg" alt="Malta Flag" /><span class="text-truncate">Malta</span></span>'>Malta</option>
                              <option value="MH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mh.svg" alt="Marshall Islands Flag" /><span class="text-truncate">Marshall Islands</span></span>'>Marshall Islands</option>
                              <option value="MQ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mq.svg" alt="Martinique Flag" /><span class="text-truncate">Martinique</span></span>'>Martinique</option>
                              <option value="MR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mr.svg" alt="Mauritania Flag" /><span class="text-truncate">Mauritania</span></span>'>Mauritania</option>
                              <option value="MU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mu.svg" alt="Mauritius Flag" /><span class="text-truncate">Mauritius</span></span>'>Mauritius</option>
                              <option value="YT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/yt.svg" alt="Mayotte Flag" /><span class="text-truncate">Mayotte</span></span>'>Mayotte</option>
                              <option value="MX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mx.svg" alt="Mexico Flag" /><span class="text-truncate">Mexico</span></span>'>Mexico</option>
                              <option value="MD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/md.svg" alt="Moldova Flag" /><span class="text-truncate">Moldova</span></span>'>Moldova</option>
                              <option value="MC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mc.svg" alt="Monaco Flag" /><span class="text-truncate">Monaco</span></span>'>Monaco</option>
                              <option value="MN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mn.svg" alt="Mongolia Flag" /><span class="text-truncate">Mongolia</span></span>'>Mongolia</option>
                              <option value="ME" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/me.svg" alt="Montenegro Flag" /><span class="text-truncate">Montenegro</span></span>'>Montenegro</option>
                              <option value="MS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ms.svg" alt="Montserrat Flag" /><span class="text-truncate">Montserrat</span></span>'>Montserrat</option>
                              <option value="MA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ma.svg" alt="Morocco Flag" /><span class="text-truncate">Morocco</span></span>'>Morocco</option>
                              <option value="MZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mz.svg" alt="Mozambique Flag" /><span class="text-truncate">Mozambique</span></span>'>Mozambique</option>
                              <option value="MM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mm.svg" alt="Myanmar Flag" /><span class="text-truncate">Myanmar</span></span>'>Myanmar</option>
                              <option value="NA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/na.svg" alt="Namibia Flag" /><span class="text-truncate">Namibia</span></span>'>Namibia</option>
                              <option value="NR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nr.svg" alt="Nauru Flag" /><span class="text-truncate">Nauru</span></span>'>Nauru</option>
                              <option value="NP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/np.svg" alt="Nepal Flag" /><span class="text-truncate">Nepal</span></span>'>Nepal</option>
                              <option value="NL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nl.svg" alt="Netherlands Flag" /><span class="text-truncate">Netherlands</span></span>'>Netherlands</option>
                              <option value="NC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nc.svg" "alt="New Caledonia Flag" /><span class="text-truncate">New Caledonia</span></span>'>New Caledonia</option>
                              <option value="NZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nz.svg" alt="New Zealand Flag" /><span class="text-truncate">New Zealand</span></span>'>New Zealand</option>
                              <option value="NI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ni.svg" alt="Nicaragua Flag" /><span class="text-truncate">Nicaragua</span></span>'>Nicaragua</option>
                              <option value="NE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ne.svg" alt="Niger Flag" /><span class="text-truncate">Niger</span></span>'>Niger</option>
                              <option value="NG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ng.svg" alt="Nigeria Flag" /><span class="text-truncate">Nigeria</span></span>'>Nigeria</option>
                              <option value="NU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nu.svg" alt="Niue Flag" /><span class="text-truncate">Niue</span></span>'>Niue</option>
                              <option value="NF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/nf.svg" alt="Norfolk Island Flag" /><span class="text-truncate">Norfolk Island</span></span>'>Norfolk Island</option>
                              <option value="KP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kp.svg" alt="North Korea Flag" /><span class="text-truncate">North Korea</span></span>'>North Korea</option>
                              <option value="MK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mk.svg" alt="North Macedonia Flag" /><span class="text-truncate">North Macedonia</span></span>'>North Macedonia</option>
                              <option value="GB-NIR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb-nir.svg" alt="Northern Ireland Flag" /><span class="text-truncate">Northern Ireland</span></span>'>Northern Ireland</option>
                              <option value="MP" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mp.svg" alt="Northern Mariana Islands Flag" /><span class="text-truncate">Northern Mariana Islands</span></span>'>Northern Mariana Islands</option>
                              <option value="NO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/no.svg" alt="Norway Flag" /><span class="text-truncate">Norway</span></span>'>Norway</option>
                              <option value="OM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/om.svg" alt="Oman Flag" /><span class="text-truncate">Oman</span></span>'>Oman</option>
                              <option value="PK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pk.svg" alt="Pakistan Flag" /><span class="text-truncate">Pakistan</span></span>'>Pakistan</option>
                              <option value="PW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pw.svg" alt="Palau Flag" /><span class="text-truncate">Palau</span></span>'>Palau</option>
                              <option value="PA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pa.svg" alt="Panama Flag" /><span class="text-truncate">Panama</span></span>'>Panama</option>
                              <option value="PG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pg.svg" alt="Papua New Guinea Flag" /><span class="text-truncate">Papua New Guinea</span></span>'>Papua New Guinea</option>
                              <option value="PY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/py.svg" alt="Paraguay Flag" /><span class="text-truncate">Paraguay</span></span>'>Paraguay</option>
                              <option value="PE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pe.svg" alt="Peru Flag" /><span class="text-truncate">Peru</span></span>'>Peru</option>
                              <option value="PH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ph.svg" alt="Philippines Flag" /><span class="text-truncate">Philippines</span></span>'>Philippines</option>
                              <option value="PN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pn.svg" alt="Pitcairn Flag" /><span class="text-truncate">Pitcairn</span></span>'>Pitcairn</option>
                              <option value="PL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pl.svg" alt="Poland Flag" /><span class="text-truncate">Poland</span></span>'>Poland</option>
                              <option value="PT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pt.svg" alt="Portugal Flag" /><span class="text-truncate">Portugal</span></span>'>Portugal</option>
                              <option value="PR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pr.svg" alt="Puerto Rico Flag" /><span class="text-truncate">Puerto Rico</span></span>'>Puerto Rico</option>
                              <option value="QA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/qa.svg" alt="Qatar Flag" /><span class="text-truncate">Qatar</span></span>'>Qatar</option>
                              <option value="CG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/cg.svg" alt="Republic of the Congo Flag" /><span class="text-truncate">Republic of the Congo</span></span>'>Republic of the Congo</option>
                              <option value="RO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ro.svg" alt="Romania Flag" /><span class="text-truncate">Romania</span></span>'>Romania</option>
                              <option value="RU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ru.svg" alt="Russia Flag" /><span class="text-truncate">Russia</span></span>'>Russia</option>
                              <option value="RW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/rw.svg" alt="Rwanda Flag" /><span class="text-truncate">Rwanda</span></span>'>Rwanda</option>
                              <option value="RE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/re.svg" alt="Réunion Flag" /><span class="text-truncate">Réunion</span></span>'>Réunion</option>
                              <option value="BL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/bl.svg" alt="Saint Barthélemy Flag" /><span class="text-truncate">Saint Barthélemy</span></span>'>Saint Barthélemy</option>
                              <option value="SH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sh.svg" alt="Saint Helena, Ascension and Tristan da Cunha Flag" /><span class="text-truncate">Saint Helena, Ascension and Tristan da Cunha</span></span>'>Saint Helena, Ascension and Tristan da Cunha</option>
                              <option value="KN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kn.svg" alt="Saint Kitts and Nevis Flag" /><span class="text-truncate">Saint Kitts and Nevis</span></span>'>Saint Kitts and Nevis</option>
                              <option value="LC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lc.svg" alt="Saint Lucia Flag" /><span class="text-truncate">Saint Lucia</span></span>'>Saint Lucia</option>
                              <option value="MF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/mf.svg" alt="Saint Martin Flag" /><span class="text-truncate">Saint Martin</span></span>'>Saint Martin</option>
                              <option value="PM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/pm.svg" alt="Saint Pierre and Miquelon Flag" /><span class="text-truncate">Saint Pierre and Miquelon</span></span>'>Saint Pierre and Miquelon</option>
                              <option value="VC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/vc.svg" alt="Saint Vincent and the Grenadines Flag" /><span class="text-truncate">Saint Vincent and the Grenadines</span></span>'>Saint Vincent and the Grenadines</option>
                              <option value="WS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ws.svg" alt="Samoa Flag" /><span class="text-truncate">Samoa</span></span>'>Samoa</option>
                              <option value="SM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sm.svg" "alt="San Marino Flag" /><span class="text-truncate">San Marino</span></span>'>San Marino</option>
                              <option value="ST" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/st.svg" "alt="Sao Tome and Principe Flag" /><span class="text-truncate">Sao Tome and Principe</span></span>'>Sao Tome and Principe</option>
                              <option value="SA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sa.svg" alt="Saudi Arabia Flag" /><span class="text-truncate">Saudi Arabia</span></span>'>Saudi Arabia</option>
                              <option value="GB-SCT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb-sct.svg" alt="Scotland Flag" /><span class="text-truncate">Scotland</span></span>'>Scotland</option>
                              <option value="SN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sn.svg" alt="Senegal Flag" /><span class="text-truncate">Senegal</span></span>'>Senegal</option>
                              <option value="RS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/rs.svg" alt="Serbia Flag" /><span class="text-truncate">Serbia</span></span>'>Serbia</option>
                              <option value="SC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sc.svg" alt="Seychelles Flag" /><span class="text-truncate">Seychelles</span></span>'>Seychelles</option>
                              <option value="SL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sl.svg" alt="Sierra Leone Flag" /><span class="text-truncate">Sierra Leone</span></span>'>Sierra Leone</option>
                              <option value="SG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sg.svg" alt="Singapore Flag" /><span class="text-truncate">Singapore</span></span>'>Singapore</option>
                              <option value="SX" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sx.svg" alt="Sint Maarten Flag" /><span class="text-truncate">Sint Maarten</span></span>'>Sint Maarten</option>
                              <option value="SK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sk.svg" alt="Slovakia Flag" /><span class="text-truncate">Slovakia</span></span>'>Slovakia</option>
                              <option value="SI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/si.svg" alt="Slovenia Flag" /><span class="text-truncate">Slovenia</span></span>'>Slovenia</option>
                              <option value="SB" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sb.svg" alt="Solomon Islands Flag" /><span class="text-truncate">Solomon Islands</span></span>'>Solomon Islands</option>
                              <option value="SO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/so.svg" alt="Somalia Flag" /><span class="text-truncate">Somalia</span></span>'>Somalia</option>
                              <option value="ZA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/za.svg" alt="South Africa Flag" /><span class="text-truncate">South Africa</span></span>'>South Africa</option>
                              <option value="GS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gs.svg" alt="South Georgia and the South Sandwich Islands Flag" /><span class="text-truncate">South Georgia and the South Sandwich Islands</span></span>'>South Georgia and the South Sandwich Islands</option>
                              <option value="KR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/kr.svg" alt="South Korea Flag" /><span class="text-truncate">South Korea</span></span>'>South Korea</option>
                              <option value="SS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ss.svg" alt="South Sudan Flag" /><span class="text-truncate">South Sudan</span></span>'>South Sudan</option>
                              <option value="ES" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/es.svg" alt="Spain Flag" /><span class="text-truncate">Spain</span></span>'>Spain</option>
                              <option value="LK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/lk.svg" "alt="Sri Lanka Flag" /><span class="text-truncate">Sri Lanka</span></span>'>Sri Lanka</option>
                              <option value="PS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ps.svg" alt="State of Palestine Flag" /><span class="text-truncate">State of Palestine</span></span>'>State of Palestine</option>
                              <option value="SD" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sd.svg" alt="Sudan Flag" /><span class="text-truncate">Sudan</span></span>'>Sudan</option>
                              <option value="SR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sr.svg" alt="Suriname Flag" /><span class="text-truncate">Suriname</span></span>'>Suriname</option>
                              <option value="SJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sj.svg" alt="Svalbard and Jan Mayen Flag" /><span class="text-truncate">Svalbard and Jan Mayen</span></span>'>Svalbard and Jan Mayen</option>
                              <option value="SZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sz.svg" alt="Swaziland Flag" /><span class="text-truncate">Swaziland</span></span>'>Swaziland</option>
                              <option value="SE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/se.svg" alt="Sweden Flag" /><span class="text-truncate">Sweden</span></span>'>Sweden</option>
                              <option value="CH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ch.svg" alt="Switzerland Flag" /><span class="text-truncate">Switzerland</span></span>'>Switzerland</option>
                              <option value="SY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/sy.svg" alt="Syrian Arab Republic Flag" /><span class="text-truncate">Syrian Arab Republic</span></span>'>Syrian Arab Republic</option>
                              <option value="TW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tw.svg" alt="Taiwan Flag" /><span class="text-truncate">Taiwan</span></span>'>Taiwan</option>
                              <option value="TJ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tj.svg" alt="Tajikistan Flag" /><span class="text-truncate">Tajikistan</span></span>'>Tajikistan</option>
                              <option value="TZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tz.svg" alt="Tanzania Flag" /><span class="text-truncate">Tanzania</span></span>'>Tanzania</option>
                              <option value="TH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/th.svg" alt="Thailand Flag" /><span class="text-truncate">Thailand</span></span>'>Thailand</option>
                              <option value="TL" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tl.svg" alt="Timor-Leste Flag" /><span class="text-truncate">Timor-Leste</span></span>'>Timor-Leste</option>
                              <option value="TG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tg.svg" alt="Togo Flag" /><span class="text-truncate">Togo</span></span>'>Togo</option>
                              <option value="TK" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tk.svg" alt="Tokelau Flag" /><span class="text-truncate">Tokelau</span></span>'>Tokelau</option>
                              <option value="TO" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/to.svg" alt="Tonga Flag" /><span class="text-truncate">Tonga</span></span>'>Tonga</option>
                              <option value="TT" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tt.svg" alt="Trinidad and Tobago Flag" /><span class="text-truncate">Trinidad and Tobago</span></span>'>Trinidad and Tobago</option>
                              <option value="TN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tn.svg" alt="Tunisia Flag" /><span class="text-truncate">Tunisia</span></span>'>Tunisia</option>
                              <option value="TR" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tr.svg" alt="Turkey Flag" /><span class="text-truncate">Turkey</span></span>'>Turkey</option>
                              <option value="TM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tm.svg" alt="Turkmenistan Flag" /><span class="text-truncate">Turkmenistan</span></span>'>Turkmenistan</option>
                              <option value="TC" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tc.svg" alt="Turks and Caicos Islands Flag" /><span class="text-truncate">Turks and Caicos Islands</span></span>'>Turks and Caicos Islands</option>
                              <option value="TV" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/tv.svg" alt="Tuvalu Flag" /><span class="text-truncate">Tuvalu</span></span>'>Tuvalu</option>
                              <option value="UG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ug.svg" alt="Uganda Flag" /><span class="text-truncate">Uganda</span></span>'>Uganda</option>
                              <option value="UA" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ua.svg" alt="Ukraine Flag" /><span class="text-truncate">Ukraine</span></span>'>Ukraine</option>
                              <option value="AE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ae.svg" alt="United Arab Emirates Flag" /><span class="text-truncate">United Arab Emirates</span></span>'>United Arab Emirates</option>
                              <option value="GB" selected data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="United Kingdom Flag" /><span class="text-truncate">United Kingdom</span></span>'>United Kingdom</option>
                              <option value="UM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/um.svg" alt="United States Minor Outlying Islands Flag" /><span class="text-truncate">United States Minor Outlying Islands</span></span>'>United States Minor Outlying Islands</option>
                              <option value="US" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="United States of America Flag" /><span class="text-truncate">United States of America</span></span>'>United States of America</option>
                              <option value="UY" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/uy.svg" alt="Uruguay Flag" /><span class="text-truncate">Uruguay</span></span>'>Uruguay</option>
                              <option value="UZ" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/uz.svg" alt="Uzbekistan Flag" /><span class="text-truncate">Uzbekistan</span></span>'>Uzbekistan</option>
                              <option value="VU" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/vu.svg" alt="Vanuatu Flag" /><span class="text-truncate">Vanuatu</span></span>'>Vanuatu</option>
                              <option value="VE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ve.svg" alt="Venezuela (Bolivarian Republic of) Flag" /><span class="text-truncate">Venezuela (Bolivarian Republic of)</span></span>'>Venezuela (Bolivarian Republic of)</option>
                              <option value="VN" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/vn.svg" alt="Vietnam Flag" /><span class="text-truncate">Vietnam</span></span>'>Vietnam</option>
                              <option value="VG" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/vg.svg" alt="Virgin Islands (British) Flag" /><span class="text-truncate">Virgin Islands (British)</span></span>'>Virgin Islands (British)</option>
                              <option value="VI" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/vi.svg" alt="Virgin Islands (U.S.) Flag" /><span class="text-truncate">Virgin Islands (U.S.)</span></span>'>Virgin Islands (U.S.)</option>
                              <option value="GB-WLS" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb-wls.svg" alt="Wales Flag" /><span class="text-truncate">Wales</span></span>'>Wales</option>
                              <option value="WF" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/wf.svg" alt="Wallis and Futuna Flag" /><span class="text-truncate">Wallis and Futuna</span></span>'>Wallis and Futuna</option>
                              <option value="EH" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/eh.svg" alt="Western Sahara Flag" /><span class="text-truncate">Western Sahara</span></span>'>Western Sahara</option>
                              <option value="YE" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/ye.svg" alt="Yemen Flag" /><span class="text-truncate">Yemen</span></span>'>Yemen</option>
                              <option value="ZM" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/zm.svg" alt="Zambia Flag" /><span class="text-truncate">Zambia</span></span>'>Zambia</option>
                              <option value="ZW" data-option-template='<span class="d-flex align-items-center"><img class="avatar avatar-xss avatar-circle me-2" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/zw.svg" alt="Zimbabwe Flag" /><span class="text-truncate">Zimbabwe</span></span>'>Zimbabwe</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                        <!-- End Select -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="DeliveryZipCodeLabel" class="form-label">Zip code <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="You can find your code in a postal address."></i></label>

                          <input type="text" class="js-input-mask form-control" name="DeliveryZipCode" id="DeliveryZipCodeLabel" placeholder="SE7 5QY" aria-label="SE7 5QY" data-hs-mask-options='{
                                   "mask": "AA0 0AA"
                                 }'>
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <!-- Custom Checkbox -->
                    <div class="form-check mb-4">
                      <input type="checkbox" class="form-check-input" id="exclusiveOffersCardCheckbox1">
                      <label class="form-check-label" for="exclusiveOffersCardCheckbox1">Please send me emails with exclusive offers</label>
                    </div>
                    <!-- End Custom Checkbox -->
                  </div>
                  <!-- Body -->
                </div>
                <!-- End Card -->

                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Delivery options</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <div class="d-grid gap-3">
                      <!-- Form Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOptionRadio" value="" id="deliveryOptionRadio1" checked>
                        <label class="form-check-label" for="deliveryOptionRadio1">
                          <span class="d-block fw-semibold mb-1">Standard Delivery</span>
                          <span class="d-block">Delivered on or before Friday, 28 August, 2020</span>
                          <span class="d-block">Delivery is excluded on Public Holidays.</span>
                        </label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="deliveryOptionRadio" value="" id="deliveryOptionRadio2">
                        <label class="form-check-label" for="deliveryOptionRadio2">
                          <span class="d-block fw-semibold mb-1">$9.99 - Next-day delivery</span>
                          <span class="d-block">Delivered between 7am and 10pm on Wednesday, 26 August, 2020</span>
                        </label>
                      </div>
                      <!-- End Form Check -->
                    </div>
                  </div>
                  <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Footer -->
                <div class="d-flex align-items-center">
                  <a class="btn btn-ghost-secondary" href="#">
                    <i class="bi-chevron-left"></i> Return to Cart
                  </a>
                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#checkoutStepPayment"
                            }'>
                      Continue <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>

              <div id="checkoutStepPayment" style="display: none;">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Payment method</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <!-- Radio Button Group -->
                    <div class="btn-group-sm-vertical">
                      <div class="btn-group btn-group-segment btn-group-fill mb-4" role="group" aria-label="Status radio button group">
                        <input type="radio" class="btn-check flex-fill" name="ecommerceCheckoutBtnRadio" id="ecommerceCheckoutBtnRadioCreditCard" autocomplete="off" checked>
                        <label class="btn btn-sm" for="ecommerceCheckoutBtnRadioCreditCard">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="../../themes/assets/svg/brands/mastercard.svg" alt="Image Description">
                          Credit or Debit card
                        </label>

                        <input type="radio" class="btn-check flex-fill" name="ecommerceCheckoutBtnRadio" id="ecommerceCheckoutBtnRadioPayPal" autocomplete="off" disabled>
                        <label class="btn btn-sm" for="ecommerceCheckoutBtnRadioPayPal">
                          <img class="avatar avatar-xss avatar-4x3 me-2" src="../../themes/assets/svg/brands/paypal-icon.svg" alt="Image Description">
                          PayPal <span class="badge bg-soft-primary text-primary">Coming soon</span>
                        </label>
                      </div>
                    </div>
                    <!-- End Radio Button Group -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label for="cardNameLabel" class="form-label">Name on card</label>
                      <input type="text" class="form-control" id="cardNameLabel" placeholder="Payoneer" aria-label="Payoneer">
                    </div>
                    <!-- End Form -->

                    <!-- Form -->
                    <div class="mb-4">
                      <label for="cardNumberLabel" class="form-label">Card number</label>
                      <input type="text" class="js-input-mask form-control" name="cardNumber" id="cardNumberLabel" placeholder="xxxx xxxx xxxx xxxx" aria-label="xxxx xxxx xxxx xxxx" data-hs-mask-options='{
                              "mask": "0000 0000 0000 0000"
                            }'>
                    </div>
                    <!-- End Form -->

                    <div class="row">
                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="expirationDateLabel" class="form-label">Expiration date</label>
                          <input type="text" class="js-input-mask form-control" name="expirationDate" id="expirationDateLabel" placeholder="xx/xxxx" aria-label="xx/xxxx" data-hs-mask-options='{
                                  "mask": "00/0000"
                                }'>
                        </div>
                        <!-- End Form -->
                      </div>

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="securityCodeLabel" class="form-label">CVV Code <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="A 3 - digit number, typically printed on the back of a card."></i></label>
                          <input type="text" class="js-input-mask form-control" name="securityCode" id="securityCodeLabel" placeholder="xxx" aria-label="xxx" data-hs-mask-options='{
                                  "mask": "000"
                                }'>
                        </div>
                        <!-- End Form -->
                      </div>
                    </div>
                    <!-- End Row -->

                    <div class="d-grid gap-2">
                      <!-- Form Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="makePrimaryCheckbox1">
                        <label class="form-check-label" for="makePrimaryCheckbox1">
                          Make this primary card
                        </label>
                      </div>
                      <!-- End Form Check -->

                      <!-- Form Check -->
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="saveCardCheckbox1">
                        <label class="form-check-label" for="saveCardCheckbox1">
                          Save my payment details for future purchases
                        </label>
                      </div>
                      <!-- End Form Check -->
                    </div>
                  </div>
                  <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Footer -->
                <div class="d-flex align-items-center">
                  <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-next-options='{
                            "targetSelector": "#checkoutStepDelivery"
                          }'>
                    <i class="bi-chevron-left"></i> Return to Delivery
                  </button>
                  <div class="ms-auto">
                    <button type="button" class="btn btn-primary" data-hs-step-form-next-options='{
                              "targetSelector": "#checkoutStepSummary"
                            }'>
                      Continue <i class="bi-chevron-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>

              <div id="checkoutStepSummary" style="display: none;">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                  <!-- Header -->
                  <div class="card-header">
                    <h4 class="card-header-title">Order summary</h4>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5>Billing address</h5>
                      <a class="link" href="javascript:;">Edit</a>
                    </div>

                    <span class="d-block">
                      Anne Richard,<br>
                      anne@gmail.com,<br>
                      +1 (609) 972-22-22,<br>
                      45 Roker Terrace,<br>
                      Latheronwheel,<br>
                      KW5 8NW, London,<br>
                      UK <img class="avatar avatar-xss avatar-circle ms-1" src="../../themes/assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Great Britain Flag">
                    </span>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0">Delivery option</h5>
                      <a class="link" href="javascript:;">Edit</a>
                    </div>

                    <span class="d-block">Standard delivery</span>

                    <hr>

                    <div class="d-flex justify-content-between align-items-center">
                      <h5>Payment method</h5>
                      <a class="link" href="javascript:;">Edit</a>
                    </div>

                    <div class="d-flex">
                      <div class="flex-shrink-0">
                        <img class="avatar avatar-sm avatar-4x3" src="../../themes/assets/svg/brands/mastercard.svg" alt="Image Description">
                      </div>

                      <div class="flex-grow-1 ms-3">
                        <span class="d-block text-dark">MasterCard &bull;&bull;&bull;&bull; 4242</span>
                        <small class="d-block text-muted">Checking - Expires 12/22</small>
                      </div>
                    </div>
                  </div>
                  <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Footer -->
                <div class="d-flex align-items-center">
                  <button type="button" class="btn btn-ghost-secondary" data-hs-step-form-next-options='{
                            "targetSelector": "#checkoutStepPayment"
                          }'>
                    <i class="bi-chevron-left"></i> Return to Payment
                  </button>
                  <div class="ms-auto">
                    <button id="checkoutFinishBtn" type="button" class="btn btn-primary">Place order</button>
                  </div>
                </div>
                <!-- End Footer -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div>
        <!-- End Step Form -->
      </form>
      <!-- End Step Form -->

      <!-- Message Body -->
      <div id="checkoutStepSuccessMessage" style="display: none;">
        <div class="text-center">
          <img class="img-fluid mb-3" src="../../themes/assets/svg/illustrations/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="default" style="max-width: 15rem;">
          <img class="img-fluid mb-3" src="../../themes/assets/svg/illustrations-light/oc-hi-five.svg" alt="Image Description" data-hs-theme-appearance="dark" style="max-width: 15rem;">

          <div class="mb-4">
            <h2>Your payment was successful!</h2>
            <p>Order #72712</p>
            <p>You will receive an email confirmation.</p>
          </div>

          <a class="btn btn-primary" href="./ecommerce.html">
            <i class="bi-basket me-1"></i> Continue shopping
          </a>
        </div>
      </div>
      <!-- End Message Body -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semibold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="../../themes/assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="../../themes/assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="../../themes/assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="../../themes/assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="../../themes/assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="../../themes/assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="../../themes/assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="../../themes/assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="../../themes/assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="../../themes/assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="../../themes/assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="../../themes/assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="../../themes/assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="../../themes/assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="../../themes/assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Global Compulsory  -->
  <script src="../../themes/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../themes/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../themes/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../themes/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside.min.js"></script>
  <script src="../../themes/assets/vendor/hs-form-search/dist/hs-form-search.min.js"></script>

  <script src="../../themes/assets/vendor/hs-step-form/dist/hs-step-form.min.js"></script>
  <script src="../../themes/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>
  <script src="../../themes/assets/vendor/imask/dist/imask.min.js"></script>
  <script src="../../themes/assets/vendor/quill/dist/quill.min.js"></script>
  <script src="../../themes/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

  <!-- JS Front -->
  <script src="../../themes/assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        

        // INITIALIZATION OF NAVBAR VERTICAL ASIDE
        // =======================================================
        new HSSideNav('.js-navbar-vertical-aside').init()


        // INITIALIZATION OF FORM SEARCH
        // =======================================================
        new HSFormSearch('.js-form-search')


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')


        // INITIALIZATION OF INPUT MASK
        // =======================================================
        HSCore.components.HSMask.init('.js-input-mask')


        // INITIALIZATION OF STEP FORM
        // =======================================================
        new HSStepForm('.js-step-form', {
          finish: () => {
            document.getElementById("checkoutStepFormProgress").style.display = 'none'
            document.getElementById("checkoutStepFormContent").style.display = 'none'
            document.getElementById("checkoutStepOrderSummary").style.display = 'none'
            document.getElementById("checkoutStepSuccessMessage").style.display = 'block'
            const formContainer = document.getElementById('formContainer')
          },
          onNextStep: function () {
            scrollToTop()
          },
          onPrevStep: function () {
            scrollToTop()
          }
        })

        function scrollToTop(el = '.js-step-form') {
          el = document.querySelector(el)
          window.scrollTo({
            top: (el.getBoundingClientRect().top + window.scrollY) - 30,
            left: 0,
            behavior: 'smooth'
          })
        }
      }
    })()
  </script>

  <!-- Style Switcher JS -->

  <script>
      (function () {
        // STYLE SWITCHER
        // =======================================================
        const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
        const $variants = document.querySelectorAll(`[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

        // Function to set active style in the dorpdown menu and set icon for dropdown trigger
        const setActiveStyle = function () {
          $variants.forEach($item => {
            if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
              $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
              return $item.classList.add('active')
            }

            $item.classList.remove('active')
          })
        }

        // Add a click event to all items of the dropdown to set the style
        $variants.forEach(function ($item) {
          $item.addEventListener('click', function () {
            HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
          })
        })

        // Call the setActiveStyle on load page
        setActiveStyle()

        // Add event listener on change style to call the setActiveStyle function
        window.addEventListener('on-hs-appearance-change', function () {
          setActiveStyle()
        })
      })()
    </script>

  <!-- End Style Switcher JS -->
</body>
</html>