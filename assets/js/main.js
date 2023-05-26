// "use strict";

function _defineProperty(e, t, a) {
    return t in e ? Object.defineProperty(e, t, {
        value: a,
        enumerable: !0,
        configurable: !0,
        writable: !0
    }) : e[t] = a, e
}

function lazyLoad() {
    $(".img-lazy").Lazy({
        scrollDirection: "vertical",
        effect: "fadeIn",
        visibleOnly: !0,
        event: "sporty",
        onError: function(e) {
            console.log("error loading " + e.data("src"))
        }
    })
}

function navigationColor() {
    var i = location.pathname.split("/")[1];
    console.log(i), $(".subslinks").find(".inner-section-link").each(function(e, t) {
        var a = $(this)[0].pathname.split("/")[1];
        i == a ? $(this).addClass("active-inner-link") : (console.log(a), $(this).removeClass("active-inner-link"))
    }), $(".nav > .nav-item .nav-link").each(function(e, t) {
        var a = $(this)[0].pathname.split("/")[1];
        i == a ? $(this).addClass("active-inner-link") : $(this).removeClass("active-inner-link")
    }), $(".wrap-country").each(function(e, t) {
        var a = $(this)[0].pathname.split("/")[1];
        i == a ? $(this).parents(".country-slidepanal-list").addClass("active-count-list") : $(this).parents(".country-slidepanal-list").removeClass("active-count-list")
    })
}

