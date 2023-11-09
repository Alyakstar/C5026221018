
document.addEventListener("DOMContentLoaded", function() {
  const menuLinks = document.querySelectorAll(".nav-content ul li a");

  menuLinks.forEach(function(link) {
    link.addEventListener("click", function(event) {
      event.preventDefault();
      const targetId = link.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        targetElement.scrollIntoView({ behavior: "smooth" });
      }
    });
  });

  var nav = document.querySelector("nav")
window.addEventListener("scroll", ()=>{
  if(document.documentElement.scrollTop > 20){
      nav.classList.add("sticky");
  } else {
      nav.classList.remove("sticky");

  }
}
)

  var getToKnowButton = document.querySelector(".btn_1 button");
  var profileElement = document.querySelector("#profile");
  getToKnowButton.addEventListener("click", function(event) {
    event.preventDefault(); 
    profileElement.classList.add("active");
    profileElement.scrollIntoView({ behavior: "smooth" });
  });

  document.getElementById("submit_email").addEventListener("click", function() {
    var emailInput = document.getElementById("input_email").value;

    if (emailInput !== "" && emailInput.endsWith("@gmail.com")) {
      window.location.href = "https://id.linkedin.com/in/alya-callysta-nugraha-11ba78258";
    } else {
      alert("Masukkan alamat email yang valid, yang berakhir dengan @gmail.com.");
    }
  });
});


