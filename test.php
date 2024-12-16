<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search and Chip Selector</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="containerfilter">
    <input type="text" id="search" placeholder="Search..." oninput="filterOptions()" onfocus="showOptions()">   
        <ul id="options-list">
            <!-- Search options will appear here dynamically -->
        </ul>
        <div id="selected-chips">
            <!-- Selected chips will appear here -->
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>

<style>
body {
    font-family: Arial, sans-serif;
}

.containerfilter {
    width: 300px;
    margin: 50px auto;
}

input[type="text"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

#options-list {
    list-style: none;
    padding: 0;
    margin: 0;
    max-height: 200px;
    overflow-y: auto;
}

#options-list li {
    padding: 10px;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    cursor: pointer;
    margin: 5px 0;
}

#options-list li:hover {
    background-color: #e9e9e9;
}

#selected-chips {
    margin-top: 10px;
}

.chip {
    display: inline-block;
    background-color: #dcdcdc;
    padding: 5px 10px;
    margin: 5px;
    border-radius: 20px;
    font-size: 14px;
}

.chip span {
    margin-left: 10px;
    cursor: pointer;
}

.chip span:hover {
    color: red;
}

</style>

<script>

const options = ['Option 1', 'Option 2', 'Option 3', 'Option 4', 'Option 5'];
let selectedOptions = [];

function filterOptions() {
    const query = document.getElementById('search').value.toLowerCase().trim();
    const optionsList = document.getElementById('options-list');

    optionsList.innerHTML = ''; // Clear the list before filtering

    // If search is empty, show all unselected options
    const filteredOptions = query === '' 
        ? options.filter(option => !selectedOptions.includes(option))
        : options.filter(option => option.toLowerCase().includes(query) && !selectedOptions.includes(option));

    if (filteredOptions.length === 0) {
        const li = document.createElement('li');
        li.className = 'not-found';
        li.textContent = 'Not found';
        optionsList.appendChild(li);
    } else {
        filteredOptions.forEach(option => {
            const li = document.createElement('li');
            li.textContent = option;
            li.setAttribute('data-value', option); // Set a data attribute for reference
            li.onclick = () => selectOption(option); // Attach the click event for selection
            optionsList.appendChild(li);
        });
    }

    optionsList.classList.add('visible');
}

function showOptions() {
    const query = document.getElementById('search').value.toLowerCase();
    const optionsList = document.getElementById('options-list');

    optionsList.innerHTML = ''; // Clear the list

    // Show all unselected options when input is focused
    options.filter(option => !selectedOptions.includes(option)).forEach(option => {
        const li = document.createElement('li');
        li.textContent = option;
        li.setAttribute('data-value', option); // Set a data attribute for reference
        li.onclick = () => selectOption(option); // Attach the click event for selection
        optionsList.appendChild(li);
    });

    optionsList.classList.add('visible'); // Show the list
}

function selectOption(option) {
    if (!selectedOptions.includes(option)) {
        selectedOptions.push(option);
        updateSelectedChips();
    }

    document.getElementById('search').value = ''; // Clear the input
    filterOptions(); // Refresh the options list
}

function updateSelectedChips() {
    const chipsContainer = document.getElementById('selected-chips');
    chipsContainer.innerHTML = ''; // Clear existing chips

    selectedOptions.forEach(option => {
        const chip = document.createElement('div');
        chip.className = 'chip';
        chip.textContent = option;

        const closeSpan = document.createElement('span');
        closeSpan.textContent = 'X';
        closeSpan.onclick = () => removeChip(option);

        chip.appendChild(closeSpan);
        chipsContainer.appendChild(chip);
    });
}

function removeChip(option) {
    selectedOptions = selectedOptions.filter(item => item !== option);
    updateSelectedChips();
    filterOptions(); // Re-filter options to include the removed one
}

// Attach input and focus events
document.getElementById('search').addEventListener('input', filterOptions);
document.getElementById('search').addEventListener('focus', showOptions);


</script>