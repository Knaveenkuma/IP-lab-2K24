function validateAndSubmit() {
  var radioButtons = document.querySelectorAll('input[name="option"]');
  var isChecked = false;

  for (var i = 0; i < radioButtons.length; i++) {
    if (radioButtons[i].checked) {
      isChecked = true;
      break;
    }
  }

  if (!isChecked) {
    alert("Please select a car option!");
    return;
  }

  var paragraph = document.getElementById("paragraph").value;
  var words = paragraph.split(/\s+/);

  if (words.length < 10) {
    alert("Please enter a paragraph with at least 10 words.");
    return;
  }

  var fname = document.getElementById("fname").value;
  var phno = document.getElementById("phno").value;
  var m_id = document.getElementById("m_id").value;

  var nameRegex = /^[A-Za-z\s]+$/;
  var phoneRegex = /^\d{10}$/;
  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (!nameRegex.test(fname)) {
    alert("Please enter a valid name.");
    return;
  }

  if (!phoneRegex.test(phno)) {
    alert("Please enter a valid phone number.");
    return;
  }

  if (!emailRegex.test(m_id)) {
    alert("Please enter a valid email address.");
    return;
  }

  alert("Form submitted successfully!");
}


