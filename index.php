<html>

<head>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <title>Island Media Test</title>
  <style>
    ul {
      width: 40%;
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #000080;
    }

    li {
      display:table-cell;
      border-right: 1px solid #bbb;
      border-left: 1px solid #bbb;
    }

    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }

    li a:hover:not(.active) {
      background-color: #111;
    }

    .active {
      background-color: #04AA6D;
    }
  </style>
</head>

<body>
  <center>
  <h1>Island Media Developer Test Febri Nugroho</h1>
  <?php
    //define timezone
    date_default_timezone_set("Asia/Bangkok");

    //create array day
    $day_arr = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

    //get now date
    $now = date("Y-m-d");
    $timestamp = strtotime($now);

    //get now day
    $day = date('l', $timestamp);

    //display now day
    echo 'Today is <label style="color:green"><b>'.$day.'</b></label><br><br>';
    echo '<ul>';

    //loop day data to display on page
    $count = 0;
    for ($i = 0; $i < count($day_arr); $i++) {
        //check if day is today, give style with different color
        if($day_arr[$i] == $day){
            echo '<li><a class="active" href="#'.$count++.'" onclick="win(this)">'.$day_arr[$i].'</a></li>';   
        } else {  
            echo '<li><a href="#'.$count++.'" onclick="win(this)">'.$day_arr[$i].'</a></li>';   
        }
    }
    echo "</ul><br>";
    //display selected day
    echo 'Selected day is <label style="color:blue"><b id="selected_day">'.$day.'</b></label>';
  ?>
  </center>
</body>

<script type="text/javascript">
  //create function to get selected day
  function win(anchor) {
      var html_val = anchor.innerHTML;  
      document.getElementById("selected_day").innerHTML = html_val;
  }
</script>

</html>