#input the number
n=int (input("enter your number:\n"))
#print(n)

#function to check an even number
def check(n):
    if(n%2==0):
        print("your number is even")
    else:
        print("your number is odd")
check(n)
