// All JavaScript from previous example
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    const button = document.querySelector('button[onclick="toggleDarkMode()"]');
    button.innerHTML = document.body.classList.contains('dark-mode') 
        ? '☀️ लाइट मोड' 
        : '🌙 डार्क मोड';
}
// Set current year in footer
document.getElementById('year').textContent = new Date().getFullYear();

// Dark Mode Toggle
function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
  const button = document.querySelector('button[onclick="toggleDarkMode()"]');
  if (document.body.classList.contains('dark-mode')) {
    button.innerHTML = '☀️ लाइट मोड';
    localStorage.setItem('darkMode', 'enabled');
  } else {
    button.innerHTML = '🌙 डार्क मोड';
    localStorage.setItem('darkMode', 'disabled');
  }
}

// Check for saved dark mode preference
if (localStorage.getItem('darkMode') === 'enabled') {
  document.body.classList.add('dark-mode');
  document.querySelector('button[onclick="toggleDarkMode()"]').innerHTML = '☀️ लाइट मोड';
}

// Form handling
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', function(e) {
    e.preventDefault();
    alert('धन्यवाद! आपका संदेश प्राप्त हुआ।');
    this.reset();
  });
});
