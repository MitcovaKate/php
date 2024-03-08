<style>
 body{background: #333;color:white}
 #rate-input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#rate-input::placeholder {
    color: #999;
    font-style: italic;
}

#rate-input:invalid {
    border-color: red;
}
 </style> 

<?php
$agg_rate_value = 4.5;
$agg_rate_count = 10;

if(isset($_GET['rate'])){
//$_GET['rate']->string
    if(is_numeric($_GET['rate'])){
if (preg_match('/[0-4]\.\d/',$_GET['rate'])){
       $rate =(float)$_GET['rate'];   //make sure this is float
       $total_rate=$agg_rate_count * $agg_rate_value;
       $total_rate+=$rate;
       $current_rate= $total_rate / ($agg_rate_count + 1);
       $formatted_current_rate = number_format($current_rate, 1, '.', ''); // Округляем до 1 знака после запятой
       $formatted_agg_rate_value = number_format($agg_rate_value, 1, '.', '');
       $formatted_agg_rate_count = number_format($agg_rate_count, 1, '.', '');
       print("You've rated this app with {$formatted_current_rate}");
 } else {
    print("Only numbers between 0.0 and 5.0 are allowed!");
}
} else {
    print("Only numbers between 0.0 and 5.0 are allowed!");
}
} else {
    print("This app was rated at $formatted_agg_rate_value by $formatted_agg_rate_count users");
}
?>
<form action="/index.php" method="GET">
    <input required type="text" name="rate" id="rate-input"/>
    <button>RATE</button>
</form>
<script>
    const rateInput = document.getElementById("rate-input");
rateInput.placeholder = "0.0 ... 5.0";

rateInput.addEventListener("input", function() {
    const rateValue = rateInput.value;
    const regex = /[0-4]\.\d/;

    if (!regex.test(rateValue)||rateInput.value.length == null) {
        rateInput.setCustomValidity("Неправильный формат 0.0 ... 5.0.");
    } else {
        rateInput.setCustomValidity("");
    }
});
</script>
