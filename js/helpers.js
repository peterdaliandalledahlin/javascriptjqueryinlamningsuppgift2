function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

// function addCommas(nStr)
// {
// 	nStr += '';
// 	x = nStr.split('.');
// 	x1 = x[0];
// 	x2 = x.length > 1 ? '.' + x[1] : '';
// 	let rgx = /(\d+)(\d{3})/;
// 	while (rgx.test(x1)) {
// 		x1 = x1.replace(rgx, '$1' + ',' + '$2');
// 	}
// 	return x1 + x2;
// };//end addCommas INTE INSTALLERAD