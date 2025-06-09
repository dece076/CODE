document.getElementById("contactForm").addEventListener("submit", function (e) {
    e.preventDefault();
  
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const message = document.getElementById("message").value.trim();
    const feedback = document.getElementById("feedback");
  
    if (!name || !email || !message) {
      feedback.textContent = "Please fill out all fields.";
      feedback.style.color = "red";
      return;
    }
  
    feedback.textContent = "Message sent! Thank you!";
    feedback.style.color = "green";
  
    // Reset the form
    document.getElementById("contactForm").reset();
  });