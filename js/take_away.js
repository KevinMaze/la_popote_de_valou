// Récupérer en fetch les données carte à emporter


// const getTakeAway = async() => {

// }

document.getElementById("button_take_away").addEventListener("click", async() => {
    document.getElementById('take_away').innerHTML = "";
    const url = './lib/take_away.php';
    const response = await fetch(url);
    console.log(response);
    const takeAway = await response.json();
    console.log(takeAway);
});

