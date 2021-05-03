var rows = 20;
var cols = 7;



function make2DArray(rowCount, colCount) {
    var result = new Array(rowCount);
    for (var r = 0; r < rowCount; r++) {
        result[r] = new Array(colCount);
        for (var c = 0; c < colCount; c++) {
            result[r][c] = 0;
        }
    }
    return(result);
}



function setup(rows, cols){
    rowCount = rows;
    colCount = cols;

    var seating = make2DArray(rowCount, colCount);

	// Delete the old table content
	let board = document.getElementById('seating');

	let body = document.createElement('tbody');

	// Create new row
	for (let r = 0; r < rowCount; r++){
		let newRow = document.createElement('tr');
		newRow.id = "Row" + r;
		// Create new cell
		for (let c = 0; c < colCount; c++){
			let newCell = document.createElement('td');
			let ID = "R" + r + "C" + c;
			newCell.id = ID;
			newCell.addEventListener('click',function(){ clicked(ID,r,c);});
        	newCell.className = 'boardcell';
			newRow.appendChild(newCell);
		}
		body.appendChild(newRow);
	}
	board.appendChild(body);
}

function clicked(ID, row, col){
    var cell = document.getElementById(ID);
    if (grid[row][col] == 0){
      cell.style.backgroundColor = "#800080";
      grid[row][col] = 1;
  }
}
