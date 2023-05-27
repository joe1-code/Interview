#To sum the digits of a number

n=int(input("enter your number:\n"))
total=0
while(n>0):
    dig=n%10
    total=total+dig
    n=n//10

print("the sum of digits is: ",total)