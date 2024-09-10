// Sample data (percentages)
const cardiovascularData = {
    labels: ['Cardiovascular Diseases', 'Other'],
    data: [75, 25],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const renalData = {
    labels: ['Chronic Kidney Disease', 'Other'],
    data: [65, 35],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const ophthalmicData = {
    labels: ['Diabetic Retinopathy', 'Other'],
    data: [80, 20],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const nervousData = {
    labels: ['Diabetic Neuropathy', 'Other'],
    data: [70, 30],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const skinData = {
    labels: ['Skin Infections', 'Other'],
    data: [60, 40],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const digestiveData = {
    labels: ['Gastroparesis', 'Other'],
    data: [55, 45],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const reproductiveData = {
    labels: ['Sexual Health Issues', 'Other'],
    data: [50, 50],
    backgroundColors: ['#ff6384', '#36a2eb']
};

const immuneData = {
    labels: ['Immune System Weakness', 'Other'],
    data: [65, 35],
    backgroundColors: ['#ff6384', '#36a2eb']
};

// Function to create pie chart
function createPieChart(canvasId, data) {
    const ctx = document.getElementById(canvasId).getContext('2d');
    const chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: data.labels,
            datasets: [{
                data: data.data,
                backgroundColor: data.backgroundColors
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false
        }
    });
}

// Create charts
createPieChart('cardiovascularChart', cardiovascularData);
createPieChart('renalChart', renalData);
createPieChart('ophthalmicChart', ophthalmicData);
createPieChart('nervousChart', nervousData);
createPieChart('skinChart', skinData);
createPieChart('digestiveChart', digestiveData);
createPieChart('reproductiveChart', reproductiveData);
createPieChart('immuneChart', immuneData);
