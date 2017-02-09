


<!DOCTYPE html>
<html>
  <head>
    <title>Selection Sort</title>
     <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
     <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">
     <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
     <link rel="stylesheet" href="css/assets.css" type="text/css" media="screen">

     <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body >


    <section  class="col-md-10">
      <div class="main-container">
        <?php
        if(isset($_POST['submit'])){
        #$data = array(80,40,10,5,50,70,30,20,60,100);
        #$data = array(10,20,30,40,50,60,70,80,90,100);
        $data = array($_POST['one'],$_POST['two'],$_POST['three'],$_POST['four'],$_POST['five'],$_POST['six'],$_POST['seven'],$_POST['eight'],$_POST['nine'],$_POST['ten']);
        }
        $arrlength=count($data);
        ?>
        <div class="col-md-10 col-md-offset-2">

        <h1>Selection Algorithm</h1>

        <p class="h4">First, We should learn some programming aspects of selection sort</p>
        <p class="h5">
          Step 1 = Set Min to Location 0 <br>
          Step 2 = Search the Lowest element in the list<br>
          Step 3 = Swap with value at location MIN<br>
          Step 4 = Increment MIN to point to next element<br>
          Step 5 = Repeat until list is Sorted<br>
        </p>
      </div>
        <div class="col-md-10 col-md-offset-2">  <!--print a Array of user's entered values -->
          <table class="table table-hover">
            <tr class="danger">
              <th>Index</th>
              <?php
                foreach ($data as $key => $value) {
              ?>
              <th><?php echo $key ;?></th>
              <?php } ?>
          </tr>
          <tr>
            <th>Value</th>
            <?php
              foreach ($data as $key => $value) {
            ?>
            <th><?php echo $value ;?></th>
            <?php } ?>
          </tr>
        </table>
      </div>
<!--part 02 -->
        <?php

        $condi=false;
        for ($j=0; $j <sizeof($data) ; $j++) {//Checking weather values of User's entered are already Sorted or not
          $key=$data[$j];
          $i=$j-1;
        while ($i>=0 && $data[$i]>$key) {
          $condi=true;
          $i=$i-1;
          }

        }
        if ($condi==false) { ?> <!-- if condition is not true.. it means values are already sorted -->
          <h1>Values are alredy Sorted that you entered !</h1>
        <?php
        }
        else{ // if condition is true , it means values are not sorted.. then goes to else part
          $indexMin=0;

          for ($i=0; $i < sizeof($data)-1 ; $i++) { // looping until end of array
            $indexMin=$i;

            for ($j=$i+1; $j < sizeof($data) ; $j++) { // this loop use to find out minimum value
              if ($data[$j]<$data[$indexMin]) { //conditon compare a one value with other values and find minimum value
                $indexMin=$j; // if found a minimum value than other values, its index assign to another varible
              }
            }
            ?>


            <p class="h4">Searching Lowest value to exchange ...</p>


            <div class="col-md-10 col-md-offset-2"><!--print a Array of user's entered values -->
              <table class="table table-hover">
                <tr class="danger">
                  <th>Index</th>
                  <?php
                    foreach ($data as $key => $value) {
                  ?>
                  <th><?php echo $key ;?></th>
                  <?php } ?>
              </tr>
              <tr>
                <th>Value</th>
                <?php
                  foreach ($data as $key => $value) {
                    if ($key==$indexMin) {
                      ?>
                      <th><kbd><?php echo $value ;?></kbd></th><?php continue;
                    }
                    elseif ($key==$i) {
                      ?>
                      <th><kbd><?php echo $value ;?></kbd></th><?php continue;
                    }
                      ?>
                <th><?php echo $value ;?></th>
                <?php } ?>
              </tr>
            </table>
          </div>
            <?php
            if ($indexMin != $i) { //index value must not equal to comparing value, if not loop compare last value as minimum value
              ?>
              <h2>Lowest Value Found. Now Exchange value with <?php echo $data[$i] ?></h2>
              <h3>value Swapped <?php echo $data[$i] ?> <=> <?php echo $data[$indexMin] ?></h3>
              <?php
              $temp = $data[$indexMin]; // assign minimum value into temporary variable
              $data[$indexMin] = $data[$i]; // replace comparing value into place of minimum value
              $data[$i] = $temp;//now assign the value of temporary variable into place of comparing va;ue
              ?>

              <div class="col-md-10 col-md-offset-2">
                <table class="table table-hover">
                  <tr class="danger">
                    <th>Index</th>
                    <?php
                      foreach ($data as $key => $value) {
                    ?>
                    <th><?php echo $key ;?></th>
                    <?php } ?>
                </tr>
                <tr>
                  <th>Value</th>
                  <?php
                    foreach ($data as $key => $value) {
                      if ($key==$i) {
                        ?>
                        <th><kbd><?php echo $value ;?></kbd></th><?php continue;
                      } ?>
                  <th><?php echo $value ;?></th>
                  <?php } ?>
                </tr>
              </table>
            </div>

              <?php
            }

          }
        }
        ?>

        <div class="col-md-10 col-md-offset-2">
        <h1>Sorted Array</h1>
        </div>
        <div class="col-md-10 col-md-offset-2">
          <table class="table table-hover">
            <tr class="danger">
              <th>Index</th>
              <?php
              foreach ($data as $key => $value) {
              ?>

              <th><?php echo $key ;?></th>
              <?php } ?>
            </tr>
              <tr>
              <th>Value</th>
              <?php
              foreach ($data as $key => $value) {
              ?>

              <th><?php echo $value ;?></th>
             <?php } ?>
           </tr>
         </table>
        </div>
          </div>

    </section>

    <div class="col-md-10 col-md-offset-5">
      <br>
      <br>
      <br>
    <button type="button" class="btn btn-danger" style="border-radius:10px;" onclick="window.location='RunMe.php'">Back to Main</button>
    </div>

    </div>


  </body>

</html>
