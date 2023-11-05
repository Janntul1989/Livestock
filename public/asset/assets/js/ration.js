function calculate() {
    // Retrieve input values
    const weight = parseFloat(document.getElementById('weight').value) || 0;
    const milk = parseFloat(document.getElementById('milk').value) || 0;
    const danap = parseFloat(document.getElementById('danap').value) || 0;
    const grassp = parseFloat(document.getElementById('grassp').value) || 0;

    // Perform calculations
    const amisp = (weight * 1) + (milk * 100);
    const amisc = (danap * 200) + (grassp * 20);
    const danapp = (weight * 0.015) + (milk * 0.03);
    const grasspp = (weight * 0.03) + (milk * 0.2) + (weight * 0.015);
    const soktip = (danap * 10) + (grassp * 2);
    const soktic = (weight * 0.1) + (milk * 5);
    const dryp = (danap * 0.9) + (grassp * 0.8);
    const dryc = weight * 0.02;

    //Format the results
    const formattedResults = `
        আমিষের প্রাপ্যতা: ${formatWeight(amisp)}<br><br>
        আমিষের চাহিদা: ${formatWeight(amisc)}<br><br>
        দানাদার প্রকৃত পরিমাণ: ${formatWeight(danapp)}<br><br>
        ঘাসের প্রকৃত পরিমাণ: ${formatWeight(grasspp)}<br><br>
        শক্তির প্রাপ্যতা(মে.জু): ${soktip}<br><br>
        শক্তির চাহিদা (মে.জু) ${soktic}<br><br>
        শুস্ক পদার্থের প্রাপ্যতা: ${formatWeight(dryp)}<br><br>
        শুস্ক পদার্থের চাহিদা: ${formatWeight(dryc)}
    `;

    function formatWeight(weight) {
        const kg = Math.floor(weight);
        const grams = Math.round((weight % 1) * 1000);

        if (grams === 0) {
            return `  ${kg} গ্রাম`;
        } else {
            return `  ${kg} কেজি ${grams} গ্রাম`;
        }
    }

    // Display the results
    document.getElementById('results').innerHTML = formattedResults;

    // Convert danapp and grasspp to grams
    const danappGrams = (Math.floor(danapp) * 1000) + (Math.round((danapp % 1) * 1000));
    const grassppGrams = (Math.floor(grasspp) * 1000) + (Math.round((grasspp % 1) * 1000));

    // Store the values in the respective hidden elements
    document.getElementById('result-danapp-grams').textContent = danappGrams.toFixed(2);
    document.getElementById('result-grasspp-grams').textContent = grassppGrams.toFixed(2);
}

function clearFields() {
    // Clear input fields
    document.getElementById('weight').value = '';
    document.getElementById('milk').value = '';
    document.getElementById('danap').value = '';
    document.getElementById('grassp').value = '';
    document.getElementById('results').innerHTML = '';

    // Clear chart data for Graph 2
    document.getElementById('result-danapp-grams').textContent = ' ';
    document.getElementById('result-grasspp-grams').textContent = ' ';




}


document.addEventListener("DOMContentLoaded", function () {
    // Chart configuration for Graph 1
    var chartConfig1 = {
        type: 'bar',
        data: {
            labels: ['দানাদার প্রাপ্যতা (কেজি )', 'ঘাসের প্রাপ্যতা (কেজি )'],
            datasets: [{
                label: 'Graph 1',
                backgroundColor: ['#3498db', '#e74c3c'],
                borderColor: ['#2980b9', '#c0392b'],
                borderWidth: 1,
                data: [0, 0],
            }],
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                    max: 100,
                },
            },
        },
    };


document.getElementById('clearGraph1Button').addEventListener('click', clearGraph1);

// Function to clear the data for Graph 1
function clearGraph1() {
    // Clear input fields related to Graph 1
    document.getElementById('danap').value = '';
    document.getElementById('grassp').value = '';

    // Clear chart data for Graph 1
    chart1.data.datasets[0].data = [0, 0];
    chart1.update();
}


    // Chart configuration for Graph 2
    var chartConfig2 = {
        type: 'bar',
        data: {
            labels: ['দানাদার প্রকৃত পরিমাণ (গ্রাম )', 'ঘাসের প্রকৃত পরিমাণ (গ্রাম )'],
            datasets: [{
                label: 'Graph 2',
                backgroundColor: ['#2ecc71', '#f1c40f'],
                borderColor: ['#27ae60', '#f39c12'],
                borderWidth: 1,
                data: [0, 0],
            }],
        },
        options: {
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                    max: 20000,
                },
            },
        },
    };

    // Getting the contexts for the two charts
    var ctx1 = document.getElementById('chart1').getContext('2d');
    var ctx2 = document.getElementById('chart2').getContext('2d');



    // Creating the Chart instances for Graph 1 and Graph 2
    var chart1 = new Chart(ctx1, chartConfig1);
    var chart2 = new Chart(ctx2, chartConfig2);

    // Function to update Graph 1
    function updateGraph1() {
        var inputA = parseFloat(document.getElementById('danap').value);
        var inputB = parseFloat(document.getElementById('grassp').value);

        chart1.data.datasets[0].data = [inputA, inputB];
        chart1.update();
    }
    // Event listeners for updating Graph 1
    document.getElementById('danap').addEventListener('input', function () {
        // Update Graph 1
        updateGraph1();
    });
        document.getElementById('grassp').addEventListener('input', function () {
        // Update Graph 1
        updateGraph1();
    });

   // Function to update Graph 2
    function updateGraph2() {
    var inputC = parseFloat(document.getElementById('result-danapp-grams').textContent);
    var inputD = parseFloat(document.getElementById('result-grasspp-grams').textContent);

    chart2.data.datasets[0].data = [inputC, inputD];
    chart2.update();
}

// Function to set up event listeners for updating Graph 2
function setUpGraph2Listeners() {
// Initial update of Graph 2
updateGraph2();

// Use MutationObserver to listen for changes in the result-danapp-grams and result-grasspp-grams elements
    var targetNode1 = document.getElementById('result-danapp-grams');
    var targetNode2 = document.getElementById('result-grasspp-grams');

    var config = { childList: true, subtree: true };

    var callback = function (mutationsList, observer) {
    // Update Graph 2 whenever the content of result-danapp-grams or result-grasspp-grams changes
    updateGraph2();
};

    var observer1 = new MutationObserver(callback);
    var observer2 = new MutationObserver(callback);

    observer1.observe(targetNode1, config);
    observer2.observe(targetNode2, config);
}

// Call the function to set up event listeners for Graph 2
setUpGraph2Listeners();

    // Initial update of both graphs
    updateGraph1();
    updateGraph2();
});
