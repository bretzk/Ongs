function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchbar");
  filter = input.value.toUpperCase();
  table = document.getElementById("ongTable");
  tr = table.getElementsByTagName("tr");

  for (i = 1; i < tr.length; i++) {
    var found = false;
    for (var j = 0; j < 3; j++) {
      td = tr[i].getElementsByTagName("td")[j];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          found = true;
          break;
        }
      }
    }
    tr[i].style.display = found ? "" : "none";
  }
}
