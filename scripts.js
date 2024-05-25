// Get all the modals
var modals = document.querySelectorAll('.modal');

// Get all modal trigger elements
var triggers = document.querySelectorAll('.appetizer-list li');

// Get all the <span> elements that close the modal
var spans = document.querySelectorAll('.close');

// When the user clicks on a trigger, open the respective modal
triggers.forEach(function(trigger) {
  trigger.addEventListener('click', function() {
    var modalId = this.getAttribute('data-modal');
    var modal = document.getElementById(modalId);
    modal.style.display = 'block';
  });
});

// When the user clicks on <span> (x), close the modal
spans.forEach(function(span) {
  span.addEventListener('click', function() {
    var modal = this.closest('.modal');
    modal.style.display = 'none';
  });
});

// When the user clicks anywhere outside of the modal, close it
window.addEventListener('click', function(event) {
  modals.forEach(function(modal) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  });
});


