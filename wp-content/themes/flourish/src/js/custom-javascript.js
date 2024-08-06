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
        const fillEl = document.querySelector('.js-fill');
        const fillEnd = document.querySelector('.js-fill-end');

        // Set up timeline and scrolltrigger
        const scrollTl = gsap.timeline({
            scrollTrigger: {
                startTrigger: fillEl,
                start: 'center 10%',
                endTrigger: fillEnd,
                end: 'top bottom',
                scrub: 0.35
            }
        })

        scrollTl.to(fillEl, {
            height: '100vh',
            width: '100vw',
            borderRadius: '0'
        })


    }
};

jQuery(document).ready(function () {
    general.init();
});