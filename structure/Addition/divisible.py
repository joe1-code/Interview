#To print the numbers not divisible by 2,3
lower=int(input("lower number:\n"))
upper=int(input("upper number is:\n"))
for i in range(lower,upper+1):
    if(i%2!=0 and i%3!=0 and i%5!=0):
        print(i)

