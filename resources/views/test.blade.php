<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    Formulaire
    
    <form action="/test" method='post'>
    @csrf
    <label for="">titre</label>
    <input type="text" name='titre'><br><br>

    <label for="">contenu</label>
 
    <textarea name="contenu" id="" cols="30" rows="10"></textarea><br><br>

    <label for="">categorie</label>
<select name="category_id" id="">

<option value="1">categorie 1</option>
<option value="2">categorie 2</option>

</select><br><br>
    <button type="submit">valider</button>    
    
    
    
    
    
    
    
    
    </form>
</body>
</html>