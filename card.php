<?php
    require_once('config.php');
?>
<?php

if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION);
  header("Location: index.html"); 
}

?>


<!--
<a href="index.php?logout=true">Logout</a> -->

<!DOCTYPE html>
<html>
<head>
<meta id="viewport" content="width=device-width, initial-scale=1" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#submit').click(function(e){

          var Valid = this.form.checkValidity();
      if (Valid) {

      var Htype = $("select[name='Htype']").val();
      var ptype = $("input[name='ptype']:checked").val();
      var sspace = $("input[name='sspace']:checked").val();
      var selectedinteriorcolor = $("select[name='selectedinteriorcolor']").val();
      var selectedexteriorcolor = $("select[name='selectedexteriorcolor']").val();
      var bhk = $("input[name='bhk']:checked").val();
      var carpet = $("input[name='carpet']").val();
      

      e.preventDefault();

      console.log(Htype);
        $.ajax({
          type:'POST',
          url:'process1.php',
          data:{Htype:Htype, ptype:ptype,sspace:sspace,selectedinteriorcolor:selectedinteriorcolor,selectedexteriorcolor:selectedexteriorcolor,bhk:bhk,carpet:carpet},
          success: function(data){
            Swal.fire({
                  'title':'Successful',
                  'text':data,
                  'type':'success'
    });
          },
          error:function(data){
            Swal.fire({
              'title':'Failed',
                  'text':'Contact admin',
                  'type':'error'
                                 })
            
          }
        });
        //alert('true');
      } 
      else
      {

    
      //alert('false');
      }


      
    })
    //alert('Hello World');
    
  });

</script>

</head>

<style>

body {margin:0;font-family:Arial ;display:flex-start;
    justify-content:center;
    align-items:center;
    height:100vh;}

.topnav {
  overflow: hidden;
  width: 100%;

  background-color: #333;
}
.form{
    margin:left;
    padding-top:30px;
    margin-left: 20px;
}
.form-label{
  font-size: 20px;
  padding: 3px;
  text-transform: uppercase;
}
.form-controls{
  border-radius: 20px;
  text-align: center;
}
.topnav a {
  
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}
.topnav a:hover {
  background-color: #555;
  color: white;
}


