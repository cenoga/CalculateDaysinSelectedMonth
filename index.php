<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Calculate Number of Days in Selected Month</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <div class="card">
      <div class="card-header bg">
        <h1>Calculate Number of Days in Selected Month</h1>
      </div>
          <div class="card-body">
          <form method="post">
            <label>Select Month</label>
            <select name="m" class="form-control">
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
            <label>Input Year</label>
            <input type="number" name="y" class="form-control" required><br>
            <input type="submit" name="submit" class="btn btn-primary" value="Calculate number of Days">
          </form><br>
          <?php
          if(isset($_POST['submit'])){
            $m = $_POST['m'];
            $y = $_POST['y'];
            $number = cal_days_in_month(CAL_GREGORIAN, $m,$y);
            switch($m){
              case 1:
                echo "There were {$number} days in January ". $y;
                break;
                
              case 2:
                echo "There were {$number} days in February ". $y;
                break;
                
              case 3:
                echo "There were {$number} days in March ". $y;
                break;
                
              case 4:
                echo "There were {$number} days in April ". $y;
                break;
                
              case 5:
                echo "There were {$number} days in May ". $y;
                break;
                
              case 6:
                echo "There were {$number} days in June ". $y;
                break;
                
              case 7:
                echo "There were {$number} days in July ". $y;
                break;
                
              case 8:
                echo "There were {$number} days in August ". $y;
                break;
                
              case 9:
                echo "There were {$number} days in September ". $y;
                break;
                
              case 10:
                echo "There were {$number} days in October ". $y;
                break;
                
              case 11:
                echo "There were {$number} days in November ". $y;
                break;
                
              case 12:
                echo "There were {$number} days in December ". $y;
                break;
            }
          }
          ?>
          </div>
      </div>
    </div>
  </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>