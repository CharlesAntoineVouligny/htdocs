<?php
$sql = 'SELECT recipes.id, recipes.name, recipes.ingredients, recipes.preparation,
                page.title,
                image.file, image.alt
                
        FROM recipes
        JOIN page ON recipes.page_id = page.id
        LEFT JOIN image ON recipes.image_id = image.id
        
        WHERE recipes.page_id = 2
        AND recipes.published = 1';

$result = $conn->query($sql);
$recipe = $result->fetch_assoc();
?>