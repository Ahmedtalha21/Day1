document.addEventListener("DOMContentLoaded", function() {
    const heartContainer = document.querySelector('.floating-hearts');

    function createHeart() {
        const heart = document.createElement('div');
        heart.classList.add(Math.random() > 0.5 ? 'heart' : 'flower');
        heart.style.left = Math.random() * 100 + "vw";
        heart.style.animationDuration = Math.random() * 3 + 3 + "s";
        heartContainer.appendChild(heart);

        setTimeout(() => {
            heart.remove();
        }, 5000);
    }

    setInterval(createHeart, 300);
});

function toggleEnvelope() {
    document.querySelector('.envelope').classList.toggle('open');
}
