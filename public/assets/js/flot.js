$(function() {
	'use strict';
	$.plot('#flotBar1', [{
		data: [
			[0, 10],
			[1, 15],
			[2, 25],
			[3, 22],
			[4, 18],
			[5, 27],
			[6, 34],
			[7, 35],
			[8, 48],
			[9, 30]
		]
	}], {
		series: {
			bars: {
				show: true,
				lineWidth: 0,
				fillColor: '#556ee7 ',
				barWidth: .5
			},
			highlightColor: '#556ee7 '
		},
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(119, 119, 142, 0.2)',
			hoverable: true
		},
		yaxis: {
			tickColor: 'rgba(119, 119, 142, 0.2)',
			font: {
				color: '#999',
				size: 10
			}
		},
		xaxis: {
			tickColor: 'rgba(119, 119, 142, 0.2)',
			font: {
				color: '#999',
				size: 10
			}
		}
	});
	$.plot('#flotBar2', [{
		data: [
			[0, 10],
			[2, 15],
			[4, 25],
			[6, 22],
			[8, 18],
			[10, 27],
			[12, 34],
			[14, 35],
			[16, 48],
		],
		bars: {
			show: true,
			lineWidth: 0,
			fillColor: '#30bb67',
			barWidth: .8
		}
	}, {
		data: [
			[1, 8],
			[3, 10],
			[5, 24],
			[7, 17],
			[9, 23],
			[11, 24],
			[13, 30],
			[15, 16]
		],
		bars: {
			show: true,
			lineWidth: 0,
			fillColor: '#556ee7 ',
			barWidth: .8
		}
	}], {
		grid: {
			borderWidth: 1,
			borderColor: 'rgba(119, 119, 142, 0.2)'
		},
		yaxis: {
			tickColor: 'rgba(119, 119, 142, 0.2)',
			font: {
				color: '#999',
				size: 10
			}
		},
		xaxis: {
			tickColor: 'rgba(119, 119, 142, 0.2)',
			font: {
				color: '#999',
				size: 10
			}
		}
	});
	var newCust = [
		[0, 10],
		[1, 15],
		[2, 25],
		[3, 22],
		[4, 18],
		[5, 27],
		[6, 34],
	];
	var retCust = [
		[0, 8],
		[1, 17],
		[2, 28],
		[3, 20],
		[4, 16],
		[5, 24],
		[6, 36]
	];
	var plot = $.plot($('#flotLine1'), [{
		data: newCust,
		label: 'New Customer',
		color: '#556ee7 '
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#30bb67'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 2
			},
			shadowSize: 0
		},
		points: {
			show: false,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			hoverable: true,
			clickable: true,
			borderWidth: 0,
			labelMargin: 5
		},
		yaxis: {
			min: 0,
			max: 50,
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotLine2'), [{
		data: newCust,
		label: 'New Customer',
		color: '#556ee7 '
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#30bb67'
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 2
			},
			shadowSize: 0
		},
		points: {
			show: true,
		},
		legend: {
			noColumns: 1,
			position: 'ne'
		},
		grid: {
			hoverable: true,
			clickable: true,
			borderColor: '#ddd',
			borderWidth: 0,
			labelMargin: 5
		},
		yaxis: {
			min: 0,
			max: 50,
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotArea1'), [{
		data: newCust,
		label: 'New Customer',
		color: '#30bb67'
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#556ee7 '
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 1,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.8
					}]
				}
			},
			shadowSize: 0
		},
		points: {
			show: false,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			hoverable: true,
			clickable: true,
			borderColor: '#ddd',
			borderWidth: 0,
			labelMargin: 5
		},
		yaxis: {
			min: 0,
			max: 50,
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	var plot = $.plot($('#flotArea2'), [{
		data: newCust,
		label: 'New Customer',
		color: '#30bb67'
	}, {
		data: retCust,
		label: 'Returning Customer',
		color: '#556ee7 '
	}], {
		series: {
			lines: {
				show: true,
				lineWidth: 1,
				fill: true,
				fillColor: {
					colors: [{
						opacity: 0
					}, {
						opacity: 0.3
					}]
				}
			},
			shadowSize: 0
		},
		points: {
			show: true,
		},
		legend: {
			noColumns: 1,
			position: 'nw'
		},
		grid: {
			hoverable: true,
			clickable: true,
			borderColor: '#ddd',
			borderWidth: 0,
			labelMargin: 5
		},
		yaxis: {
			min: 0,
			max: 50,
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		},
		xaxis: {
			color: 'rgba(119, 119, 142, 0.2)',
			font: {
				size: 10,
				color: '#999'
			}
		}
	});
	/**************** PIE CHART *******************/
	var piedata = [{
		label: 'Series 1',
		data: [
			[1, 10]
		],
		color: '#0153ae'
	}, {
		label: 'Series 2',
		data: [
			[1, 50]
		],
		color: '#016ce1'
	}, {
		label: 'Series 3',
		data: [
			[1, 30]
		],
		color: '#1685fe'
	}, {
		label: 'Series 4',
		data: [
			[1, 30]
		],
		color: '#49a0fe'
	}, {
		label: 'Series 5',
		data: [
			[1, 60]
		],
		color: '#5fabfe'
	}];
	$.plot('#flotPie1', piedata, {
		series: {
			pie: {
				show: true,
				radius: 1,
				label: {
					show: true,
					radius: 2 / 3,
					formatter: labelFormatter,
					threshold: 0.1
				}
			}
		},
		grid: {
			hoverable: false,
			clickable: true
		}
	});
	$.plot('#flotPie2', piedata, {
		series: {
			pie: {
				show: true,
				radius: 1,
				innerRadius: 0.5,
				label: {
					show: true,
					radius: 2 / 3,
					formatter: labelFormatter,
					threshold: 0.1
				}
			}
		},
		grid: {
			hoverable: false,
			clickable: true
		}
	});

	function labelFormatter(label, series) {
		return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
	}
});