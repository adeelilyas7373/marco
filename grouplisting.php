<?php include 'header.php' ?>

<div class="container-fluid p-0">
    <div class="row g-0">

        <div class="col-lg-12 col-md-12" style="height:100vh;overflow-y: auto;">
            <div class="bg-white rounded h-100 p-4">
                <h4 class="mb-6" style="color:#0075F2;">Groups Listing</h4>
                <div class="row">
                    <button type="button" class="btn mt-3 mb-3" onclick="navigateToRoute()" id='addgroup'
                        style="width: 160px; display: flex; justify-content: center; height: 50px; align-items: center; color: #2289f0; background-color: white; border: 2px solid #2289f0;  transition: all 0.3s;">
                        <i class="bi bi-collection-fill" style="font-size: 20px;"></i> &nbsp; Create Group
                    </button>
                    <button type="button" class="btn mt-3 mb-3 m-1" onclick="navigateToCreateUser()" id='adduser'
                        style="width: 160px; display: flex; justify-content: center; height: 50px; align-items: center; color: #2289f0; background-color: white; border: 2px solid #2289f0;  transition: all 0.3s;">
                        <i class="bi bi-people-fill" style="font-size: 20px;"></i> &nbsp; Create User
                    </button>
                </div>

                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th scope="col">
                                    #
                                </th>
                                <th scope="col">User</th>
                                <th scope="col">Status</th>
                                <th scope="col">Members</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    1
                                </td>
                                <td>List Item 01 <span class="badge new-badge">NEW</span></td>
                                <td><span class="badge active-badge">Active</span></td>
                                <td>This is a description</td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                    <button id="data" data-group-id="1" class="action-btn"><i
                                            class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>List Item 01 <span class="badge new-badge">NEW</span></td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>This is a description</td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                    <button id="data" data-group-id="2" class="action-btn"><i
                                            class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>List Item 01 <span class="badge new-badge">NEW</span></td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>This is a description</td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                    <button id="data" data-group-id="2" class="action-btn"><i
                                            class="bi bi-eye"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    2
                                </td>
                                <td>List Item 01 <span class="badge new-badge">NEW</span></td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>This is a description</td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                    <button id="data" data-group-id="2" class="action-btn"><i
                                            class="bi bi-eye"></i></button>
                                </td>
                            </tr>

                            <!-- Add more rows as needed -->
                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="membersModal" tabindex="-1" aria-labelledby="membersModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header" style="background: linear-gradient(180deg, #2289f0, #0b61b8);">
                <h4 class="modal-title text-white" id="membersModalLabel">Members List</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                    style="background-color: white;"></button>
            </div>
            <div class="modal-body" style="height:100vh;">
                <ul id="membersList" class="list-group" style="border: 1px solid #ddd; padding: 0;"></ul>
                <div id="emptyMessage" class="text-center" style="display:none;">Empty member list</div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>


<style>
    /* General Table Styling */
    .custom-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: white;
        font-size: 16px;
    }

    /* Header Styling */
    .custom-table thead th {
        background-color: #f9fafb;
        color: #4a4a4a;
        text-align: left;
        padding: 12px;
        font-weight: 600;
        border-bottom: 1px solid #ECECEC;
    }

    /* Row Alternation */
    .custom-table tbody tr:nth-child(odd) {
        background-color: #ffffff;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #eef6ff;
    }

    /* Row Hover Effect */
    .custom-table tbody tr:hover {
        background-color: #eef6ff;
    }

    /* Table Cell Padding */
    .custom-table th,
    .custom-table td {
        padding: 12px;
        border: none;
    }

    /* Badge Styling */
    .badge {
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 4px;
    }

    .new-badge {
        background-color: #eaf0ff;
        color: #007bff;
    }

    .active-badge {
        background-color: #e3ffe3;
        color: #28a745;
    }

    .inactive-badge {
        background-color: #ffe3e3;
        color: #dc3545;
    }

    /* Action Buttons */
    .action-btn {
        border: none;
        background-color: transparent;
        padding: 6px;
        cursor: pointer;
    }

    .action-btn:hover {
        background-color: #f2f4f7;
        border-radius: 50%;
    }

    .action-btn i {
        font-size: 18px;
        color: #6c757d;
    }


    #addgroup:hover {
    background: linear-gradient(180deg, #2289f0, #0b61b8);
    color: white;
    border-color: #b3024c;
}

#adduser:hover {
    background: linear-gradient(180deg, #2289f0, #0b61b8);
    color: white;
    border-color: #b3024c;
}
</style>

<script>

function navigateToRoute() {
        window.location.href = "creategroups.php";
    }
    function navigateToCreateUser() {
        window.location.href = "createuser.php";
    }

    document.addEventListener("DOMContentLoaded", function () {
        const groupRows = document.querySelectorAll('#data');
        const membersList = document.getElementById('membersList');
        const emptyMessage = document.getElementById('emptyMessage');

        // Dummy data for group members
        const groupMembers = {
            1: ["John Doe", "Jane Smith", "Alice Johnson", "John Doe", "Jane Smith", "Alice Johnson", "John Doe", "Jane Smith", "Alice Johnson"],  // Group 1 members
            2: ["John Doe", "Jane Smith", "Alice Johnson"]  // Group 2 has no members
        };

        // Add event listener for each group row click
        groupRows.forEach(row => {
            row.addEventListener('click', function () {
                const groupId = this.dataset.groupId;
                displayGroupMembers(groupId);
                const membersModal = new bootstrap.Modal(document.getElementById('membersModal'));
                membersModal.show();
            });
        });

        // Function to display group members
        function displayGroupMembers(groupId) {
            // Clear the current list of members
            membersList.innerHTML = '';
            emptyMessage.style.display = 'none';

            // Get the members for the clicked group
            const members = groupMembers[groupId] || [];

            if (members.length > 0) {
                // Show members
                members.forEach(member => {
                    const listItem = document.createElement('li');
                    listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
                    listItem.textContent = member;

                    // Add a remove button
                    const removeBtn = document.createElement("button");
                    removeBtn.className = "btn btn-danger btn-sm";
                    removeBtn.textContent = "✖";
                    removeBtn.style.color = "white";
                    listItem.appendChild(removeBtn);

                    membersList.appendChild(listItem);
                });
            } else {
                // Show "Empty member list" message
                emptyMessage.style.display = 'block';
            }
        }
    });
</script>