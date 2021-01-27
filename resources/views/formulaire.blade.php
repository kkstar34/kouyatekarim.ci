<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <div>
 <h1>Formulaire</h1>

 <form action="/formulaire" method="post">
@csrf
 <label for="">titre</label>
 <input type="text" name="titre"><br><br><br>
 <label for="">contenu</label>
 <textarea  id="" cols="30" rows="10" name="contenu"></textarea><br><br><br>

 <select name="category" id="">
 
 <option value="1">Categorie 1</option>
 <option value="2">Categorie 2</option>
 </select><br><br>
 <button type="submit">Envoyer</button>
 
 
 
 
 </form>
    
    
    
    </div>
    
</body>
</html>