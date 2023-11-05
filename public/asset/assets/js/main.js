// .........<<<<< responsive menu >>>>.......
$(document).ready(function () {
        ma5menu({
                menu: '.site-menu',
                activeClass: 'active',
                footer: '#ma5menu-tools',
                position: 'left',
                closeOnBodyClick: true
        });
});

// ........<<<<< Symptom of animal >>>>>>......
const checkboxes = document.querySelectorAll('.checkbox-options input[type="checkbox"]');
const selectedOptionsList = document.querySelector('.selected-options-list');

// Define an array of Bengali numerals
const bengaliNumerals = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];

checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', () => {
                const selectedOptions = Array.from(checkboxes)
                        .filter(checkbox => checkbox.checked)
                        .map((checkbox, index) => {
                                const bengaliNumber = Array.from(String(index + 1), digit => bengaliNumerals[parseInt(digit)]);
                                return `${bengaliNumber.join('')} - ${checkbox.parentElement.textContent.trim()}`;
                        });

                selectedOptionsList.innerHTML = selectedOptions.join('<br>');
        });
});


// ........<<<<< membership plan >>>>>>......
function displayModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "block";
}

function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
}

function displayPackageInfo(packageName, duration, amount) {
        closeModal();
        var packageInfo = document.getElementById("package-info");
        packageInfo.innerHTML = `${packageName}<br> সময়: ${duration}, <br> চার্জ: ${amount}`;
}




// Function to handle language change
function changeLanguage() {
        var selectedLanguage = document.getElementById("language").value;
}

// Function to handle the search action
function performSearch() {
        var searchQuery = document.getElementById("search").value;
}


// .........<<<<< Production chart >>>>.......
function toBengaliNumber(number) {
        var bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return number.toString().split('').map(digit => bengaliDigits[parseInt(digit)]).join('');
}

// Data for the chart
var productionData = {
        labels: ['২০২১', '২০২২', '২০২৩'], // Bengali Unicode for years 2020, 2021, 2022
        datasets: [
                {
                        label: 'দুধ (মেঃ টন)', // Bengali Unicode for 'Milk'
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [100034, 120045, 180528],
                },
                {
                        label: 'মাংস (মেঃ টন)', // Bengali Unicode for 'Meat'
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [80023, 90045, 106492],
                },
                {
                        label: 'ডিম (কোটি) ', // Bengali Unicode for 'Egg'
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [11, 19.45, 26.65],
                },
        ]
};

// Chart configuration
var productionConfig = {
        type: 'line',
        data: productionData,
        options: {
                scales: {
                        x: {
                                title: {
                                        display: true,
                                        text: 'বছর' // Bengali Unicode for 'Year'
                                }
                        },
                        y: {
                                title: {
                                        display: true,
                                        text: 'উৎপাদন পরিমাণ' // Bengali Unicode for 'Production Amount'
                                },
                                ticks: {
                                        // Use the custom function to convert Y-axis labels to Bengali digits
                                        callback: function (value, index, values) {
                                                return toBengaliNumber(value);
                                        }
                                }
                        }
                }
        }
};

// Create the chart
var ctx = document.getElementById('productionChart').getContext('2d');
var productionChart = new Chart(ctx, productionConfig);


// .........<<<<< Transaction chart >>>>.......
function toBengaliNumber(number) {
        var bengaliDigits = ['০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯'];
        return number.toString().split('').map(digit => bengaliDigits[parseInt(digit)]).join('');
}

// Data for the chart
var transactionData = {
        labels: ['২০২১', '২০২২', '২০২৩'], // Bengali Unicode for years 2020, 2021, 2022
        datasets: [
                {
                        label: 'দুধ (কোটি টাকা)', // Bengali Unicode for 'Milk'
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [100, 220, 722.096],
                },
                {
                        label: 'মাংস (কোটি টাকা)', // Bengali Unicode for 'Meat'
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [800, 2800, 5324.6],
                },
                {
                        label: 'ডিম ', // Bengali Unicode for 'Egg'
                        borderColor: 'rgba(255, 206, 86, 1)',
                        borderWidth: 2,
                        fill: false,
                        data: [55, 135, 186.55],
                },
        ]
};

// Chart configuration
var transactionConfig = {
        type: 'bar',
        data: transactionData,
        options: {
                scales: {
                        x: {
                                title: {
                                        display: true,
                                        text: 'বছর' // Bengali Unicode for 'Year'
                                }
                        },
                        y: {
                                title: {
                                        display: true,
                                        text: 'লেনদেন' // Bengali Unicode for 'Transactions'
                                },
                                ticks: {
                                        // Use the custom function to convert Y-axis labels to Bengali digits
                                        callback: function (value, index, values) {
                                                return toBengaliNumber(value);
                                        }
                                }
                        }
                }
        }
};

