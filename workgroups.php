


<?php
//include 'chkaccess.php';
?>


<div class="container-fluid p-0">
<?php include 'header.php' ?>


<script type="text/javascript" src="js/jqueryworkgroupsload.js" ></script>			<!-- all loading of page -->
<script type="text/javascript" src="js/jqueryworkgroupssave.js" ></script>
<script type="text/javascript" src="js/jqueryworkgroupsdelete.js" ></script>


<div class="col p-0">
<div id="messageContainer"></div>
<nav class="border navbar navbar-light bg-light">
                <div class="container-fluid p-0">
                    <span class="mb-1 h4 ">Groups</span>
                    <div class="col float-right">
                        <!-- <button type="button" class="btn btn-primary" id="exercisesave">ADD</button>
                        <button type="button" class="btn btn-primary" id="exerciseupdate">UPDATE</button> -->
                    </div>
                    <div class="status-message">
                    </div>
                </div>
            </nav>





            <div id="main-container-wrapper" class="container-wrapper p-3">


        <!-- Group Name Input -->
        <div class="row mb-4">
            <div class="col-md-2">
                <input type="text" id="groupname" class="form-control text-input" placeholder="Group Name">
                <div class="d-grid gap-2">
                    <button id="addCat" class="btn btn-primary">Add</button>
                    <button id="removegroup" class="btn btn-danger">Remove</button>
                    <button id="renameCat" class="btn btn-secondary">Update</button>
                </div>
            </div>

            <!-- Select Options -->
            <div class="col-md-8">
                <div class="row">
                    <!-- Column 1 -->
                    <div class="col-md-4">
                        <div class="select-heading" id="sbOneheading">Groups</div>
                        <select id="sbOne" class="form-select select-container" multiple></select>
                    </div>

                    <!-- Column 2 -->
                    <div class="col-md-4">
                        <div class="select-heading" id="sbTwoheading">Group Members</div>
                        <select id="sbTwo" class="form-select select-container" multiple></select>
                        <div class="d-grid gap-2 mt-3">
                            <button id="removeusergroup" class="btn btn-danger">Remove</button>
                            <button id="savePages" class="btn btn-success">Save</button>
                        </div>
                    </div>

                    <!-- Column 3 -->
                    <div class="col-md-4">
                        <div class="select-heading" id="sbThreeheading">Available Users</div>
                        <select id="sbThree" class="form-select select-container" multiple></select>
                        <div class="d-grid gap-2 mt-3">
                            <button id="left" class="btn btn-warning">&lt;</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


		
			</div>

	

			</div>



<style>

<style>
        .container-wrapper {
            margin: 20px;
        }

        .select-heading {
            text-align: center;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .select-container {
            height: 540px;
        }

        .button-row {
            margin-top: 20px;
        }

        .text-input {
            margin-bottom: 10px;
        }
    </style>




</style>