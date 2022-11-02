function result() {
    let darkMode = document.querySelectorAll('.mode');
    for(let x of darkMode) {
        x.classList.toggle('dark')
    }
    alert("Mengganti Tema. Klik OK untuk melanjutkan");
}