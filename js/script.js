

const memberList = ["John Doe", "Jane Smith", "Alice Johnson", "Bob Brown"];
const selectedMembers = [];

function openMemberModal() {
    const modal = document.getElementById("memberModal");
    modal.style.right = "0";  
    renderMemberList();
}

function closeMemberModal() {
    const modal = document.getElementById("memberModal");
    modal.style.right = "-100%";  
}

function renderMemberList() {
    const memberListContainer = document.getElementById("member-list");
    memberListContainer.innerHTML = "";
    memberList.forEach(member => {
        const li = document.createElement("li");
        li.innerHTML = `${member} <button onclick="removeMember('${member}')">Remove</button>`;
        memberListContainer.appendChild(li);
    });
}

function removeMember(member) {
    const index = memberList.indexOf(member);
    if (index > -1) {
        memberList.splice(index, 1);
        renderMemberList();
    }
}




const options = ['member 1', 'member 2', 'member 3', 'member 4', 'member 5', 'clark 6', 'Hash 7'];

let selectedOptionsAddGroup = [];
let selectedOptionsMemberList = [];

function filterOptions(modal) {
    const query = document.getElementById(`search-${modal}`).value.toLowerCase().trim();
    const optionsList = document.getElementById(`options-list-${modal}`);

    optionsList.innerHTML = '';

    const filteredOptions = query === ''
        ? options.filter(option => !getSelectedOptions(modal).includes(option))
        : options.filter(option => option.toLowerCase().includes(query) && !getSelectedOptions(modal).includes(option));

    if (filteredOptions.length === 0) {
        const li = document.createElement('li');
        li.className = 'not-found';
        li.textContent = 'Not found';
        optionsList.appendChild(li);
    } else {
        filteredOptions.forEach(option => {
            const li = document.createElement('li');
            li.className = 'option-item';

            // Add circular image
            const img = document.createElement('img');
            img.src = 'https://via.placeholder.com/40'; // Replace with the actual image URL
            img.alt = option;
            img.className = 'option-image';

            // Add text content
            const span = document.createElement('span');
            span.className = 'option-text';
            span.textContent = option;

            // Add button
            const button = document.createElement('button');
            button.className = 'add-button';
            button.textContent = 'Add';
            button.onclick = () => selectOption(modal, option);

            li.appendChild(img);
            li.appendChild(span);
            li.appendChild(button);
            optionsList.appendChild(li);
        });
    }

    optionsList.classList.add('visible');
}


function showOptions(modal) {
    const query = document.getElementById(`search-${modal}`).value.toLowerCase();
    const optionsList = document.getElementById(`options-list-${modal}`);

    optionsList.innerHTML = '';

    options.filter(option => !getSelectedOptions(modal).includes(option)).forEach(option => {
        const li = document.createElement('li');
        li.className = 'option-item';

        // Add circular image
        const img = document.createElement('img');
        img.src = 'https://via.placeholder.com/40'; // Replace with the actual image URL
        img.alt = option;
        img.className = 'option-image';

        // Add text content
        const span = document.createElement('span');
        span.className = 'option-text';
        span.textContent = option;

        // Add button
        const button = document.createElement('button');
        button.className = 'add-button';
        button.textContent = 'Add';
        button.onclick = () => selectOption(modal, option);

        li.appendChild(img);
        li.appendChild(span);
        li.appendChild(button);
        optionsList.appendChild(li);
    });

    optionsList.classList.add('visible');
}


function selectOption(modal, option) {
    if (!getSelectedOptions(modal).includes(option)) {
        getSelectedOptions(modal).push(option);
        updateSelectedChips(modal);
    }

    document.getElementById(`search-${modal}`).value = ''; 
    filterOptions(modal); 
}

function getSelectedOptions(modal) {
    if (modal === 'addGroup') return selectedOptionsAddGroup;
    return selectedOptionsMemberList;
}

function updateSelectedChips(modal) {
    const chipsContainer = document.getElementById(`selected-chips-${modal}`);
    chipsContainer.innerHTML = ''; 
    getSelectedOptions(modal).forEach(option => {
        const chip = document.createElement('div');
        chip.className = 'chip';
        chip.textContent = option;

        const closeSpan = document.createElement('span');
        closeSpan.textContent = 'X';
        closeSpan.onclick = () => removeChip(modal, option);

        chip.appendChild(closeSpan);
        chipsContainer.appendChild(chip);
    });
}

function removeChip(modal, option) {
    const optionsArray = getSelectedOptions(modal);
    optionsArray.splice(optionsArray.indexOf(option), 1); 
    updateSelectedChips(modal); 
    filterOptions(modal); 
}

document.getElementById('search-addGroup').addEventListener('input', () => filterOptions('addGroup'));
document.getElementById('search-addGroup').addEventListener('focus', () => showOptions('addGroup'));

document.getElementById('search-memberList').addEventListener('input', () => filterOptions('memberList'));
document.getElementById('search-memberList').addEventListener('focus', () => showOptions('memberList'));

// after end of body






