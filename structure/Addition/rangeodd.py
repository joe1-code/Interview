#odd number in a range

lower=int(input("enter the lowest limit in a range:\n"))
upper=int(input("enter the upper limit in a range:\n"))

for i in range(1-lower,upper+1):
    if(i%2!=0):
        print(i)