<?php
  $m1=NULL;
  $m2=NULL;
  $m3=NULL;
  $sub1=NULL;
  $sub2=NULL;
  $sub3=NULL;
  $sub4=NULL;
  $sub5=NULL;
  $sub6=NULL;
  $r1=NULL;
  $r2=NULL;
  $r3=NULL;
  $r4=NULL;
  $r6=NULL;
  $r5=NULL;
  $r7=NULL;
if (isset($_POST['submit'])) {
  $m1 = $_POST['m1'];
  $m2 = $_POST['m2'];
  $m3 = $_POST['m3'];
  if(!(($m1 >=35 && $m1 <=100) || ($m2 >=35 && $m2 <=100) || ($m3 >=35 && $m3 <=100)))
  {
    echo '<script>alert("SSLC Marks are not Valid");</script>';
    header("Refresh:0");
  }
  $sub1 = $_POST['sub1'];
  $sub2 = $_POST['sub2'];
  $sub3 = $_POST['sub3'];
  $sub4 = $_POST['sub4'];
  $sub5 = $_POST['sub5'];
  $sub6 = $_POST['sub6'];
  if(!(($sub1 >=5 && $sub1 <=90) || ($sub2 >=5 && $sub2 <=90) || ($sub3 >=5 && $sub3 <=90) || ($sub5 >=35 && $sub4 <=70) || ($sub5 >=35 && $sub5 <=70) || ($sub6 >=35 && $sub6 <=70)))
  {
    echo '<script>alert("HSC Marks are not Valid");</script>';
    header("Refresh:0");
  }
  $avg=($m1+$m2+$m3)/6;
  $r1=$avg+(30)+((20/90)*$sub1);
  $r2=$avg+(30)+((20/90)*$sub2);
  $r3=$avg+(30)+((20/90)*$sub3);
  $r4=$avg+(30)+((20/70)*$sub4);
  $r5=$avg+(30)+((20/70)*$sub5);
  $r6=$avg+(30)+((20/70)*$sub6);
  $tot=$r1+$r2+$r3+$r4+$r5+$r6;
}

?>

<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Sairam - Calculate your Future</title>
  <link rel="stylesheet" href="./style.css">
  <link rel="stylesheet" href="./table.css">
  <script>
    function myFunction() {
      var x = document.getElementById("result");
      if (x.style.display == "none") {
        x.style.display = "block";
      } else {
        x.style.display = "none";
      }
    }
  </script>

</head>

<body>
<div class="logo"><img src="./sairamlogo1.png"></div>
<div class="stic"><h1><span>& STIC</span></h1></div>
<button class="result-button" onclick="myFunction()">View Results</button>
    <div id="result" style="display:none;">
      <section id="result">
        <!--for demo wrap-->
        <h1>HSC Results are Here</h1>
        <div class="tbl-header">
          <table cellpadding="0" cellspacing="0" border="0">
            <thead>
              <tr>
                <th>Subject</th>
                <th>Theoretical Marks</th>
                <th>Practical Marks</th>
                <th>Final Marks(Out of 100)</th>
              </tr>
            </thead>
          </table>
        </div>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td>Primary Language(English)</td>
                <td><?php echo ("$sub1"); ?></td>
                <td>30</td>
                <td><?php echo ("$r1"); ?></td>
              </tr>
              <tr>
                <td>Secondary Language(Tamil/French/Hindi)</td>
                <td><?php echo ("$sub2"); ?></td>
                <td>30</td>
                <td><?php echo ("$r2"); ?></td>
              </tr>
              <tr>
                <td>Mathematics</td>
                <td><?php echo ("$sub3"); ?></td>
                <td>30</td>
                <td><?php echo ("$r3"); ?></td>
              </tr>
              <tr>
                <td>Physics</td>
                <td><?php echo ("$sub4"); ?></td>
                <td>30</td>
                <td><?php echo ("$r4"); ?></td>
              </tr>
              <tr>
                <td>Chemistry</td>
                <td><?php echo ("$sub5"); ?></td>
                <td>30</td>
                <td><?php echo ("$r5"); ?></td>
              </tr>
              <tr>
                <td>Computer Science/Biology</td>
                <td><?php echo ("$sub6"); ?></td>
                <td>30</td>
                <td><?php echo ("$r6"); ?></td>
              </tr>
            </tbody>
          </table>
          <h1>Total Result is <?php echo("$tot");?></h1>

        </div>
      </section>
      <!-- follow me template -->
      <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a target="_blank" href="https://www.linkedin.com/in/jayachandran-ramadoss">Jayachandran Ramadoss</a>
      </div>

    </div>

  <!-- partial:index.partial.html -->
  <div class="container">

    <header class="header">
      <h1 id="title" class="text-center">Calculate your HSC Grade</h1>
      <p id="description" class="description text-center"></p>
    </header>
    <form id="3d-form-course" method="POST" action="index.php">
      <div class="form-group">
        <label id="name-label" for="m1">Enter your 3 Best Mark in 10th (SSLC)</label>
        <input type="text" name="m1" id="m1" class="form-control" placeholder="Enter your First Highest Mark" required />
      </div>
      <div class="form-group">
        <input type="text" name="m2" id="m2" class="form-control" placeholder="Enter your Second Highest Mark" required />
      </div>
      <div class="form-group">
        <input type="text" name="m3" id="m3" class="form-control" placeholder="Enter your Third Highest Mark" required />
      </div>
      <label>Enter your Marks in 11th Without Adding the Practical Mark</label>
      <div class="form-group">
        <input type="text" name="sub1" id="sub1" class="form-control" placeholder="Primary Language(English)" required />
      </div>
      <div class="form-group">
        <input type="text" name="sub2" id="sub2" class="form-control" placeholder="Secondary Language(Tamil/French/Hindi)" required />
      </div>
      <div class="form-group">
        <input type="text" name="sub3" id="sub3" class="form-control" placeholder="Mathematics" required />
      </div>
      <div class="form-group">
        <input type="text" name="sub4" id="sub4" class="form-control" placeholder="Physics" required />
      </div>
      <div class="form-group">
        <input type="text" name="sub5" id="sub5" class="form-control" placeholder="Chemistry" required />
      </div>
      <div class="form-group">
        <input type="text" name="sub6" id="sub6" class="form-control" placeholder="Computer Science/Biology" required />
      </div>
      <div class="form-group">
        <button type="submit" id="submit" name="submit" class="submit-button">
          Submit
        </button>
      </div>
    </form>

  </div>
  <h1> <div class="made-with-love">
        Made with
        <i>♥</i> by
        <a target="_blank" href="https://www.linkedin.com/in/jayachandran-ramadoss">Jayachandran Ramadoss</a>
      </div></h1>
  <!-- partial -->
</body>

</html>