#sum of it's divisors is equal to a number,example 6=1*2*3
n=int(input("enter your number: "))
sum=0
for i in range(1,n):
 if(n%i==0):
  sum=sum+i

if(sum==n):
 print("perfect number")
else:
 print("not perfect")