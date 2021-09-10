// /* globals Chart:false, feather:false */

(function () {
  'use strict'

  feather.replace({ 'aria-hidden': 'true' })

  // Graphs
  var ctx = document.getElementById('myChart')

  var block = document.querySelector('.block').getAttribute('data-attr');
  // eslint-disable-next-line no-unused-vars

  //alert(block);

  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: [
        'Воскресенье',
        'Понедельник',
        'Вторник',
        'Среда',
        'Четверг',
        'Пятница',
        'Суббота'
      ],
      datasets: [{
        data: [
          2345,
          1543,
          2654,
          3476,
          2345,
          3456,
          1234
        ],
        lineTension: 0,
        backgroundColor: 'transparent',
        borderColor: '#007bff',
        borderWidth: 4,
        pointBackgroundColor: '#007bff'
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: false
          }
        }]
      },
      legend: {
        display: false
      }
    }
  })
})()

// const dataLine = {
//   type: "line",
//   data: {
//     labels: ["Monday", "Tuesday", "Wednesday", "Thursday"],
//     datasets: [{
//       label: "Traffic",
//       data: [3234, 2234, 3234, 1234],
//       borderColor: "#4285F4",
//       backgroundColor: "#4285F4",
//       fill: false,
//     }, ],
//   },
// };
//
// new mdb.Chart(document.getElementById("chart-line"), dataLine);