function homeAnimation() {
    gsap.registerPlugin(ScrollTrigger), gsap.config({
        nullTargetWarn: !1
    });
    var e = Power2.easeInOut,
        t = Expo.easeIn,
        a = Expo.easeOut,
        i = document.querySelector(".cover-ani"),
        r = document.querySelector(".banner-img"),
        n = document.querySelector(".ani-expolre-pnl"),
        o = $(".heading-text"),
        l = $(".grid-sec"),
        s = new TimelineMax({
            paused: !0
        });
    s.fromTo(i, 1.8, {
        height: "100%",
        ease: e
    }, {
        height: "0%",
        ease: e
    }).fromTo(r, 2, {
        transform: "scale(1.2)"
    }, {
        transform: "scale(1)",
        ease: e
    }, "-=1.8").fromTo(n, 2, {
        height: "100%",
        ease: e
    }, {
        height: "0%",
        ease: e
    }, "-=2").fromTo(o, 1, {
        opacity: 0,
        y: -5
    }, {
        opacity: 1,
        y: 0,
        ease: e
    }, "-=1").staggerFromTo(l, .8, {
        opacity: 0
    }, {
        opacity: 1,
        ease: e,
        background: "transparent"
    }, .08, "-=0.8"), s.play();
    var c = $(".sectors-banner"),
        d = $(c).find(".secotr-banner-img"),
        p = $(".sector-banner-details"),
        u = ($(".wrap-sector-contnet"), new TimelineMax({
            paused: !0
        }));
    u.fromTo(d, 1.5, {
        scale: 1.1
    }, {
        scale: 1,
        ease: e
    }).fromTo(p, 1, {
        opacity: 0,
        ease: e
    }, {
        opacity: 1,
        ease: e
    }, "-=1"), u.play();
    var g = new ScrollMagic.Controller,
        m = new TimelineMax({
            paused: !0
        }),
        w = $(".build-globaly"),
        f = $(w).find(".ani-title"),
        h = $(".ani-gloabal-slider");
    m.from(f, .5, {
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }).staggerFromTo(h, 1, {
        scale: 1.1,
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        scale: 1,
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }, "-=0.5", .05), m.play(), new ScrollMagic.Scene({
        triggerElement: ".build-globaly",
        triggerHook: .8,
        reverse: !1
    }).setTween(m).addTo(g);
    var v = new ScrollMagic.Controller,
        b = new TimelineMax({
            paused: !0
        }),
        y = $(".awards"),
        E = $(y).find(".our-awords-title-wrap"),
        S = $(y).find(".award-slide-anim");
    b.from(E, .5, {
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }).staggerFromTo(S, 1, {
        scale: 1.1,
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        scale: 1,
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }, "-=0.5", .05), b.play(), new ScrollMagic.Scene({
        triggerElement: ".awards",
        triggerHook: .8,
        reverse: !1
    }).setTween(b).addTo(v);
    var T = new ScrollMagic.Controller,
        M = new TimelineMax({
            paused: !0
        }),
        _ = $(".lolc-twitter"),
        k = $(_).find(".title-box"),
        P = $(_).find(".twitter-iteam-anim");
    M.from(k, .5, {
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }).staggerFromTo(P, 1.8, {
        scale: 1.1,
        autoAlpha: 0,
        opacity: 0,
        ease: t
    }, {
        scale: 1,
        autoAlpha: 1,
        opacity: 1,
        ease: a
    }, "-=0.5", .05), M.play(), new ScrollMagic.Scene({
        triggerElement: ".lolc-twitter-wrap",
        triggerHook: .8,
        reverse: !1
    }).setTween(M).addTo(T);
    var C = new ScrollMagic.Controller,
        x = new TimelineMax({
            paused: !0
        }),
        H = $(".philo-img");
    $(".philo-img").height();
    x.fromTo(H, 1, {
        filter: "grayscale(100%)"
    }, {
        filter: "grayscale(0)"
    }), x.play(), new ScrollMagic.Scene({
        triggerElement: ".philosophy",
        duration: "70%",
        triggerHook: .8,
        reverse: !0
    }).setTween(x).addTo(C);
    var R = new ScrollMagic.Controller,
        V = new TimelineMax({
            paused: !0
        }),
        A = $(".animate-num");
    V.staggerFromTo(A, 1, {
        y: -50,
        opacity: 0,
        ease: "back.out(1.7)"
    }, {
        y: 0,
        opacity: 1,
        ease: "back.out(1.7)"
    }, .05), V.play(), new ScrollMagic.Scene({
        triggerElement: ".group-member",
        triggerHook: .5,
        reverse: !0
    }).setTween(V).addTo(R);
    var B = new ScrollMagic.Controller,
        L = new TimelineMax({
            paused: !0
        }),
        I = $(".group-members"),
        q = $(I).find(".gp-all-member");
    L.fromTo(q, 1, {
        y: "0%"
    }, {
        y: "-100%"
    }), L.play(), new ScrollMagic.Scene({
        triggerElement: ".group-members",
        duration: "20%",
        triggerHook: .3,
        reverse: !0
    }).setTween(L).addTo(B);
    var W = new TimelineMax({
            paused: !0
        }),
        F = $(".our-awards"),
        D = $(F).find(".award-item");
    W.staggerFromTo(D, 1, {
        autoAlpha: 0
    }, {
        autoAlpha: 1
    }, .2), W.play(), W.delay(1)
}

function formvalidaton() {
    jQuery.validator.addMethod("phonenu", function(e, t) {
        return !!/^\d{3}-?\d{3}-?\d{4}$/g.test(e)
    }, "Invalid phone number"), $("#contactForm").validate({
        rules: {
            name: "required",
            role: "required",
            massage: "required",
            email: {
                required: !0,
                email: !0
            },
            phoneNumber: {
                phonenu: !0,
                required: !0
            },
            messages: {
                name: "Please specify your name",
                email: {
                    required: "We need your email address to contact you",
                    email: "Your email address must be in the format of name@domain.com"
                }
            }
        }
    })
}

