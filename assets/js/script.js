// All JavaScript from previous example
function toggleDarkMode() {
    document.body.classList.toggle('dark-mode');
    const button = document.querySelector('button[onclick="toggleDarkMode()"]');
    button.innerHTML = document.body.classList.contains('dark-mode') 
        ? '☀️ लाइट मोड' 
        : '🌙 डार्क मोड';
}
