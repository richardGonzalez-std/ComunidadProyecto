<!DOCTYPE html>
<html>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<style>
table {
  font-family: Arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color:#3CB371;
}
.button{
  display: inline-block;
  border-radius: solid 4px;
  background-color:Highlight;
  border: none;
  color: #FFFFFF;
  text-align:center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button {
  display: inline-block;
  border-radius: 4px;
  background-color: blue;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body>
<h1 style="font-size: 60px; font-family: 'Montserrat', sans-serif;text-align:center;">CURSO PRIMER AÑO "A"</h1>
<div style="display: flex; justify-content: center;">
<body style="background-color:#FFEFD5";>  
<p style="font-size: 18px; line-height: 1.8; text-align: justify; max-width: 800px; margin-bottom: 100px;"> 
<pre>
<table>
  <tr>
    <th>Nº</th>
    <th>CÉDULA DE IDENTIDAD</th>
    <th>APELLIDOS Y NOMBRES</th>
    <th>MATERIA PENDIENTE</th>
  </tr>
  <tr>
    <th>1</th>
    <td>35.044.567</td>
    <td>ÁLVAREZ LÓPEZ,JUAN JOSÉ</td>
    <td>MATEMÁTICA</td>
  </tr>
  <tr>
    <th>2</th>
    <td>35.890.456</td>
    <td>ARANGUREZ RAMIREZ, WILMER EFRAIN</td>
    <td>---------------------</td>
  </tr>
  <tr>
    <th>3</th>
    <td>34.657.800</td>
    <td>BARAZARTE DUARTE, MARCOS JOSÉ</td>
    <td>CASTELLANO</td>
  </tr>
  <tr>
    <th>4</th>
    <td>34.078.455</td>
    <td>BARRIOS FREITES, ADRIANA MARÍA</td>
    <td>---------------------</td>
  </tr>
  <tr>
    <th>5</th>
    <td>35.675.344</td>
    <td>BERROTERÁN VILLANUEVA, MARGARITA DEL CARMEN</td>
    <td>---------------------</td>
  </tr>
  <tr>
    <th>6</th>
    <td>35.223.432</td>
    <td>CEBALLOS VELIZ, ROXANA COROMOTO </td>
    <td>MATEMÁTICA</td>
  </tr>
</table>
<button class="button" style="vertical-align:middle"><span>IMPRIMIR </span></button>
<button type="button" class="btn btn-primary active" onclick="history.back()">CURSOS</button>
</body>
</html>
  
  