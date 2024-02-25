// Récupérer en fetch les données carte à emporter


const takeAwayButton = document.getElementById("button_take_away").addEventListener("click", async() => {
    document.getElementById("refresh").classList.remove("button__hidden");
    const url = './lib/take_away.php';
    const response = await fetch(url);
    console.log(response);
    const takeAway = await response.json();
    console.log(takeAway);
    if (takeAway.length > 0) {
        takeAway.forEach((element) => {
            document.getElementById('take_away').innerHTML +=`
            <div class="section__card">
                <h5 class="card-title">${element.name_recipe}</h5>
                <p class="card-text">${element.description}</p>
                <p class="card-text">${element.price} €</p>
            </div>`
        })
    }else if (takeAway.length === 0){
        document.getElementById('take_away').innerHTML =`
        <div class="card-body">
            <h5 class="card-title">Aucun plat à emporter</h5>
        </div>`
    }
});

const buttonRefresh = document.getElementById("refresh")
buttonRefresh.addEventListener("click", async (e) => {
    e.preventDefault(); 
    window.location.reload(); 
});
