def func_factorial2(num: int):
    if (num==1 or num==0):
        return 1

    numFact=1
    while (num > 0):
        numFact = numFact * num 
        num -= 1

    return numFact