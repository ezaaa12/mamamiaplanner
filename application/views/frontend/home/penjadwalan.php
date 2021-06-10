<!DOCTYPE html>
<html>
    <head>
        
        <title>Mamamia Planner</title>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/materialize/css/penjadwalan.css" media="screen,projection"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    </head>
  <body>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <!-- sliders -->
    <div class="slider">
        <ul class="slides">
        <li>
            <img src="<?php echo base_url()?>assets/img/slider/2.png"> <!-- random image -->
            <div class="caption center-align">
            <h3 class="white-text judul ">Penjadwalan</h3>
            </div>
        </li>
      </div>
   <!-- end -->

   <!-- card -->
   <div class="container jadwal">
     <div class="row center">
       <div class="col m12 s12">
        <h5>Mamamia Planner</h5>
        <h4>Jadwal Masakku</h4>
       </div>
     </div>
   </div>
   <div class="container jadwal">
     <div class="row center">
       <div class="col m3 s12">
         <input type="text" class="datepicker">
         <label for="first_name">Input text</label>
       </div>
     </div>
   </div>
   <div class="container">
    <div class="row center">
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row center">
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
        <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
          <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">add_circle_outline</i>
          </span></a>
        </div>
      </div>
      <div class="col m3 s12">
        <div class="card-panel white">
         <a href=""><span class="grey-text text-lighten-2"> <i class="material-icons center large">navigate_next</i>
          </span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- end -->
  <!--JavaScript at end of body for optimized loading-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/materialize/js/materialize.min.js"></script>
  <script type="text/javascript" src="<?php echo base_url()?>assets/materialize/js/script.js"></script>

  <script> 
    $('.datepicker').pickadate({
      selectMonths: true, // Creates a dropdown to control month
      selectYears: 15, // Creates a dropdown of 15 years to control year,
      today: 'Today',
      clear: 'Clear',
      close: 'Ok',
      closeOnSelect: false // Close upon selecting a date,
      container: undefined // ex. 'body' will append picker to body
    });
  </script>
  </body>
</html>