function dispSlider() {
    new Swiper(".disp-imgSlideer", {
        speed: 1e3,
        slidesPerView: 1,
        loop: !0,
        effect: "fade",
        autoplay: {
            delay: 4e3
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    })
}

function twitterslider() {
    new Swiper(".twitter-grid", {
        speed: 1e3,
        spaceBetween: 30,
        slidesPerView: 1,
        breakpoints: {
            1024: {
                slidesPerView: 3
            },
            768: {
                slidesPerView: 2
            },
            480: {
                slidesPerView: 1
            }
        }
    })
}

function weBuild() {
    var e;
    new Swiper(".mySwiper", {
        speed: 1e3,
        slidesPerView: 1.1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            1440: {
                slidesPerView: 3.5,
                spaceBetween: 40
            },
            1025: {
                slidesPerView: 3.5,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 2.5
            },
            680: {
                slidesPerView: 1.5
            }
        }
    }), new Swiper(".lolcCareSlider", {
        speed: 1e3,
        slidesPerView: 1,
        spaceBetween: 40,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            1440: {
                slidesPerView: 2.8
            },
            1025: {
                slidesPerView: 2.8
            },
            768: {
                slidesPerView: 2.1
            },
            320: {
                slidesPerView: 1.1
            }
        }
    }), new Swiper(".award-slider", {
        pagination: ".swiper-pagination",
        slidesPerView: 2.5,
        speed: 1e3,
        paginationClickable: !0,
        loop: !1,
        autoplay: {
            delay: 4e3
        },
        spaceBetween: 20,
        slideToClickedSlide: !0,
        navigation: {
            nextEl: ".swiper-button-prev-l",
            prevEl: ".swiper-button-next-r"
        },
        breakpoints: {
            1440: {
                slidesPerView: 3.8,
                spaceBetween: 82
            },
            1200: {
                slidesPerView: 3.8,
                spaceBetween: 50
            },
            1024: {
                slidesPerView: 2.8,
                spaceBetween: 40
            },
            768: {
                slidesPerView: 2.8,
                spaceBetween: 40
            },
            320: (e = {
                slidesPerView: 1.5,
                spaceBetween: 40,
                centeredSlides: !1,
                paginationClickable: !0,
                loop: !1
            }, _defineProperty(e, "spaceBetween", 20), _defineProperty(e, "slideToClickedSlide", !0), e)
        }
    }), new Swiper(".subImages", {
        direction: "horizontal",
        spaceBetween: 50,
        nested: !0,
        paginationClickable: !0,
        pagination: {
            el: ".swiper-pagination"
        }
    });
    $(".show-mobile-menu").click(function() {
        $(this).toggleClass("open")
    }), $(".sector-submenu").slick({
        slidesToShow: 9,
        slidesToScroll: 1,
        dots: !1,
        infinite: !1,
        centerMode: !1,
        focusOnSelect: !0,
        variableWidth: !1,
        swipeToSlide: !0,
        arrows: !1,
        responsive: [{
            breakpoint: 991,
            settings: {
                slidesToShow: 6
            }
        }, {
            breakpoint: 768,
            settings: {
                slidesToShow: 4
            }
        }, {
            breakpoint: 450,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 280,
            settings: {
                slidesToShow: 1
            }
        }]
    });
    new Swiper(".finance-slider-comp", {
        speed: 1e3,
        slidesPerView: 1.5,
        spaceBetween: 20,
        observer: !0,
        observeParents: !0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            1440: {
                slidesPerView: 4.5,
                spaceBetween: 40
            },
            1025: {
                slidesPerView: 3.5,
                spaceBetween: 20
            },
            992: {
                slidesPerView: 2.5,
                spaceBetween: 20
            },
            680: {
                slidesPerView: 1.5,
                spaceBetween: 42
            }
        }
    });
    $("video").each(function() {
        this.play()
    });
    var t = new Swiper(".thumbSlider", {
        speed: 500,
        spaceBetween: 3,
        freeMode: !1,
        navigation: {
            nextEl: ".btn-next",
            prevEl: ".btn-prev"
        },
        loop: !1,
        centeredSlides: !1,
        slidesPerView: "auto"
    });
    new Swiper(".sectorSlider", {
        speed: 500,
        effect: "fade",
        spaceBetween: 3,
        watchSlidesProgress: !0,
        fadeEffect: {
            crossFade: !0
        },
        thumbs: {
            swiper: t
        }
    }), new Swiper(".newsdetailsSlider", {
        speed: 1e3,
        slidesPerView: 1,
        spaceBetween: 0,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        }
    }), new Swiper(".secotrGallery", {
        slidesPerView: 1,
        spaceBetween: 23,
        speed: 800,
        loop: !0,
        autoplay: {
            delay: 3e3
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            768: {
                slidesPerView: 2
            },
            320: {
                slidesPerView: 1
            }
        }
    })
}

