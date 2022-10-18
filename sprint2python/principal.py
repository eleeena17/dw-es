from factorial import func_factorial
from factorial2 import func_factorial2

print ("a) Cálculo de factorial con recursividad")
print ("b) Cálculo de factorial sin recursividad")
opc = input("Elige una opción (a o b): ")

while (opc!="a" and opc!="b"):
    opc = input("Escoge una de las opciones(a, b): ")

if opc == "a":
    num=input("Introduce un número para poder calcular su factorial de forma recursiva: ")
    resultado = func_factorial(int(num))
    print (resultado)
elif opc == "b":
    num=input("Introduce un número para poder calcular su factorial de forma NO recursiva: ")
    resultado = func_factorial2(int(num))
    print (resultado)