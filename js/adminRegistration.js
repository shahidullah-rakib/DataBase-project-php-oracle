const form = document.querySelector(".admin-registration");

form.addEventListener("submit", (e) => {
  e.preventDefault();
  let data = new FormData(form);
  data.append("admin-register", "admin-register");
  let xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText === "success") {
        alert("updated successfully!");
        location.reload();
        return;
      }
      alert(this.responseText);
    }
  };
  xhttp.open("POST", "./php/updateAdmin.php", true);
  xhttp.send(data);
});
