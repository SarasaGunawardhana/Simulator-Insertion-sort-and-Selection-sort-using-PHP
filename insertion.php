


<!DOCTYPE html>
<html>
  <head>
    <title>Insertion Sort</title>
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
        if(isset($_POST['submit'])){ //getting values from main page
        #$data = array(80,40,10,5,50,70,30,20,60,100);
        #$data = array(10,20,30,40,50,60,70,80,90,100);

        //assign all values into array

        $data = array($_POST['one'],$_POST['two'],$_POST['three'],$_POST['four'],$_POST['five'],$_POST['six'],$_POST['seven'],$_POST['eight'],$_POST['nine'],$_POST['ten']);
        }

        $arrlength=count($data); //getting array length
        ?>

        <div class="col-md-10 col-md-offset-2"> <!-- print the array -->
          <p class="h1">Insertion Sort</p>
          <br>
          <br>
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
<!--part 02 -->
        <?php

        $condi=false;
        for ($j=0; $j <sizeof($data) ; $j++) { //checking weather values which user entered are already sorted values or not
          $key=$data[$j]; //assign value one by one into Key variable for comparing with next
          $i=$j-1;
        while ($i>=0 && $data[$i]>$key) {
          $condi=true;
          $i=$i-1;
          }

        }
        if ($condi==false) { ?>
          <h1>Values are already Sorted that you entered !</h1>
        <?php
        }
        else{ //if user's values are not sorted, then goes to else part for sorting
        for ($j=0; $j <sizeof($data) ; $j++) {

          $key=$data[$j];
          $i=$j-1;
// first if start
            if($i==-1){ //getting first index of array to say value of first index is already sorted
  ?>
                  <h1> First value already sorted </h1>

                <div class="col-md-10 col-md-offset-2">
                  <table class="table table-hover">
                    <tr class="success">
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
                          if ($key<=0){
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
            else if ($i==0) { //this condition for checking values of first two index are sorted or not
              $condition=false; //make a bool variable to catch the firt two values are sorted or not.
              $c=1;
              while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                $condition=true;
                ?>

                <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+$c] ?></h2>
                <?php
                $data[$i+1]=$data[$i];
                $i=$i-1;
                $c--;
                }
                if($condition==false){?>
                  <h1> First two values are sorted </h1>
                <?php
                }
                $data[$i+1]=$key;
                ?>
                <div class="col-md-10 col-md-offset-2">
                  <table class="table table-hover">
                    <tr class="success">
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
                          if ($key<=1){
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
// Second if start
            else if ($i<=1) { //this condition for checking values of first three index are sorted or not
              $condition=false;//make a bool variable to catch the firt three values are sorted or not.

              while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                $condition=true;
                ?>

                <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                <?php if ($i==1) {?>
                <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                <?php }elseif ($i==0){ ?>
                <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                <?php } ?>
                <?php
                $data[$i+1]=$data[$i];
                $i=$i-1;

                }

                if($condition==false){?>
                  <h1> First three values are sorted </h1>
                  <?php
                }
                $data[$i+1]=$key;
                ?>
                  <div class="col-md-10 col-md-offset-2">
                    <table class="table table-hover">
                      <tr class="success">
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
                            if ($key<=2){
                          ?>
                          <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                          <th><?php echo $value ;?></th>
                          <?php } ?>
                      </tr>
                    </table>
                  </div>
                  <?php
              }
//third condition
              else if ($i<=2) { //this condition for checking values of first four index are sorted or not
                $condition=false;//make a bool variable to catch the firt four values are sorted or not.

                while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                    $condition=true;
                  ?>

                  <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                  <?php if ($i==2) {?>
                  <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                  <?php }elseif ($i==1){ ?>
                  <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                  <?php } elseif ($i==0){?>
                  <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                  <?php } ?>
                  <?php
                  $data[$i+1]=$data[$i];
                  $i=$i-1;

                  }
                   if($condition==false){?>
                    <h1> First four values are sorted </h1>
                  <?php
                  }
                  $data[$i+1]=$key;
                  ?>
                    <div class="col-md-10 col-md-offset-2">
                      <table class="table table-hover">
                        <tr class="success">
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
                              if ($key<=3){
                            ?>
                            <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                            <th><?php echo $value ;?></th>
                            <?php } ?>
                        </tr>
                      </table>
                    </div>
                    <?php
                }
  //fourth condition
                else if ($i<=3) { //this condition for checking values of first five index are sorted or not
                  $condition=false;//make a bool variable to catch the firt five values are sorted or not.

                  while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                      $condition=true;
                    ?>
                    <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                    <?php if ($i==3) { ?>
                    <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                    <?php }elseif ($i==2) { ?>
                    <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                    <?php } elseif ($i==1) {?>
                    <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                    <?php } elseif ($i==0){ ?>
                    <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                    <?php } ?>
                    <?php
                    $data[$i+1]=$data[$i];
                    $i=$i-1;

                    }
                     if($condition==false){?>
                      <h1> First five values are sorted </h1>
                    <?php
                    }
                    $data[$i+1]=$key;
                    ?>
                      <div class="col-md-10 col-md-offset-2">
                        <table class="table table-hover">
                          <tr class="success">
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
                                if ($key<=4){
                              ?>
                              <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                              <th><?php echo $value ;?></th>
                              <?php } ?>
                          </tr>
                        </table>
                      </div>
                      <?php
                  }
//fifth condition
                  else if ($i<=4) { //this condition for checking values of first Six index are sorted or not
                    $condition=false;//make a bool variable to catch the firt six values are sorted or not.

                    while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                        $condition=true;
                      ?>

                      <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                      <?php if ($i==4) { ?>
                      <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+1] ?></h2>
                      <?php }elseif ($i==3) { ?>
                      <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                      <?php } elseif ($i==2) {?>
                      <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                      <?php } elseif ($i==1){ ?>
                      <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                      <?php } elseif ($i==0){?>
                      <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                      <?php } ?>
                      <?php
                      $data[$i+1]=$data[$i];
                      $i=$i-1;

                      }
                       if($condition==false){?>
                        <h1> First six values are sorted </h1>
                      <?php
                      }
                      $data[$i+1]=$key;
                      ?>
                        <div class="col-md-10 col-md-offset-2">
                          <table class="table table-hover">
                            <tr class="success">
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
                                  if ($key<=5){
                                ?>
                                <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                                <th><?php echo $value ;?></th>
                                <?php } ?>
                            </tr>
                          </table>
                        </div>
                        <?php
                    }
