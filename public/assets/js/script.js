console.log("js loaded");

const submissionButton = document.getElementById("submissionButton");
const body = document.getElementById("body");



if (submissionButton) {
  submissionButton.addEventListener("click", handleFormSubmission);
}

function handleFormSubmission(event) {
  const Email = document.getElementById("exampleInputEmail1").value;
  const Password = document.getElementById("exampleInputPassword1").value;


  event.preventDefault();
  console.log("js works");
  console.log(Email, Password);



  const url = "/login";

  const user = {
    email: Email,
    password: Password,

  };

  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(user),
  }).then((response) => {
    return response.text();
  }).then((result) => {
    // body.innerHTML = ''
    // body.innerHTML = result
    console.log(result);
  });
}