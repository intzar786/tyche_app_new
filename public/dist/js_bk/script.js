

// js for slide value chang 

document.addEventListener("DOMContentLoaded", function() {
  const myList = document.getElementById("myList");
  const sections = document.getElementsByClassName("section");

  // Add an 'active' class to the first list item and section initially
  myList.children[0].classList.add("active");
  sections[0].style.display = "block";

  for (let i = 0; i < myList.children.length; i++) {
    const listItem = myList.children[i];
    listItem.addEventListener("click", function(event) {
      event.preventDefault();
      const targetSection = document.querySelector(listItem.children[0].getAttribute("href"));
      for (let j = 0; j < sections.length; j++) {
        sections[j].style.display = "block";
        myList.children[j].classList.remove("active");
      }
      targetSection.style.display = "block";
      listItem.classList.add("active");
    });
  }

  // Observe changes in the sections and update the active list item accordingly
  const observer = new IntersectionObserver(function(entries) {
    entries.forEach(function(entry) {
      if (entry.isIntersecting) {
        const targetListItem = document.querySelector('a[href="#' + entry.target.id + '"]').parentNode;
        for (let j = 0; j < myList.children.length; j++) {
          myList.children[j].classList.remove("active");
        }
        targetListItem.classList.add("active");
      }
    });
  }, { threshold: 0.5 });

  // Observe each section
  for (let i = 0; i < sections.length; i++) {
    observer.observe(sections[i]);
  }
});




// scroll-behavior: smooth;




    document.addEventListener("DOMContentLoaded", function() {
  const myList = document.getElementById("myList");
  const sections = document.getElementsByClassName("section");

  for (let i = 0; i < myList.children.length; i++) {
    const listItem = myList.children[i];
    listItem.addEventListener("click", function(event) {
      event.preventDefault();
      const targetSection = document.querySelector(listItem.children[0].getAttribute("href"));
      for (let j = 0; j < sections.length; j++) {
        // sections[j].style.display = "none";
        sections[j].style.display = "none";
      }
      targetSection.style.display = "block";
    });
  }
});



// slider 
$('.responsive').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});