document.addEventListener("DOMContentLoaded", () => {
    const images = document.querySelectorAll(".gallery img");
    const modal = document.getElementById("modal1");
    const modalImg = document.createElement("img");
    const closeModal = document.querySelector(".close");
  
    images.forEach(image => {
      image.addEventListener("click", () => {
        modal.style.display = "flex";
        modal.innerHTML = "";
        modalImg.src = image.src;
        modal.appendChild(modalImg);
        const span = document.createElement("span");
        span.classList.add("close");
        span.innerHTML = "&times;";
        modal.appendChild(span);
        span.onclick = () => {
          modal.style.display = "none";
        };
      });
    });
  
    closeModal.onclick = function () {
      modal.style.display = "none";
    };
  
    window.onclick = function (event) {
      if (event.target === modal) {
        modal.style.display = "none";
      }
    };
  });
  