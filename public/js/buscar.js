$(function() {
	theTable = $("#tabla");
		$("#buscar").keyup(function() {
		$.uiTableFilter(theTable, this.value);
	});
});