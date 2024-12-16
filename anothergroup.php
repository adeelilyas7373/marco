<?php include 'header.php' ?>

<div class="container-fluid p-0">
    <div class="container mt-5">
        <h3 class="mb-4 text-white p-3 rounded shadow-sm" style="background: linear-gradient(180deg, #007bff, #0056b3); box-shadow: 0 -8px 15px rgba(0, 0, 0, 1);">Create New Group</h3>
        <form id="groupForm">
            <!-- Group Name Field -->
            <div class="mb-3">
                <label for="groupName" class="form-label">Group Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="groupName"
                    placeholder="Enter group name"
                    required
                    style="padding:20px;font-size:20px;"
                />
            </div>
            <div class="row" id="reverse">
                <!-- Members List -->
                <div class="col-md-6 mb-3">
                    <h4 class="mb-3 p-2 rounded shadow-sm" style="display:flex;justify-content: center;height:60px; align-items: center;background: linear-gradient(180deg, #2289f0, #0b61b8); box-shadow: 0 -8px 15px rgba(0, 0, 0, 1); color: white;">Members List</h4>
                    <ul class="list-group members-list" id="membersList" style="height: 80vh; overflow-y: auto; border: 1px solid #ddd; padding: 0;">
                    </ul>
                    <button type="button" class="btn mt-3 mb-3" id="creategroup" style="width: 100%; display: flex; justify-content: center; height: 60px; align-items: center; color: #2289f0; background-color: white; border: 2px solid #2289f0;  transition: all 0.3s;">
                        Create Group
                    </button>
                </div>

                <!-- User List (Tabular) -->
                <div class="col-md-6 mb-3">
                    <h4 class="mb-3 p-2 rounded shadow-sm" style="display:flex;justify-content: center;height:60px; align-items: center;background: linear-gradient(180deg, #f71473, #b3024c); box-shadow: 0 -8px 15px rgba(0, 0, 0, 1); color: white;">Available Users</h4>
                    <div class="table-responsive" style="height: 80vh; overflow-y: auto; border: 1px solid #ddd;">
                        <table class="table table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Profile</th>
                                    <th>Username</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Select</th>
                                </tr>
                            </thead>
                            <tbody id="userList">
                                <!-- Example Users -->
                                <tr>
                                    <td>1</td>
                                    <td><img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile"></td>
                                    <td>user1</td>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john.doe@example.com</td>
                                    <td>Active</td>
                                    <td><input type="checkbox" class="form-check-input" value="User 1"></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><img src="https://via.placeholder.com/40" class="rounded-circle" alt="Profile"></td>
                                    <td>user2</td>
                                    <td>Jane</td>
                                    <td>Smith</td>
                                    <td>jane.smith@example.com</td>
                                    <td>Inactive</td>
                                    <td><input type="checkbox" class="form-check-input" value="User 2"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <button type="button" class="btn mt-3 mb-3" id="addToMembersBtn" style="width: 100%; display: flex; justify-content: center; height: 60px; align-items: center; color: #f71473; background-color: white; border: 2px solid #f71473;  transition: all 0.3s;">
                        Add User to Members List
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<style>
/* Hover Effects */
#addToMembersBtn:hover {
    background: linear-gradient(180deg, #f71473, #b3024c);
    color: white;
    border-color: #b3024c;
}

#creategroup:hover {
    background: linear-gradient(180deg, #2289f0, #0b61b8);
    color: white;
    border-color: #b3024c;
}

/* Responsive Styling */
#reverse {
    display: flex;
    flex-direction: row;
}

@media (max-width: 576px) {
    #reverse {
        flex-direction: column-reverse; 
    }
}
</style>
<?php include 'footer.php' ?>


<script>
    const userList = document.getElementById("userList");
    const membersList = document.getElementById("membersList");
    const addToMembersBtn = document.getElementById("addToMembersBtn");

    function checkIfEmpty() {
        if (membersList.children.length === 0) {
            const emptyMessage = document.createElement("li");
            emptyMessage.textContent = "Empty member list";
            emptyMessage.className = "list-group-item text-center border-0";
            membersList.appendChild(emptyMessage);
        } else {
            const existingEmptyMessage = membersList.querySelector("li.text-center");
            if (existingEmptyMessage) {
                existingEmptyMessage.remove();
            }
        }
    }

    addToMembersBtn.addEventListener("click", () => {
        const checkboxes = userList.querySelectorAll("input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
            const userName = checkbox.value;

            if (!Array.from(membersList.children).some((li) => li.dataset.user === userName)) {
                const listItem = document.createElement("li");
                listItem.className = "list-group-item d-flex justify-content-between align-items-center p-3";
                listItem.dataset.user = userName;
                listItem.textContent = userName;

                const removeBtn = document.createElement("button");
                removeBtn.className = "btn btn-danger btn-sm";
                removeBtn.textContent = "✖";
                removeBtn.style.color = "white";
                removeBtn.addEventListener("click", () => {
                    listItem.remove();
                    checkIfEmpty();
                });
                listItem.appendChild(removeBtn);

                membersList.appendChild(listItem);
            }

            checkbox.checked = false;
        });

        checkIfEmpty();
    });

    checkIfEmpty();
</script>
