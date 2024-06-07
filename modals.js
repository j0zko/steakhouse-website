// JavaScript for handling modal functionality
document.addEventListener('DOMContentLoaded', (event) => {
    const orderButtons = document.querySelectorAll('.order-button');
    const modals = document.querySelectorAll('.modal');
    const closeButtons = document.querySelectorAll('.close');

    orderButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modalId = button.getAttribute('data-modal');
            document.getElementById(modalId).style.display = 'block';
        });
    });

    closeButtons.forEach(button => {
        button.addEventListener('click', () => {
            button.closest('.modal').style.display = 'none';
        });
    });

    window.addEventListener('click', (event) => {
        modals.forEach(modal => {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        });
    });
});

function openModal(imageSrc, captionText) {
    var modal = document.getElementById("myModal");
    var modalImg = document.getElementById("modalImage");
    var caption = document.getElementById("modalCaption");

    modal.style.display = "block";
    modalImg.src = imageSrc;
    caption.innerHTML = captionText;
}

function closeModal() {
    var modal = document.getElementById("myModal");
    modal.style.display = "none";
}

function orderNow() {
    alert("Order Now button clicked!");
}

// Close the modal when clicking anywhere outside of the image
window.onclick = function(event) {
    var modal = document.getElementById("myModal");
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