//sixth condition
                    else if ($i<=5) { //this condition for checking values of first Seven index are sorted or not
                      $condition=false;//make a bool variable to catch the firt Seven values are sorted or not.
                      while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                          $condition=true;
                        ?>
                        <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                        <?php if ($i==5) { ?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+1] ?></h2>
                        <?php }elseif ($i==4) { ?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                        <?php } elseif ($i==3) {?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                        <?php } elseif ($i==2){ ?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                        <?php } elseif ($i==1){?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                        <?php } elseif($i==0){?>
                        <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                        <?php } ?>
                        <?php
                        $data[$i+1]=$data[$i];
                        $i=$i-1;
                        }
                        if($condition==false){?>
                          <h1> First seven values are sorted </h1>
                        <?php
                        }
                        $data[$i+1]=$key;
                        ?>
                          <div class="col-md-10 col-md-offset-2">
                            <table class="table table-hover">
                              <tr class="success">
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
                                    if ($key<=6){
                                  ?>
                                  <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                                  <th><?php echo $value ;?></th>
                                  <?php } ?>
                              </tr>
                            </table>
                          </div>
                          <?php
                      }
//Seventh condition
                      else if ($i<=6) { //this condition for checking values of first eight index are sorted or not
                        $condition=false;//make a bool variable to catch the firt eight values are sorted or not.
                        while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                            $condition=true;
                          ?>
                          <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                          <?php if ($i==6) { ?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+1] ?></h2>
                          <?php }elseif ($i==5) { ?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } elseif ($i==4) {?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } elseif ($i==3){ ?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } elseif ($i==2){?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } elseif($i==1){?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } elseif($i==0){?>
                          <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                          <?php } ?>
                          <?php
                          $data[$i+1]=$data[$i];
                          $i=$i-1;
                          }
                          if($condition==false){?>
                            <h1> First eight values are sorted </h1>
                          <?php
                          }
                          $data[$i+1]=$key;
                          ?>
                            <div class="col-md-10 col-md-offset-2">
                              <table class="table table-hover">
                                <tr class="success">
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
                                      if ($key<=7){
                                    ?>
                                    <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                                    <th><?php echo $value ;?></th>
                                    <?php } ?>
                                </tr>
                              </table>
                            </div>
                            <?php
                        }
//eigth condition
                        else if ($i<=7) { //this condition for checking values of first Nine index are sorted or not
                          $condition=false;//make a bool variable to catch the firt nine values are sorted or not.
                          while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                            $condition=true;
                            ?>

                            <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                            <?php if ($i==7) { ?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+1] ?></h2>
                            <?php }elseif ($i==6) { ?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif ($i==5) {?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif ($i==4){ ?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif ($i==3){?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif($i==2){?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif($i==1){?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } elseif($i==0){?>
                            <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                            <?php } ?>
                            <?php
                            $data[$i+1]=$data[$i];
                            $i=$i-1;
                            }
                            if($condition==false){?>
                              <h1> First nine values are sorted </h1>
                            <?php
                            }
                            $data[$i+1]=$key;
                            ?>
                              <div class="col-md-10 col-md-offset-2">
                                <table class="table table-hover">
                                  <tr class="success">
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
                                        if ($key<=8){
                                      ?>
                                      <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
                                      <th><?php echo $value ;?></th>
                                      <?php } ?>
                                  </tr>
                                </table>
                              </div>
                              <?php
                          }
//eighth condition
                          else if ($i<=8) { //this condition for checking values of first Ten index are sorted or not
                            $condition=false;//make a bool variable to catch the Ten two values are sorted or not.
                            while ($i>=0 && $data[$i]>$key) { //Checking element of array with element before it and inserting it in proper position .
                                $condition=true;
                              ?>

                              <h2> Index <?php echo $i ?> is greater than second index <?php echo $i+1 ?> </h2>
                              <?php if ($i==8) { ?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $data[$i+1] ?></h2>
                              <?php }elseif ($i==7) { ?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif ($i==6) {?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif ($i==5){ ?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif ($i==4){?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif($i==3){?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif($i==2){?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif($i==1){?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } elseif($i==0){?>
                              <h2> So you have to exchange value of Index <?php echo $i ?> <= <?php echo $data[$i] ?> with value of Index <?php echo $i+1 ?> <= <?php echo $key ?></h2>
                              <?php } ?>
                              <?php
                              $data[$i+1]=$data[$i];
                              $i=$i-1;
                              }
                              if($condition==false){?>
                                <h1> First Ten values are sorted </h1>
                              <?php
                              }
                              $data[$i+1]=$key;
                              ?>
                                <div class="col-md-10 col-md-offset-2">
                                  <table class="table table-hover">
                                    <tr class="success">
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
                                          if ($key<=9){
                                        ?>
                                        <th><kbd><?php echo $value ;?></kbd></th><?php continue; } ?>
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
<!--part 04 -->
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
