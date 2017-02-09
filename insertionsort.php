


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
        function insertionSort($array,$length)
        {
          $key=0;
          for ($k=0; $k <$length ; $k++) {
            $key=$array[$k];
            $i=$k-1;
            while (($i>0)&&($array[$i]>$key))
            {
              $array[$i+1]=$array[$i];
              $i=$i-1;
            }
            $array[$i+1]=$key;
          }

        }

        ?>

        <?php
        $data="";
        if(isset($_POST['submit'])){
        #$data = array(80,40,10,5,50,70,30,20,60,100);
        #$data = array(10,20,30,40,50,60,70,80,90,100);
        $data = array($_POST['one'],$_POST['two'],$_POST['three'],$_POST['four'],$_POST['five'],$_POST['six'],$_POST['seven'],$_POST['eight'],$_POST['nine'],$_POST['ten']);
        }
        $arrlength=count($data);
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
            ?>
            <th><?php echo $value ;?></th>
            <?php } ?>
          </tr>
        </table>
      </div>

      <?php
        insertionSort($data,$arrlength);
        ?>
<!--part 02 -->
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
