// $( document ).ready(function() {
//     $('#local').dynatable({
//        dataset: {
//        records: JSON.parse($('#music').text())
//        //records: JSON.parse(objjson)
//     }
// });
// });



//all part related for dynatable custom created ref:http://jsfiddle.net/904zebn5/1/
function defaultRowWriter2(rowIndex, record, columns, cellWriter) {
    var tr = '';


    // grab the record's attribute for each column
    for (var i = 0, len = columns.length; i < len; i++) {
      tr += cellWriter(columns[i], record);
    }

    return '<tr class="' + record.originalTRClass + '">' + tr + '</tr>';
};

$(function () {
	$(".tbl").dynatable(); //default value for us

  $(".tbl2").dynatable({
    writers: {
    	_rowWriter: defaultRowWriter2
    }
  });
  $(".tbl3").dynatable({
  	features: {
    	copyTRClass: true
    },
    writers: {
    	_rowWriter: defaultRowWriter2
    }
  
  });
});
