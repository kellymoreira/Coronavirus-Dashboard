window.onload = function () {
   var chartByState = document.getElementById("line-chart").getContext("2d");
    window.myLine = new Chart(chartByState).Line(lineChartData, {
        responsive: true,
        scaleLineColor: "rgba(0,0,0,.2)",
        scaleGridLineColor: "rgba(0,0,0,.05)",
        scaleFontColor: "#c5c7cc",
    });
};

function enviarFormulario() {
    document.getElementById("form-profession").submit();
}