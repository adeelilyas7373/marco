<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THERAPIST</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <link href="./css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.23.5/dist/bootstrap-table.min.js"></script>
    <script src="./js/script.js"></script>
    <script >

document.addEventListener('DOMContentLoaded', function () {
    // Function to update button visibility based on the active tab
    function updateButtonVisibility() {
        const activeTab = document.querySelector('.tab-button.active').getAttribute('data-target');
        
        const addMemberButton = document.getElementById('addMemberButton');
        const addGroupButton = document.getElementById('addGroupButton');
        
        // Show 'Add Member' button if 'members' tab is active, otherwise hide it
        if (activeTab === 'members') {
            addMemberButton.style.display = 'inline-block';
            addGroupButton.style.display = 'none';
        } 
        // Show 'Create Group' button if 'groups' tab is active, otherwise hide it
        else if (activeTab === 'groups') {
            addMemberButton.style.display = 'none';
            addGroupButton.style.display = 'inline-block';
        }
    }

    // Call the function on page load to set the initial button visibility
    updateButtonVisibility();

    // Event listener to change tabs and update button visibility accordingly
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach(button => {
        button.addEventListener('click', function () {
            // Remove active class from all tabs
            tabButtons.forEach(tab => tab.classList.remove('active'));
            
            // Add active class to clicked tab
            button.classList.add('active');
            
            // Update the button visibility based on the active tab
            updateButtonVisibility();
        });
    });
});

    </script>
    <style>

/* Ensure the backdrop covers the entire screen with proper opacity */
.modal-backdrop {
    background-color: rgba(0, 0, 0, 0); /* Semi-transparent black */
    opacity: 1; /* Ensure the opacity is fully applied */
    z-index: 1040; /* Keep it behind the modal but above other elements */
}

/* Optional: Handle fading effect */
.modal-backdrop.fade {
    transition: background-color 0.1s ease-in-out; /* Smooth transition for background */
}



        /* Ensure the modal aligns fully to the right with no margins */
        .modal.slide-from-right .modal-dialog {
            position: fixed;
            top: 0;
            right: 0;
            margin: 0;
            width: 350px;
            height: 100%;
            transform: translateX(100%);
            transition: transform 0.2s ease-in-out;
        }

        .modal.slide-from-right.show .modal-dialog {
            transform: translateX(0);
        }

        /* Ensure no padding or overflow for full coverage */
        .modal-content {
            height: 100%;
            width: 350px;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.2);
            border: none;
            flex-direction: column;

            border-radius: 0;
            /* Remove border radius */
        }

        /* Adjust width for smaller devices */
        @media (max-width: 768px) {
            .modal.slide-from-right .modal-dialog {
                max-width: 100%;
                /* Use full width on smaller screens */
            }
        }


        .table {
    overflow: hidden;
    background-color: #f9f9f9;
    border-collapse: collapse; /* Ensures no space between cells */
    width: 100%; /* Makes the table stretch the full width */
}

.table thead th {
    background-color: #f9fafb; /* Subtle background for header */
    color: #000; /* Dark text for readability */
    font-weight: bold;
    text-align: left;
    padding: 12px; /* Adds space inside cells */
    border: none; /* Removes all borders */
}

.table tbody td {
    text-align: left;
    vertical-align: middle;
    padding: 12px; /* Adds space inside cells */
    border: none; /* Removes borders */
    color:grey;
}

.table tbody tr:nth-child(odd) {
    background-color: #f5f5f5; /* Light zebra striping for better readability */
}

.table tbody tr:nth-child(even) {
    background-color: #fff; /* Alternating row colors */
}

.toolbar {
    margin-bottom: 10px;
    display: flex;
    justify-content: space-between; /* Spreads toolbar items */
    align-items: center; /* Vertically aligns toolbar items */
    padding: 10px 0;
}

.bootstrap-table .fixed-table-toolbar {
    background-color: transparent; /* Removes toolbar background color */
}

.table td, .table th {
    border: none; /* Completely removes cell borders */
    border-spacing: 0; /* Ensures no spacing between cells */
    box-shadow: none; /* Removes any default table shadow */
}


.pagination .page-item.active .page-link {
    background-color: #33e099; /* Sets the background color for the active pagination button */
    border-color: #33e099; /* Sets the border color for the active pagination button */
    color: #fff; /* Sets the text color for the active pagination button */
}

.pagination .page-item .page-link {
    color: #000; /* Optional: Sets the default color for pagination links */
}

