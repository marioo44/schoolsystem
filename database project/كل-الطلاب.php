

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>كل الطلاب</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="كل-الطلاب.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.9.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/education-school-logo-design-graduation-cap-and-room-icon-design-free-vector.jpg"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="كل الطلاب">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-7fe8"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1" data-image-width="980" data-image-height="980">
          <img src="images/education-school-logo-design-graduation-cap-and-room-icon-design-free-vector.jpg" class="u-logo-image u-logo-image-1">
        </a>
          <?php include 'nav.php'?>
          <?php
          if (isset($_GET['do'])){
              if($_GET['do'] ==='delete'){
                  $id=$_GET['id'];
                  $stmt=$conn->prepare("DELETE FROM student WHERE id=$id");
                  $stmt->execute();
                  echo "<div style='color: green;'>deleted done successfully</div>";
              }
          }
          ?>
      </div></header>
    <section class="u-align-center u-clearfix u-section-1" id="sec-b751">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-expanded-width u-table u-table-responsive u-table-1">
          <table class="u-table-entity u-table-entity-1">
            <colgroup>
              <col width="25%">
              <col width="25%">
              <col width="25.000000000000007%">
              <col width="24.900000000000006%">
              <col width="24.900000000000006%">
            </colgroup>
            <tbody class="u-table-alt-palette-1-light-3 u-table-body">
              <tr style="height: 25px;">
                <td class="u-table-cell">Student Name</td>
                <td class="u-table-cell">Phone</td>
                <td class="u-table-cell">class</td>
                <td class="u-table-cell">تعديل</td>
                <td class="u-table-cell">حذف</td>
              </tr>
              <?php
              $stmt=$conn->prepare('SELECT student.id as id ,phone, student.name as sname ,class.name as class FROM student join class on student.class_id = class.id');
              $stmt->execute();
              $rows=$stmt->fetchAll();
              foreach ($rows as $row){
              ?>
                  <tr style="height: 25px;">

                      <td class="u-border-2 u-border-grey-75 u-table-cell"><?=$row['sname']?></td>
                      <td class="u-border-2 u-border-grey-75 u-table-cell"><?=$row['phone']?></td>
                      <td class="u-border-2 u-border-grey-75 u-table-cell"><?=$row['class']?></td>
                      <td class="u-border-2 u-border-grey-75 u-table-cell">
                          <a href="<?php echo 'edit.php'.'?do=Edit&&id='.$row['id']?>" class="u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-1-base u-radius-50 u-btn-1">تعديل</a>
                      </td>
                      <td class="u-border-2 u-border-grey-75 u-table-cell ">
                          <a href="<?php echo $_SERVER['PHP_SELF'].'?do=delete&&id='.$row['id']?>" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-1-light-1 u-palette-2-base u-radius-50 u-btn-1">حذف</a>
                      </td>
                  </tr>
              <?php }
              ?>

            </tbody>
          </table>
        </div>

      </div>
    </section>
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-6e51"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Sample text. Click to select the Text Element.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/templates" target="_blank">
        <span>Free Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>