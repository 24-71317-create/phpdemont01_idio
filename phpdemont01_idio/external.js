function greetUser(){
  const username = document.getElementById('displayusername').innerText;
  const userID = document.getElementById('displayuserid').innerText;
  const course = document.getElementById('displaycourse').innerText;
  const section = document.getElementById('displaysection').innerText;
  const subject = document.getElementById('displaysubject').innerText;

  alert("Hello " + username + ". Your User ID is: " + userID + "\nCourse: " + course + "\nSection: " + section + "\nSubject: " + subject);
}
