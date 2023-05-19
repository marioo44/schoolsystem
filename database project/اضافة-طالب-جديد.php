<?php
include 'connect.php';

if (isset($_POST['add'])){
    $name = $_POST['studentName'];
    $phone = $_POST['phone'];
    $class = $_POST['class'];
    $stmt=$conn->prepare("INSERT INTO student (name,phone,class_id) VALUES ('$name', '$phone', '$class')");
    $stmt->execute();
    echo "student added successfully";
}else{
    echo "Error adding";
}

?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="ADD Student">
    <meta name="description" content="">
    <title>اضافة طالب جديد</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="اضافة-طالب-جديد.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>


    

    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="اضافة طالب جديد">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-7fe8"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="980" data-image-height="980">
          <img src="images/education-school-logo-design-graduation-cap-and-room-icon-design-free-vector.jpg" class="u-logo-image u-logo-image-1">
        </a>
<?php include 'nav.php'?>
      </div></header>
    <section class="u-align-center u-clearfix u-grey-5 u-section-1" >
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <h1 class="u-text u-text-default u-text-1">ADD Student</h1>
        <div class="u-form u-form-1">
          <form method="post" type="form" action="<?=$_SERVER['PHP_SELF']?>" class="u-clearfix u-form-spacing-20 u-form-vertical " style="padding: 10px" >
            <div class="u-form-group u-form-name u-label-none">
              <label for="name-3b9a" class="u-label">Name</label>
              <input type="text" placeholder="Enter your Name" id="studentName" name="studentName" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle ">
            </div>
              <div class="u-form-group u-form-name u-label-none">
                  <label for="name-3b9a" class="u-label">phone</label>
                  <input type="tel" placeholder="Enter your phone" id="phone" name="phone" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle ">
              </div>
            <div class="u-form-group u-form-select u-label-none u-form-group-3">
              <label for="select-55aa" class="u-label">Select Class</label>
              <div class="u-form-select-wrapper">
                <select id="class" name="class" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle ">
                  <?php
                  $stmt=$conn->prepare("SELECT * FROM class");
                  $stmt->execute();
                  $select=$stmt->fetchAll();
                  foreach ($select as $row){
                      ?>
                    <option value="<?=$row['id']?>" data-calc="1"><?php echo $row['name']?></option>

                  <?php } ?>
                </select>
              </div>
            </div>
            <div class="u-align-center u-form-group ">
              <input type="submit" name="add" value="add" class=" u-border-2 u-border-black u-btn u-btn-rectangle u-button-style u-button-submit u-btn-1">
            </div>

          </form>
        </div>
      </div>
    </section>
    
    

  
</body></html>