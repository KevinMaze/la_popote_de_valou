// Récupérer en fetch les données carte à emporter
const getTakeAway = async() => {
    const req = await fetch('./lib/fetch/take_away.php');
    const json = await req.json();
    const takeAway = JSON.parse(json);
    console.log(takeAway);
}

getTakeAway();