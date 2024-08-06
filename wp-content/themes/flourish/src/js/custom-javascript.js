// Add your JS customizations here

const general = {
    init: function () {
        general.initGSAP();
        general.initGSAPX();
    },
    initGSAP: function () {
        gsap.registerPlugin(ScrollTrigger);

        const splitTypes = document.querySelectorAll('.reveal-type');

        splitTypes.forEach((char, i) => {
            const bg = char.dataset.bgColor;
            const fg = char.dataset.fgColor;

            const text = new SplitType(char, {
                types: 'chars'
            });

            gsap.fromTo(text.chars, {
                color: bg,
            }, {
                color: fg,
                duration: 0.3,
                stagger: 0.2,
                scrollTrigger: {
                    trigger: char,
                    start: 'top 80%',
                    end: 'top 20%',
                    scrub: true,
                    markers: false,
                    toggleActions: 'play play reverse reverse'
                }
            });
        });

        const lenis = new Lenis();

        lenis.on('scroll', (e) => {
            console.log(e);
        });

        function raf(time) {
            lenis.raf(time);
            requestAnimationFrame(raf);
        }

        requestAnimationFrame(raf);
    },
    initGSAPX: function () {
        const horizontalSections = gsap.utils.toArray('section.horizontal')

        horizontalSections.forEach(function (sec, i) {

            var thisPinWrap = sec.querySelector('.pin-wrap');
            var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');

            var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth);

            gsap.fromTo(thisAnimWrap, {
                x: () => thisAnimWrap.classList.contains('to-right') ? 0 : getToValue()
            }, {
                x: () => thisAnimWrap.classList.contains('to-right') ? getToValue() : 0,
                ease: "none",
                scrollTrigger: {
                    trigger: sec,
                    start: "top top",
                    end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
                    pin: thisPinWrap,
                    invalidateOnRefresh: true,
                    anticipatePin: 1,
                    scrub: true,
                    //markers: true,
                }
            });

        });
    }
};

jQuery(document).ready(function () {
    general.init();
});