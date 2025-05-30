
     function toggleContent(event) {
    const content = document.getElementById("more-content");
    const button = event.target;

    if (content.style.display === "none") {
      content.style.display = "block";
      button.textContent = "Read Less";
    } else {
      content.style.display = "none";
      button.textContent = "Read More";
    }
  }