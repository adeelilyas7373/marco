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
