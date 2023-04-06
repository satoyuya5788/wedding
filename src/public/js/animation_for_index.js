var textWrapper = document.querySelector('.ml3');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter webfont'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml3 .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 2000,
        delay: (el, i) => 380 * (i + 1)
    }).add({
        targets: '.ml3',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 10000
    });

var textWrapper = document.querySelector('.ml4');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter webfont'>$&</span>");

anime.timeline({ loop: true })
    .add({
        targets: '.ml4 .letter',
        opacity: [0, 1],
        easing: "easeInOutQuad",
        duration: 1500,
        delay: (el, i) => 350 * (i + 1)
    }).add({
        targets: '.ml4',
        opacity: 0,
        duration: 1000,
        easing: "easeOutExpo",
        delay: 9000
    });
