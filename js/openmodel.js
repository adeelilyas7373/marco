const tabButtons = document.querySelectorAll('.tab-button');
const dynamicButtonsContainer = document.getElementById('dynamic-buttons');

// Function to update the buttons based on selected tab (members/groups)
function updateButtons(selectedTab) {
    dynamicButtonsContainer.innerHTML = ''; // Clear existing buttons

    let buttonHTML = '';
    if (selectedTab === 'members') {
        buttonHTML = '<button id="addMembersButton">Add Members</button>';
    } else if (selectedTab === 'groups') {
        buttonHTML = '<button id="addGroupsButton">Add Groups</button>';
    }

    dynamicButtonsContainer.innerHTML = buttonHTML; // Insert new button

    // Attach modal event listeners after the dynamic buttons are rendered
    attachModalEvents(selectedTab);
}

// Function to attach modal event listeners (open, close, cancel)
function attachModalEvents(selectedTab) {
    const modal = selectedTab === 'members'
        ? document.getElementById('addMemberModal')
        : document.getElementById('addGroupModal');

    const buttonId = selectedTab === 'members' ? 'addMembersButton' : 'addGroupsButton';
    const openModalButton = document.getElementById(buttonId);
    const closeModalButton = modal.querySelector('.close-btn');
    const cancelButton = modal.querySelector('.cancel-btn');

    // Open modal when button is clicked
    openModalButton.addEventListener('click', () => {
        modal.style.right = '0'; // Open modal
    });

    // Close modal when close button is clicked
    closeModalButton.addEventListener('click', () => {
        modal.style.right = '-100%'; // Close modal
    });

    // Close modal when cancel button is clicked
    cancelButton.addEventListener('click', () => {
        modal.style.right = '-100%'; // Close modal
    });
}

// Function to open the modal based on selected tab (members/groups)
function openModal(selectedTab) {
    updateButtons(selectedTab); // Updates buttons dynamically

    // Open the corresponding modal
    const modal = selectedTab === 'members'
        ? document.getElementById('addMemberModal')
        : document.getElementById('addGroupModal');
    
    modal.style.right = '0'; // Open the modal
}

// Handle tab button clicks
tabButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        tabButtons.forEach(btn => btn.classList.remove('active')); // Remove active class from all tabs
        event.target.classList.add('active'); // Add active class to clicked tab

        const selectedTab = event.target.getAttribute('data-target'); // Get selected tab
        updateButtons(selectedTab); // Update buttons based on selected tab
    });
});

// Initialize with the default active tab
const defaultTab = document.querySelector('.tab-button.active').getAttribute('data-target');
updateButtons(defaultTab);