function homeTabFilter() {
    var e = document.querySelector(".bt-panel"),
        r = document.querySelectorAll(".grp-btn"),
        n = document.querySelectorAll(".content"),
        o = document.querySelectorAll(".image-content");
    e && e.addEventListener("click", function(e) {
        e.stopPropagation();
        var t = e.target.dataset.id,
            a = e.target.dataset.img;
        if (t) {
            r.forEach(function(e) {
                e.classList.remove("active-tab-btn")
            }), e.target.classList.add("active-tab-btn"), n.forEach(function(e) {
                e.classList.remove("active")
            });
            var i = document.getElementById(t);
            TweenMax.from(i, 1, {
                scale: "1.05"
            }), i.classList.add("active"), o.forEach(function(e) {
                e.classList.remove("img-active")
            }), document.getElementById(a).classList.add("img-active")
        }
    });
    document.querySelectorAll(".gloab-filter-btn"), document.querySelectorAll(".gloab-filter-btn");
    var a = document.querySelectorAll(".number-panel");
    $(".gloab-filter-btn").click(function(e) {
        var t = e.target.dataset.panal;
        t && (a.forEach(function(e) {
            e.classList.remove("numpanel-active")
        }), document.getElementById(t).classList.add("numpanel-active"))
    })
}

function changBG() {
    $(".gloab-filter-btn").click(function() {
        var e = $(this).find(".global-presence-change-bg").attr("src");
        $(".global-presence").css("background-image", "url(" + e + ")")
    })
}

function allianceModel() {
    $(".alliance-logo").click(function(e) {
        e.preventDefault();
        var t = $(this).find(".al-logo").attr("src"),
            a = $(".aliance-model"),
            i = $(this).find(".alliance-title").text();
        a.find(".model-logo-img").attr("src", t), a.find(".model-title").text(i)
    })
}

function directorsFilter() {
    $(".gp-filter-img").click(function(e) {
        e.preventDefault();
        var t = document.querySelectorAll(".gp-image-wrap"),
            a = document.querySelectorAll(".gp-content-tab"),
            i = $(this).attr("data-directid"),
            r = $(this).attr("data-direct-image");
        if ($(".gp-filter-img").removeClass("gp-active-filter-img"), $(this).addClass("gp-active-filter-img"), i) {
            t.forEach(function(e) {
                e.classList.remove("active-panel")
            });
            var n = document.getElementById(i);
            TweenMax.fromTo(n, 1, {
                scale: 1.03
            }, {
                scale: 1
            }), n.classList.add("active-panel")
        }
        if (r) {
            a.forEach(function(e) {
                e.classList.remove("active-panel")
            });
            var o = document.getElementById(r);
            TweenMax.fromTo(o, 1, {
                autoAlpha: 0
            }, {
                autoAlpha: 1
            }), o.classList.add("active-panel")
        }
    })
}

function awaradList() {
    $(".awad-list").click(function(e) {
        $(".black-color").removeClass("black-color"), $(this).children(".wrap-collapse").find(".toggle-icon").addClass("black-color")
    })
}

function closereports() {
    $(".investors-tabs a").removeClass("active"), $(".reports-box").slideUp(300).removeClass("open")
}

