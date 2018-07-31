<?php require_once('includes/config.php');?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
   <head>

      <!-- website meta tags -->
      <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1" />
      <title>Username Existence</title>
      <meta name="description" content="search over <?php echo $website['count2'];?>+ popular websites to check if a username exists." />

      <!-- website stylesheets -->
      <link href="<?php echo $website['url'];?>assets/css/styles.css?v=<?php echo $website['version'];?>" rel="stylesheet" type="text/css" />
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
   </head>
   <body>

      <!-- website main html -->
      <div id="main">

         <div id="se-form-panel">
            <div class="row">
               <div class="col12">
                  <h1>check the social existence of a usernames on various platform.</h1>
                  <p>search over <i><?php echo $website['count2'];?>+</i> popular sites to check if a username exists.</p>
                  <p><i class="fas fa-exclamation-triangle"></i> Results may not be accurate</p>
               </div>
               <div class="col8">
                  <input type="text" placeholder="username, product or brand" />
               </div>
               <div class="col4">
                  <button>Check</button>
               </div>
            </div>
         </div>

         <div id="se-processing-panel">
            <div class="row">
               <div class="col12">
                  <h1>Checking.... <i>0%</i></h1>
                  <p>Checking existence of <i>username</i> on <i>example.com</i></p>
               </div>
            </div>
         </div>

         <div id="se-results-panel">
            <div class="row">
               <div class="col12">
                  <h2>Existence for <i>username</i></h2>
                  <p><i>Username</i> exists on <i>0%</i> of the websites</p>
               </div>
               <div id="se-results-parent" class="col12 row">
               </div>
               <div class="col6">
                  <button>check another username</button>
               </div>
               <div class="col3">
                  <button>facebook</button>
               </div>
               <div class="col3">
                  <button>twitter</button>
               </div>
            </div>
         </div>

      </div>

      <div id="footer" style="display: flex; justify-content: space-around">
        <!-- Left -->
        <div>
          <p  style="text-align:center">Made with <i class="fas fa-heart"></i> in India</p>
        </div>
        <!-- Middle -->
        <div>
          <!-- blank middle portion -->
        </div>
        <!-- Right -->
        <div>
          <p style="text-align:center">
            <b>
              Proudly <a href="https://gitlab.com/daksh7011/username-checker">Open-Source <i class="fab fa-gitlab"></i></a>
            </b>
          </p>
        </div>
      </div>
      <!-- website javascript -->
      <script id="se-data" type="application/json"><?php echo json_encode(array($website['statuses'], $website['count']));?></script>
      <script src="<?php echo $website['url'];?>assets/js/javascript.js?v=<?php echo $website['version'];?>" type="text/javascript"></script>

   </body>
</html>
