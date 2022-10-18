def func_factorial(num: int):
    if (num==1 or num==0):
        return 1
    elif num > 1:
        return num * func_factorial(num - 1)
