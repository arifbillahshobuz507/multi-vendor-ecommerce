<div id="shopify-section-sections--14861833830490__announcement-bar"
    class="shopify-section shopify-section-group-header-group">
    <style type="text/css">
        @keyframes SlideLeft {
            0% {
                transform: translate3d(0, 0, 0)
            }

            100% {
                transform: translate3d(-100%, 0, 0)
            }
        }

        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar {
            padding-top: 7px;
            padding-bottom: 5px;
            background: linear-gradient(90deg, rgba(153, 41, 234, 1), rgba(88, 8, 251, 1) 100%)
        }

        .announcement-bar .layout--scroll {
            max-width: 100%;
            padding-left: 0;
            padding-right: 0;
            overflow: hidden;
            text-align: right;
        }

        .header-full-width #shopify-section-announcement-bar .announcement-bar .layout--scroll {
            padding-left: 0;
            padding-right: 0
        }

        .announcement-bar .layout--scroll .row {
            display: inline-block;
            text-align: left;
            white-space: nowrap
        }

        .announcement-bar__item-scroll {
            display: inline-block;
            animation: SlideLeft 5s infinite linear
        }

        .announcement-bar .layout--scroll:hover .announcement-bar__item-scroll,
        .announcement-bar .layout--scroll:focus .announcement-bar__item-scroll {
            animation-play-state: paused
        }

        .announcement-bar .layout--scroll .announcement-bar__message {
            width: auto;
            vertical-align: middle
        }

        .announcement-bar .layout--scroll .announcement-bar__message .message,
        .announcement-bar .layout--scroll .announcement-bar__message p {
            padding: 5px 12.5px
        }

        .announcement-bar .announcement-bar__message svg {
            display: inline-block;
            vertical-align: middle;
            width: 16px;
            height: 16px
        }

        .announcement-bar .layout--scroll .announcement-bar__message .underline {
            text-decoration: underline;
            text-decoration-thickness: 1px;
            text-underline-offset: 4px
        }

        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message,
        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message,
        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message a,
        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message p,
        #shopify-section-sections--14861833830490__announcement-bar .top-mesage-countdown {
            color: #ffffff;
            font-size: 12px;
            font-style: normal;
            font-weight: 700;
            letter-spacing: 0
        }

        .announcement-bar .announcement-close.hasCountDown {
            width: 21px;
            height: 21px
        }

        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-close svg {
            fill: #ffffff
        }

        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-countdown .clock-item {
            color: var(--countdown-text-color);
            border: 1px solid var(--countdown-text-border);
            background-color: var(--countdown-text-background)
        }

        #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-countdown .clock-item:before {
            color: #ffffff
        }

        .announcement-bar .layout--slider .announcement-bar__message {
            display: none
        }

        .announcement-bar .layout--slider .announcement-bar__message:first-child {
            display: inline-block
        }

        .announcement-bar .slick-slider .announcement-bar__message {
            display: inline-block
        }

        @media (max-width: 1400px) {}

        @media (max-width: 1199px) {}

        @media (max-width: 1024px) {
            .announcement-bar .announcement-countdown+.announcement-close {
                top: 20%
            }

            #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message.font-size-mb {
                font-size: calc(12px - 2px)
            }
        }

        @media (max-width: 551px) {
            #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message.font-size-mb {
                font-size: calc(12px - 4px)
            }
        }
    </style>

    <script>
        nouncementBar extends HTMLElement {
                                                                         ()             is.closeAnnouncementBu                r('[data-close-announcement]');
                this.announcementBarSlider = thi                nnouncement-bar]');
                this.announcementHasSlides = this.announ                lectorAll('.announcement-bar__message').length > 1;

                if (AnnouncementBar.getCookie('announcement') ==                         this.remove();
                } else {
                                 1;
                           bility =                     ;

                this.                    
                this.closeAnnounce                ener                uncementBar.bind(this));
                         nnouncementBar(e) {
                e.preventDefault();
                e.stopPropagation();

             rem               AnnouncementBar.setCook                ed', 1);
                           uncementBarSlider() {
                .announcementHa                ementBarSlider.classList.contains('slick-initialized'))               l                           this.announceme                ws == 'true' || this.announcementBarSlider.dataset.arrows == true ? showArrows = true : showArrows = fals                    s.announcementBa                                 infinite: true,
                        vertical: false,
                        adaptiveHeight: true,
                        slidesT                          slidesToScroll: 1,
                                                                                         autop                           autoplaySpeed: 3000                        row: '<button typ                        ia-label="Next"><sv                        class="icon i                        ron-right"><g><g><po                        32.035 313.804,2                        8.448 377.954,239.232                        g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                        prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><svg viewBox="0 0 370.814 370.814" class="icon icon-chevron-left" id="icon-chevron-left"><g><g><polygon points="292.92,24.848 268.781,0 77.895,185.401 268.781,370.814 292.92,345.961 127.638,185.401"></poly                        ><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                    });
                }
            }

            static setCookie(cname, cvalue, exdays) {
                const d = new Date();
                d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                const expires = 'expires=' + d.toUTCString();
                document.coo                     ';'                                             name) {
                const name = cname                const ca = document.co                          for (var i = 0; i < ca.length; i++) {
                         ;
                    while (c.charAt(0) === '                      c = c.substring(1);
                    }
                                ===                      return c.substri                );
                    }
<<<<<<< HEAD
                           return '';
            }
                     ents.define('announcement-bar-component', AnnouncementBar);
    </script>
