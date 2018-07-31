$('#convert-table').click(function() {
  var table = $('#taskTable').tableToJSON();
  console.log(table);
  alert(JSON.stringify(table));
});