@media screen and (max-width: 600px) {
  .topnav a:not(:first-child)  {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive  {float: none;}
  .topnav.responsive  {position: relative;}
  .topnav.responsive  {
    display: block;
    text-align: left;
  }

}
</style>
<body>

 <div class="row">
  <div class="topnav nav-container" id="myTopnav">
  <a href="index.html" class="active">Home</a>
  <a href="service.html">Service</a>
  <a href="contact.html">Contact Us</a>
  <a href="about.html">About Us</a>
  <a href="card.php?logout=true" style="float: right;">Logout</a>
  
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>




  <div class="container ">
      <form  id="form-container"method="post" class="form" >
 <div class="form-groups " style="padding: 5px;">     
<label class="form-label">Project type:</label>
     <select name="Htype" class="form-controls">
      <option  value="flat">Flat</option>
      <option  value="villa">Villa</option>
      <option  value="chawl">Chawl</option>
    </select></div>
<div class="form-groups">   
   <label class="form-label">  Types of painting:

<input type="radio"  name="ptype" value="Fresh" class="form-controls">
<label for="fresh">Fresh Painting</label>
<span class="checkmark"></span>
<input type="radio"  name="ptype" value="Re-Paint" class="form-controls">
<label for="repaint">Repainting</label>
<span class="checkmark"></span>
</label>
</div>

<div class="form-groups">
<label class="form-label">  Select space: 
      <input type="radio"  name="sspace" value="interior" class="form-controls">
<label class="form-label" for="interior">Interior</label>
<input type="radio"  name="sspace" value="exterior" class="form-controls">
<label  class="form-label" for="exterior">Exterior</label>
<span class="checkmark"></span>
</label>
</div>

<div class="form-groups">
<label class="form-label">   Color 1</label>
<select  name="selectedinteriorcolor" class="form-controls">

  <option  value="Antique White">Antique White</option>
  <option  value="Enlighten N"> Enlighten N</option>
  <option  value="Buttercup N"> Buttercup N</option>
  <option  value="Apricot N">Apricot N</option>
  <option  value="Light Biscuit">Light Biscuit</option>
  <option  value="Coral Shell">Coral Shell</option>
  <option  value="Marigold">Marigold</option>
  <option  value="Orange Vision">Orange Vision</option>
  <option  value="Palace Light">Palace Light</option>
  <option  value="Mname Cream">Mname Cream</option>
  <option  value="Cashmere N">Cashmere N</option>
  <option  value="Green Wispher">Green Wispher</option>
  <option  value="Bali Blue">Bali Blue</option>
  <option  value="Summer sky">Summer sky</option>
  <option  value="Sultry">Sultry</option>
  <option  value="Soothing Sapphire">Soothing Sapphire</option>
  <option  value="Hushed Hue">Hushed Hue</option>
  <option  value="Apricot Illusion">Apricot Illusion</option>
  <option  value="Aqua hint">Aqua hint</option>
  <option  value="Ivory">Ivory</option>
  <option  value="Mnamebuff">Mnamebuff</option>
  <option  value="Vivname green">Vivname green</option>
  <option  value="Dark Drama">Dark Drama</option>
  <option  value="Twlight zone">Twlight zone</option>
  <option  value="Indian Red">Indian Red</option>
</select>
</div>


<div class="form-groups">
<label class="form-label"> 
Color 2</label>
<select name="selectedexteriorcolor" class="form-controls">
 <option  value="Antique White">Antique White</option>
  <option  value="Enlighten N"> Enlighten N</option>
  <option  value="Buttercup N"> Buttercup N</option>
  <option  value="Apricot N">Apricot N</option>
  <option  value="Light Biscuit">Light Biscuit</option>
  <option  value="Coral Shell">Coral Shell</option>
  <option  value="Marigold">Marigold</option>
  <option  value="Orange Vision">Orange Vision</option>
  <option  value="Palace Light">Palace Light</option>
  <option  value="Mname Cream">Mname Cream</option>
  <option  value="Cashmere N">Cashmere N</option>
  <option  value="Green Wispher">Green Wispher</option>
  <option  value="Bali Blue">Bali Blue</option>
  <option  value="Summer sky">Summer sky</option>
  <option  value="Sultry">Sultry</option>
  <option  value="Soothing Sapphire">Soothing Sapphire</option>
  <option  value="Hushed Hue">Hushed Hue</option>
  <option  value="Apricot Illusion">Apricot Illusion</option>
  <option  value="Aqua hint">Aqua hint</option>
  <option  value="Ivory">Ivory</option>
  <option  value="Mnamebuff">Mnamebuff</option>
  <option  value="Vivname green">Vivname green</option>
  <option  value="Dark Drama">Dark Drama</option>
  <option  value="Twlight zone">Twlight zone</option>
  <option  value="Indian Red">Indian Red</option>
</select>
</div>

<div class="form-groups">
 <label class="form-label" >
Size of home:
      <input type="radio" name="bhk" value=" 1 BHK" class="form-controls">
<label for="bhk">1 BHK</label>
<input type="radio" name="bhk" value="2 BHK" class="form-controls">
<label for="bhk">2 BHK </label>
<input type="radio" name="bhk" value="3 BHK" class="form-controls"> 
<label for="bhk">3 BHK</label>
<input type="radio" name="bhk" value="4 BHK" class="form-controls">
<label for="bhk">4 BHK </label>
<input type="radio" name="bhk" value="5 BHK" class="form-controls">
<label for="bhk">5 BHK </label>
<span class="checkmark"></span>
</label>
</div>

<div class="form-groups">

<label class="form-label">
Carpet:</label>
      <input type="text" name="carpet" id="carpet" placeholder="Enter Value:" class="form-controls">
      <span>sq.ft</span>
     </div>
     
     <div>
      <input type="submit" name="submit" value="Submit" id ="submit" class="btn">
</div>
<a href="color.html" target="_blank">Click here to View Colors </a>
</form>
</div>
</div> 



</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</html>