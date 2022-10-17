addEventListener("DOMContentLoaded", async(e)=>{
    let peticion = await fetch("https://jennifermelissarussicastillo.000webhostapp.com/Variables_03_0_2022/api.php");
    let data = await peticion.text();
    document.body.innerHTML =data;
})