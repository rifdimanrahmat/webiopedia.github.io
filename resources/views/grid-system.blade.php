<!DOCTYPE html>
<html>
<head>
<style>
.grid-container {
  display: grid;
  justify-content: space-between;
  grid-template-columns: 50% 50%; /*Make the grid smaller than the container*/
  gap: 10px;
  background-color: #2196F3;
  padding: 10px;
}

.grid-container > div {
  background-color: rgba(255, 255, 255, 0.8);
  text-align: center;
  padding: 20px 0;
  font-size: 30px;
}
</style>
</head>
<body>

<h1>The justify-content Property</h1>

<p>Use the <em>justify-content</em> property to align the grid inside the container.</p>

<p>The value "space-between" will give the columns equal amount of space between them:</p>

<div class="grid-container">
  <div>1</div>
  <div>2</div> 
</div>

</body>
</html>