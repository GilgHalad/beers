# beers

Symfony 4

2 servicios:

    Uno que permita buscar en base una cadena de búsqueda. 
      El campo para filtrar será food y los datos a mostrar devolver serían: id, nombre y descripción.
      Ejemplo de llamada: http://localhost:8080/beers/public/beers/list?food=tacos
      
    Otro que retorne los datos necesarios para pintar una vista de detalle que indique los anteriores, 
      pero además incluya: imagen, slogan (tagline) y cuando fue fabricada (first_brewed).
      Ejemplo de llamada: http://localhost:8080/beers/public/beers/view?food=tacos

Para obtener los datos de las recetas se utilizará la API de PunkApi.