.pagination .page-item .page-link:hover {
    background-color: #006c3b; /* Optional: Darker green for hover effect */
    border-color: #006c3b; /* Optional: Border matches hover background */
    color: #fff; /* Optional: Text color on hover */
}


    </style>
</head>

<body>

    <div class="container">
        <!-- Tabs -->
        <div class="main">
            <div class="tabs">
                <button class="tab-button active" data-target="members">Members</button>
                <button class="tab-button" data-target="groups">Groups</button>
            </div>
        </div>
        <!-- Header -->
        <div class="header">
            <input type="text" placeholder="Search..." id="default-search" />
            <div class="filters">
                <button  data-bs-toggle="modal" data-bs-target="#addMemberModal" id="addMemberButton">Add
                    Member</button>
                <button data-bs-toggle="modal" data-bs-target="#addGroupModal" id="addGroupButton">Create
                    Group</button>

                <!-- <div id="dynamic-buttons">
                </div> -->
            </div>
        </div>
        <!-- Members Section -->
        <div id="members" class="content active">
            <!-- <div class="toolbar">
                <label>
                    <input type="checkbox" id="sortReset" checked /> sortReset
                </label>
            </div> -->
            <table id="table"  data-search="true" data-toolbar=".toolbar" data-toggle="table" data-height="650"
                data-pagination="true" data-side-pagination="server" data-page-list="[10, 25, 50, 100, 200, All]"
                data-url="https://examples.wenzhixin.net.cn/examples/bootstrap_table/data">
                <thead>
                    <tr >
                        <th data-field="name" data-sortable="true">First Name</th>
                        <th data-field="name" data-sortable="true">Last Name</th>
                        <th data-field="name" data-sortable="true">Email</th>
                        <th data-field="name" data-sortable="true">Status</th>
                        <th data-field="action" data-sortable="true">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- Groups Section -->
    <div id="groups" class="content">
        <div class="responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Group Name</th>
                        <th>Members</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $groups = [
                        ["Events Management Crew", 3, "2 hours ago"],
                        ["Kitchen Floor Crew", 1, "2 hours ago"],
                        ["Admin Desk", 1, "1 minute ago"],
                    ];

                    foreach ($groups as $group) {
                        echo "<tr>
                                    <td>{$group[0]}</td>
                                    <td>{$group[1]}</td>
                                     <td>
                                        <div class='text-center'>
                                            <span class='icon-button edit-icon' >
                                                <i class='fas fa-edit' data-bs-toggle='modal' data-bs-target='#editGroupModal'></i>
                                            </span>
                                            <span class='icon-button delete-icon'>
                                                <i class='fas fa-trash-alt' onclick='openDeleteModal()'></i>
                                            </span>                                           
                                             <span class='icon-button edit-icon' >
                                                <i class='fas fa-eye' data-bs-toggle='modal' data-bs-target='#memberModal'></i>
                                            </span>

                                        </div>
                                    </td>
                                </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- add emebers -->
    <div class="modal fade slide-from-right" id="addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="addMemberModalLabel">Add Member</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addMemberForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="Enter username" required>
                        </div>

                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="form-control"
                                placeholder="Enter first name" required>
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="form-control"
                                placeholder="Enter last name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter email address" required>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="" disabled selected>Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="save-btn" form="addMemberForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- edit member -->
    <div class="modal fade slide-from-right" id="editMemberModal" tabindex="-1" aria-labelledby="editMemberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="editMemberModalLabel">Edit Member</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addMemberForm">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="Enter username" required>
                        </div>

                        <div class="mb-3">
                            <label for="firstName" class="form-label">First Name</label>
                            <input type="text" id="firstName" name="firstName" class="form-control"
                                placeholder="Enter first name" required>
                        </div>

                        <div class="mb-3">
                            <label for="lastName" class="form-label">Last Name</label>
                            <input type="text" id="lastName" name="lastName" class="form-control"
                                placeholder="Enter last name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter email address" required>
                        </div>

                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select id="status" name="status" class="form-select" required>
                                <option value="" disabled selected>Select status</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="save-btn" form="addMemberForm" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
    </div>


    <!-- Add Group Modal -->
    <div class="modal fade slide-from-right" id="addGroupModal" tabindex="-1" aria-labelledby="addMemberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="addGroupModalLabel">Create Group</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="groupName">Group Name</label>
                    <input type="text" id="groupName" placeholder="Enter group name">

                    <label for="groupName">Select Members</label>
                    <div class="containerfilter">
                        <input type="text" id="search-addGroup" placeholder="Select members"
                            oninput="filterOptions('addGroup')" onfocus="showOptions('addGroup')">
                        <div id="selected-chips-addGroup"></div>
                        <ul id="options-list-addGroup"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="cancel-btn">Cancel</button>
                    <button class="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Group Modal -->
    <div class="modal fade slide-from-right" id="editGroupModal" tabindex="-1" aria-labelledby="editMemberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="editGroupModalLabel">Edit Group</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="groupName">Group Name</label>
                    <input type="text" id="groupName" placeholder="Enter group name">

                    <label for="groupName">Select Members</label>
                    <div class="containerfilter">
                        <input type="text" id="search-addGroup" placeholder="Select members"
                            oninput="filterOptions('addGroup')" onfocus="showOptions('addGroup')">
                        <div id="selected-chips-addGroup"></div>
                        <ul id="options-list-addGroup"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="cancel-btn">Cancel</button>
                    <button class="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Memberslist Modal -->
    <div class="modal fade slide-from-right" id="memberModal" tabindex="-1" aria-labelledby="addMemberModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="memberListModalLabel">Member List</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="groupName" style="margin-bottom:10px;">GROUP MEMBER</label>

                    <div class="beautiful-div">
                        <span class="name">Curtis Simpson</span>
                        <button class="close-btn">&times;</button>
                    </div>
                    <div class="beautiful-div">
                        <span class="name">Alice Robertson</span>
                        <button class="close-btn">&times;</button>
                    </div>

                    <div class="beautiful-div">
                        <span class="name">Corey Page</span>
                        <button class="close-btn">&times;</button>
                    </div>

                    <label for="groupName">ADD Members</label>
                    <div class="containerfilter">
                        <input type="text" id="search-memberList" placeholder="Select members"
                            oninput="filterOptions('memberList')" onfocus="showOptions('memberList')">
                        <div id="selected-chips-memberList"></div>
                        <ul id="options-list-memberList"></ul>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="cancel-btn" onclick='closeMemberModal()'>Cancel</button>
                    <button class="save-btn">Save</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete model -->
    <div id="deleteModal" class="deletemodal">
        <div class="modal-content-delete">
            <div class="modal-header">
                <h2>Delete</h2>
                <button class="close-btn" onclick='closeDeleteModal()'>&times;</button>
            </div>
            <div class="modal-body">
                <label for="groupName" style="margin-bottom:10px;">Are you sure you want to delete this item? This
                    action cannot be undone</label>
            </div>
            <div class="modal-footer">
                <button class="cancel-btn" onclick='closeDeleteModal()'>YES</button>
                <button class="save-btn" onclick='closeDeleteModal()'>NO</button>
            </div>
        </div>
    </div>
    </div>
    </div>


    <script>
  var $table = $('#table')

  $(function() {
    $table.bootstrapTable({
      sortReset: true
    })

    $('#sortReset').change(function () {
      $table.bootstrapTable('refreshOptions', {
        sortReset: $('#sortReset').prop('checked')
      })
    })
  })

</script>


    <style>
        .deletemodal {
            position: fixed;
            top: -100%;
            /* Hide initially */
            width: 100%;
            height: 100%;
            z-index: 1000;
            background-color: rgba(0, 0, 0, 0.3);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin-left: -20px;
        }



        .modal-content-delete {
            position: relative;
            /* Keep inside parent */
            display: flex;
            flex-direction: column;
            padding: 25px;
            width: 500px;
            box-shadow: -2px 0 10px rgba(0, 0, 0, 0.1);
            background-color: white;
            height: 200px;
            border-radius: 10px;
        }

        @media (max-width: 768px) {

            .modal-content-delete {
                width: 70%;
            }

        }
    </style>

    <script>
        function openDeleteModal() {
            // debugger;
            const modal = document.getElementById("deleteModal");
            modal.style.top = "0";
        }

        function closeDeleteModal() {
            const modal = document.getElementById("deleteModal");
            modal.style.top = "-100%";
        }







        document.addEventListener('click', (event) => {
            const modals = ['addGroup', 'memberList'];
            modals.forEach(modal => {
                const searchInput = document.getElementById(`search-${modal}`);
                const optionsList = document.getElementById(`options-list-${modal}`);

                // Check if the click is outside the input and the options list
                if (!optionsList.contains(event.target) && event.target !== searchInput) {
                    optionsList.classList.remove('visible');
                } else if (event.target === searchInput) {
                    // Show options again if clicking back into the input
                    showOptions(modal);
                }
            });
        });


    </script>

    <script src="./js/openmodel.js"></script>
    <script src="./js/build-in-function.js"></script>
    <script src="./js/viewmodel.js"></script>

    <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>