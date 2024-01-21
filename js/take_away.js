// Récupérer en fetch les données carte à emporter
const getTakeAway = async() => {
    document.getElementsByClassName('take_away').innerHTML = "";
    document.getElementById('button_take_away').addEventListener('click', async() => {
        const req = await fetch('./lib/fetch/take_away.php');
        const json = await req.json();
        console.log(json);
    })
}