</div>
<div id="shopify-section-sections--14861833830490__e0f216a9-88dd-49b5-a95a-7142db3f671f"
    class="shopify-section shopify-section-group-header-group section-header-navigation section-header-nav-multi-site">
    <link rel="stylesheet"
        href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-megamenu.css?v=4628486933129786311695632211"
        media="all" onload="this.media='all'">
    <link rel="stylesheet"
        href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-header-nav-multi-site.css?v=162184358767552715401695884333"
        media="all" onload="this.media='all'">
    <noscript>
        <link
            href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-megamenu.css?v=4628486933129786311695632211"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>
    <noscript>
        <link
            href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-header-nav-multi-site.css?v=162184358767552715401695884333"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>
    <style>
        .header-nav-multi-site .header__location {
            color: #ffffff;
            font-size: 14px
        }

        .header-nav-multi-site .search_details .search-modal__form .search__input {
            color: #828282;
            background-color: #ffffff;
            border: 1px solid #e5e5e5;
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase
        }

        .header-nav-multi-site .search_details .search-modal__form ::-webkit-input-placeholder {
            color: #828282;
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase
        }

        .header-nav-multi-site .search_details .search-modal__form ::-moz-placeholder {
            color: #828282;
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase
        }

        .header-nav-multi-site .search_details .search-modal__form :-ms-input-placeholder {
            color: #828282;
            font-weight: 500;
            font-size: 12px;
            text-transform: uppercase
        }

        .header-nav-multi-site .search_details .search-modal__form :-moz-placeholder {
            color: #828282
        }

        .header-nav-multi-site .search_details .search-modal__form .search__button {
            background: #000000;
            color: #ffffff;
            border: 1px solid #000000
        }

        .header-nav-multi-site .header-top-right-group .customer-service-text {
            color: #ffffff
        }

        .header-nav-multi-site .cart-text,
        .header-nav-multi-site .customer-links,
        .header-nav-multi-site .wishlist-text,
        .header-nav-multi-site .customer-links a {
            color: #ffffff
        }

        .header-nav-multi-site .header__icon--cart .cart-count-bubble,
        .bottom-bar--list .cart-count-bubble,
        .header-nav-multi-site .header__icon--wishlist .wishlist-count-bubble {
            background: #8463d8;
            color: #ffffff
        }

        .bottom-bar--list .cart-count-bubble .text,
        .header-nav-multi-site .header__icon--wishlist .wishlist-count-bubble .text {
            color: #ffffff
        }

        .header-nav-multi-site .wrapper-header-bottom {
            background: #ffffff
        }

        .header-nav-multi-site .header__icon .icon {
            fill: #ffffff
        }

        .header-nav-multi-site .live-wrapper-icon svg {
            stroke: #ffffff
        }

        .header-nav-multi-site .wrapper-header-bottom .header__icon .icon {
            fill: #000000
        }

        .header-nav-multi-site .wrapper-header-bottom .cart-count-bubble {
            background-color: #000000;
            color: #ffffff
        }

        .header-nav-multi-site--style_2 .wrapper-header-bottom .cart-count-bubble {
            background: #8463d8
        }

        .scrolled-past-header .header-nav-multi-site .menu--mobile-lv-1__action>.icon {
            fill: #000000
        }

        .header-nav-multi-site .menu-drawer__close-button {
            font-size: px;
            font-weight: ;
            color: #000000;
            text-transform:
        }

        /* Settings Header Tab */
        .header-nav-multi-site .header-top--wrapper {
            background: #000000
        }

        .header-nav-multi-site .header-top--left .header__list li svg {
            height: 14px;
            width: auto
        }

        .header-nav-multi-site .header-top--left .header__list .item--border:before {
            background-color: #4d4d4d
        }

        @media screen and (max-width: 1024px) {
            .header-nav-multi-site .header-top--wrapper .header__list a {
                padding: var(--padding_vertical_mb) var(--padding_hozi_mb);
                font-size: 13px;
                font-weight: 600
            }

            .header-nav-multi-site .menu-lv-item.menu-lv-1:hover>a>.text,
            .header-nav-multi-site .menu-lv-item.menu-lv-2:hover>a>.text,
            .header-nav-multi-site .menu-lv-item.menu-lv-3:hover>a>.text {
                border-bottom: 0
            }

            .bottom-bar--list .cart-count-bubble {
                min-width: 20px;
                min-height: 20px
            }

            .bottom-bar--list .cart-count-bubble .text {
                border-radius: 50%;
                line-height: 20px;
                font-size: var(--font-size)
            }

            .header-nav-multi-site .cart-text,
            .header-nav-multi-site .customer-links,
            .header-nav-multi-site .wishlist-text,
            .header-nav-multi-site .customer-links a {
                color: #232323 !important
            }

            .halo-sidebar_menu .header__inline-menu {
                display: none
            }

            .halo-sidebar_menu .header__inline-menu.is-active {
                display: block
            }
        }

        @media (max-width: 992px) {}

        @media screen and (min-width: 1025px) {
            .header-nav-multi-site .header-top--right {
                width: calc(100% - (130px))
            }

            .header-nav-multi-site .header-bottom .header__logo a {
                width: var(--width_logo);
                height: var(--height_logo)
            }

            .header-nav-multi-site .wrapper-header-bottom .header-bottom-left svg {
                width: 130px
            }

            .header-nav-multi-site .header__heading .h2 {
                font-size: 15px;
                font-weight: 400;
                color: #000000;
                white-space: normal
            }

            .header-nav-multi-site .top-language-currency .text {
                font-size: calc(var(--font-body-size) - 2px)
            }

            .header-nav-multi-site .header__inline-menu {
                display: none
            }

            .header-nav-multi-site .header__inline-menu.is-active {
                display: block
            }
        }
    </style>
    <script
        src="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/details-disclosure.js?v=93212506302784624691658314593"
        defer="defer"></script><sticky-header data-sticky-type="on_scroll"
        class="header-navigation-wrapper header-wrapper">
        <header class="header header-06 header-nav-multi-site header--has-menu"
            data-id="shopify-section-sections--14861833830490__e0f216a9-88dd-49b5-a95a-7142db3f671f"
            style="--spacing-l-r: 30px; --icon-mobile-spacing: px">

            <div class="wrapper-header-bottom">
                <div class="container container-full">
                    <div class="header-bottom d-flex pt-10 pb-10">
                        <div class="header-bottom-left">
                            <div class="header__logo">
                                <div class="header__heading header__heading--item"><a href="/"
                                        class="header__heading-link focus-inset is-active"
                                        style="--width_logo: 130px; --height_logo: auto" data-load-logo-page=""
                                        data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new.png?v=1667979314"
                                        data-logo-mobile-alt="new-ella-demo"><img
                                            srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_130x.png?v=1667979314"
                                            src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_130x.png?v=1667979314"
                                            loading="lazy" class="header__heading-logo" alt="new-ella-demo" width="130"
                                            height="34"></a><a href="/pages/landing-2"
                                        class="header__heading-link focus-inset"
                                        style="--width_logo: 130px; --height_logo: auto" data-load-logo-page="landing-2"
                                        data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799.png?v=1667979330"
                                        data-logo-mobile-alt="new-ella-demo"><img
                                            srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799_130x.png?v=1667979330"
                                            src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799_130x.png?v=1667979330"
                                            loading="lazy" class="header__heading-logo" alt="new-ella-demo" width="130"
                                            height="34"></a><a href="/pages/landing-3"
                                        class="header__heading-link focus-inset"
                                        style="--width_logo: 130px; --height_logo: auto" data-load-logo-page="landing-3"
                                        data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167.png?v=1667979346"
                                        data-logo-mobile-alt="new-ella-demo"><img
                                            srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167_130x.png?v=1667979346"
                                            src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167_130x.png?v=1667979346"
                                            loading="lazy" class="header__heading-logo" alt="new-ella-demo" width="130"
                                            height="34"></a></div>
                            </div>
                        </div>
                        <div class="main-menu header-bottom-center label-main-menu">
                            <div class="header-bottom--wrapper main-menu--wrapper" id="HeaderNavigation">
                                <nav class="header__inline-menu is-active" data-navigation role="navigation"
                                    data-load-menu-page=""
                                    style="--menu_bottom_spacing: 18px;--menu_top_spacing: 20px;--menu_top_spacing_sticky: -21px;--grid_gap_menu_item: 15px;--lv_1_color: #000000;--lv_1_color_hover: #202020;--lv_2_color: #000000; --lv_2_color_hover: #202020;--lv_3_color: #505050;--lv_3_color_hover: #202020;--bg_mega_menu: #ffffff;--sale_item_color: #ed4649;--new_label_color: #ffffff;--new_label_border: #06BFE2;--new_label_bg: #06BFE2;--sale_label_color: #ffffff;--sale_label_border: #EF6454;--sale_label_bg: #EF6454;--hot_label_color: #ffffff;--hot_label_border: #FFBB49;--hot_label_bg: #FFBB49">
                                    <ul class="list-menu list-menu--inline text-left col" role="list" >
                                        <li
                                            class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="/">
                                                <span class="text header__active-menu-item p-relative">About
                                                    Us</span>
                                            </a>

                                            @include("forntend.header secton part by part.aboutus")                                            
                                        </li>
                                        <li
                                            class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="/collections">
                                                <span class="text header__active-menu-item p-relative">Categoy</span>
                                            </a>
                                            @include("forntend.header secton part by part.category")
                                        </li>

                                        <li
                                            class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="https://new-ella-demo.myshopify.com/?preview_theme_id=">
                                                <span class="text p-relative">Product</span>
                                            </a>
                                            @include("forntend.header secton part by part.product")
                                        </li>
                                        <li
                                            class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="/">
                                                <span class="text header__active-menu-item p-relative">Sub Category
                                                </span>
                                            </a>
                                            @include("forntend.header secton part by part.subcategory")
                                        </li>
                                        <li class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--full">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="/collections">
                                                <span
                                                    class="text header__active-menu-item p-relative">Collections</span>
                                            </a>
                                            @include("forntend.header secton part by part.collection")
                                        </li>
                                        <li class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--full mr-5">
                                            <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                href="/collections">
                                                <span
                                                    class="text header__active-menu-item p-relative">Collections</span>
                                            </a>
                                            @include("forntend.header secton part by part.collection")
                                        </li>
                                        
                                    </ul>
                                    
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>
        </header>
    </sticky-header>

    <script>
        var appendPrependMenuMo            
         ead        cyPC = $('.wrapper-language-currency'),
                headerLanguage $('.nav-currency-language'),
                headerSidebarLanguageCurrency = $('.halo-language-currency-sidebar .halo-sidebar-wrapper');
            if (window.innerWidth < 1025) {
                headerLanguageCurrencyPC.appendTo(headerLanguageCurrencyMB);
                if ($('.header-nav-multi-site').hasClass('header-nav-multi-site--style_2')) {
                    $('.header-top--center .header__location').appendTo('.site-nav-mobile .wrapper-links');
                }
            } else {
                headerLanguageCurrencyPC.appendTo(headerSidebarLanguageCurrency);
                if ($('.header-nav-multi-site').hasClass('header-nav-multi-site--style_2')) {
                    $('.site-nav-mobile .wrapper-links .header__location').appendTo('.header-top--wrapper .header-top--center');
                }
            };
        };
        $(document).ready(function () {
            appendPrependMenuMobile();
        });
        $(window).on('resize', function () {
            appendPrependMenuMobile();
        })
    </script>
    <script type="application/ld+json">
