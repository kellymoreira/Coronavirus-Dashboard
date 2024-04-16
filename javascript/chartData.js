/***********************************************************
 * Configuração dos Dados e Cores para o Gráfico de Linha
 ***********************************************************/

// Define os dados do gráfico
var lineChartData = {
  // Define os rótulos para o eixo X (estados)
  labels: states,
  // Define os conjuntos de dados para o gráfico
  datasets: [
    {
      // Conjunto de dados para casos confirmados
      // (COR ROSA): #be0ea3
      label: "Casos Confirmados",
      data: confirmed,

      fillColor: "rgba(190,14,163,0.2)",
      strokeColor: "rgba(190,14,163,1)",
      pointColor: "rgba(190,14,163,1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(190,14,163,1)",
    },
    {
      // Conjunto de dados para óbitos confirmados
      // (COR VERDE): #25beae
      label: "óbitos Confirmados",
      data: death,

      fillColor: "rgba(37, 190, 174, 0.2)",
      strokeColor: "rgba(37, 190, 174, 1)",
      pointColor: "rgba(37, 190, 174, 1)",
      pointStrokeColor: "#fff",
      pointHighlightFill: "#fff",
      pointHighlightStroke: "rgba(37, 190, 174, 1)",
    },
  ],
};
