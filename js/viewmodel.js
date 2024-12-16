
const tabButtons = document.querySelectorAll('.tab-button');
const dynamicButtonsContainer = document.getElementById('dynamic-buttons');

function updateButtons(selectedTab) {
    dynamicButtonsContainer.innerHTML = '';

    if (selectedTab === 'members') {
        dynamicButtonsContainer.innerHTML = '<button>Add Members</button>';
    } else if (selectedTab === 'groups') {
        dynamicButtonsContainer.innerHTML = '<button>Add Groups</button>';
    }
}

tabButtons.forEach(button => {
    button.addEventListener('click', (event) => {
        tabButtons.forEach(btn => btn.classList.remove('active'));

        event.target.classList.add('active');

        const selectedTab = event.target.getAttribute('data-target');

        updateButtons(selectedTab);
    });
});

const defaultTab = document.querySelector('.tab-button.active').getAttribute('data-target');
updateButtons(defaultTab);




document.getElementById('addMemberForm').addEventListener('submit', function (event) {
    event.preventDefault(); // Prevent default form submission

    const formData = new FormData(event.target);
    const memberData = Object.fromEntries(formData.entries());

    console.log('Member Data:', memberData);

    alert('Member added successfully!');

    event.target.reset();

    document.getElementById('addMemberModal').style.right = '-100%';
});



