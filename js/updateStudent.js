const updateForm = document.querySelector('.update-student')

updateForm.addEventListener('submit', e => {
    e.preventDefault()
    const blood_group = document.querySelector("input[name='blood_group']").value;
    if (!bloodGroupValidation(blood_group)) return;
    const name = document.querySelector("input[name='name']").value;
    if (!nameValidation(name)) return;
    let data = new FormData(updateForm)
    data.append('update-student', 'update-student')
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText === 'success') {
                alert('successfully updated!')
            } else {
                alert(this.responseText)
            }
        }
    }
    xhttp.open("POST", "./php/updateAdmin.php", true)
    xhttp.send(data)
})


function bloodGroupValidation(group) {
    const bloodGroup = ["A+", "B+", "AB+", "O+", "AB-", "A-", "B-", "O-"];
    let flag = 0;
    bloodGroup.forEach((g) => {
        if (g === group) {
            flag = 1;
        }
    });
    if (flag === 1) return true;
    return false;
}


function nameValidation(x) {
    if(/^[A-z ]+$/.test(x)) {
        return true;
    }
    alert("Please input valid name")
    return false;
}