document.querySelectorAll(".link").forEach(link => {
  link.addEventListener("click", function (e) {
    e.preventDefault();

      document.querySelector(".form1").classList.toggle("active");
   
  });
   });
   document.querySelector(".link").addEventListener("click", function (e) {
  e.preventDefault();


  // show registration form
  document.querySelector(".form2").classList.remove("form22"); // or ensure it's visible
});

