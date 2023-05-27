#A number divisible by your input in a range

lower=int(input("Enter the lower limit:\n"))
upper=int(input("enter your upper limit:\n"))
n=int(input("Enter a number to divide:\n"))

for i in range(lower,upper+1):
    if(i%n==0):
        print(i)