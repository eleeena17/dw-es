print("Adivina el número de libros")
puntuacion = 0
opc = ""
print("Cuántos libros de Harry Potter hay?")
print("a) 9")
print("b) 7")
print("c) 5")
opc = input ("Escoge una opción: ")
while (opc!="a" and opc!="b" and opc!="c"):
    opc = input ("Escoge una opción válida(a,b,c): ")
if (opc=="a" or opc=="c"):
    print("Respuesta incorrecta, pierdes 5 puntos:(")
    puntuacion = puntuacion -5
elif (opc=="b"):
    print("Respuesta correcta, sumas 10 puntos:)")
    puntuacion = puntuacion +10


opc = ""
print("Cuántos libros de Gerónimo Stilton hay?")
print("a) 35")
print("b) 57")
print("c) 89")
opc = input ("Escoge una opción: ")
while (opc!="a" and opc!="b" and opc!="c"):
    opc = input ("Escoge una opción válida(a,b,c): ")
if (opc=="a" or opc=="b"):
    print("Respuesta incorrecta, pierdes 5 puntos:(")
    puntuacion = puntuacion -5
elif (opc=="c"):
    print("Respuesta correcta, sumas 10 puntos:)")
    puntuacion = puntuacion +10


opc = ""
print("Cuántos libros de Solo Leveling(en español) hay?")
print("a) 5")
print("b) 4")
print("c) 6")
opc = input ("Escoge una opción: ")
while (opc!="a" and opc!="b" and opc!="c"):
    opc = input ("Escoge una opción válida(a,b,c): ")
if (opc=="b" or opc=="c"):
    print("Respuesta incorrecta, pierdes 5 puntos:(")
    puntuacion = puntuacion -5
elif (opc=="a"):
    print("Respuesta correcta, sumas 10 puntos:)")
    puntuacion = puntuacion +10
    
print("Tu puntuación final es de: ", puntuacion, " puntos")


    