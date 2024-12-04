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

document.getElementById("removeusergroup").addEventListener("click", function() { deleteusergroup(); } );


document.getElementById("removegroup").addEventListener("click", function() { deletegroup(); } );


function deletegroup(){
var groupname = $('#sbOne').find(":selected").text();
var value = $('#sbOne').find(":selected").val();

if(groupname == '')
  {
  alert("select a group");
 
}
else{
var groupid = $('#sbOne').find(":selected").val();

//alert(value)

  if (confirm("Are you sure you want to remove group " + groupid)) {
        $("#sbOne option:selected").remove(); 

   
   $.ajax({
            url: "php/dataworkgroupsdeletegroup.php",
            type: "POST",
            dataType: "JSON",
            data: {
            groupid: groupid,
            },

            success: function (msg) {
              alert(msg);
},

             complete: function (msg) {
       }
 
        });



}


 }
}


function deleteusergroup(){
var groupname = $('#sbOne').find(":selected").text();
//alert(groupname)
if(groupname == '')
  {
  alert("select a group");
 
}
else{
var value = $('#sbTwo').find(":selected").text();
//alert(value)

if (confirm("Are you sure you want to remove user " + value  + " from " + groupname)) {
var groupid = $('#sbOne').find(":selected").val();
var userid = $('#sbTwo').find(":selected").val();


        $("#sbTwo option:selected").remove(); 

   
	 $.ajax({
            url: "php/dataworkgroupsdeleteusergroup.php",
            type: "POST",
            data: {
            groupid: groupid,
            userid: userid
            },
            dataType: "JSON",
            success: function (msg) {
            	alert(msg);
},

             complete: function (msg) {
       }
 
        });



}


 }
}


});