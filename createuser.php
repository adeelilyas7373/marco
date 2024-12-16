<?php include 'header.php' ?>

<div class="container-fluid p-0">
    <div class="container mt-5">
        <h3 class="mb-4 text-white p-3 rounded shadow-sm" style="background: linear-gradient(180deg, #007bff, #0056b3); box-shadow: 0 -8px 15px rgba(0, 0, 0, 1);">
            Create New User
        </h3>
        <form id="userForm" method="POST" action="submit_user.php">
            <!-- Username Field -->
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input
                    type="text"
                    class="form-control"
                    id="username"
                    name="username"
                    placeholder="Enter Username"
                    required
                    style="padding:15px;font-size:20px;"
                />
            </div>

            <!-- First Name Field -->
            <div class="mb-3">
                <label for="firstName" class="form-label">First Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
                    placeholder="Enter First Name"
                    required
                    style="padding:15px;font-size:20px;"
                />
            </div>

            <!-- Last Name Field -->
            <div class="mb-3">
                <label for="lastName" class="form-label">Last Name</label>
                <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
                    placeholder="Enter Last Name"
                    required
                    style="padding:15px;font-size:20px;"
                />
            </div>

            <!-- Email Field -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter Email"
                    required
                    style="padding:15px;font-size:20px;"
                />
            </div>

            <!-- Status Field -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select
                    class="form-select"
                    id="status"
                    name="status"
                    required
                    style="padding:15px;font-size:20px;"
                >
                    <option value="Active">Active</option>
                    <option value="Inactive">Inactive</option>
                </select>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn mt-3 mb-3" id="createuser" style="width: 100%; display: flex; justify-content: center; height: 60px; align-items: center; color: #2289f0; background-color: white; border: 2px solid #2289f0;  transition: all 0.3s;">
                Submit
            </button>
        </form>
    </div>
</div>

<style>
#createuser:hover {
    background: linear-gradient(180deg, #2289f0, #0b61b8);
    color: white;
    border-color: #b3024c;
}
</style>

<?php include 'footer.php' ?>
