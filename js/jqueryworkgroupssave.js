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


$(document).ready(function(){

document.getElementById("savePages").addEventListener("click", function() { saveaccess(); } );      //save to database

document.getElementById("addCat").addEventListener("click", function() {addCategory();});

document.getElementById("renameCat").addEventListener("click", function() {renameCat();});






function renameCat(){


//alert("hi");

var groupname = $('#groupname').val();

var groupid = $('#sbOne').find(":selected").val();

                
 $('#sbOne>option[value='+groupid+']').text(groupname)


console.log(groupname);

   $.ajax({
            url: "php/dataworkgroupsupdategroup.php",
            type: "POST",
            data: {groupname: groupname, groupid:groupid},
            dataType: "JSON",
            success: function (lastid) {


            },

             complete: function (msg) {

             }
 

        });

}




function addCategory(){


//alert("hi");

var groupname = $('#groupname').val();

console.log(groupname);



   $.ajax({
            url: "php/dataworkgroupssavegroup.php",
            type: "POST",
            data: {groupname: groupname},
            dataType: "JSON",
            success: function (lastid) {

                $('#sbOne').append('<option value="' + lastid + '">' + groupname + '</option>');
               
            },

             complete: function (msg) {

             }
 

        });

    

}


function saveaccess(){

//alert("hi");

var groupid = $('#sbOne').find(":selected").val();


$("#sbTwo > option").each(function() {


   $.ajax({
            url: "php/dataworkgroupssaveusergroup.php",
            type: "POST",
            data: {
            groupid: groupid,
            userid: this.value
             
            },
            dataType: "JSON",
            success: function (msg) {
               
            },

             complete: function (msg) {

             }
 

        });

});




          




}








});