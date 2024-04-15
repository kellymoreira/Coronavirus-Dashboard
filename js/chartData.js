/*var randomScalingFactor = function () { return Math.round(Math.random() * 1000) };
	
	var lineChartData = {
		labels : states,
		datasets : [
			{
				label: "My First dataset",
				fillColor : "rgba(220,220,220,0.2)",
				strokeColor : "rgba(220,220,220,1)",
				pointColor : "rgba(220,220,220,1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(220,220,220,1)",
				data : confirmed
			},
			{
				label: "My Second dataset",
				fillColor : "rgba(37, 190, 174, 0.2)",
				strokeColor : "rgba(37, 190, 174, 1)",
				pointColor : "rgba(37, 190, 174, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(37, 190, 174, 1)",
				data : death
			}
		]

	}
		
	var barChartData = {
		labels : states,
		datasets : [
			{
				fillColor : "rgba(143, 140, 136,0.5)",
				strokeColor : "rgba(143, 140, 136,0.8)",
				highlightFill: "rgba(143, 140, 136,0.75)",
				highlightStroke: "rgba(143, 140, 136,1)",
				data : confirmed
			},
			{
				fillColor : "rgba(226, 105, 71, 0.2)",
				strokeColor : "rgba(226, 105, 71, 0.8)",
				highlightFill : "rgba(226, 105, 71, 0.75)",
				highlightStroke : "rgba(226, 105, 71, 1)",
				data : death
			}
		]

	} */

/***************************************************************************************************************/ 

var randomScalingFactor = function () { 
	return Math.round(Math.random() * 1000) 

};

var lineChartData = {
	labels : states,
	datasets : [{
		    // CASOS CONFIRMADOS(COR ROSA): #be0ea3
			label: 'Casos',
			data : confirmed,
			/*
			fillColor : "rgba(220,220,220,0.2)", // COR DENTRO DAS LINHAS
			strokeColor : "rgba(220,220,220,1)", // CORD DAS LINHAS EM SI
			pointColor : "rgba(220,220,220,1)", // COR AO REDOR DO PONTINHO 
			pointStrokeColor : "#fff", // CORD DO PONTINHO DO GRÁFICO 
			pointHighlightFill : "#fff", // COR DO PONTINHO DO GRÁFICO quando passa o mouse em cima
			pointHighlightStroke : "rgba(220,220,220,1)", */

			fillColor : "rgba(190,14,163,0.2)", // COR DENTRO DAS LINHAS
			strokeColor : "rgba(190,14,163,1)", // CORD DAS LINHAS EM SI
			pointColor : "rgba(190,14,163,1)", // COR DO PONTINHO 
			pointStrokeColor : "#fff", // CORD DO PONTINHO AO REDOR DO GRÁFICO 
			pointHighlightFill : "#fff", // COR DO PONTINHO DO GRÁFICO quando passa o mouse em cima
			pointHighlightStroke : "rgba(190,14,163,1)",


		},

		{   // ÓBITOS CONFIRMADOS(COR VERDE): #25beae 
			label: 'Mortes',
			data : death,
			fillColor : "rgba(37, 190, 174, 0.2)",
			strokeColor : "rgba(37, 190, 174, 1)",
			pointColor : "rgba(37, 190, 174, 1)",
			pointStrokeColor : "#fff",
			pointHighlightFill : "#fff",
			pointHighlightStroke : "rgba(37, 190, 174, 1)",
		}]

}

	










	/*
	var barChartData = {
		labels : states,
		datasets : [
			{
				fillColor : "rgba(143, 140, 136,0.5)",
				strokeColor : "rgba(143, 140, 136,0.8)",
				highlightFill: "rgba(143, 140, 136,0.75)",
				highlightStroke: "rgba(143, 140, 136,1)",
				data : confirmed
			},
			{
				fillColor : "rgba(226, 105, 71, 0.2)",
				strokeColor : "rgba(226, 105, 71, 0.8)",
				highlightFill : "rgba(226, 105, 71, 0.75)",
				highlightStroke : "rgba(226, 105, 71, 1)",
				data : death
			}
		]

	} */
