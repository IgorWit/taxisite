$( document ).ready(function() {

    console.log( "ready!" );


    // $('#timepicker1').timepicker();
    $('#timepicker1').timepicker({
         minuteStep: 5,
         // maxHours: 24,
         showMeridian: false,
     });

	$('#choosedatedrop').dateDropper();


    //click about 
    $("#funcsend").click(function(){

    $.ajax({        
       type: "POST",
       url: "tourFinderFunctions.php",
       data: "activitiesArray="+activities,
       success: function() {
            // $("#lengthQuestion").fadeOut('slow'); 
            alert("added note");       
       }
    }); 

    });
});

//responsible for moveness move to left in 15000px with speed 1000px for 500ms 
$(document).ready(function() {
    var MaxWidthScreen = $(window).width();
    MaxWidthScreen+=1000;
    function loop() {
 
    	// //change height to 60px
    	$('#BusImg').animate ({
            height: '100px',
        }, 1000, 'linear', function() {
            loop();
        });
        //change width to 50px
    	$('#BusImg').animate ({
            height: '80px',
        }, 500, 'linear', function() {
            loop();	
        });
        //here move to right always loop
        $('#BusImg').css({left:0});
        $('#BusImg').animate ({
            left: '+=' + MaxWidthScreen,
        }, 15000, 'linear', function() {
            loop();
        });

 
        
    } 
        
    loop();
});

$(document).ready(function(){
    $('#popoverData').popover();
    $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
});


$(document).ready(function() {
  $('#tableload').DataTable();


$('#tableloadfull').DataTable({
    "scrollY":        "600px",
    "scrollCollapse": true,
    "paging":         false
});


});


