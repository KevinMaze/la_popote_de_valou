
document.getElementById("form_day-menu").addEventListener('change', (event) => {
    let day = document.getElementById("day").value;
    let url = "../lib/fetch/get_day_menu.php" + day;
    fetch({
        url: url,
        type: "GET",
        success: (data) => {
            console.log(data);
            // document.getElementById("day-menu").innerHTML = data;
        }
    })
} )
