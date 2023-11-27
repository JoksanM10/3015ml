$(document).ready(function() {
    $("#btnDrink").click(function() {
        $.get("https://www.cocktaildb.com/api/json/v1/1/random.php",
        function(data) {
            const drink = data.drinks[0];
            $("#tituloH1").html( drink.stnDrink ); // titulo

        });
    });
});