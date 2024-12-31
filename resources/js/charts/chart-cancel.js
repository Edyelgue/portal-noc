import Chart from "chart.js/auto"; // Importa o Chart.js

export function renderChart2() {
    document.addEventListener("DOMContentLoaded", function () {
        const ctx2 = document.getElementById('myChart2');
        if (ctx2) {
            new Chart(ctx2, {
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
