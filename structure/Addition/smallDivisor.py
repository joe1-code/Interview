#To check for small divisor
number=int(input("Enter your number for checking:\n"))
a=[]

for i in range(2,number+1):
     if(number%i==0):
          a.append(i)


a.sort()

print("The small divisor is:",a[0])

