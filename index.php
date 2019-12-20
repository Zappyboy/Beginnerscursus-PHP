<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hub naar alle opdrachten</title>
</head>
<body>
<select id="Hoofdstukken">
    <option hidden>Kies een hoofdstuk</option>
    <option value="H1/Opdr1.php">H1</option>
    <option value="H2">H2</option>
    <option value="H3">H3</option>
    <option value="H4">H4</option>
    <option value="H5">H5</option>
    <option value="H6">H6</option>
    <option value="H7">H7</option>
    <option value="Challenges">Challenge</option>
</select>
<script>
    document.getElementById("Hoofdstukken").onchange = function() {
        if (this.selectedIndex!==0) {
            window.location.href = this.value;
        }
    };
</script>
</body>
</html>