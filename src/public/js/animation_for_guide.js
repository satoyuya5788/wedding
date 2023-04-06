$('#guide_msg .letters').each(function () {
    $(this).html($(this).text().replace(/([^\x00-\x80]|\w)/g, "<span class='letter webfont' data-letter='$&'>$&</span>"));
});

const hides = document.getElementsByClassName('display_none');
[].forEach.call(hides, function (hide) {
    setTimeout(() => {
        hide.classList.remove('display_none');
    }, 1000);
});

anime.timeline(
    { loop: false }
)
    .add({
        targets: '#guide_msg .letter',
        scale: {
            value: [0, 1],
            duration: 1200
        },
        translateY: [function () { return anime.random(-360, 360); }, 0],
        translateX: [function () { return anime.random(-360, 0); }, 0],
        opacity: [0, 1],
        filter: {
            value: ["blur(15px)", "blur(0px)"],
            duration: 3000
        },
        duration: 12000,
        elasticity: 300,
        delay: function (el, i) {
            return 38 * (i + 1)
        },
        update: function (anim) {
            // console.log(anim.currentTime + 'ms'); // Get current animation time with `myAnimation.currentTime`, return value in ms.
            // console.log(anim.progress + '%'); // Get current animation progress with `myAnimation.progress`, return value in %
        },
        begin: function (anim, target) {
            console.log(anim.began); // true after 1000ms
        }
    });
