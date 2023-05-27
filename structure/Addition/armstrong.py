#a number of which sum of it's digits cubed is equal to a number,example 370,371
n=int(input("enter your number: "))
a=list(map(int,str(n)))
b=list(map(lambda x:x**3, a))
if(sum(b)==n):
 print("armstrong")
else:
 print("not armstrong")