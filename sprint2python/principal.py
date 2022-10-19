from factorial import func_factorial
from factorial2 import func_factorial2
import time 

print ("a) Cálculo de factorial con recursividad")
print ("b) Cálculo de factorial sin recursividad")
opc = input("Elige una opción (a o b): ")

while (opc!="a" and opc!="b"):
    opc = input("Escoge una de las opciones(a, b): ")

if opc == "a":
    start_time = time.time()
    num=input("Introduce un número para poder calcular su factorial de forma recursiva: ")
    resultado = func_factorial(int(num))
    print (resultado)
    end_time = time.time()
    elapsed_time = end_time - start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s')
elif opc == "b":
    start_time = time.time()
    num=input("Introduce un número para poder calcular su factorial de forma NO recursiva: ")
    resultado = func_factorial2(int(num))
    print (resultado)
    end_time = time.time()
    elapsed_time = end_time - start_time
    print('El tiempo de ejecución ha sido :' + str(elapsed_time) + ' s') 
#Es más rápido el cálculo NO recursivo (2,735s el recursivo mientras que 1,537s el NO recursivo) 


    

