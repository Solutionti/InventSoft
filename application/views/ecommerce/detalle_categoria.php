<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos por categoria</title>
    <link rel="stylesheet" href="<?php echo base_url();?>./public/css/asclepio.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/fontawesome/css/fontawesome.css">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/brands.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>public/fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/vendor.min.css">
    <link rel="stylesheet" href="https://htmlstream.com/preview/front-v4.2/html/assets/css/theme.min.css?v=1.0">
</head>
<body class="black">
<header id="header" class="navbar navbar-expand-lg navbar-end navbar-light">
    <div class="container navbar-topbar">
      <nav class="js-mega-menu navbar-nav-wrap">
        <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="d-flex justify-content-between align-items-center">
            <span class="navbar-toggler-text">Topbar</span>
            <span class="navbar-toggler-default">
              <i class="bi-chevron-down ms-2"></i>
            </span>
            <span class="navbar-toggler-toggled">
              <i class="bi-chevron-up ms-2"></i>
            </span>
          </span>
        </button>
        <div id="topbarNavDropdown" class="navbar-nav-wrap-collapse collapse navbar-collapse navbar-topbar-collapse">
          <div class="navbar-toggler-wrapper">
            <div class="navbar-topbar-toggler d-flex justify-content-between align-items-center">
              <span class="navbar-toggler-text small">Topbar</span>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#topbarNavDropdown" aria-controls="topbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi-x"></i>
              </button>
            </div>
          </div>
          <ul class="navbar-nav">
            <!-- Demos -->
            <li class="hs-has-mega-menu nav-item">
              <a id="demosMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Opciones</a>
              <div class="hs-mega-menu dropdown-menu w-100" aria-labelledby="demosMegaMenu" style="min-width: 40rem;">
                <div class="navbar-dropdown-menu-promo">
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../landing-classic-corporate.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M15.6 5.59998L20.9 10.9C21.3 11.3 21.3 11.9 20.9 12.3L17.6 15.6L11.6 9.59998L15.6 5.59998ZM2.3 12.3L7.59999 17.6L11.6 13.6L5.59999 7.59998L2.3 10.9C1.9 11.3 1.9 11.9 2.3 12.3Z" fill="#035A4B" />
                              <path opacity="0.3" d="M17.6 15.6L12.3 20.9C11.9 21.3 11.3 21.3 10.9 20.9L7.59998 17.6L13.6 11.6L17.6 15.6ZM10.9 2.3L5.59998 7.6L9.59998 11.6L15.6 5.6L12.3 2.3C11.9 1.9 11.3 1.9 10.9 2.3Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Main</span>
                          <p class="navbar-dropdown-menu-media-desc">Over 60 corporate, agency, portfolio, account and many more pages.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-real-estate/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z" fill="#035A4B" />
                              <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Real Estate</span>
                          <p class="navbar-dropdown-menu-media-desc">Find the latest homes for sale, real estate market data.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-jobs/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="#035A4B" />
                              <path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Jobs <span class="badge bg-success rounded-pill ms-1">Hot</span></span>
                          <p class="navbar-dropdown-menu-media-desc">Search millions of jobs online to find the next step in your career.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="navbar-dropdown-menu-promo">
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-course/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M20 19H4C2.9 19 2 18.1 2 17H22C22 18.1 21.1 19 20 19Z" fill="#035A4B" />
                              <path opacity="0.3" d="M20 5H4C3.4 5 3 5.4 3 6V17H21V6C21 5.4 20.6 5 20 5Z" fill="#035A4B" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9167 6.83334H9.91666C9.18899 6.83334 8.66666 7.37744 8.66666 8.08334V13.9167C8.66666 14.6226 9.18899 15.1667 9.91666 15.1667H14.9167C15.1841 15.1667 15.3333 15.0112 15.3333 14.75V14.3333H10.3333C10.1032 14.3333 9.91665 14.1468 9.91665 13.9167C9.91665 13.6866 10.1032 13.5 10.3333 13.5H15.3333V7.25001C15.3333 6.9888 15.1841 6.83334 14.9167 6.83334Z" fill="#035A4B" />
                              <mask id="mask0" mask-type="alpha" maskUnits="userSpaceOnUse" x="8" y="6" width="8" height="10">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9167 6.83334H9.91666C9.18899 6.83334 8.66666 7.37744 8.66666 8.08334V13.9167C8.66666 14.6226 9.18899 15.1667 9.91666 15.1667H14.9167C15.1841 15.1667 15.3333 15.0112 15.3333 14.75V14.3333H10.3333C10.1032 14.3333 9.91665 14.1468 9.91665 13.9167C9.91665 13.6866 10.1032 13.5 10.3333 13.5H15.3333V7.25001C15.3333 6.9888 15.1841 6.83334 14.9167 6.83334Z" fill="white" />
                              </mask>
                              <g mask="url(#mask0)">
                              </g>
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Course <span class="badge bg-success rounded-pill ms-1">Hot</span></span>
                          <p class="navbar-dropdown-menu-media-desc">Learn on your schedule. An online learning and teaching demo.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link active" href="../demo-shop/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M20 22H4C3.4 22 3 21.6 3 21V2H21V21C21 21.6 20.6 22 20 22Z" fill="#035A4B" />
                              <path d="M12 14C9.2 14 7 11.8 7 9V5C7 4.4 7.4 4 8 4C8.6 4 9 4.4 9 5V9C9 10.7 10.3 12 12 12C13.7 12 15 10.7 15 9V5C15 4.4 15.4 4 16 4C16.6 4 17 4.4 17 5V9C17 11.8 14.8 14 12 14Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">E-Commerce</span>
                          <p class="navbar-dropdown-menu-media-desc">Choose an online store &amp; get your business online today!</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-app-marketplace/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" d="M18 10V20C18 20.6 18.4 21 19 21C19.6 21 20 20.6 20 20V10H18Z" fill="#035A4B" />
                              <path opacity="0.3" d="M11 10V17H6V10H4V20C4 20.6 4.4 21 5 21H12C12.6 21 13 20.6 13 20V10H11Z" fill="#035A4B" />
                              <path opacity="0.3" d="M10 10C10 11.1 9.1 12 8 12C6.9 12 6 11.1 6 10H10Z" fill="#035A4B" />
                              <path opacity="0.3" d="M18 10C18 11.1 17.1 12 16 12C14.9 12 14 11.1 14 10H18Z" fill="#035A4B" />
                              <path opacity="0.3" d="M14 4H10V10H14V4Z" fill="#035A4B" />
                              <path opacity="0.3" d="M17 4H20L22 10H18L17 4Z" fill="#035A4B" />
                              <path opacity="0.3" d="M7 4H4L2 10H6L7 4Z" fill="#035A4B" />
                              <path d="M6 10C6 11.1 5.1 12 4 12C2.9 12 2 11.1 2 10H6ZM10 10C10 11.1 10.9 12 12 12C13.1 12 14 11.1 14 10H10ZM18 10C18 11.1 18.9 12 20 12C21.1 12 22 11.1 22 10H18ZM19 2H5C4.4 2 4 2.4 4 3V4H20V3C20 2.4 19.6 2 19 2ZM12 17C12 16.4 11.6 16 11 16H6C5.4 16 5 16.4 5 17C5 17.6 5.4 18 6 18H11C11.6 18 12 17.6 12 17Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">App Marketplace</span>
                          <p class="navbar-dropdown-menu-media-desc">Find apps and integrates seamlessly with popular apps.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="navbar-dropdown-menu-promo">
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link " href="../demo-help-desk/index.html">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M22.1671 18.1421C22.4827 18.4577 23.0222 18.2331 23.0206 17.7868L23.0039 13.1053V5.52632C23.0039 4.13107 21.8729 3 20.4776 3H8.68815C7.2929 3 6.16183 4.13107 6.16183 5.52632V9H13C14.6568 9 16 10.3431 16 12V15.6316H19.6565L22.1671 18.1421Z" fill="#035A4B" />
                              <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M1.98508 18V13C1.98508 11.8954 2.88051 11 3.98508 11H11.9851C13.0896 11 13.9851 11.8954 13.9851 13V18C13.9851 19.1046 13.0896 20 11.9851 20H4.10081L2.85695 21.1905C2.53895 21.4949 2.01123 21.2695 2.01123 20.8293V18.3243C1.99402 18.2187 1.98508 18.1104 1.98508 18ZM5.99999 14.5C5.99999 14.2239 6.22385 14 6.49999 14H11.5C11.7761 14 12 14.2239 12 14.5C12 14.7761 11.7761 15 11.5 15H6.49999C6.22385 15 5.99999 14.7761 5.99999 14.5ZM9.49999 16C9.22385 16 8.99999 16.2239 8.99999 16.5C8.99999 16.7761 9.22385 17 9.49999 17H11.5C11.7761 17 12 16.7761 12 16.5C12 16.2239 11.7761 16 11.5 16H9.49999Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">Help Desk</span>
                          <p class="navbar-dropdown-menu-media-desc">A customer service demo that helps you balance customer needs.</p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                    <a class="navbar-dropdown-menu-promo-link" href="https://htmlstream.com/contact-us" target="_blank">
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <span class="svg-icon svg-icon-sm text-primary">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M12 17C16.4183 17 20 13.4183 20 9C20 4.58172 16.4183 1 12 1C7.58172 1 4 4.58172 4 9C4 13.4183 7.58172 17 12 17Z" fill="#035A4B" />
                              <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M6.53819 9L10.568 19.3624L11.976 18.8149L13.3745 19.3674L17.4703 9H6.53819ZM9.46188 11H14.5298L11.9759 17.4645L9.46188 11Z" fill="#035A4B" />
                              <path opacity="0.3" d="M10 22H14V22C14 23.1046 13.1046 24 12 24V24C10.8954 24 10 23.1046 10 22V22Z" fill="#035A4B" />
                              <path fill-rule="evenodd" clip-rule="evenodd" d="M8 17C8 16.4477 8.44772 16 9 16H15C15.5523 16 16 16.4477 16 17C16 17.5523 15.5523 18 15 18C15.5523 18 16 18.4477 16 19C16 19.5523 15.5523 20 15 20C15.5523 20 16 20.4477 16 21C16 21.5523 15.5523 22 15 22H9C8.44772 22 8 21.5523 8 21C8 20.4477 8.44772 20 9 20C8.44772 20 8 19.5523 8 19C8 18.4477 8.44772 18 9 18C8.44772 18 8 17.5523 8 17Z" fill="#035A4B" />
                            </svg>
                          </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                          <span class="navbar-dropdown-menu-media-title">New demo ideas?</span>
                          <p class="navbar-dropdown-menu-media-desc">
                            Send us your suggestions <i class="bi-box-arrow-up-right ms-1"></i>
                          </p>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="navbar-dropdown-menu-promo-item">
                  </div>
                </div>
              </div>
            </li>
            <li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options='{
                  "desktop": {
                    "maxWidth": "20rem"
                  }
                }'>
              <a id="docsMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Docs</a>
              <div class="hs-mega-menu hs-position-right dropdown-menu" aria-labelledby="docsMegaMenu" style="min-width: 20rem;">
                <a class="navbar-dropdown-menu-media-link" href="../documentation/index.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M4.85714 1H11.7364C12.0911 1 12.4343 1.12568 12.7051 1.35474L17.4687 5.38394C17.8057 5.66895 18 6.08788 18 6.5292V19.0833C18 20.8739 17.9796 21 16.1429 21H4.85714C3.02045 21 3 20.8739 3 19.0833V2.91667C3 1.12612 3.02045 1 4.85714 1ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B" />
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85714 3H14.7364C15.0911 3 15.4343 3.12568 15.7051 3.35474L20.4687 7.38394C20.8057 7.66895 21 8.08788 21 8.5292V21.0833C21 22.8739 20.9796 23 19.1429 23H6.85714C5.02045 23 5 22.8739 5 21.0833V4.91667C5 3.12612 5.02045 3 6.85714 3ZM7 13C7 12.4477 7.44772 12 8 12H15C15.5523 12 16 12.4477 16 13C16 13.5523 15.5523 14 15 14H8C7.44772 14 7 13.5523 7 13ZM8 16C7.44772 16 7 16.4477 7 17C7 17.5523 7.44772 18 8 18H11C11.5523 18 12 17.5523 12 17C12 16.4477 11.5523 16 11 16H8Z" fill="#035A4B" />
                        </svg>
                      </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Documentation <span class="badge bg-primary rounded-pill ms-1">v4.2</span></span>
                      <p class="navbar-dropdown-menu-media-desc">Development guides for building projects with Space</p>
                    </div>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="navbar-dropdown-menu-media-link" href="../snippets/index.html">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <span class="svg-icon svg-icon-sm text-primary">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M21 2H13C12.4 2 12 2.4 12 3V13C12 13.6 12.4 14 13 14H21C21.6 14 22 13.6 22 13V3C22 2.4 21.6 2 21 2ZM15.7 8L14 10.1V5.80005L15.7 8ZM15.1 4H18.9L17 6.40002L15.1 4ZM17 9.59998L18.9 12H15.1L17 9.59998ZM18.3 8L20 5.90002V10.2L18.3 8ZM9 2H3C2.4 2 2 2.4 2 3V21C2 21.6 2.4 22 3 22H9C9.6 22 10 21.6 10 21V3C10 2.4 9.6 2 9 2ZM4.89999 12L4 14.8V9.09998L4.89999 12ZM4.39999 4H7.60001L6 8.80005L4.39999 4ZM6 15.2L7.60001 20H4.39999L6 15.2ZM7.10001 12L8 9.19995V14.9L7.10001 12Z" fill="#035A4B" />
                          <path d="M21 18H13C12.4 18 12 17.6 12 17C12 16.4 12.4 16 13 16H21C21.6 16 22 16.4 22 17C22 17.6 21.6 18 21 18ZM19 21C19 20.4 18.6 20 18 20H13C12.4 20 12 20.4 12 21C12 21.6 12.4 22 13 22H18C18.6 22 19 21.6 19 21Z" fill="#035A4B" />
                        </svg>
                      </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <span class="navbar-dropdown-menu-media-title">Snippets</span>
                      <p class="navbar-dropdown-menu-media-desc">Move quickly with copy-to-clipboard feature</p>
                    </div>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- End Topbar -->
    <div class="container">
      <nav class="js-mega-menu navbar-nav-wrap">
        <a class="navbar-brand" href="../demo-shop/index.html" aria-label="Front">
          <img 
            class="navbar-brand-logo" 
            src="https://www.sosfactory.com/wp-content/uploads/2016/12/icon-restaurant-bolat-min.png"
          >
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="fas fa-bars"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ">
            <li class="nav-item">
              <a class="nav-link active text-white" href="<?php echo base_url(); ?>ecommerce/inicio">Inicio</a>
            </li>
            <li class="hs-has-sub-menu nav-item">
              <a id="listingsDropdown" class="hs-mega-menu-invoker nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categorias</a>
              <div class="hs-sub-menu dropdown-menu" aria-labelledby="listingsDropdown" style="min-width: 14rem;">
              <?php foreach($categoria->result() as $categorias){ ?>
                <a class="dropdown-item " href="<?php echo base_url(); ?>ecommerce/productoscategoria/<?php echo $categorias->codigo_categoria; ?>"><?php echo $categorias->nombre; ?></a>
              <?php } ?>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="../demo-shop/product-overview.html">Productos mas vendidos</a>
            </li>
            <li class="hs-has-mega-menu nav-item" data-hs-mega-menu-item-options='{
                  "desktop": {
                    "position": "right",
                    "maxWidth": "27rem"
                  }
                }'>
              <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle text-white" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Conoce mas</a>
              <div class="hs-mega-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 27rem;">
                <div class="navbar-dropdown-menu-inner">
                  <span class="dropdown-header">Elements</span>

                  <div class="row">
                    <div class="col-sm mb-3 mb-sm-0">
                      <a class="dropdown-item " href="../demo-shop/categories.html">Categories</a>
                      <a class="dropdown-item " href="../demo-shop/categories-sidebar.html">Categories Sidebar</a>
                      <a class="dropdown-item " href="../demo-shop/empty-cart.html">Empty Cart</a>
                    </div>
                    <div class="col-sm">
                      <a class="dropdown-item " href="../demo-shop/cart.html">Cart</a>
                      <a class="dropdown-item " href="../demo-shop/checkout.html">Checkout</a>
                      <a class="dropdown-item " href="../demo-shop/order-completed.html">Order Completed</a>
                    </div>
                  </div>
                </div>
                <!-- Mega Menu Banner -->
                <div class="navbar-dropdown-menu-shop-banner">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img class="navbar-dropdown-menu-shop-banner-img" src="https://htmlstream.com/preview/front-v4.2/html/assets/img/mockups/img4.png" alt="Image Description">
                    </div>
                    <div class="flex-grow-1 p-4">
                      <span class="h4 d-block text-primary">Win T-Shirt</span>
                      <p>Win one of our Front brand T-shirts.</p>
                      <a class="btn btn-sm btn-soft-primary btn-transition" href="../index.html">Learn more <i class="bi-chevron-right small"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <button class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarSearch" aria-controls="offcanvasNavbarSearch">
                <i class="fas fa-search text-white"></i>
              </button>
              <button type="button" class="btn btn-ghost-secondary btn-sm btn-icon" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarEmptyShoppingCart" aria-controls="offcanvasNavbarEmptyShoppingCart">
              <i class="fas fa-shopping-basket text-white"></i>
              </button>
              <button class="btn btn-primary btn-transition btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#signupModal">Rastrear pedido</button>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->
  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main">
    <div class="position-relative">
      <div class="js-swiper-shop-classic-hero swiper bg-black">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h1 class="display-4 mb-4 text-white">Hamburguesas doble carne</h1>
                    <p class="text-white">
                      As well as being game-changers when it comes to technical innovation,
                      Front has some of the bestselling cap in its locker.
                    </p>
                  </div>
                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$59 - Add to cart</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto">
                    <img
                      class="img-fluid"
                      src="https://www.pngplay.com/wp-content/uploads/2/Burger-Transparent-Images.png"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h2 class="display-4 mb-4 text-white">Papas locas Full</h2>
                    <p class="text-white">It's all new, all screen, and all powerful. Completely redesigned and packed with our most advanced technology, it will make you rethink what iPad is capable of.</p>
                  </div>
                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$799 - Add to cart</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto">
                    <img class="img-fluid" src="https://laspapaslocas.com/wp-content/uploads/sites/9/2022/04/papas.png" alt="Image Description">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="container content-space-t-2 content-space-b-3">
              <div class="row align-items-lg-center">
                <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
                  <div class="mb-6">
                    <h3 class="display-4 mb-4 text-white">Perros calientes</h3>
                    <p class="text-white">Founded in 1985, French label Celio channels 30 years of expertise into its contemporary menswear range. Expect fly style for a city or beach with its denim shorts, chinos and printed jersey.</p>
                  </div>

                  <div class="d-flex gap-2">
                    <a class="btn btn-primary rounded-pill" href="#">$10k - agregar carrito</a>
                    <a class="btn btn-outline-primary btn-icon rounded-circle" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Save for later">
                      <i class="bi-heart-fill"></i>
                    </a>
                  </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                  <div class="w-75 mx-auto text-center">
                    <img
                      class="img-fluid"
                      src="https://www.pngplay.com/wp-content/uploads/7/Hot-Dog-No-Background.png"
                      width="320px;"
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="js-swiper-shop-classic-hero-button-next swiper-button-next"></div>
        <div class="js-swiper-shop-classic-hero-button-prev swiper-button-prev"></div>
      </div>
      <div class="position-absolute bottom-0 start-0 end-0 mb-3">
        <div class="js-swiper-shop-hero-thumbs swiper" style="max-width: 13rem;">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://www.pngplay.com/wp-content/uploads/2/Burger-Transparent-Images.png" alt="Image Description">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://laspapaslocas.com/wp-content/uploads/sites/9/2022/04/papas.png" alt="Image Description">
              </a>
            </div>
            <div class="swiper-slide">
              <a class="js-swiper-thumb-progress swiper-thumb-progress-avatar" href="javascript:;" tabindex="0">
                <img class="swiper-thumb-progress-avatar-img" src="https://www.pngplay.com/wp-content/uploads/7/Hot-Dog-No-Background.png" alt="Image Description">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="container my-5">
  <section>
    <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="row">
              <div class="col-lg-4">
                <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                  data-ride="carousel">
                  <div class="carousel-inner text-center text-md-left" role="listbox">
                    <div class="carousel-item active">
                      <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Products/17.jpg"
                        alt="First slide" class="img-fluid" width="300px;">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-8 text-center text-md-left">
                <h4
                  class="h4-responsive text-center text-md-left product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                  <strong>Sony headphones</strong>
                </h4>
                <span class="badge badge-danger product mb-4 ml-xl-0 ml-4">bestseller</span>
                <h4 class="h3-responsive text-center text-md-left mb-2 ml-xl-0 ml-4">
                  <span class="red-text font-weight-bold">
                    <strong>$49</strong>
                  </span>
                  <span class="grey-text">
                    <small>
                      <s>$89</s>
                    </small>
                  </span>
                </h4>
                <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne1">
                      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
                        aria-controls="collapseOne1">
                        <h5 class="mb-0">
                          Description
                          <i class="fas fa-angle-down rotate-icon"></i>
                        </h5>
                      </a>
                    </div>
                    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
                      data-parent="#accordionEx">
                      <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute,
                        <br>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="materialInline1">
                            <label class="form-check-label" for="materialInline1">Con papas</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="materialInline1">
                            <label class="form-check-label" for="materialInline1">Sin papas</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </div>
                <section class="color">
                  <div class="mt-2">
                    <p class="grey-text">Salsas y adicinales</p>
                    <div class="row text-center text-md-left">
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Maiz</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Tomate</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Tartara</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline1">
                          <label class="form-check-label" for="materialInline1">Salsa Ajo</label>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de piña</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de Mora</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input type="checkbox" class="form-check-input" id="materialInline2">
                          <label class="form-check-label" for="materialInline2">Salsa de BBQ</label>
                        </div>
                      </div>
                    </div>
                    <div class="row mt-3">
                      <div class="col-md-12 text-center text-md-left text-md-right">
                        <button class="btn btn-primary btn-rounded">
                          <i class="fas fa-cart-plus mr-2" aria-hidden="true"></i> Agregar al carrito</button>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="font-weight-bold text-center text-white pb-2">Electronics</h3>
    <hr class="w-header my-4 pb-2">
    <div class="row">
    <?php foreach($productosc->result() as $productoscate){ ?>
      <div class="col-lg-4 col-md-12">
        <a class="card z-depth-0 mb-4" data-toggle="modal" data-target="#basicExampleModal">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col-6 px-0">
                <img src="<?php echo $productoscate->url_imagen; ?>" class="img-fluid">
              </div>
              <div class="col-6">
                <p class="mb-0"><strong><?php echo $productoscate->nombre; ?></strong></p>
                <ul class="rating inline-ul">
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star blue-text"></i>
                  </li>
                  <li>
                    <i class="fas fa-star grey-text"></i>
                  </li>
                </ul>
                <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>$<?php echo $productoscate->precio; ?></strong></h6>
              </div>
            </div>
          </div>
        </a>
      </div>
      <?php } ?>
    </div>
  </section>