=======
                }

                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar {
                    padding-top: 7px;
                    padding-bottom: 5px;
                    background: linear-gradient(90deg, rgba(153, 41, 234, 1), rgba(88, 8, 251, 1) 100%)
                }

                .announcement-bar .layout--scroll {
                    max-width: 100%;
                    padding-left: 0;
                    padding-right: 0;
                    overflow: hidden;
                    text-align: right;
                }

                .header-full-width #shopify-section-announcement-bar .announcement-bar .layout--scroll {
                    padding-left: 0;
                    padding-right: 0
                }

                .announcement-bar .layout--scroll .row {
                    display: inline-block;
                    text-align: left;
                    white-space: nowrap
                }

                .announcement-bar__item-scroll {
                    display: inline-block;
                    animation: SlideLeft 5s infinite linear
                }

                .announcement-bar .layout--scroll:hover .announcement-bar__item-scroll,
                .announcement-bar .layout--scroll:focus .announcement-bar__item-scroll {
                    animation-play-state: paused
                }

                .announcement-bar .layout--scroll .announcement-bar__message {
                    width: auto;
                    vertical-align: middle
                }

                .announcement-bar .layout--scroll .announcement-bar__message .message,
                .announcement-bar .layout--scroll .announcement-bar__message p {
                    padding: 5px 12.5px
                }

                .announcement-bar .announcement-bar__message svg {
                    display: inline-block;
                    vertical-align: middle;
                    width: 16px;
                    height: 16px
                }

                .announcement-bar .layout--scroll .announcement-bar__message .underline {
                    text-decoration: underline;
                    text-decoration-thickness: 1px;
                    text-underline-offset: 4px
                }

                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message,
                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message,
                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message a,
                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message p,
                #shopify-section-sections--14861833830490__announcement-bar .top-mesage-countdown {
                    color: #ffffff;
                    font-size: 12px;
                    font-style: normal;
                    font-weight: 700;
                    letter-spacing: 0
                }

                .announcement-bar .announcement-close.hasCountDown {
                    width: 21px;
                    height: 21px
                }

                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-close svg {
                    fill: #ffffff
                }

                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-countdown .clock-item {
                    color: var(--countdown-text-color);
                    border: 1px solid var(--countdown-text-border);
                    background-color: var(--countdown-text-background)
                }

                #shopify-section-sections--14861833830490__announcement-bar .announcement-bar .announcement-countdown .clock-item:before {
                    color: #ffffff
                }

                .announcement-bar .layout--slider .announcement-bar__message {
                    display: none
                }

                .announcement-bar .layout--slider .announcement-bar__message:first-child {
                    display: inline-block
                }

                .announcement-bar .slick-slider .announcement-bar__message {
                    display: inline-block
                }

                @media (max-width: 1400px) {}

                @media (max-width: 1199px) {}

                @media (max-width: 1024px) {
                    .announcement-bar .announcement-countdown+.announcement-close {
                        top: 20%
                    }

                    #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message.font-size-mb {
                        font-size: calc(12px - 2px)
                    }
                }

                @media (max-width: 551px) {
                    #shopify-section-sections--14861833830490__announcement-bar .announcement-bar__message .message.font-size-mb {
                        font-size: calc(12px - 4px)
                    }
                }
            </style>

            <script>
                class AnnouncementBar extends HTMLElement {
                    constructor() {
                        super();
                    }

                    connectedCallback() {
                        this.closeAnnouncementButton = this.querySelector('[data-close-announcement]');
                        this.announcementBarSlider = this.querySelector('[data-announcement-bar]');
                        this.announcementHasSlides = this.announcementBarSlider?.querySelectorAll('.announcement-bar__message').length > 1;

                        if (AnnouncementBar.getCookie('announcement') == 'closed') {
                            this.remove();
                        } else {
                            this.style.opacity = 1;
                            this.style.visibility = 'visible';
                        };

                        this.initAnnouncementBarSlider();
                        this.closeAnnouncementButton?.addEventListener('click', this.closeAnnouncementBar.bind(this));
                    }

                    closeAnnouncementBar(e) {
                        e.preventDefault();
                        e.stopPropagation();

                        this.remove();
                        AnnouncementBar.setCookie('announcement', 'closed', 1);
                    }

                    initAnnouncementBarSlider() {
                        if (this.announcementHasSlides && !this.announcementBarSlider.classList.contains('slick-initialized')) {
                            let showArrows;
                            this.announcementBarSlider.dataset.arrows == 'true' || this.announcementBarSlider.dataset.arrows == true ? showArrows = true : showArrows = false;
                            $(this.announcementBarSlider).slick({
                                infinite: true,
                                vertical: false,
                                adaptiveHeight: true,
                                slidesToShow: 1,
                                slidesToScroll: 1,
                                dots: false,
                                arrows: showArrows,
                                autoplay: true,
                                autoplaySpeed: 3000,
                                nextArrow: '<button type="button" class="slick-next" aria-label="Next"><svg viewBox="0 0 478.448 478.448" class="icon icon-chevron-right" id="icon-chevron-right"><g><g><polygon points="131.659,0 100.494,32.035 313.804,239.232 100.494,446.373 131.65,478.448 377.954,239.232"></polygon></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                                prevArrow: '<button type="button" class="slick-prev" aria-label="Previous"><svg viewBox="0 0 370.814 370.814" class="icon icon-chevron-left" id="icon-chevron-left"><g><g><polygon points="292.92,24.848 268.781,0 77.895,185.401 268.781,370.814 292.92,345.961 127.638,185.401"></polygon></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg></button>',
                            });
                        }
                    }

                    static setCookie(cname, cvalue, exdays) {
                        const d = new Date();
                        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
                        const expires = 'expires=' + d.toUTCString();
                        document.cookie = cname + '=' + cvalue + ';' + expires + ';path=/';
                    }

                    static getCookie(cname) {
                        const name = cname + '=';
                        const ca = document.cookie.split(';');

                        for (var i = 0; i < ca.length; i++) {
                            var c = ca[i];
                            while (c.charAt(0) === ' ') {
                                c = c.substring(1);
                            }
                            if (c.indexOf(name) === 0) {
                                return c.substring(name.length, c.length);
                            }
                        }

                        return '';
                    }
                }

                customElements.define('announcement-bar-component', AnnouncementBar);
            </script>
        </div>
        <div id="shopify-section-sections--14861833830490__e0f216a9-88dd-49b5-a95a-7142db3f671f"
            class="shopify-section shopify-section-group-header-group section-header-navigation section-header-nav-multi-site">
            <link rel="stylesheet"
                href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-megamenu.css?v=4628486933129786311695632211"
                media="all" onload="this.media='all'">
            <link rel="stylesheet"
                href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-header-nav-multi-site.css?v=162184358767552715401695884333"
                media="all" onload="this.media='all'">
            <noscript>
                <link
                    href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-megamenu.css?v=4628486933129786311695632211"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <noscript>
                <link
                    href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-header-nav-multi-site.css?v=162184358767552715401695884333"
                    rel="stylesheet" type="text/css" media="all" />
            </noscript>
            <style>
                .header-nav-multi-site .header__location {
                    color: #ffffff;
                    font-size: 14px
                }

                .header-nav-multi-site .search_details .search-modal__form .search__input {
                    color: #828282;
                    background-color: #ffffff;
                    border: 1px solid #e5e5e5;
                    font-weight: 500;
                    font-size: 12px;
                    text-transform: uppercase
                }

                .header-nav-multi-site .search_details .search-modal__form ::-webkit-input-placeholder {
                    color: #828282;
                    font-weight: 500;
                    font-size: 12px;
                    text-transform: uppercase
                }

                .header-nav-multi-site .search_details .search-modal__form ::-moz-placeholder {
                    color: #828282;
                    font-weight: 500;
                    font-size: 12px;
                    text-transform: uppercase
                }

                .header-nav-multi-site .search_details .search-modal__form :-ms-input-placeholder {
                    color: #828282;
                    font-weight: 500;
                    font-size: 12px;
                    text-transform: uppercase
                }

                .header-nav-multi-site .search_details .search-modal__form :-moz-placeholder {
                    color: #828282
                }

                .header-nav-multi-site .search_details .search-modal__form .search__button {
                    background: #000000;
                    color: #ffffff;
                    border: 1px solid #000000
                }

                .header-nav-multi-site .header-top-right-group .customer-service-text {
                    color: #ffffff
                }

                .header-nav-multi-site .cart-text,
                .header-nav-multi-site .customer-links,
                .header-nav-multi-site .wishlist-text,
                .header-nav-multi-site .customer-links a {
                    color: #ffffff
                }

                .header-nav-multi-site .header__icon--cart .cart-count-bubble,
                .bottom-bar--list .cart-count-bubble,
                .header-nav-multi-site .header__icon--wishlist .wishlist-count-bubble {
                    background: #8463d8;
                    color: #ffffff
                }

                .bottom-bar--list .cart-count-bubble .text,
                .header-nav-multi-site .header__icon--wishlist .wishlist-count-bubble .text {
                    color: #ffffff
                }

                .header-nav-multi-site .wrapper-header-bottom {
                    background: #ffffff
                }

                .header-nav-multi-site .header__icon .icon {
                    fill: #ffffff
                }

                .header-nav-multi-site .live-wrapper-icon svg {
                    stroke: #ffffff
                }

                .header-nav-multi-site .wrapper-header-bottom .header__icon .icon {
                    fill: #000000
                }

                .header-nav-multi-site .wrapper-header-bottom .cart-count-bubble {
                    background-color: #000000;
                    color: #ffffff
                }

                .header-nav-multi-site--style_2 .wrapper-header-bottom .cart-count-bubble {
                    background: #8463d8
                }

                .scrolled-past-header .header-nav-multi-site .menu--mobile-lv-1__action>.icon {
                    fill: #000000
                }

                .header-nav-multi-site .menu-drawer__close-button {
                    font-size: px;
                    font-weight: ;
                    color: #000000;
                    text-transform:
                }

                /* Settings Header Tab */
                .header-nav-multi-site .header-top--wrapper {
                    background: #000000
                }

                .header-nav-multi-site .header-top--left .header__list li svg {
                    height: 14px;
                    width: auto
                }

                .header-nav-multi-site .header-top--left .header__list .item--border:before {
                    background-color: #4d4d4d
                }

                @media screen and (max-width: 1024px) {
                    .header-nav-multi-site .header-top--wrapper .header__list a {
                        padding: var(--padding_vertical_mb) var(--padding_hozi_mb);
                        font-size: 13px;
                        font-weight: 600
                    }

                    .header-nav-multi-site .menu-lv-item.menu-lv-1:hover>a>.text,
                    .header-nav-multi-site .menu-lv-item.menu-lv-2:hover>a>.text,
                    .header-nav-multi-site .menu-lv-item.menu-lv-3:hover>a>.text {
                        border-bottom: 0
                    }

                    .bottom-bar--list .cart-count-bubble {
                        min-width: 20px;
                        min-height: 20px
                    }

                    .bottom-bar--list .cart-count-bubble .text {
                        border-radius: 50%;
                        line-height: 20px;
                        font-size: var(--font-size)
                    }

                    .header-nav-multi-site .cart-text,
                    .header-nav-multi-site .customer-links,
                    .header-nav-multi-site .wishlist-text,
                    .header-nav-multi-site .customer-links a {
                        color: #232323 !important
                    }

                    .halo-sidebar_menu .header__inline-menu {
                        display: none
                    }

                    .halo-sidebar_menu .header__inline-menu.is-active {
                        display: block
                    }
                }

                @media (max-width: 992px) {}

                @media screen and (min-width: 1025px) {
                    .header-nav-multi-site .header-top--right {
                        width: calc(100% - (130px))
                    }

                    .header-nav-multi-site .header-bottom .header__logo a {
                        width: var(--width_logo);
                        height: var(--height_logo)
                    }

                    .header-nav-multi-site .wrapper-header-bottom .header-bottom-left svg {
                        width: 130px
                    }

                    .header-nav-multi-site .header__heading .h2 {
                        font-size: 15px;
                        font-weight: 400;
                        color: #000000;
                        white-space: normal
                    }

                    .header-nav-multi-site .top-language-currency .text {
                        font-size: calc(var(--font-body-size) - 2px)
                    }

                    .header-nav-multi-site .header__inline-menu {
                        display: none
                    }

                    .header-nav-multi-site .header__inline-menu.is-active {
                        display: block
                    }
                }
            </style>
            <script
                src="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/details-disclosure.js?v=93212506302784624691658314593"
                defer="defer"></script><sticky-header data-sticky-type="on_scroll"
                class="header-navigation-wrapper header-wrapper">
                <header class="header header-06 header-nav-multi-site header--has-menu"
                    data-id="shopify-section-sections--14861833830490__e0f216a9-88dd-49b5-a95a-7142db3f671f"
                    style="--spacing-l-r: 30px; --icon-mobile-spacing: px">

                    <div class="wrapper-header-bottom">
                        <div class="container container-full">
                            <div class="header-bottom d-flex pt-10 pb-10">
                                <div class="header-bottom-left">
                                    <div class="header__logo">
                                        <div class="header__heading header__heading--item"><a href="/"
                                                class="header__heading-link focus-inset is-active"
                                                style="--width_logo: 130px; --height_logo: auto" data-load-logo-page=""
                                                data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new.png?v=1667979314"
                                                data-logo-mobile-alt="new-ella-demo"><img
                                                    srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_130x.png?v=1667979314"
                                                    src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_130x.png?v=1667979314"
                                                    loading="lazy" class="header__heading-logo" alt="new-ella-demo"
                                                    width="130" height="34"></a><a href="/pages/landing-2"
                                                class="header__heading-link focus-inset"
                                                style="--width_logo: 130px; --height_logo: auto"
                                                data-load-logo-page="landing-2"
                                                data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799.png?v=1667979330"
                                                data-logo-mobile-alt="new-ella-demo"><img
                                                    srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799_130x.png?v=1667979330"
                                                    src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-men_87821d51-76f8-44b7-b380-9d214dc2a799_130x.png?v=1667979330"
                                                    loading="lazy" class="header__heading-logo" alt="new-ella-demo"
                                                    width="130" height="34"></a><a href="/pages/landing-3"
                                                class="header__heading-link focus-inset"
                                                style="--width_logo: 130px; --height_logo: auto"
                                                data-load-logo-page="landing-3"
                                                data-logo-mobile="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167.png?v=1667979346"
                                                data-logo-mobile-alt="new-ella-demo"><img
                                                    srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167_130x.png?v=1667979346"
                                                    src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-kids_f56636c0-9459-476c-8778-9a86a247e167_130x.png?v=1667979346"
                                                    loading="lazy" class="header__heading-logo" alt="new-ella-demo"
                                                    width="130" height="34"></a></div>
                                    </div>
                                </div>
                                <div class="main-menu header-bottom-center label-main-menu">
                                    <div class="header-bottom--wrapper main-menu--wrapper" id="HeaderNavigation">
                                        <nav class="header__inline-menu is-active" data-navigation role="navigation"
                                            data-load-menu-page=""
                                            style="--menu_bottom_spacing: 18px;--menu_top_spacing: 20px;--menu_top_spacing_sticky: -21px;--grid_gap_menu_item: 15px;--lv_1_color: #000000;--lv_1_color_hover: #202020;--lv_2_color: #000000; --lv_2_color_hover: #202020;--lv_3_color: #505050;--lv_3_color_hover: #202020;--bg_mega_menu: #ffffff;--sale_item_color: #ed4649;--new_label_color: #ffffff;--new_label_border: #06BFE2;--new_label_bg: #06BFE2;--sale_label_color: #ffffff;--sale_label_border: #EF6454;--sale_label_bg: #EF6454;--hot_label_color: #ffffff;--hot_label_border: #FFBB49;--hot_label_bg: #FFBB49">
                                            <ul class="list-menu list-menu--inline text-left" role="list">
                                                <li
                                                    class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="/">
                                                        <span class="text header__active-menu-item p-relative">Theme
                                                            Demo</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>





                                                </li>
                                                <li
                                                    class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="/collections">
                                                        <span
                                                            class="text header__active-menu-item p-relative">Shop</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>

                                                </li>
                                                <li
                                                    class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="https://new-ella-demo.myshopify.com/?preview_theme_id=">
                                                        <span class="text p-relative">Product</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>





                                                </li>
                                                <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                                        class="menu-lv-1__action  header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="#"><span class="text p-relative">Blog</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>




                                                </li>
                                                <li class="menu-lv-item menu-lv-1 text-left no-megamenu dropdown"><a
                                                        class="menu-lv-1__action  header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="https://new-ella-demo.myshopify.com/?preview_theme_id="><span
                                                            class="text p-relative">Pages</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>




                                                </li>
                                                <li
                                                    class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--custom_width">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="/">
                                                        <span
                                                            class="text header__active-menu-item p-relative">Trend</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                        .;'''''''''''''            d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>







                                                </li>
                                                <li
                                                    class="menu-lv-item menu-lv-1 has-megamenu dropdown block_layout--full">
                                                    <a class="menu-lv-1__action header__menu-item list-menu__item link focus-inset menu_mobile_link link-effect"
                                                        href="/collections">
                                                        <span
                                                            class="text header__active-menu-item p-relative">Collections</span>
                                                        <span class="icon-dropdown" data-toggle-menu-mb=""><svg
                                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                                aria-hidden="true" focusable="false" role="presentation"
                                                                class="icon icon-caret">
                                                                <path
                                                                    d="M 7.75 1.34375 L 6.25 2.65625 L 14.65625 12 L 6.25 21.34375 L 7.75 22.65625 L 16.75 12.65625 L 17.34375 12 L 16.75 11.34375 Z">
                                                                </path>
                                                            </svg></span></a>





                                                </li>,./
                                            </ul>
                                        </nav>

                                    </div>
                                </div>
                                <div class="header-items header-bottom-right">
                                    <details-modal
                                        class="header__iconItem header__search layout_search--style2">
                                        <predictive-search
                                            class="search-modal__form" data-loading-text="Loading..."
                                            data-product-to-show="5">
                                            <details class="search_details">
                                                <summary class="header__search-full" aria-haspopup="dialog"
                                                    aria-label="Search">




                                                    <a class="btn btn-success" href="#">Login</a>
                                                    <a class="btn btn-success" href="#">Login</a>
                                                    <a class="btn btn-success" href="#">Login</a>



                                                </summary>
                                            </details>
                                        </predictive-search>
                                    </details-modal><a href="/cart"
                                        class="header__icon header__icon--cart link link--text focus-inset"
                                        id="cart-icon-bubble" data-cart-sidebar><svg xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 32 32" class="icon icon-cart stroke-w-0" aria-hidden="true"
                                            focusable="false" role="presentation" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M 16 3 C 13.253906 3 11 5.253906 11 8 L 11 9 L 6.0625 9 L 6 9.9375 L 5 27.9375 L 4.9375 29 L 27.0625 29 L 27 27.9375 L 26 9.9375 L 25.9375 9 L 21 9 L 21 8 C 21 5.253906 18.746094 3 16 3 Z M 16 5 C 17.65625 5 19 6.34375 19 8 L 19 9 L 13 9 L 13 8 C 13 6.34375 14.34375 5 16 5 Z M 7.9375 11 L 11 11 L 11 14 L 13 14 L 13 11 L 19 11 L 19 14 L 21 14 L 21 11 L 24.0625 11 L 24.9375 27 L 7.0625 27 Z" />
                                        </svg>
                                        <span class="visually-hidden">Cart</span>
                                        <div class="cart-count-bubble"><span class="text" aria-hidden="true"
                                                data-cart-count>0</span><span class="visually-hidden">0 items</span>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </header>
            </sticky-header>

            <script>
                var appendPrependMenuMobile = function () {
                    var headerLanguageCurrencyPC = $('.wrapper-language-currency'),
                        headerLanguageCurrencyMB = $('.nav-currency-language'),
                        headerSidebarLanguageCurrency = $('.halo-language-currency-sidebar .halo-sidebar-wrapper');
                    if (window.innerWidth < 1025) {
                        headerLanguageCurrencyPC.appendTo(headerLanguageCurrencyMB);
                        if ($('.header-nav-multi-site').hasClass('header-nav-multi-site--style_2')) {
                            $('.header-top--center .header__location').appendTo('.site-nav-mobile .wrapper-links');
                        }
                    } else {
                        headerLanguageCurrencyPC.appendTo(headerSidebarLanguageCurrency);
                        if ($('.header-nav-multi-site').hasClass('header-nav-multi-site--style_2')) {
                            $('.site-nav-mobile .wrapper-links .header__location').appendTo('.header-top--wrapper .header-top--center');
                        }
                    };
                };
                $(document).ready(function () {
                    appendPrependMenuMobile();
                });
                $(window).on('resize', function () {
                    appendPrependMenuMobile();
                })
            </script>
            <script type="application/ld+json">
