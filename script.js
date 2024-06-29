$(document).ready(function() {
    $('#contactForm').submit(function(event) {
        event.preventDefault(); // Prevent the form from submitting the traditional way

        $.ajax({
            url: 'submit-form.php',
            type: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                $('#responseMessage').text(response.message);
                $('#responseModal').modal('show');
            },
            error: function(xhr, status, error) {
                $('#responseMessage').text('An error occurred: ' + error);
                $('#responseModal').modal('show');
            }
        });
    });
});


//about section
document.addEventListener('DOMContentLoaded', () => {
    const aboutCards = document.querySelectorAll('.about-card');

    const observerOptions = {
        root: null, // Use the viewport as the root
        rootMargin: '0px',
        threshold: 0.2 // Trigger when 20% of the element is in view
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.animation = 'slideright 1s forwards';
            } else {
                entry.target.style.animation = 'slideleft 1s forwards';
            }
        });
    }, observerOptions);

    aboutCards.forEach(card => {
        observer.observe(card);
    });
});

//Project section
document.addEventListener('DOMContentLoaded', () => {
    const elementsToAnimate = document.querySelectorAll('.project-card, .skill-slide, .service-card');

    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2 // Trigger when 20% of the element is in view
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('project-card')) {
                    entry.target.style.animation = 'slideIn 1s forwards';
                } else if (entry.target.classList.contains('skill-slide')) {
                    entry.target.style.animation = 'skill-slide 1s forwards';
                } else if (entry.target.classList.contains('service-card')) {
                    entry.target.style.animation = 'autoShow 1s forwards';
                }
            } else {
                if (entry.target.classList.contains('project-card')) {
                    entry.target.style.animation = 'none';
                    entry.target.style.opacity = 0;
                } else if (entry.target.classList.contains('skill-slide')) {
                    entry.target.style.animation = 'none';
                    entry.target.style.opacity = 0;
                } else if (entry.target.classList.contains('service-card')) {
                    entry.target.style.animation = 'none';
                    entry.target.style.opacity = 0;
                }
            }
        });
    }, observerOptions);

    elementsToAnimate.forEach(element => {
        observer.observe(element);
    });
});