// Create the chart
var ctx = document.getElementById('transactionChart').getContext('2d');
var transactionChart = new Chart(ctx, transactionConfig);


// .........<<<<< popup section >>>>.......
document.addEventListener("DOMContentLoaded", function () {
        const popup = document.getElementById("greetingPopup");
        const closeButton = document.getElementById("closePopup");

        // Check if the popup has been displayed before
        const popupDisplayed = localStorage.getItem("popupDisplayed");

        if (!popupDisplayed) {
                // Show the popup if it hasn't been displayed before
                popup.style.display = "block";
        }

        // Close the popup when the close button is clicked
        closeButton.addEventListener("click", function () {
                popup.style.display = "none";
                // Set a flag in local storage to indicate that the popup has been displayed
                localStorage.setItem("popupDisplayed", "true");
        });

        // Close the popup when clicking outside the popup content
        window.addEventListener("click", function (event) {
                if (event.target === popup && !popupDisplayed) {
                        popup.style.display = "none";
                        // Set a flag in local storage when clicking outside the popup
                        localStorage.setItem("popupDisplayed", "true");
                }
        });
});


// .........<<<<< Cow >>>>.......

document.addEventListener('DOMContentLoaded', function () {
        const chestInput = document.querySelector('#chestSize');
        const lengthInput = document.querySelector('#bodyLength');
        const weightResult = document.querySelector('#weightResult');
        const calculateButton = document.querySelector('#calculateButton');
        const resetButton = document.querySelector('#resetButton');

        function calculateWeight() {
                const chestSize = parseFloat(chestInput.value);
                const bodyLength = parseFloat(lengthInput.value);

                const weight = (bodyLength * chestSize ** 2) / 660;

                weightResult.textContent = weight.toFixed(2) + ' kg';
        }

        function resetCalculator() {
                chestInput.value = '';
                lengthInput.value = '';
                weightResult.textContent = '';
        }

        calculateButton.addEventListener('click', calculateWeight);
        resetButton.addEventListener('click', resetCalculator);
});

// ..........<<<<< Buffalo >>>>>..............

document.addEventListener('DOMContentLoaded', function () {
        const buffalochestInput = document.querySelector('#buffalochestsize');
        const buffalolengthInput = document.querySelector('#buffalobodylength');
        const buffaloweightResult = document.querySelector('#buffaloweightResult');
        const buffalocalculateButton = document.querySelector('#buffalocalculateButton');
        const buffaloresetButton = document.querySelector('#buffaloresetButton');

        function calculateWeight() {
                const buffalochestSize = parseFloat(buffalochestInput.value);
                const buffalobodyLength = parseFloat(buffalolengthInput.value);

                if (isNaN(buffalochestSize) || isNaN(buffalobodyLength)) {
                        alert('দয়া করে সঠিক উপায়ে তথ্য প্রবেশ করুন');
                        return;
                }

                const buffaloweight = (buffalobodyLength * buffalochestSize ** 2) / 660;

                buffaloweightResult.textContent = buffaloweight.toFixed(2) + ' kg';
        }    

        function resetCalculator() {
                buffalochestInput.value = '';
                buffalolengthInput.value = '';
                buffaloweightResult.textContent = '';
        }

        buffalocalculateButton.addEventListener('click', calculateWeight);
        buffaloresetButton.addEventListener('click', resetCalculator);
});

// ........<<<<< Goat >>>>>>......

document.addEventListener('DOMContentLoaded', function () {
        const goatchestInput = document.querySelector('#goatchestsize');
        const goatlengthInput = document.querySelector('#goatbodylength');
        const goatWeightResult = document.querySelector('#goatweightResult');
        const goatCalculateButton = document.querySelector('#goatcalculateButton');
        const goatResetButton = document.querySelector('#goatresetButton');

        function calculateWeight() {
                const goatchestSize = parseFloat(goatchestInput.value);
                const goatbodyLength = parseFloat(goatlengthInput.value);

                if (isNaN(goatchestSize) || isNaN(goatbodyLength)) {
                        alert('দয়া করে সঠিক উপায়ে তথ্য প্রবেশ করুন');
                        return;
                }

                const goatWeight = (goatbodyLength * goatchestSize ** 2) / 660;

                goatWeightResult.textContent = goatWeight.toFixed(2) + ' kg';
        }

        function resetCalculator() {
                goatchestInput.value = '';
                goatlengthInput.value = '';
                goatWeightResult.textContent = '';
        }

        goatCalculateButton.addEventListener('click', calculateWeight);
        goatResetButton.addEventListener('click', resetCalculator);
});


// .........<<<<< live chat >>>>.......
function openForm() {
        document.getElementById("myForm").style.display = "block";
}

function closeForm() {
        document.getElementById("myForm").style.display = "none";
}




