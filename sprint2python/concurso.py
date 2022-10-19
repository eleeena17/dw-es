import random
print("Adivina el número de libros")
puntuacion = 0
opc = ""
cantPreg=0
numRandom=0
RepPreg1=0
RepPreg2=0
RepPreg3=0
mensPerd="Respuesta incorrecta, pierdes 5 puntos:("
mensGan="Respuesta correcta, sumas 10 puntos:)"
while cantPreg < 2:
    numRandom=random.randint(1,3)
    if numRandom == 1 and RepPreg1 < 1:
        print("Cuántos libros de Harry Potter hay?")
        print("a) 9")
        print("b) 7")
        print("c) 5")
        opc = input ("Escoge una opción: ")
        while (opc!="a" and opc!="b" and opc!="c"):
            opc = input ("Escoge una opción válida(a,b,c): ")
        if (opc=="a" or opc=="c"):
            print(mensPerd)
            puntuacion = puntuacion -5
        elif (opc=="b"):
            print(mensGan)
            puntuacion = puntuacion +10
        cantPreg = cantPreg + 1
        RepPreg1 = RepPreg1 + 1
        opc = ""
    if numRandom == 2 and RepPreg2 < 1:
        print("Cuántos libros de Gerónimo Stilton hay?")
        print("a) 35")
        print("b) 57")
        print("c) 89")
        opc = input ("Escoge una opción: ")
        while (opc!="a" and opc!="b" and opc!="c"):
            opc = input ("Escoge una opción válida(a,b,c): ")
        if (opc=="a" or opc=="b"):
            print(mensPerd)
            puntuacion = puntuacion -5
        elif (opc=="c"):
            print(mensGan)
            puntuacion = puntuacion +10
        cantPreg = cantPreg + 1
        RepPreg2 = RepPreg2 + 1
        opc = ""
    if numRandom == 3 and RepPreg3 < 1:
        print("Cuántos libros de Solo Leveling(en español) hay?")
        print("a) 5")
        print("b) 4")
        print("c) 6")
        opc = input ("Escoge una opción: ")
        while (opc!="a" and opc!="b" and opc!="c"):
            opc = input ("Escoge una opción válida(a,b,c): ")
        if (opc=="b" or opc=="c"):
            print(mensPerd)
            puntuacion = puntuacion -5
        elif (opc=="a"):
            print(mensGan)
            puntuacion = puntuacion +10
        cantPreg = cantPreg + 1
        RepPreg3 = RepPreg3 + 1
        opc = ""    
print("Tu puntuación final es de: ", puntuacion, " puntos")



