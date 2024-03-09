<?php

$color = $_GET['color'] ?? null;

switch ($color) {
  case 'red':
    $activeColor = 'red';
    break;
  case 'yellow':
    $activeColor = 'yellow';
    break;
  case 'green':
    $activeColor = 'green';
    break;
  default:
    $activeColor = null; 
  }
?>


  <title>Светофор</title>
  <style>
    .traffic-light {
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.light {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 2px solid black;
}

.light.red {
  background-color: red;
}

.light.yellow {
  background-color: yellow;
}

.light.green {
  background-color:green;
}

.light.active {
  opacity: .2;
}
  </style>
</head>
<body>
  <h1>Светофор</h1>
  <div class="traffic-light">
    <a href="/index.php?color=red" class="light red 
    <?php print ($activeColor === 'red') ? 'active' : ''; ?>"></a>

    <a href="/index.php?color=yellow" class="light yellow 
    <?php print ($activeColor === 'yellow') ? 'active' : ''; ?>"></a>

    <a href="/index.php?color=green" class="light green 
    <?php print ($activeColor === 'green') ? 'active' : ''; ?>"></a>
  </div>
