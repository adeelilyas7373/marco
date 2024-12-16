<?php include 'header.php'; ?>

<div class="container-fluid p-0">
    <div class="col p-0">
        <div id="messageContainer"></div>
        <div class="col-12">
            <div class="bg-white rounded h-100 p-4">
                <h4 class="mb-4" style="color: #0075F2;">All Users</h4>
                <button type="button" class="btn mt-3 mb-3" onclick="navigateToRoute()" id="adduser" 
                        style="width: 160px; display: flex; justify-content: center; height: 50px; align-items: center; color: #2289f0; background-color: white; border: 2px solid #2289f0; transition: all 0.3s;">
                    <i class="bi bi-person-fill-add" style="font-size: 20px;"></i> &nbsp; Create
                </button>

                <div class="table-responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Profile</th>
                                <th scope="col">Username</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>John</td>
                                <td>Doe</td>
                                <td>john@email.com</td>
                                <td><span class="badge active-badge">Member</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>Jane</td>
                                <td>Smith</td>
                                <td>jane@email.com</td>
                                <td><span class="badge inactive-badge">Inactive</span></td>
                                <td>
                                    <button class="action-btn"><i class="bi bi-pencil-square"></i></button>
                                    <button class="action-btn"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>

                            <!-- Additional rows here -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>


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

/* Alternating Rows */
.custom-table tbody tr:nth-child(odd) {
    background-color: #f9fafb;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #eef6ff;
}

/* Row Hover */
.custom-table tbody tr:hover {
    background-color: #ffffff;
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

.active-badge {
    background-color: #e3ffe3;
    color: #28a745;
}

.inactive-badge {
    background-color: #ffe3e3;
    color: #dc3545;
}

/* Action Buttons */
.text-primary i, .text-danger i {
    font-size: 20px;
    cursor: pointer;
}

.text-primary:hover, .text-danger:hover {
    opacity: 0.7;
}

/* Add User Button */
#adduser:hover {
    background: linear-gradient(180deg, #2289f0, #0b61b8);
    color: white;
    border-color: #b3024c;
}

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

</style>

<script>
    function navigateToRoute() {
        window.location.href = "createuser.php";
    }
</script>