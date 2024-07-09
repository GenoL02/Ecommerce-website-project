// Highlight odd rows
highlightRows = () => {
	let oddRows = document.querySelectorAll('tbody tr.show')
	oddRows.forEach((row, index)=> {
		if (index % 2 == 0) {
			row.style.background = '#f1f1f1'
		} else {
			row.style.background = '#fff'
		}
	})
}

// Filter table based on select
const filterOptions = () => {
	const option = document.querySelector("#filter").value;
	const selection = option.replace('&', '')
	const rows = document.querySelectorAll("tbody tr");
	
	rows.forEach(row => {
		let td = row.querySelector("td:nth-child(5)");
		let filter = td.innerText.replace('&', '');
		if (filter === selection) {
			row.className = 'show'
		} else {
			row.className = 'hidden'
		}
	});
	highlightRows()
};
document.getElementById("filter").addEventListener("change", filterOptions);

// Filter name
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}