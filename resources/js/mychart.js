import Axios from 'axios';
import Chart from 'chart.js/auto';
getOrder();

const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
];

const data = {
    labels: labels,
    datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
    }]
};

const config = {
    type: 'line',
    data: data,
    options: {}
};

new Chart(
    document.getElementById('myChart'),
    config
);

function getOrder() {
    console.log("USERID", window.userID )
    Axios.get("http://127.0.0.1:8000/api/getOrder/"+ window.userID ).then((response) => {
        /* const orders = response.data.data; */
        
        console.log(response.data.orders);
    })
};

