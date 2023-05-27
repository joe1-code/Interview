#To find the divisors of an integer

number=int(input("Enter the number to check for divisors:\n"))
print("The divisors are:")

for i in range(1,number+1):
    if(number%i==0):
            print(i)
