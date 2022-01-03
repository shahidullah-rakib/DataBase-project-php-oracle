const searchForm = document.querySelector('.search-teacher')
const updateForm = document.querySelector('.update-teacher')

updateForm.addEventListener('submit', e=>{
    e.preventDefault()
    let data = new FormData(updateForm)
    data.append('update-teacher', 'update-teacher')
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if(this.readyState == 4 && this.status == 200) {
            if(this.responseText==='success') {
                alert('successfully updated!')
            } else {
                alert(this.responseText)
            }
        }
    }
    xhttp.open("POST", "./php/updateAdmin.php", true)
    xhttp.send(data)
})