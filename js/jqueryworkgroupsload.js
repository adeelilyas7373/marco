//COPYRIGHT MARCO FIASCO 2019
// *************************************************************
// FILENAME: FILENAME.js
// PAGENAME: JQUERY 
// SUMMARY: 
// PAGE JS FILES: 
// CREATED 01/01/2018
// OWNER: MARCO FIASCO
// *************************************************************
 
// ************* NEW / STABLE / IN PROGRESS ******************** 
//
// PAGE STATUS: 
// *************************************************************

//*********************** TO DO  *******************************
// 
//**************************************************************



$(document).ready(function() {





        function moveItems(origin, dest) {
            var value = $('#sbThree').find(":selected").text();
            if ($('#sbTwo').find("option:contains('" + value + "')").length >= 1) 
                {
                    //dont add if already there
                } else {

                 var tempuser = $(origin).find(':selected').clone();
                 $(sbTwo).append(tempuser)
            }
        }


        $('#left').click(function() {
            moveItems('#sbThree', '#sbTwo');
            
        });
    




 function loadpages(){
        //$('a.load').on('click', function() {
        //var id= $('input#id').val();
		var value = $('#sbOne').find(":selected").val();
        $("#sbTwo").empty();
        //loadusers();

         $.ajax({
                url: 'php/dataworkgrouploadgroups.php',
                type: 'GET',
                dataType: 'json',
                data: {
                	option: "listcatpages",
                    filter: value},
                beforeSend: function() {},
                success: function(rows) {
                    
                    for (var i in rows) {
                       
                        var row = rows[i];
                        var id = row[0];
                        var pagename = row[1];

                         //alert("pagename " + pagename);

                        $('#sbTwo').append('<option value="' + id + '">' + pagename + '</option>');
                    }
                },
                complete: function() {
                    //alert("hi");
                }
            })


}


    
        //$('a.load').on('click', function() {
        //var id= $('input#id').val();


  document.getElementById("sbOne").addEventListener("click", function() {
        loadpages();
    });




  // document.getElementById("sbOne").addEventListener("change", function() {
  //      // changeFunc();
  //   });



          
     $.ajax({
                url: 'php/dataworkgrouploadgroups.php',
                type: 'GET',
                dataType: 'json',
                data: {
                    option: "listpages",
                    filter: "all"},
                beforeSend: function() {},
                success: function(rows) {
                    $("#sbOne").empty();
                    for (var i in rows) {
                        //alert("rows" + rows);
                        var row = rows[i];
                        var id = row[0];
                        var groupname = row[1];
                        $('#sbOne').append('<option value="' + id + '">' + groupname + '</option>');
                    }
                },
                complete: function() {
                   
                }
            })



        $.ajax({
                url: 'php/dataworkgrouploadusers.php',
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {},
                success: function(rows) {
                    $("#sbThree").empty();
                    for (var i in rows) {
                        //alert("rows" + rows);
                        var row = rows[i];
                        var id = row['id'];
                        var categoryname = row['username'];
                        $('#sbThree').append('<option value="' + id + '">' + categoryname + '</option>');
                    }
                },
                complete: function() {
                   
                }
            })


    
    




    });



function loadusers()
{

$("#sbThree").empty();

         $.ajax({
                url: 'php/dataworkgrouploadusers.php',
                type: 'GET',
                dataType: 'json',
                beforeSend: function() {},
                success: function(rows) {               
                    for (var i in rows) {
                        //alert("rows" + rows);
                        var row = rows[i];
                        var id = row[0];
                        var categoryname = row[1];
                        $('#sbThree').append('<option value="' + id + '">' + categoryname + '</option>');
                    }
                },
                complete: function() {
                   
                }
})




}