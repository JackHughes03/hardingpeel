button1 = document.getElementById("button1");
button2 = document.getElementById("button2");
button3 = document.getElementById("button3");
button4 = document.getElementById("button4");
button5 = document.getElementById("button5");

hamburger = document.getElementById("hamburger");
line1 = document.getElementById("line1");
line2 = document.getElementById("line2");
line3 = document.getElementById("line3");

menuexpandcontent = document.getElementById("menuexpandcontent");

popup = document.getElementById("popup");
formid = document.getElementById("formid");


function hamburgerclick() {
  line1.style.transition = "all 0.5s ease";
  line3.style.transition = "all 0.5s ease";

  if (line1.style.transform == "rotate(45deg)") {
    menuexpandcontent.style.display = "none";
    line1.style.transform = "rotate(0deg)";
    line3.style.transform = "rotate(0deg)";
    line1.style.marginBottom = "7px";
    line3.style.marginTop = "7px";
  } else {
    menuexpandcontent.style.display = "flex";
    line1.style.transform = "rotate(45deg)";
    line3.style.transform = "rotate(-45deg)";
    line1.style.marginBottom = "-1px";
    line3.style.marginTop = "0px";
  }
}

function button5function() {
  if(formid.style.display == "block") {
  formid.style.display = "none";
  } else {
  formid.style.display = "block";
  }
}

inputbutton = document.getElementsByTagName("input");

for (var i = 0; i < inputbutton.length; i++) {
  inputbutton[i].addEventListener("click", function () {
    if (this.type == "submit" && (document.getElementById("name").value == "" || document.getElementById("email").value == "" || document.getElementById("message").value == "")) {
      this.style.backgroundColor = "red";
      this.disabled = true;
    } else if (this.type == "submit") {
      this.style.backgroundColor = "green";
      this.disabled = false;
      popup = document.getElementById("popup");

      popup.style.display = "block";
      popup.style.opacity = "1";
    }
  });
}
function closePopup() {
  popup.style.opacity = "1";
}

function closeform() {
  formid.style.display = "none";
  button5.style.borderBottom = "none";
  button5.style.paddingBottom = "0px";
  button1.style.borderBottom = "2px solid white";
  button1.style.paddingBottom = "5px";
  stop0.style.filter = "blur(0px)";
}

// Create the IntersectionObserver
const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {
    // Check if the text element is intersecting with the viewport
    if (entry.isIntersecting) {
      // Add the class to animate the text element
      entry.target.classList.add("animate-text");
    }
  });
});

// Find all elements with the class "slide-in-text"
const textElements = document.querySelectorAll(".slide-in-text");

// Observe each text element
textElements.forEach((textElement) => {
  observer.observe(textElement);
});

const stop1 = document.getElementById("stop1");
window.addEventListener("scroll", function () {
  const rect = stop1.getBoundingClientRect();
  if (rect.top <= 0) {
    stop1.style.position = "fixed";
    stop1.style.top = "0";
  } else {
    stop1.style.position = "absolute";
    stop1.style.top = "1070px";
  }
});

const stop2 = document.getElementById("stop2");
window.addEventListener("scroll", function () {
  const rect = stop2.getBoundingClientRect();
  if (rect.top <= 0) {
    stop2.style.position = "fixed";
    stop2.style.top = "0";
  } else {
    stop2.style.position = "absolute";
    stop2.style.top = "2070px";
  }
});

const stop3 = document.getElementById("stop3");
window.addEventListener("scroll", function () {
  const rect = stop3.getBoundingClientRect();
  if (rect.top <= 0) {
    stop3.style.position = "fixed";
    stop3.style.top = "0";
  } else {
    stop3.style.position = "absolute";
    stop3.style.top = "3070px";
  }
});