function milestone() {
    $(".mil-content").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: !1,
        dots: !1,
        fade: !0,
        adaptiveHeight: !0,
        asNavFor: ".milestone-thumb"
    }),
        $(".milestone-thumb").slick({
        slidesToShow: 12,
        slidesToScroll: 1,
        asNavFor: ".mil-content",
        dots: false,
        infinite: false,
        centerMode: false,
        focusOnSelect: true,
        variableWidth: false,
        swipeToSlide: true,
        arrows: true,
        prevArrow: ".mil-left",
        nextArrow: ".mil-right",

            responsive: [
                {
                    breakpoint: 1600,
                    settings: {
                        slidesToShow: 10,
                    },
                },
                {
                    breakpoint: 1400,
                    settings: {
                        slidesToShow: 8,
                    },
                },
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                    },
                },

                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 6,
                    },
                },
                {
                    breakpoint: 800,
                    settings: {
                        slidesToShow: 5,
                    },
                },
                {
                    breakpoint: 700,
                    settings: {
                        slidesToShow: 4,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 3,
                    },
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 300,
                    settings: {
                        slidesToShow: 1,
                    },
                },
            ],
    })
}

function gloabalSelector() {
    location.pathname.split("/")[1];
    $("#gloab-selector").change(function() {
        location.href = $(this).val()
    })
}

function floatScrollNav() {
    var a, i = 0,
        r = $("#nav");
    window.onscroll = function() {
        var e = $(window).scrollTop(),
            t = r.height();
        console.log(t), a < (i = e) && t < e ? $(".sticky-navigation").addClass("scrollUp") : i < a && !(e <= t) && $(".sticky-navigation").removeClass("scrollUp"), a = i
    }
}
var camera, scene, renderer, container, globe_manipulator, mesh, radius;
$(function() {
    navigationColor(), lazyLoad(), weBuild(), homeAnimation(), twitterslider(), footerSlider(), dispSlider(), homeTabFilter(), directorsFilter(), allianceModel(), changBG(), awaradList(), milestone(), gloabalSelector(), according(), formvalidaton(), floatScrollNav(), $(".hidden-panle > blockquote").map(function(e, t) {
        if (85 < $(this).height()) {
            $(this).css({
                height: "84px",
                "overflow-y": "scroll"
            })
        }
    })
}), $(".investors-tabs a").click(function(e) {
    var t = $(this).attr("href");
    $(e.target).is(".active") || (closereports(), $(this).addClass("active"), $(t).slideDown(300).addClass("open")), e.preventDefault()
}), $(".investors-tabs a:first-child").trigger("click");
var marker, textureLoader = new THREE.TextureLoader,
    clickableObjects = [],
    selected_country = 0,
    country_list = [
        [8.82418, -12.83724, "blue-dote.png", "red-dot-a.png"],
        [9.082, 8.6753, "blue-dote.png", "red-dot-a.png"],
        [13.1339, 27.8493, "blue-dote.png", "red-dot-a.png"],
        [-20.07878448301229, 57.604349212825035, "blue-dote.png", "red-dot-a.png"],
        [23.4241, 53.8478, "blue-dote.png", "red-dot-a.png"],
        [30, 70, "blue-dote.png", "red-dot-a.png"],
        [3.2028, 73.2207, "blue-dote.png", "red-dot-a.png"],
        [7.8731, 80.7718, "blue-dote.png", "red-dot-a.png"],
        [21.9162, 95.956, "blue-dote.png", "red-dot-a.png"],
        [12.5657, 104.991, "blue-dote.png", "red-dot-a.png"],
        [1.3521, 103.8198, "blue-dote.png", "red-dot-a.png"],
        [12.8797, 121.774, "blue-dote.png", "red-dot-a.png"],
        [.7893, 113.9213, "blue-dote.png", "red-dot-a.png"],
        [-14.176929905653228, 34.97669901119047, "blue-dote.png", "red-dot-a.png"],
        [6.369, 34.8888, "blue-dote.png", "red-dot-a.png"],
        [38.861, 71.2761, "blue-dote.png", "red-dot-a.png"],
        [.19839171707545372, 37.89466525780697, "blue-dote.png", "red-dot-a.png"],
        [-20.265941777171506, 30.916666970473266, "blue-dote.png", "red-dot-a.png"],
        [26.895328716047366, 29.82901982595774, "blue-dote.png", "red-dot-a.png"],
        [41.753191968884195, 74.56763941078603, "blue-dote.png", "red-dot-a.png"]
    ],
    country_markers = [],
    SCREEN_WIDTH = window.innerWidth,
    SCREEN_HEIGHT = window.innerHeight,
    is_mobile = !0;
