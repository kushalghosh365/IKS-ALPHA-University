let currentIndex = 0;

function showSlide(index) {
  const slides = document.querySelectorAll(".slides img");
  const totalSlides = slides.length;

  // Loop the index if it goes out of bounds
  if (index >= totalSlides) {
    currentIndex = 0;
  } else if (index < 0) {
    currentIndex = totalSlides - 1;
  } else {
    currentIndex = index;
  }

  // Set the transform property to display the current slide
  const offset = -currentIndex * 100;
  document.querySelector(".slides").style.transform = `translateX(${offset}%)`;
}

function changeSlide(direction) {
  showSlide(currentIndex + direction);
}

// Automatically change slide every 5 seconds
setInterval(() => {
  changeSlide(1);
}, 5000);
