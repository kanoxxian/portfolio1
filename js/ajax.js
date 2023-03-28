const isValidEmail = (email) => {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  };
  
  const form = document.querySelector('form');
  const nameInput = document.querySelector('input[name="fname"]');
  const emailInput = document.querySelector("input[name='email']");
  const lnameInput = document.querySelector("input[name='lname']");
  const subjectInput = document.querySelector("input[name='subject']");
  const messageInput = document.querySelector("textarea[name='message']");
  
  const inputs = [nameInput, emailInput, lnameInput, subjectInput, messageInput];
  
  let isValidationOn = false;
  
  const resetElm = (elm) => {
    elm.classList.remove("invalid");
    elm.nextElementSibling.classList.add("hidden");
    elm.classList.remove("valid");
  };
  
  const invalidateElm = (elm) => {
    elm.classList.add("invalid");
    elm.nextElementSibling.classList.remove("hidden");
  };
  
  const validateInputs = () => {
    if (!isValidationOn) return;
    inputs.forEach(resetElm);
  
    if (!nameInput.value) {
      invalidateElm(nameInput);
    }
  
    if (!isValidEmail(emailInput.value)) {
      invalidateElm(emailInput);
    }
  
    if (!lnameInput.value) {
      invalidateElm(lnameInput);
    }
  
    if (!subjectInput.value) {
      invalidateElm(subjectInput);
    }
  
    if (!messageInput.value) {
      invalidateElm(messageInput);
    }
  };
  
  inputs.forEach((input) => {
    input.addEventListener("input", () => {
      validateInputs();
    });
  });
  
  form.addEventListener("submit", (e) => {
    e.preventDefault();
    isValidationOn = true;
    validateInputs();
  
    if (nameInput.value && isValidEmail(emailInput.value) && lnameInput.value && subjectInput.value && messageInput.value) {
      const formData = new FormData(form);
  
      fetch("./inc/validation.php", {
        method: "POST",
        body: formData,
      })
        .then((response) => {
          if (!response.ok) {
            throw new Error("Network response was not ok");
          }
          return response.text();
        })
        .then((data) => {
          form.reset();
          inputs.forEach(resetElm);
          document.querySelector(".form-sent").classList.remove("hidden");
        })
        .catch((error) => {
          console.error("Error:", error);
        });
    }
  });
  
  nameInput.removeAttribute("required");