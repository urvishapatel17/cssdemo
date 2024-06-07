<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grid CSS</title>
	<style>
	.grid-container {
	  display: grid;
	  grid-template-columns: auto auto auto;
	  /*column-gap: 50px;
	  row-gap: 20px;*/
	  gap: 20px 50px;
	  background-color: #2196F3;
	  padding: 10px;
	  grid-template-columns: auto auto auto auto;
	   grid-template-rows: auto 100px 200px;
	}
	.grid-item {
	  background-color: rgba(255, 255, 255, 0.8);
	  border: 1px solid rgba(0, 0, 0, 0.8);
	  padding: 20px;
	  font-size: 30px;
	  text-align: center;
	}
	.grid-item1 {
	  grid-column-start: 1;
	  grid-column-end: 3;
	  grid-row-start: 1;
	    grid-row-end: 3;
	}
	</style>
</head>
<body>
	<div class="grid-container">
	  <div class="grid-item1 grid-item">1</div>
	  <div class="grid-item2 grid-item">2</div>
	  <div class="grid-item3 grid-item">3</div>
	  <div class="grid-item4 grid-item">4</div>
	  <div class="grid-item5 grid-item">5</div>
	  <div class="grid-item6 grid-item">6</div>
	  <div class="grid-item7 grid-item">7</div>
	  <div class="grid-item8 grid-item">8</div>
	  <div class="grid-item9 grid-item">9</div>
	</div>
</body>
</html>