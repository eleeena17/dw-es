print("Adivina el número de libros")

opc = ""
print("Cuántos libros de Harry Potter hay?")
print("a) 9")
print("b) 7")
print("c) 5")
opc = input ("Escoge una opción: ")
while (opc!="a" and opc!="b" and opc!="c"):
    opc = input ("Escoge una opción válida(a,b,c): ")
if (opc=="a" or opc=="c"):
    print("Respuesta incorrecta")
elif (opc=="b"):
    print("Respuesta correcta")



    