768 <= SCREEN_WIDTH && (is_mobile = !1);
var selected_country_link = "";

function init() {
    scene = new THREE.Scene, (renderer = new THREE.WebGLRenderer({
        antialias: !1,
        alpha: !0
    })).setSize(SCREEN_WIDTH, SCREEN_HEIGHT, !1), renderer.setPixelRatio(window.devicePixelRatio ? window.devicePixelRatio : 1), renderer.sortObjects = !1, renderer.generateMipmaps = !1, renderer.setClearColor(0, 0), (container = document.getElementById("map-id")).appendChild(renderer.domElement);
    var e = SCREEN_WIDTH / SCREEN_HEIGHT;
    camera = new THREE.PerspectiveCamera(45, e, .1, 1e4), scene.add(camera), camera.position.set(0, 400, 800), camera.lookAt(scene.position), THREEx.WindowResize(renderer, camera);
    var t = new THREE.PointLight(16777215, .1);
    t.position.set(0, 800, 800), camera.add(t);
    var a = new THREE.AmbientLight(16777215, .5);
    scene.add(a);
    var i = new THREE.DirectionalLight(16777215, .5);
    i.position.set(0, 200, 400), i.target.position.set(0, 600, 400), camera.add(i), radius = 100;
    var r = new THREE.SphereGeometry(radius, 32, 32),
        n = new THREE.MeshLambertMaterial({
            color: 15658734,
            map: textureLoader.load("./assets/images/gloab/globe_img.png")
        });
    mesh = new THREE.Mesh(r, n), scene.add(mesh);
    var o = new THREE.SpriteMaterial({
            map: textureLoader.load("./assets/images/gloab/marker.png"),
            color: 16777215,
            transparent: !0,
            blending: THREE.AdditiveBlending
        }),
        l = new THREE.Sprite(o);
    l.scale.set(340, 340, 1), mesh.add(l), country_list.forEach(function(e, t) {
        addMarker(t, e[0], e[1], e[2])
    });
    setArc3D(new THREE.Vector3(2 * Math.random() - 1, 2 * Math.random() - 1, 2 * Math.random() - 1).normalize().multiplyScalar(100), new THREE.Vector3(2 * Math.random() - 1, 2 * Math.random() - 1, 2 * Math.random() - 1).normalize().multiplyScalar(100), 50, "#E3E3E3", !1);
    var s = 380;
    1441 < SCREEN_WIDTH && (s = 400), SCREEN_WIDTH < 1024 && (s = 600), SCREEN_WIDTH < 680 && (s = 550), SCREEN_WIDTH < 680 && 400 < SCREEN_WIDTH && (s = 550), globe_manipulator = new globe_manipulator({
        dom_object: renderer.domElement,
        camera: camera,
        radius: radius,
        auto_rotate: !0,
        start_lat: 0,
        start_lng: 0,
        start_distance: s,
        min_distance: 560,
        max_distance: 1200,
        mesh: mesh
    }), gotoCity(10)
}

function addMarker(e, t, a, i) {
    var r = textureLoader.load("./assets/images/gloab/" + i),
        n = new THREE.SpriteMaterial({
            map: r,
            color: 16777215,
            fog: !0,
            transparent: !0,
            depthTest: !1
        }),
        o = new THREE.Sprite(n);
    o.scale.set(60, 40, 0);
    var l = getMarkerCordinates(t, a);
    o.position.set(l[0], l[1], l[2]), country_markers[e] = o, scene.add(o)
}

function removeMarker(e) {
    scene.remove(country_markers[e])
}

function onClicked(e) {
    if (2 == e.mouse_event.button)
        if (e.intersects) {
            actual_latlng = "Lat: " + e.lat.toFixed(2) + "  Lng: " + e.lng.toFixed(2);
            var t = (90 - e.lat) * Math.PI / 180,
                a = (360 - e.lng) * Math.PI / 180;
            Math.sin(t), Math.cos(a), Math.cos(t), Math.sin(t), Math.sin(a)
        } else actual_latlng = "Missed"
}