</div>
<script src="<?php echo base_url();?>./public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>./public/js/asclepio.min.js"></script>
<!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="https://htmlstream.com/preview/front-v4.2/html/assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="https://htmlstream.com/preview/front-v4.2/html/assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      // INITIALIZATION OF MEGA MENU
      // =======================================================
      new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      new HSShowAnimation('.js-animation-link')


      // INITIALIZATION OF BOOTSTRAP VALIDATION
      // =======================================================
      HSBsValidation.init('.js-validate', {
        onSubmit: data => {
          data.event.preventDefault()
          alert('Submited')
        }
      })


      // INITIALIZATION OF BOOTSTRAP DROPDOWN
      // =======================================================
      HSBsDropdown.init()


      // INITIALIZATION OF GO TO
      // =======================================================
      new HSGoTo('.js-go-to')


      // INITIALIZATION OF SWIPER
      // =======================================================
      var sliderThumbs = new Swiper('.js-swiper-shop-hero-thumbs', {
        watchSlidesVisibility: true,
        watchSlidesProgress: true,
        history: false,
        slidesPerView: 3,
        spaceBetween: 15,
        on: {
          beforeInit: (swiper) => {
            const css = `.swiper-slide-thumb-active .swiper-thumb-progress .swiper-thumb-progress-path {
                  opacity: 1;
                  -webkit-animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
                  animation: ${swiper.originalParams.autoplay.delay}ms linear 0ms forwards swiperThumbProgressDash;
              }`
              style = document.createElement('style')
            document.head.appendChild(style)
            style.type = 'text/css'
            style.appendChild(document.createTextNode(css));

            swiper.el.querySelectorAll('.js-swiper-thumb-progress')
            .forEach(slide => {
              slide.insertAdjacentHTML('beforeend', '<span class="swiper-thumb-progress"><svg version="1.1" viewBox="0 0 160 160"><path class="swiper-thumb-progress-path" d="M 79.98452083651917 4.000001576345426 A 76 76 0 1 1 79.89443752470656 4.0000733121155605 Z"></path></svg></span>')
            })
          },
        },
      });

      var swiper = new Swiper('.js-swiper-shop-classic-hero',{
        autoplay: true,
        loop: true,
        navigation: {
          nextEl: '.js-swiper-shop-classic-hero-button-next',
          prevEl: '.js-swiper-shop-classic-hero-button-prev',
        },
        thumbs: {
          swiper: sliderThumbs
        }
      });


      // INITIALIZATION OF COUNTDOWN
      // =======================================================
      const oneYearFromNow = new Date()

      document.querySelectorAll('.js-countdown').forEach(item => {
        const days = item.querySelector('.js-cd-days'),
          hours = item.querySelector('.js-cd-hours'),
          minutes = item.querySelector('.js-cd-minutes'),
          seconds = item.querySelector('.js-cd-seconds')

        countdown(oneYearFromNow.setFullYear(
          oneYearFromNow.getFullYear() + 1),
          ts => {
            days.innerHTML = ts.days
            hours.innerHTML = ts.hours
            minutes.innerHTML = ts.minutes
            seconds.innerHTML = ts.seconds
          },
          countdown.DAYS | countdown.HOURS | countdown.MINUTES | countdown.SECONDS
        )
      })
    })()
  </script>
</body>
</html>