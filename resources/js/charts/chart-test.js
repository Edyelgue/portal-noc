import Chart from "chart.js/auto"; // Importa o Chart.js

export function renderChart() {
    document.addEventListener("DOMContentLoaded", function () {
        const ctx = document.getElementById('myChart');
        if (ctx) {
            new Chart(ctx, {
                scales: {
                    y: {
                        beginAtZero: true,
                        grace: '15%',
                    }
                },
                type: 'bar',
                data: {
                    labels: ["Italy", "France", "Spain", "USA", "Argentina"],
                    datasets: [{
                        label: "Wine Production",
                        data: [55, 49, 44, 24, 15],
                        backgroundColor: ["red", "green", "blue", "orange", "brown"],
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: { display: true },
                        title: { display: true, text: "World Wine Production 2018" }
                    }
                }
            });
        }
    });
}



// export function renderChart(ctx) {
//     const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
//     const yValues = [55, 49, 44, 24, 15];
//     const barColors = ["red", "green", "blue", "orange", "brown"];

//     if (ctx) {
//         new Chart(ctx, {
//             type: "bar",
//             data: {
//                 labels: xValues,
//                 datasets: [
//                     {
//                         backgroundColor: barColors,
//                         data: yValues,
//                     },
//                 ],
//             },
//             options: {
//                 plugins: {
//                     legend: { display: false },
//                     title: {
//                         display: true,
//                         text: "World Wine Production 2018",
//                     },
//                 },
//             },
//         });
//     }
// }
