document.addEventListener("DOMContentLoaded", function () {
  if (document.getElementById("account_type_id")) {
    var accountSelect = document.getElementById("account_type_id");
    // var genderSelect = document.getElementById("gender_id");
    var usernameLabel = document.getElementById('username-label');
    var usernameInput = document.getElementById('username');
    var userIdSection = document.getElementById('userid_section');
    var basicAuthSection = document.getElementById("basic-auth-section");

    accountSelect.addEventListener("change", function () {

      const selectedAccountTypeId = accountSelect.value;
      console.log("Selected account type ID:", selectedAccountTypeId);
      // const selectedGenderId = genderSelect.value;
      // console.log("Selected gender ID:", selectedGenderId);

      switch (selectedAccountTypeId) {
        case "1":
          usernameLabel.innerText = "Enter Student ID";
          usernameInput.placeholder = "COURSE-01-0001-2024";
          userIdSection.style.display = "block";
          break;
        case "2":
          usernameLabel.innerText = "Enter Staff / Faculty ID";
          usernameInput.placeholder = "DEPT-01-0001-2024";
          userIdSection.style.display = "block";
          break;
        case "3":
          usernameLabel.innerText = "Enter National ID";
          usernameInput.placeholder = "01010101010";
          userIdSection.style.display = "block";
          break;
        default:
          console.warn("Unknown account type ID:", selectedAccountTypeId);
      }
      basicAuthSection.style.display = "block";
    });
  } else {
    console.error("Element with ID not found. Please check your HTML structure.");
  }
});
