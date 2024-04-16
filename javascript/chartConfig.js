/***************************************************************************************
 * Inicializa um gráfico de linha e fornece a funcionalidade de enviar um formulário.
 ***************************************************************************************/

// Função acionada quando a página é completamente carregada
window.onload = function () {
  // Obtém o contexto do gráfico de linha do elemento com id "line-chart"
  var chartByState = document.getElementById("line-chart").getContext("2d");
  // Cria um novo gráfico de linha usando os dados em lineChartData
  window.myLine = new Chart(chartByState).Line(lineChartData, {
    // Define se o gráfico deve ser responsivo
    responsive: true,
    // Cor da linha da escala do gráfico
    scaleLineColor: "rgba(0,0,0,.2)",
    // Cor das linhas da grade da escala do gráfico
    scaleGridLineColor: "rgba(0,0,0,.05)",
    // Cor da fonte da escala do gráfico
    scaleFontColor: "#c5c7cc",
  });
};

// Função para enviar o formulário
function enviarFormulario() {
  // Submete o formulário com id "form-profession"
  document.getElementById("form-profession").submit();
}
