#To check if a number is palindrome(rev==number)

n=int(input("enter your number:\n"))
temp=n
rev=0
while(n>0):
    dig=n%10
    rev=rev*10+dig
    n=n//10
    print("the reverse of your input is: ",rev)

if(temp==rev):
    print("your number is palindrome")
else:
    print("your number is not palindrome")