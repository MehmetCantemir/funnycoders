
<?php 
$servername = "92.205.12.157";
$database = "funnycoders";
$username = "talha";
$password = "Luna1park.";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . 
mysqli_connect_error());

}


$mail = $_GET['email'];
$ad = $_GET['name'];
$mesaj = $_GET['message'];


$sql = "INSERT INTO mesajlar (mail,ad,mesaj) VALUES ('$mail','$ad','$mesaj')";
$sorgu=mysqli_query($conn,$sql);

mysqli_close($conn);

?>
<!DOCTYPE html>
<html lang="en-US">
      

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Haber</title>
    <link rel="stylesheet" href="../css/components.css">
    <link rel="stylesheet" href="../css/icons.css">
    <link rel="stylesheet" href="../css/responsee.css">
    <link rel="stylesheet" href="../owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="../owl-carousel/owl.theme.css">
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../css/template-style.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>    
    <script type="text/javascript" src="../js/validation.js"></script> 
  </head>  
  <style>
      #kontrol5{
          float:left;
          font-size: auto;
          cursor:pointer;
      }
      #kontrol5:hover{
          color:red;
      }
      #denememessagebox{
          float:right;
          font-size: auto;
           cursor:pointer;
      } 
      #denememessagebox:hover{
          color:red;
      }
      #kontrol6{
          float:left;
          font-size: auto;
          cursor:pointer;
      }
      #kontrol6:hover{
          color:red;
      }
      #kontrol2{
          float:right;
          font-size: auto;
          cursor:pointer;
      }
      #kontrol2:hover{
          color:red;
      }
      #denememessagebox2
      {
          display:none;
          
      }
      #denememessagebox3
      {
          display:none;
      }
      #denememessagebox4
      {
          display:none;
      }
      #kontrol3{
          font-size: auto;
          cursor:pointer;
      }
      #kontrol3:hover{
          color:red;
      }


  </style>
  
  <script>
    $(function(){
        $("#denememessagebox").click(function(){
            $("#denememessagebox2").show("slow");
            $("#denememessagebox").hide("slow");
            $("#kontrol5").hide("slow");
        });
        
        $("#kontrol2").click(function(){
            $("#denememessagebox3").show("slow");
            $("#denememessagebox4").show("slow");
            $("#kontrol2").hide("slow");
            $("#kontrol6").hide("slow");
            
        });
        
        $("#kontrol3").click(function(){
            window.location.href="http://www.funnycoders.com";
        });
        
        $("#kontrol5").click(function(){
            window.location.href="http://www.funnycoders.com";
        });
        
        $("#kontrol6").click(function(){
            window.location.href="http://www.funnycoders.com";
        });
    });
  </script>

  
  <body class="size-1140">
       <!-- MAIN -->
    <main role="main">
      <!-- Content -->
      <article>
        <header class="about_section background-dark text-center">
        <span id="kontrol5">Mail Adresim Yanlış</span><span class="text-white margin-bottom-1 text-size-auto text-thin ">Mail Adresiniz : <?php echo $mail ?></span><span id="denememessagebox">Mail Adresim Doğru</span>
        </header>
        <header class="about_section background-dark text-center" id="denememessagebox2">
            <span id="kontrol6">Adım Yanlış</span><span class="text-white margin-bottom-1 text-size-auto text-thin">Adınız : <?php echo $ad ?>  </span><span id="kontrol2">Adım Doğru</span>
        </header>
        <header class="about_section background-dark text-center" id="denememessagebox3">
            <span class="text-white margin-bottom-1 text-size-auto text-thin">Mesajınız : <?php echo $mesaj ?></span>
        </header>
        <header class="about_section background-dark text-center" id="denememessagebox4">
            <span id="kontrol3">TAMAMLA</span>
        </header>
        
      </article>
    </main>
  </body>
  </html>
<?php 


//header("location:../index.html");
//header("Refresh: 3; url=http://www.funnycoders.com");

?>
