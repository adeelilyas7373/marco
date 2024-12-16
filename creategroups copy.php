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
                <!-- User List -->
                <div class="col-md-6 mb-3">
                    <h4 class="mb-3 p-2 rounded shadow-sm" style="display:flex;justify-content: center;height:60px; align-items: center;background: linear-gradient(180deg, #f71473, #b3024c); box-shadow: 0 -8px 15px rgba(0, 0, 0, 1); color: white;">Available Users</h4>
                    <ul class="list-group user-list " id="userList" style="height: 80vh; overflow-y: auto; border: 1px solid #ddd; padding: 0;">
                        <!-- Example users -->
                        <li class="list-group-item p-3 ">
                            <input type="checkbox" class="form-check-input me-2" value="User 1" /> User 1
                        </li>
                        <li class="list-group-item p-3 ">
                            <input type="checkbox" class="form-check-input me-2" value="User 2" /> User 2
                        </li>
                        <li class="list-group-item p-3 ">
                            <input type="checkbox" class="form-check-input me-2" value="User 3" /> User 3
                        </li>

                      </ul>
                      <button type="button" class="btn mt-3 mb-3" id="addToMembersBtn" style="width: 100%; display: flex; justify-content: center; height: 60px; align-items: center; color: #f71473; background-color: white; border: 2px solid #f71473;  transition: all 0.3s;">
                          Add User to Members List
                      </button>

                </div>
            </div>
        </form>
    </div>
</div>

<style>
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

#reverse {
    display: flex;
    flex-direction: row;
}

@media screen (max-width: 576px) {
    #reverse {
        flex-direction: row-reverse; 
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

    // Add selected users to the members list
    addToMembersBtn.addEventListener("click", () => {
        const checkboxes = userList.querySelectorAll("input[type='checkbox']:checked");
        checkboxes.forEach((checkbox) => {
            const userName = checkbox.value;

            // Prevent duplicate users in the members list
            if (!Array.from(membersList.children).some((li) => li.dataset.user === userName)) {
                const listItem = document.createElement("li");
                listItem.className = "list-group-item d-flex justify-content-between align-items-center p-3";
                listItem.dataset.user = userName;
                listItem.textContent = userName;

                // Add a remove button
                const removeBtn = document.createElement("button");
                removeBtn.className = "btn btn-danger btn-sm";
                removeBtn.textContent = "✖";
                removeBtn.style.color = "white";
                removeBtn.addEventListener("click", () => {
                    listItem.remove();
                    checkIfEmpty(); // Check if the list is empty after removal
                });
                listItem.appendChild(removeBtn);

                membersList.appendChild(listItem);
            }

            // Uncheck the checkbox
            checkbox.checked = false;
        });

        checkIfEmpty(); // Check if the list is empty after adding members
    });

    // Initial check if the members list is empty on page load
    checkIfEmpty();
</script>

