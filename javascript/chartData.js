/***************************************************************************************************
 * Configuração dos Dados e Cores para o Gráfico de Linha
 ***************************************************************************************************/

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
      backgroundColor: "rgba(190, 14, 163, 0.2)",
      borderColor: "rgba(190, 14, 163, 1)",
      pointBackgroundColor: "rgba(190, 14, 163, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(190, 14, 163, 1)",
    },
    {
      // Conjunto de dados para óbitos confirmados
      // (COR VERDE): #25beae
      label: "Óbitos Confirmados",
      data: death,
      backgroundColor: "rgba(37, 190, 174, 0.2)",
      borderColor: "rgba(37, 190, 174, 1)",
      pointBackgroundColor: "rgba(37, 190, 174, 1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(37, 190, 174, 1)",
    },
  ],
};
