document.getElementById('about-link').addEventListener('click', function(event) {
  event.preventDefault();
  document.getElementById('about').style.display = 'block';
  document.getElementById('home').style.display = 'none';
  document.getElementById('projects').style.display = 'none';
});
  
  document.getElementById('projects-link').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('projects').style.display = 'block';
    document.getElementById('about').style.display = 'none';
    document.getElementById('home').style.display = 'none';
  });