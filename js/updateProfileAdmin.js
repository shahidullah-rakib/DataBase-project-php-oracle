const updateForm = document.querySelector('.update-admin')

updateForm.addEventListener('submit', e=> {
    const data = new FormData(updateForm)
    data.append('update', 'update')
    e.preventDefault()
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
       if (this.readyState == 4 && this.status == 200) {
         if(this.responseText === 'success') {
           alert("updated successfully!")
           location.reload()
           return
         }
         alert(this.responseText)
        }
      };
 
    xhttp.open("POST", "./php/updateAdmin.php", true)
    xhttp.send(data)
})