function setArc3D(e, t, a, i, r) {
    var n = new THREE.Vector3,
        o = new THREE.Vector3,
        l = new THREE.Vector3;
    n.subVectors(new THREE.Vector3, t), o.subVectors(e, t), n.cross(o), l.copy(n).normalize();
    var s = e.angleTo(t);
    r && (s -= 2 * Math.PI);
    for (var c = s / (a - 1), d = [], p = 0; p < a; p++) d.push(e.clone().applyAxisAngle(l, c * p));
    var u = (new THREE.BufferGeometry).setFromPoints(d);
    return new THREE.Line(u, new THREE.LineBasicMaterial({
        color: i
    }))
}

function resetGlobe() {
    globe_manipulator.reset()
}

function gotoRandomCity() {
    var e = Math.floor(Math.random() * city_locations.length),
        t = (city_locations[e].name, city_locations[e].lat),
        a = city_locations[e].lng,
        i = (90 - t) * Math.PI / 180,
        r = (360 - a) * Math.PI / 180;
    Math.sin(i), Math.cos(r), Math.cos(i), Math.sin(i), Math.sin(r);
    globe_manipulator.set_lat_lng(t, a)
}

function getMarkerCordinates(e, t) {
    var a = (90 - e) * Math.PI / 180,
        i = (360 - t) * Math.PI / 180;
    return [radius * Math.sin(a) * Math.cos(i), radius * Math.cos(a), radius * Math.sin(a) * Math.sin(i)]
}

function gotoCity(e) {
    if (country_markers[selected_country]) {
        scene.remove(country_markers[selected_country]), addMarker(e, country_markers[selected_country][0], country_markers[selected_country][1], country_markers[selected_country][2]);
        var t = country_list[e];
        scene.remove(country_markers[e]), addMarker(e, t[0], t[1], t[3]), globe_manipulator.set_lat_lng(t[0], t[1]), selected_country = e
    }
}

function onWindowResize() {
    camera.aspect = window.innerWidth / window.innerHeight, camera.updateProjectionMatrix(), renderer.setSize(window.innerWidth, window.innerHeight)
}

function animate() {
    requestAnimationFrame(animate), globe_manipulator.update(), renderer.clear(), renderer.render(scene, camera), globe_manipulator.stop_auto_rotate()
}

function according() {
    $("#accordionExample").on("hide.bs.collapse show.bs.collapse", function(e) {
        $(e.target).prev().find("i:last-child").toggleClass("icon-minus icon-plus")
    })
}

function footerSlider() {
    var e, t = (_defineProperty(e = {
        loop: !0,
        freeMode: !0,
        spaceBetween: 10,
        grabCursor: !0,
        slidesPerView: 6
    }, "loop", !0), _defineProperty(e, "autoplay", {
        delay: 1,
        disableOnInteraction: !0
    }), _defineProperty(e, "freeMode", !0), _defineProperty(e, "speed", 5e3), _defineProperty(e, "freeModeMomentum", !1), _defineProperty(e, "breakpoints", {
        320: {
            slidesPerView: 5
        },
        768: {
            slidesPerView: 8
        },
        1024: {
            slidesPerView: 12
        }
    }), e);
    new Swiper(".flagSlider", t)
}
init(), animate(), $(document).ready(function() {
    $(".coun-list ul li button").click(function(e) {
        $(".coun-list ul li button").removeClass("active"), $(this).addClass("active"), gotoCity($(this).data("country-id")), globe_manipulator.stop_auto_rotate()
    }), $("#map-select").change(function() {
        var e = $(this).find("option:selected").data("country-id"),
            t = $(this).find("option:selected").attr("country-name-id");
        gotoCity(e), globe_manipulator.stop_auto_rotate();
        var a = $(this).find("option:selected").data("img-url");
        $(".global-presence").css("background-image", "url(" + a + ")"), $("ul.number-panel").removeClass("numpanel-active"), $("ul#" + t).addClass("numpanel-active")
    })
});