>>>>>>> ff7a7f2c56efb5fd2665fd9dcf33642812ca4bc5
                                        {
                                            "@context": "http://schema.org",
                                            "@type": "Organization",
                                            "name": "new-ella-demo",

                                            "sameAs": [
                                                "https:\/\/twitter.com\/shopify",
                                                "https:\/\/www.facebook.com\/shopify",
                                                "https:\/\/www.pinterest.com\/shopify\/",
                                                "https:\/\/www.instagram.com\/shopify\/",
                                                "",
                                                "",
                                                "",
                                                ""
                                            ],
                                            "url": "https:\/\/new-ella-demo.myshopify.com"
                                        }
                                    </script>
</div>
<div id="shopify-section-sections--14861833830490__header-mobile"
    class="shopify-section shopify-section-group-header-group section-header-mobile">
    <link rel="stylesheet"
        href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-menu-mobile.css?v=159314033102039769651695632222"
        media="all" onload="this.media='all'">
    <noscript>
        <link
            href="//new-ella-demo.myshopify.com/cdn/shop/t/179/assets/component-menu-mobile.css?v=159314033102039769651695632222"
            rel="stylesheet" type="text/css" media="all" />
    </noscript>

    <sticky-header-mobile class="header-mobile" style="--bg-color: #ffffff; --p-top: 0px; --p-bottom: 0px">
        <div class="container">
            <div class="header-mobile__wrapper header-mobile--wrapper">
                <div class="header-mobile__item header-mobile__item--menu">
                    <div class="header-mobile--icon item__mobile--hamburger" style="--i-color: #232323">
                        <button type="button" class="mobileMenu-toggle" data-mobile-menu aria-label="menu"><span
                                class="mobileMenu-toggle__Icon"></span></button>
                    </div>
                </div>
                <div class="header-mobile__item header-mobile__item--search"><details-modal
                        class="header__iconItem header__search" style="--i-color: #232323">
                        <details>
                            <summary
                                class="header__icon header__icon--search header__icon--summary link link--text focus-inset modal__toggle"
                                aria-haspopup="dialog" aria-label="Search" data-search-mobile>
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                                        class="icon-search-1 modal__toggle-open icon icon-search w-24 h-24">
                                        <path
                                            d="M 19 3 C 13.488281 3 9 7.488281 9 13 C 9 15.394531 9.839844 17.589844 11.25 19.3125 L 3.28125 27.28125 L 4.71875 28.71875 L 12.6875 20.75 C 14.410156 22.160156 16.605469 23 19 23 C 24.511719 23 29 18.511719 29 13 C 29 7.488281 24.511719 3 19 3 Z M 19 5 C 23.429688 5 27 8.570313 27 13 C 27 17.429688 23.429688 21 19 21 C 14.570313 21 11 17.429688 11 13 C 11 8.570313 14.570313 5 19 5 Z" />
                                    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"
                                        class="modal__toggle-close icon icon-close w-24 h-24">
                                        <path
                                            d="M 38.982422 6.9707031 A 2.0002 2.0002 0 0 0 37.585938 7.5859375 L 24 21.171875 L 10.414062 7.5859375 A 2.0002 2.0002 0 0 0 8.9785156 6.9804688 A 2.0002 2.0002 0 0 0 7.5859375 10.414062 L 21.171875 24 L 7.5859375 37.585938 A 2.0002 2.0002 0 1 0 10.414062 40.414062 L 24 26.828125 L 37.585938 40.414062 A 2.0002 2.0002 0 1 0 40.414062 37.585938 L 26.828125 24 L 40.414062 10.414062 A 2.0002 2.0002 0 0 0 38.982422 6.9707031 z" />
                                    </svg></span>
                            </summary>
                        </details>
                    </details-modal></div>
                <div class="header-mobile__item header-mobile__item--logo">
                    <div class="header-mobile--icon"
                        style="--logo-font-size: 20px; --logo-font-weight: 900; --logo-color: #232323">
                        <a href="/" class="header__heading-link focus-inset 2" data-logo-width="90"><img
                                srcset="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_90x.png?v=1667979314, //new-ella-demo.myshopify.com/cdn/shop/files/logo-new_180x.png?v=1667979314 2x"
                                src="//new-ella-demo.myshopify.com/cdn/shop/files/logo-new_90x.png?v=1667979314"
                                loading="lazy" width="90" height="24" class="header__heading-logo" alt="new-ella-demo"
                                style="--width-logo-mb: 90px;"></a>

                    </div>
                </div>
                <div class="header-mobile__item header-mobile__item--customer">
                    <div class="header-mobile--icon" style="--i-color: #232323">
                        <a href="/account/login" class="header__icon header__icon--account link link--text focus-inset"
                            data-open-auth-sidebar><svg xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" class="icon icon-account"
                                viewBox="0 0 1024 1024" width="100%" height="100%">
                                <path class="path1"
                                    d="M486.4 563.2c-155.275 0-281.6-126.325-281.6-281.6s126.325-281.6 281.6-281.6 281.6 126.325 281.6 281.6-126.325 281.6-281.6 281.6zM486.4 51.2c-127.043 0-230.4 103.357-230.4 230.4s103.357 230.4 230.4 230.4c127.042 0 230.4-103.357 230.4-230.4s-103.358-230.4-230.4-230.4z">
                                </path>
                                <path class="path2"
                                    d="M896 1024h-819.2c-42.347 0-76.8-34.451-76.8-76.8 0-3.485 0.712-86.285 62.72-168.96 36.094-48.126 85.514-86.36 146.883-113.634 74.957-33.314 168.085-50.206 276.797-50.206 108.71 0 201.838 16.893 276.797 50.206 61.37 27.275 110.789 65.507 146.883 113.634 62.008 82.675 62.72 165.475 62.72 168.96 0 42.349-34.451 76.8-76.8 76.8zM486.4 665.6c-178.52 0-310.267 48.789-381 141.093-53.011 69.174-54.195 139.904-54.2 140.61 0 14.013 11.485 25.498 25.6 25.498h819.2c14.115 0 25.6-11.485 25.6-25.6-0.006-0.603-1.189-71.333-54.198-140.507-70.734-92.304-202.483-141.093-381.002-141.093z">
                                </path>
                            </svg>
                            <span class="visually-hidden">Log in</span>
                        </a>
                    </div>
                </div>
                <div class="header-mobile__item header-mobile__item--cart">
                    <div class="header-mobile--icon"
                        style="--i-color: #232323; --color-bubble: #323232; --bg-bubble: #ffe5e8">
                        <a href="/cart"
                            class="header__icon header__icon--cart link link--text focus-inset cart-icon-bubble"
                            data-cart-sidebar><svg viewBox="0 0 30 30" class="icon icon-cart"
                                enable-background="new 0 0 30 30">
                                <g>
                                    <g>
                                        <path
                                            d="M20,6V5c0-2.761-2.239-5-5-5s-5,2.239-5,5v1H4v24h22V6H20z M12,5c0-1.657,1.343-3,3-3s3,1.343,3,3v1h-6V5z M24,28H6V8h4v3 h2V8h6v3h2V8h4V28z">
                                        </path>
                                    </g>
                                </g>
                            </svg>
                            <span class="visually-hidden">Cart</span>
                            <div class="cart-count-bubble"><span class="text" aria-hidden="true"
                                    data-cart-count>0</span><span class="visually-hidden">0 items</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </sticky-header-mobile>
</div>