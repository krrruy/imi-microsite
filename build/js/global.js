document.querySelectorAll('.tab-button').forEach(button => {
  button.addEventListener('click', (e) => {
    e.preventDefault();
    // Get the target content
    const targetId = button.getAttribute('data-target');
    const targetContent = document.getElementById(targetId);

    // Remove active class from all buttons and hide all tab contents
    document.querySelectorAll('.tab-button').forEach(btn => {
      btn.classList.remove('active');
    });

    // Hide all tab contents
    document.querySelectorAll('.tab-content').forEach(content => {
      content.classList.remove('active');
    });

    // Show the target content
    button.classList.add('active');
    targetContent.classList.add('active');
  });
});

// Optionally, set the first tab to be active by default
document.querySelector('.tab-button').click();