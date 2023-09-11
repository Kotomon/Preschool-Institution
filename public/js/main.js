const readMoreBtn = document.querySelector('.read-more-btn');
const moreText = document.querySelector('.moreText');

readMoreBtn.addEventListener('click', () => {
    moreText.classList.toggle('show-more');
    if (moreText.classList.contains('show-more')) {
        readMoreBtn.textContent = 'Скрыть текст';
    } else {
        readMoreBtn.textContent = 'Читать далее';
    }
});

let currentReview = 1;
let reviews = document.getElementsByClassName('review-slide');
let reviewsButtons = document.querySelectorAll('.prev, .next');
let autoPlay = setInterval(() => {
    currentReview++;
    if (currentReview > reviews.length) {
        currentReview = 1;
    }
    showReview(currentReview);
}, 5000);

function showReview(n) {
    for (let slide of reviews) {
        slide.style.display = 'none';
    }
    reviews[n - 1].style.display = 'block';
}

showReview(currentReview);

reviewsButtons.forEach(function(button) {
    button.addEventListener('click', function(e) {
        if (e.target.classList.contains('prev')) {
            currentReview--;
            if (currentReview < 1) {
                currentReview = reviews.length;
            }
        } else {
            currentReview++;
            if (currentReview > reviews.length) {
                currentReview = 1;
            }
        }
        showReview(currentReview);
    });
});

let reviewsSlider = document.querySelector('.reviews-slider');

reviewsSlider.addEventListener('mouseenter', () => {
    clearInterval(autoPlay);
});

reviewsSlider.addEventListener('mouseleave', () => {
    autoPlay = setInterval(() => {
        currentReview++;
        if (currentReview > reviews.length) {
            currentReview = 1;
        }
        showReview(currentReview);
    }, 5000);
});
