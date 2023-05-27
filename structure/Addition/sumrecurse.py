
l=[]
def sumdig(b):
    if(b==0):
        return l

    dig=b%10
    l.append(dig)
    sumdig(b//10)
n=int(input("enter your number:\n"))
sumdig(n)
print(sum(l))

