$(document).ready(function(){var t=[],r=[];for(i=0;i<chartData.length;i++)t.push(chartData[i].growth_year),r.push(chartData[i].growth_item);var e=r.length,a=[],o=420;for(i=0;i<e;i++){o=o+500+2e3*i;a.push(o)}Highcharts.chart("chartContainer",{title:{text:""},subtitle:{text:""},yAxis:{labels:{enabled:!1},gridLineWidth:0,minorGridLineWidth:0,title:{text:""}},legend:{enabled:!1},tooltip:{backgroundColor:"#da251c",borderColor:"#da251c",borderRadius:10,borderWidth:3,style:{color:"#ffffff"},formatter:function(){var t=jQuery.inArray(this.y,a);return r[t]}},xAxis:{categories:t},credits:{enabled:!1},series:[{color:"#052F61",data:a}]})});