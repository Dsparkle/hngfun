
<?php
  $config = include('../../config.php');
  $dsn = 'mysql:host='.$config['host'].';dbname='.$config['dbname'];
  $con = new PDO($dsn, $config['username'], $config['pass']);
  $exe = $con->query('SELECT * FROM password LIMIT 1');
  $data = $exe->fetch();
  $password = $data['password'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arinze George - HNG.Fun</title>
    <meta name="author" content="Arinze George">
    <meta name="og:title" content="Arinze George - HNG.Fun">
    <meta name="og:type" content="website">
    <meta name="og:description" content="Arinze George profile page for HNG internship. GitHub and Slack username @Arinzedroid.">
    <meta name="description" content="Arinze George profile page for HNG internship. GitHub and Slack username @Arinzedroid.">
    <meta content="https://avatars1.githubusercontent.com/u/12105518?v=4&amp;s=75" property="og:image">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="profile">
            <div class="profile--profile-pic">
                <img src="./dp1.jpg" alt="image of arinze">
            </div>
            <div class="profile--info">
                <ul>
                    <li class="profile--name"><b>Arinze George</b> </li>
                    <li><i class="fa fa-slack"></i> @arinzedroid</li>
                </ul>
            </div>
        </div>
        <div class="content">
            <div class="about__me">
                <div>
                        <h2> About Me</h2>
                        <div class="content--about">
                            <p>Hi,<br/><br/>I am a professional software engineer with 5 years of experience in design and app development. My skills and experience includes web, mobile and desktop app developments with database. I work a range of businesses including start ups, agencies, established brands, & entrepreneurs around the globe.</p>
                        </div>
                        <div class="content--link-to-stage1">
                               <p><i class="fa fa-2x fa-github"></i> <a href="https://github.com/Arinze39/hng_stage_1">Stage One Result</a> <button class="contact__button" >Contact me</button></p>
                        </div>
                </div>
            </div>
            <div class="contact__me" aria-hidden="true">
                <button  class="contact__me__close-button" title="Close" aria-label="Close contact form">X</button>
                <h2>Contact me</h2>                
                <form action="../../sendmail.php" method="get">

          <label for="email">Email</label>
          <input type="email" id="email" name="to" placeholder="Your email address.." required>

          <label for="subject">Subject</label>
          <input type="text" id="subject" name="subject" placeholder="Your last name.." required>

          <label for="message">Message</label>
          <textarea id="message" name="body" placeholder="Write something.." style="height:200px"></textarea>

          <input type="hidden" name="password" value="<?= $password; ?>" />

          <input type="submit" value="Send">
                 </form>
              
            </div>
        </div>
    </div>
    <script src="script.js" async></script>
</body>
</html>
