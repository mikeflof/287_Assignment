<?php
    session_start();
    include ("header.php");
?>



 <script>
        function checkInput() {
            var a=document.forms["ContactUs"]["Order Number"].value;
            var nospecial=/[*|\":<>[\]{}`\\()';@&$]/;
            if(a.match(nospecial)){
                return false;
            }
    }
    </script>

    <body>
        <link rel="stylesheet" type="text/css" href="css/contact_us.css">
    </br>

    <div>
    <h3>Contact Information</h3>
    </br>
    <form target="_blank" action="https://calabrian-hydromete.000webhostapp.com/contact_form.php" method="post" >
        <fieldset>
        
        <p>
            <label>UserName  </label>
            <input type="text" name="UserName">
           
        </p>
        <p>
            <label>ItemName  </label>
            <input type="text" name="ItemName">
            
        </p>
        <p>
            <label>Order Number  </label> 
            <input type="text" name="Order Number" id="OrderNumber" placeholder="example: #12345AB" pattern="^[#A-Z0-9]{8}" required maxlength="8" onsubmit="return checkInput();">
            <div id="error-nwl"></div>
              
            
        </p>
        <p>
            <span>
                <label>Questions/Inquiries  </label>
                <textarea name="questions?"></textarea> 
            </span>
        </p>
        </fieldset>
    </div>
    </br>
    <button type="submit" value="submit" class="btn btn-secondary btn-lg btn-block">Submit</button>
    <button type="reset" value="reset" class="btn btn-secondary btn-lg btn-block">Reset</button>

</br>
</br>

 
</form>

<?php
/*if(!empty($_POST["UserName"]) {

$found = false;
$UserName = $_POST["UserName"];

$file = fopen("Sign_Up_Information.txt", "r");

if($file)
{
  echo "Hi your order details are below: ";
  while(($line = fgets($file)))
  {
    echo "hi1--- delete after";
    $array = explode(":", $line);

    if($array[0] == $UserName) {
      
        $found=true;
        fclose($file);
      }

    

  }
}
}
if (!empty($_POST["UserName"]) {
    $found=true;
        echo "<script> location.href='new_url'; </script>";
        exit;
}*/
?>

</body>

<!--collapsible footer for info-->
<div class="bottom_row" >
    <button class="collapsible" id="info_button">Info</button>
    <div class="content">
        <br>
        <h3>Welcome to Concordia Supermarket! </h3>
        <p>Click on any aisle to be brought to a page of products. Add these products to your cart and get an estimation on how much they'll cost!</p>
    
    </div>
</div>

<script>
    var bt = document.getElementById("info_button");

    bt.addEventListener("click", function() {
        this.classList.toggle("active");

        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } 
        else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
</script>