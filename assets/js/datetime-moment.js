!function(e){"function"==typeof define&&define.amd?define(["jquery","moment","datatables"],e):e(jQuery,moment)}(function(e,n){e.fn.dataTable.moment=function(t,a){var r=e.fn.dataTable.ext.type;r.detect.unshift(function(e){return e&&e.replace&&(e=e.replace(/<.*?>/g,"")),""===e||null===e?"moment-"+t:n(e,t,a,!0).isValid()?"moment-"+t:null}),r.order["moment-"+t+"-pre"]=function(e){return e&&e.replace&&(e=e.replace(/<.*?>/g,"")),""===e||null===e?-1/0:parseInt(n(e,t,a,!0).format("x"),10)}}});